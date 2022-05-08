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
    <!-- <x-WebStillInDev/> -->
    <!-- <section id="mieszkania" data-scroll-section>
        <div class="container text-center display-grid-center">
            <div>
                <div id="app" class="app mb-5 mt-10 p-75 mt-4 vh-75">
                    <div id="floor_picker">
                        <h1>
                            Wybierz ineresujące Cię piętra
                        </h1>
                        <img src="{{ asset('images/building/png/chalk_side.png') }}" class="img-fluid mt-5" alt="">
                    </div>

                    <div id="metric_picker" class="d-none">
                        <h1>
                            Zaznacz interesujący Cię metraż
                        </h1>
                    </div>

                    <div id="flat_cards" class="d-none">
                        <h1>
                            CARDS
                        </h1>
                    </div>
                </div>

                <div class="buttons">
                    <button id="previous" class="btn btn-next mr-5"><</button>
                    <button id="next" class="btn btn-next">></button>
                </div>
            </div>

        </div>
    </section> -->

    <div id="Storefronts" data-scroll-container class="container mt-150 mb-10">

        <section data-scroll-section class="display-grid-center">
            <div id="storeFrontNav" class="bg-light display-grid-center">
            <h3>Znaleźliśmy dla Ciebie <span class="storeCount">15</span> lokali</h3>
                <?php $counter=0;?>
                @if(!empty($floors))
                    @foreach($floors as $floor)
                        <div class="checkboxes d-inline-block">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" {{($counter == 0 ? 'checked' : '')}}
                                attr-name="{{$floor->floor}}"
                                class="custom-control-input floor-checkbox" id="{{$floor->floor}}">
                                <label class="custom-control-label" for="{{$floor->floor}}">{{ucfirst($floor->floor)}}</label>
                            </div>
                        </div>
                        <?php $counter++;?>
                    @endforeach
                @endif 
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