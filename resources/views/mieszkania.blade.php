@extends('layouts.master')
@section('title', 'Mieszkania')
@section('content')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mieszkania.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/mieszkania.js') }}"></script>
@endsection

<x-WebStillInDev/>
<x-MainFooterDark/>

<!-- <section id="mieszkania">
    <div class="container text-center vh-100 display-grid-center">
        <div>
            <div id="app" class="app mb-5 p-75 mt-4">
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

@endsection