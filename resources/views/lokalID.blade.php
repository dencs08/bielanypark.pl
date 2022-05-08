@extends('layouts.master')
@section('title', 'Bielanypark - Lokal nr. ' . $storeFrontName . '')

@section('meta')
<meta name="description" content=''>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/lokale.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/lokale.js') }}"></script>
@endsection
    
@section('content')

<div data-scroll-container>
    <section class="vh-100 display-grid-center" data-scroll-section>
        <div class="container mb-10 mt-10" >
            <div class="mb-3">
                <a href="/lokale"><button class="btn btn-outline-primary btn-items-center" type="button"><x-arrow-left/><span class="font-size-m"> Powrót</span></button></a>
            </div>
            <div class="row">
                <div class="col-md-7 p-0">
                    <div class="p-5 png-bg-color-light">
                        <a rel="noopener noreferrer" target="_blank" href="{{ asset('images/cards/pdf/' . $storeFront[0]->name . '.pdf')}}"><img class="img-fluid" src="{{ asset('images/cards/web/png/' . $storeFront[0]->name . '.png')}}" alt="Lokal {{$storeFront[0]->name}}"></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <h1>
                       Lokal {{ $storeFront[0]->name }}
                    </h1>
                    <div class="font-family-secondary">
                        <p class="mb-3 mt-0 font-size-xl">Cena: {{$storeFront[0]->buyPrice}}</p>

                        <p class="m-0">Metraż: {{$storeFront[0]->metric}}</p>
                        <p class="m-0">Piętro: {{$storeFront[0]->floor}}</p>
                        <p class="m-0 mb-5">Pokój sanitarny: {{$storeFront[0]->sanitary}}</p>
                    </div>

                    <div class="buttons">
                        <div>
                            <a href="/kontakt/{{$storeFront[0]->name}}"><button class="btn btn-secondary btn-padding-big w-100 text-center">Zapytaj</button></a>
                        </div>
                        <div class="mt-4">
                            <a rel="noopener noreferrer" target="_blank" href="{{ asset('images/cards/pdf/' . $storeFront[0]->name . '.pdf')}}"><button class="btn btn-outline-primary btn-padding-big w-100 text-center">Pobierz PDF</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-light-footer/>
    </section>
</div>

@endsection