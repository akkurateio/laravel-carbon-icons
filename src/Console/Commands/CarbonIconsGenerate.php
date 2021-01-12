<?php

namespace Akkurate\LaravelCarbonIcons\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class CarbonIconsGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'carbon-icons:generate {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new icons';

    protected $name = '';
    protected $domain = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Icons generation launch");

        if (App::environment('testing')) {
            $svgs = File::allFiles(__DIR__ . '/../../../resources/js/design');
        } else {
            $svgs = File::allFiles(base_path('vendor/akkurate/' . config('laravel-carbon-icons.packagePath') . '/resources/js/design'));
        }

        foreach ($svgs as $svg) {

            ImageOptimizer::optimize($svg->getPath() . '/' . $svg->getFilename());

            $dom = new \DOMDocument();
            $dom->loadXML(File::get($svg->getPath() . '/' . $svg->getFilename()));
            $paths = $dom->getElementsByTagName('path');
            $circles = $dom->getElementsByTagName('circle');
            $rects = $dom->getElementsByTagName('rect');

            $name = pathinfo($svg->getFilename(), PATHINFO_FILENAME);
            $createElements = collect();
            foreach ($paths as $path) {
                $createElements->push("createElement('path', {
                    attrs: {
                        d: \"{$path->getAttribute('d')}\",
                    },
                })");
            }
            foreach ($circles as $circle) {
                $createElements->push("createElement('circle', {
                    attrs: {
                        cx: \"{$circle->getAttribute('cx')}\",
                        cy: \"{$circle->getAttribute('cy')}\",
                        r: \"{$circle->getAttribute('r')}\",
                    },
                })");
            }
            foreach ($rects as $rect) {
                $createElements->push("createElement('rect', {
                    attrs: {
                        cx: \"{$rect->getAttribute('cx')}\",
                        cy: \"{$rect->getAttribute('cy')}\",
                        r: \"{$rect->getAttribute('r')}\",
                    },
                })");
            }

            foreach (config('laravel-carbon-icons.sizes') as $size) {
                if (App::environment('testing')) {
                    $folder = File::allFiles(__DIR__ . '/../../../resources/js/production');
                } else {
                    $folder = File::allFiles(base_path('vendor/akkurate/' . config('laravel-carbon-icons.packagePath') . '/resources/js/design'));
                }
                $folder = base_path('vendor/akkurate/' . config('laravel-carbon-icons.packagePath') . '/resources/js/production/es/' . Str::of(Str::kebab($name))->replace('-', '--'));

                if (!is_dir($folder)) {
                    File::makeDirectory($folder);
                }

                $createPath = $folder . '/' . $size . '.js';
                $createIconTemplate = str_replace(
                    [
                        '{{size}}',
                        '{{name}}',
                        '{{createElements}}',
                    ],
                    [
                        $size,
                        $name,
                        $createElements->implode(', '),
                    ],
                    file_get_contents(base_path('vendor/akkurate/') . config('laravel-carbon-icons.packagePath') . '/stubs/icons/Icon.stub')
                );

                if (!$this->option('force')) {
                    if (!file_exists($createPath)) {
                        file_put_contents($createPath, $createIconTemplate);
                    }
                } else {
                    file_put_contents($createPath, $createIconTemplate);
                }
            }
        }

        $this->info("Icons generation finished");
    }
}
