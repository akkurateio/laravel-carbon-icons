<?php

namespace Akkurate\LaravelCarbonIcons\Http\Controllers\Dev;

use Akkurate\LaravelCore\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class GuidelineController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        if (App::environment('testing')) {
            $svgs = File::allFiles(__DIR__ . '/../../../../resources/js/design');
        } else {
            $svgs = File::allFiles(base_path('vendor/akkurate/' . config('laravel-carbon-icons.packagePath') . '/resources/js/design'));
        }

        $all = collect();
        foreach ($svgs as $svg) {
            $all->push((object) [
                'name' => pathinfo($svg->getFilename(), PATHINFO_FILENAME),
                'filename' => $svg->getFilename(),
            ]);
        }
        $all = $all->sortBy('name');

        return view('carbon-icons::dev.guideline.index', compact('all'));
    }
}
