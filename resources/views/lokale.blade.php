@extends('layouts.master')
@section('title', 'Bielanypark - Lokale')

@section('meta')
<meta name="description" content='Wyszukaj lokale usługowe "bielanypark" zlokalizowane przy ulicy Myrka 9 w Legnicy, najlepsze miejsce dla Twojej usługi!'>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/lokale.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/lokale.js') }}"></script>
@endsection
    
@section('content')
    <div id="Storefronts" data-scroll-container class="container mt-150 mb-10">

        <section data-scroll-section class="display-grid-center">
            <div id="storeFrontNav" class="bg-light text-center">
            <h3 class="mb-1">Znaleźliśmy dla Ciebie <span class="storeCount">15</span> lokali</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="filters-floor text-center">
                            <p>Piętro</p>
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
                    <div class="col-md-4">
                        <div class="filters-metric container">
                            <p>Metraż</p>

                            <div class="mb-2">
                                <strong id="minMetric" class="min"></strong
                                ><strong class="to"> - to - </strong
                                ><strong id="maxMetric" class="max"></strong>
                              </div>
                              <div name="metric" attr-valueMin="{{$metrics[0]}}" attr-valueMax="{{$metrics[1]}}" id="sliderMetric" class="wrap sliderMetric"></div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="filters-buyPrice container">
                            <p>Cena</p>

                              <div class="mb-2">
                                <strong id="minBuyPrice" class="min"></strong
                                ><strong class="to"> - to - </strong
                                ><strong id="maxBuyPrice" class="max"></strong>
                              </div>
                              <div name="buyPrice" attr-valueMin="{{$buyPrices[0]}}" attr-valueMax="{{$buyPrices[1]}}" id="sliderBuyPrice" class="wrap sliderBuyPrice"></div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section data-scroll-section>
            <div class="text-center">
                <div class="row results">

                </div>
            </div>
        </section>
    </div>

    <!-- <x-MainFooterDark/> -->
    <x-light-footer/>

@endsection