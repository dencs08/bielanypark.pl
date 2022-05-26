@extends('layouts.master')
@section('title', 'Bielanypark - Lokale')

@section('meta')
<meta name="description" content='Wyszukaj lokale usługowe "bielanypark" zlokalizowane przy ulicy Myrka 9 w Legnicy, najlepsze miejsce dla Twojej usługi!'>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/lokale.css') }}">
@endsection

@section('js')
    <!-- <script src="{{ asset('js/lokale.js') }}"></script> -->
@endsection
    
@section('content')
    <div id="Storefronts" data-scroll-container class="container mt-150 mb-10">

    <section id="page_top" data-scroll-section></section>
        <section class="" data-scroll-section>
            <div class="text-center font-family-secondary font-size-xl font-weight-bold">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <a href="#" id="view-3d" class="view-3d underline_medium font-color-fourth"><span>Wybór 3D</span></a>
                    </div>
                    <div class="col-md-6 mb-5">
                        <a href="#" id="view-list" class="view-list underline_medium font-color-fourth"><span>Karty</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section data-scroll-section class="display-grid-center">
            <div id="storeFrontNav" class="bg-light text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="filters filters-floor text-center" data-filer-dropdown>
                            <p class="font-size-l">Piętro</p>
                            @if(!empty($floors))
                                @foreach($floors as $floor)
                                    <div class="checkboxes d-inline-block">
                                        <div class="custom-control custom-checkbox">
                                            <input name="floor" type="checkbox" checked="" class="custom-control-input floor-checkbox" id="{{$floor->floor}}" value="{{$floor->floor}}" checked>
                                            <label class="custom-control-label" for="{{$floor->floor}}">{{ucfirst($floor->floor)}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filters filters-metric container" data-filer-dropdown>
                            <p class="font-size-l">Metraż</p>

                            <div class="mb-2 font-family-secondary font-size-s">
                                <span id="minMetric" class="min"></span
                                ><span class="to"> - to - </span
                                ><span id="maxMetric" class="max"></span>
                            </div>
                                <div name="metric" attr-valueMin="{{$metrics[0]}}" attr-valueMax="{{$metrics[1]}}" id="sliderMetric" class="wrap sliderMetric cursor_shrink"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="Storefronts-List" class="view" data-scroll-section>
            <h4 class="mx-4 mb-1 font-family-secondary">Znaleźliśmy dla Ciebie <span class="storeCount">0</span> lokali</h4>
            <div class="text-center">
                <div class="row results">

                </div>
            </div>
        </section>

        <section id="Storefronts-3D" class="view" data-scroll-section>
            <div id="app" class="container mt-5" data-3d-app>
                <div class="app-floor floor_main display-grid-center active" data-floor="main">
                    <x-app_floor_picker/>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <x-sidebar-app/>
                    </div>
                    <div class="col-md-9">
                        <div class="app-floor floor_0 display-grid-center" data-floor="0">
                            <x-app_floor_0/>
                        </div>
                        <div class="app-floor floor_1 display-grid-center" data-floor="1">
                            <x-app_floor_1/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-light-footer/>
@endsection