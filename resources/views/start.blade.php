@extends('layouts.master')
@section('title', 'Bielanypark Legnica - Miejsce Dla Twojego Biznesu')

@section('meta')
<meta name="description" content='Bielanypark Legnica - To idealne miejsce dla Twojego biznesu, piękne lokale usługowe i świetna lokalizacja zaraz przy głównej ulicy Myrka 9 w Legnicy.'>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/start.css') }}">
@endsection

@section('js')
    <!-- <script src="{{ asset('js/start.js') }}"></script> -->
@endsection

@section('content')
<div class="data-scroll-container" data-scroll-container>
<section id="page_top" data-scroll-section data-scroll></section>
<section id="landing_page" class="section-mb" data-scroll-section data-scroll>
    <div class="hero-wrapper">
        <div class="hero text-center">
            <img src="{{ asset('images/building/jpg/back.jpg')}}" title="Bielanypark Legnica wieczorem - tył budynku" class="image-landing" alt="Bielanypark Legnica wieczorem">
            <div id="h1_container" class=" blend-soft-light" data-scroll data-scroll-speed="-2">
                <h1>"BIELANYPARK" <br> Najnowsza Ikona Legnicy</h1>
            </div>
        </div>
    </div>
    <div class="container blend-screen">
        <div data-scroll data-scroll-speed="-0.75">
            <h2 id="h2-1" class="font-color-tertiary h2-1">Myrka 9</h2>
        </div>
        <div data-scroll data-scroll-speed="3">
            <h2 id="h2-2" class="font-color-tertiary h2-2">Legnica</h2>
        </div>
    </div>
</section>
<div data-scroll-section data-scroll class="slider"></div>

<section id="about_us" class="section-mb" data-scroll-section data-scroll>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div>
                    <h4>KAMERALNY I LUKSUSOWY</h4>
                </div>
                <div>
                    <h3>Zapoznaj się <br> z premierową <br> inwestycją</h3>
                </div>
            </div>
            <div class="col-lg-3 font-family-secondary" data-scroll data-scroll-speed="1.5">
                <ul>
                    <li><span>15 lokali do wynajęcia</span></li>
                    <li><span>Od 32.5 do 85,9m²</span></li>
                    <li><span>Przystosowane do każdego biznesu</span></li>
                    <li><span>2 kondygnacje</span></li>
                    <li><span>Łącznie prawie 1000m²</span></li>
                    <li><span>Zaraz przy głównej ulicy</span></li>
                    <li><span>Winda przy głównym wejściu</span></li>
                </ul>
                <p class="fw-light"><b>Bielanypark</b> to idealne miejsce dla Twojego biznesu, piękne lokale usługowe w 2 kondygnacyjnym nowoczesnym budynku tworzą najnowszą Ikonę Legnicy. W inwestycji “bielanypark” łączymy nasze dotychczasz najlepsze rozwiązania, specjalnie dla najbardziej wymagających. Tym razem przygotowaliśmy piękny mall gotowy na wszelkiego rodzaju usługę, zlokalizowny przy ulicy Myrka 9.</p>
            </div>
            <div class="col-lg-7" data-scroll data-scroll-speed="4">
                <img src="{{ asset('images/building/jpg/side_close.jpg') }}" class="img-fluid" title="Wejście boczne do inwestycji Bielanypark" alt="Wejście Bielanypark Legnica wieczorem">
            </div>
        </div>
    </div>
    <div class="overflow-hidden">
        <span class="bg_text" data-scroll data-scroll-speed="0.5" data-scroll-direction="horizontal">Luksusowy</span>
        <span class="bg_text" data-scroll data-scroll-speed="-0.5" data-scroll-direction="horizontal">Kameralny</span>
    </div>
</section>

<section id="build_end" class="section-mb section-mt display-grid-center" data-scroll-section data-scroll>
    <div class="container text-center" data-scroll data-scroll-speed="0.25">
        <div class="w-75 mx-auto">
            <h3>Zakończenie inwestycji bielanypark przewidywane jest na początek 2023 r. Jesteś zainteresowany w osiągnięciu nowego poziomu razem z nami?</h3>
        </div>
        <a href="/kontakt">- Kontakt -</a>
    </div>
