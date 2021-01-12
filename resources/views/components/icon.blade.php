@php
    $path = base_path('vendor/akkurate/laravel-carbon-icons/resources') . '/js/design/' . $name . '.svg';
@endphp
@if(empty($name) || !\Illuminate\Support\Facades\File::exists($path))
    <svg viewBox="0 0 32 32" width="{{ $size }}" height="{{ $size }}" xmlns="http://www.w3.org/2000/svg">
        <path d="m2 16a14 14 0 1 0 14-14 14 14 0 0 0 -14 14zm23.15 7.75-16.9-16.9a12 12 0 0 1 16.9 16.9zm-16.91 1.41a12 12 0 0 1 -1.4-16.89l16.89 16.89a12 12 0 0 1 -15.49 0z"/>
    </svg>
@else
    @php
        $dom = new \DOMDocument();
        $dom->loadXML(\Illuminate\Support\Facades\File::get($path));
        $icon = $dom->getElementsByTagName('svg');
        $icon[0]->setAttribute('width', $size ?? 24);
        $icon[0]->setAttribute('height', $size ?? 24);
    @endphp
    @if(!empty($dom))
        {!! $dom->saveXML() !!}
    @else
        <svg viewBox="0 0 32 32" width="{{ $size ?? 24 }}" height="{{ $size ?? 24 }}"
             xmlns="http://www.w3.org/2000/svg">
            <path d="m2 16a14 14 0 1 0 14-14 14 14 0 0 0 -14 14zm23.15 7.75-16.9-16.9a12 12 0 0 1 16.9 16.9zm-16.91 1.41a12 12 0 0 1 -1.4-16.89l16.89 16.89a12 12 0 0 1 -15.49 0z"/>
        </svg>
    @endif
@endif
