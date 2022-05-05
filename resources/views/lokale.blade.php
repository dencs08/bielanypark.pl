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

    <div class="container mt-150 mb-10">
        <section data-scroll-section>

            <?php 
            $counter=0;
            ?>

            @if(!empty($results))
            @foreach($floorDis as $floor)
            <div class="checkboxes">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" {{($counter == 0 ? 'checked' : '')}}
                    attr-name="{{$floor->floor}}"
                    class="custom-control-input floor-checkbox" id="{{$floor->id}}">
                    <label class="custom-control-label" for="{{$floor->id}}">{{ucfirst($floor->floor)}}</label>
                </div>
            </div>
            <?php $counter++;?>
            @endforeach
            @endif 
        </section>
        
        <section data-scroll-section>
            <div class="result">
                <div class="w-100 container">
                @foreach($results as $result)
                    <div class="d-inline-block card">
                        <div class="card-header">
                            <a href="#"><img class="img-fluid w-100" src="{{ asset('images/cards/jpg/' . $result->name . '.jpg')}}" alt=""></a>
                        </div>
                        <div class="card-body">
                            <h3 class="mt-4 mb-2">Lokal {{ $result->name }}</h3>
                            <p>Metraż: <span class="fw-light">{{ $result->metric }}</span></p>
                            <p>Piętro: <span class="fw-light">{{ $result->floor }}</span></p>
                            <p>Pokój sanitarny:<span class="fw-light"> {{ $result->sanitary }}</span></p>

                            <p class="mt-4">Cena:<span class="fw-light"> {{ $result->buyPrice }}</span></p>
                            <button type="button" class="btn btn-primary mt-2">Zapytaj</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <x-MainFooterDark/>

@endsection