</section>

<section id="app" class="section-mb section-mt" data-scroll-section data-scroll>
    <div class="container" data-scroll data-scroll-speed="0.5">
        <img src="{{ asset('images/building/jpg/chalk_top_myrka.jpg') }}" class="img-fluid" title="Bielanypark Legnica - Widok z drona" alt="Bielanypark Legnica Rysowane Kreską - Widok Z Drona">
    </div>
</section>

<section id="about_us2" class="section-mb section-mt display-grid-center overflow-hidden" data-scroll-section data-scroll>
    <div class="container text-center" data-scroll data-scroll-speed="5">
        <div class="mx-auto">
        <h3>Ikoniczna architektura, nowoczesna prezencja z poszanowaniem otaczającej natury.</h3>
        </div>
    </div>
    <div class="overflow-hidden">
        <span class="bg_text" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">Nowoczesna</span>
        <span class="bg_text" data-scroll data-scroll-speed="-3" data-scroll-direction="horizontal">Ikoniczna</span>
    </div>
</section>

<section id="about_us3" class="section-mb overflow-hidden" data-scroll-section data-scroll>
    <div class="container">
        <div data-scroll data-scroll-speed="0.5">
            <img src="{{ asset('images/building/jpg/front_close.jpg') }}" class="img-fluid mb-5" title="Bielanypark Legnica wejście frontalne za dnia" alt="Bielanypark Legnica za dnia">
        </div>

        <div class="row">
            <div class="col-md-3" data-scroll data-scroll-speed="3">
                <h4>ELEGANCKA ARCHITEKTRUA</h4>
                <h3>Najnowsza Ikona Legnicy - prestiżowy mall "BIELANYPARK"</h3>
            </div>
            <div class="col-md-4" data-scroll data-scroll-speed="1.5">
                <ul class="font-family-secondary fw-light">
                    <li data-scroll data-scroll-speed="0.5"><span>Wykonany z najwyższej jakości materiałów.</span></li>
                    <li data-scroll data-scroll-speed="0.75"><span>Najnowsza, unikalna architektura.</span></li>
                    <li data-scroll data-scroll-speed="1.0"><span>Piękne przeszkolne witryny.</span></li>
                    <li data-scroll data-scroll-speed="1.25"><span>Nowoczesne żaluzje fasadowe.</span></li>
                    <li data-scroll data-scroll-speed="1.5"><span>Unikatowe płyty elewacyjne.</span></li>
                </ul>
            </div>
            <div class="col-md-5" data-scroll data-scroll-speed="3">
                <p class="fw-light">Bielanypark Legnica to miejsce w, które warto zainwestować - genialna lokalizacja przy głównej ulicy ułatwi dostęp przyszłym klientom, prezencja    jakiej w Legnicy jeszcze nie było tworzą atmosferę elegancji i luksusu ale zarazem dostępności dzięki prostocie architektury budnyku, przy wejściach zamontowane są    nowoczesne neony dzięki czemu nikt nie przejdzie obojętnie obok Twojej usługi.</p>
            </div>
        </div>
    </div>
    <div class="overflow-hidden">
        <span class="bg_text" data-scroll data-scroll-speed="-3">Elegancka</span>
        <span class="bg_text" data-scroll data-scroll-speed="-7">Architektura</span>
    </div>
</section>

<section id="sell" class="section-mb" data-scroll-section data-scroll>
    <div class="container text-center" data-scroll data-scroll-speed="6">
        <h3>Sprzedaż już się zaczęła, nie przegap okazji i skontaktuj się z nami!</h3>
        <div data-scroll class="magnetic magnetic-wrapper">
              <a href="/kontakt"><button class="my-button"><x-Arrow/></button></a>
        </div>
    </div>
</section>

<x-MainFooterDark/>
</div>



@endsection