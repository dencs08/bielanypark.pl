@extends('layouts.master')
@section('title', 'Start')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/start.css') }}">
@endsection

@section('content')

<section id="landing_page" class="section-mb">
    <div class="container text-center">
        <h1>Najnowsza ikona miasta <br> "BIELANY PARK"</h1>
        <div class="mx-auto image-landing">
        </div>
    </div>
    <div class="container">
        <h2 class="font-color-secondary">Myrka 9</h2>
        <h2 class="font-color-secondary">Legnica</h2>
    </div>
</section>

<section id="about_us" class="section-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h4>KAMERALNY I LUKSUSOWY</h4>
                <h3>Zapoznaj się <br> z premierową <br> inwestycją</h3>
            </div>
            <div class="col-md-3 font-family-secondary">
                <ul>
                    <li>15 lokali do wynajęcia</li>
                    <li>Od 32.5 do 85,9m²</li>
                    <li>Przystosowane do każdego biznesu</li>
                    <li>2 kondygnacje</li>
                    <li>Łącznie prawie 1000m²</li>
                    <li>Zaraz przy głównej ulicy</li>
                    <li>Winda przy głównym wejściu</li>
                </ul>
                <p class="fw-light w-75">W inwestycji “bielanypark” łączymy nasze dotychczasz najlepsze rozwiązania, specjalnie dla najbardziej wymagających. Tym razem przygotowaliśmy piękny mall gotowy na wszelkiego rodzaju usługę, zlokalizowny przy ulicy Myrka 9.</p>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('images/building/jpg/side_close.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <span class="bg_text">Kameralny</span>
    <span class="bg_text">Luksusowy</span>
</section>

<section id="build_end" class="section-mb">
    <div class="container text-center">
        <div class="w-75 mx-auto">
            <h3>Zakończenie inwestycji przewidywane jest na początek 2023 r. Jesteś zainteresowany w osiągnięciu nowego poziomu razem z nami?</h3>
        </div>
        <a href="/kontakt">- Kontakt -</a>
    </div>
</section>

<section id="app" class="section-mb">
    <div class="container">
        <img src="{{ asset('images/building/jpg/chalk_top_myrka.jpg') }}" class="img-fluid" alt="">
    </div>
</section>

<section id="about_us2" class="section-mb">
    <div class="container text-center">
        <div class="mx-auto">
        <h3>Ikoniczna architektura, nowoczesna prezencja z poszanowaniem otaczającej natury.</h3>
        </div>
    </div>
    <span class="bg_text">Ikoniczna</span>
    <span class="bg_text">Nowoczesna</span>
</section>

<section id="about_us3" class="section-mb">
    <div class="container">
        <img src="{{ asset('images/building/jpg/front_close.jpg') }}" class="img-fluid mb-5" alt="">

        <div class="row">
            <div class="col-md-3">
                <h4>ELEGANCKA ARCHITEKTRUA</h4>
                <h3>Najbardziej prestiżowy mall w Legnicy</h3>
            </div>
            <div class="col-md-3">
                <ul class="font-family-secondary fw-light">
                    <li>Wykonany z najwyższej jakości materiałów</li>
                    <li>Strzeżony parking</li>
                    <li>Najnowsza, unikalna architektura.</li>
                    <li>Piękne przeszkolne witryny</li>
                    <li>Nowoczesne żaluzje fasadowe</li>
                    <li>Unikatowe płyty elewacyjne</li>
                </ul>
            </div>
        </div>
    </div>
    <span class="bg_text">Elegancka</span>
    <span class="bg_text">Architektura</span>
</section>

<section id="sell" class="section-mb">
    <div class="container text-center">
        <h3>Sprzedaż już się zaczęła, nie przegap okazji i skontaktuj się z nami!</h3>
    </div>
</section>

<x-MainFooterDark/>

@endsection