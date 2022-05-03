@extends('layouts.master')
@section('title', 'Mieszkania')

@section('meta')
<meta name="description" content='Wyszukaj lokale usługowe "bielanypark" zlokalizowane przy ulicy Myrka 9 w Legnicy, najlepsze miejsce dla Twojej usługi!'>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/mieszkania.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/mieszkania.js') }}"></script>
@endsection
    
@section('content')

<div class="data-scroll-container" data-scroll-container>
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

    <x-MainFooterDark/>
</div>

@endsection