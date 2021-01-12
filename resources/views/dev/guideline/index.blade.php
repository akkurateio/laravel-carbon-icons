@extends('back::layouts.abstract', ['interface' => 'blank'])

@section('header')
    <div class="text-2xl font-bold my-3">{{ __('Carbon Icons') }}</div>
@stop

@section('content')
    <div class="bg-gray-300">
        <div class="container py-5">
            <div class="row no-gutters align-items-stretch">
                <div class="col-12">
                    <div class="text-2xl font-bold mb-5">Custom icons</div>
                </div>
                @foreach($all as $icon)
                    <div class="col-2">
                        <div class="bg-white p-4 border">
                            <div class="text-3xs">
                                {{ $icon->name }}
                            </div>
                            <div class="icon primary mx-auto my-5">
                                @component('carbon-icons::components.icon', ['name' => $icon->name, 'size' => 32])@endcomponent
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="text-3xs">Carbon Icons are edited by IBM</div>
        <div class="text-3xs">Custom Icons are edited by Subvitamine</div>
    </div>
@endsection
