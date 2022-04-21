@extends('layouts.master')
@section('title', 'Kontakt')

@section('meta')
<meta name="description" content='Wykorzystaj stronę bielanypark.pl do skonaktowania się z nami mailowo lub telefonicznie, odezwiemy się tak szybko jak to możliwe!'>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <!-- <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' /> -->
@endsection

@section('js')
    <!-- <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js'></script> -->
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection

@section('content')

<div data-scroll-container>
<div id="Contact" class="container-fluid mb-10 mt-5" data-scroll-section>
    <div class="row">
        <div class="bg-darker col-md-6 p-0 display-grid-center">
            <div class="w-75 mx-auto">
                <h3>Odezwij się do nas, odpowiemy tak szybko jak to możliwe!</h3>
                <form id="contact-form" name="myForm" name="contact-form" action="{{ route('send.email') }}" class="contact-form validate-form" method="post">
                    @csrf
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                    {{ session()->get('message') }}
                        </div>
                    @endif
                        <div>
                            <div class="">
                                <div class="form-field validate-input" data-validate = "To pole jest wymagane!">
                                    <input id="name" name="name" class="input-text js-input" type="text" required>
                                    <label class="label" for="name">Imię</label>
                                    @error('name')
                                    <span class="mt-3 text-alert"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="">
                                    <div class="form-field validate-input" data-validate = "To pole jest wymagane!">
                                        <input id="email" name="email" class="input-text js-input" type="email" required>
                                        <label class="label" for="email">E-mail</label>
                                        @error('email')
                                        <span class="mt-3 text-alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-field validate-input" data-validate = "To pole jest wymagane!">
                                <textarea id="content" name="content" class="input-text js-input" cols="30" rows="6" required></textarea>
                                <label class="label" for="message">Wiadomość</label>
                                @error('content')
                                <span class="mt-3 text-alert"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="form-field text-center submit-container mt-5">
                                <input type="submit" value="WYŚLIJ" class="btn btn-submit w-100"></input>
                            </div>
                        </div>
                </form>

                <div class="d-block font-size-s">
                    <div class="contact-info mb-4 font-family-secondary fw-light">
                        <div>biuro@komb.pl</div> 
                        <div>734 848 057</div>
                        <div>Legnica, Plac Wolności 4AB/101</div> 
                    </div>

                    <div class="social-media"></div>
                        <a href="https://www.facebook.com/bielanyparkpl" rel="noreferrer" target="_blank">
                            <div class="nav-icon-div cursor_expand">
                                <svg
                                    id="facebook-icon"
                                    viewBox="0 0 417 417"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xml:space="preserve"
                                    xmlns:serif="http://www.serif.com/"
                                    style="
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2;
                                    ">
                                    <path
                                        d="M175.812,413.945l0,-145.445l-52.857,0l0,-60.174l52.857,0l0,-45.853c0,-0.647 0.005,-1.29 0.015,-1.928c0.052,-3.513 0.247,-6.917 0.582,-10.208c0.111,-1.098 0.238,-2.184 0.38,-3.258c0.163,-1.233 0.346,-2.448 0.549,-3.648l0.084,-0.492c0.032,-0.179 0.064,-0.358 0.095,-0.537l0.065,-0.354c0.155,-0.844 0.32,-1.679 0.495,-2.506l0.066,-0.312l0.096,-0.437c0.049,-0.224 0.099,-0.449 0.15,-0.672c0.113,-0.494 0.229,-0.985 0.349,-1.473l0.126,-0.51c0.043,-0.169 0.086,-0.338 0.129,-0.507l0.132,-0.506c0.045,-0.167 0.09,-0.335 0.135,-0.503l0.067,-0.245c0.243,-0.889 0.498,-1.767 0.765,-2.635c0.411,-1.335 0.851,-2.644 1.319,-3.928l0.172,-0.469c0.492,-1.322 1.013,-2.619 1.565,-3.888c0.332,-0.766 0.675,-1.52 1.028,-2.265c0.964,-2.033 2.008,-3.992 3.129,-5.877c0.712,-1.197 1.454,-2.363 2.227,-3.499c0.367,-0.539 0.739,-1.07 1.119,-1.594l0.108,-0.15l0.089,-0.12c0.589,-0.805 1.193,-1.592 1.812,-2.363c0.184,-0.228 0.368,-0.454 0.553,-0.678c0.305,-0.369 0.614,-0.735 0.926,-1.096c0.643,-0.744 1.3,-1.47 1.973,-2.179c0.179,-0.191 0.361,-0.38 0.543,-0.567l0.318,-0.326c0.319,-0.323 0.642,-0.644 0.968,-0.961l0.327,-0.316c0.655,-0.629 1.324,-1.244 2.006,-1.844l0.341,-0.299c0.841,-0.729 1.7,-1.438 2.579,-2.124c0.482,-0.377 0.972,-0.748 1.466,-1.113l0.222,-0.162l0.103,-0.075c0.578,-0.421 1.166,-0.834 1.762,-1.238l0.379,-0.256c0.379,-0.253 0.763,-0.504 1.15,-0.751c3.01,-1.923 6.207,-3.624 9.577,-5.097c0.524,-0.23 1.05,-0.453 1.581,-0.67c0.877,-0.36 1.762,-0.703 2.658,-1.031l0.45,-0.164c0.148,-0.053 0.301,-0.107 0.453,-0.161l0.455,-0.158c0.759,-0.262 1.526,-0.514 2.3,-0.755c1.517,-0.473 3.066,-0.906 4.644,-1.298l0.091,-0.023l0.483,-0.118c0.994,-0.24 2.004,-0.464 3.025,-0.673l0.406,-0.082c0.165,-0.032 0.331,-0.065 0.497,-0.097l0.498,-0.095l0.501,-0.093l0.21,-0.037c0.764,-0.138 1.537,-0.267 2.317,-0.386l0.51,-0.077c0.171,-0.025 0.341,-0.05 0.512,-0.075l0.514,-0.072l0.515,-0.069l0.517,-0.067l0.016,-0.001c0.512,-0.065 1.027,-0.126 1.545,-0.183c0.347,-0.038 0.697,-0.075 1.049,-0.11c1.73,-0.172 3.485,-0.302 5.265,-0.39c0.567,-0.028 1.136,-0.051 1.707,-0.071l0.547,-0.017c1.1,-0.031 2.204,-0.047 3.316,-0.047l1.068,0.003c0.356,0.002 0.712,0.005 1.069,0.008l1.069,0.015c2.067,0.033 4.133,0.096 6.181,0.184l0.21,0.009l0.075,0.003c1.067,0.047 2.129,0.1 3.183,0.159l0.94,0.055l1.036,0.063c0.684,0.043 1.363,0.089 2.038,0.136c2.302,0.162 4.545,0.346 6.702,0.544l0.228,0.02l0.628,0.059c1.183,0.112 2.337,0.227 3.459,0.344c3.68,0.383 7.003,0.789 9.793,1.158c1.416,0.187 2.695,0.365 3.813,0.526l1.022,0.149c1.844,0.272 3.129,0.479 3.718,0.576c0.238,0.039 0.362,0.06 0.362,0.06l-0,51.22l-26.251,-0c-0.605,-0 -1.2,0.009 -1.789,0.026l-0.583,0.02c-0.193,0.008 -0.386,0.017 -0.577,0.026c-0.26,0.014 -0.518,0.029 -0.774,0.046c-2.168,0.139 -4.196,0.402 -6.092,0.778l-0.063,0.012l-0.443,0.092c-1.642,0.346 -3.181,0.779 -4.623,1.289l-0.426,0.154c-0.931,0.344 -1.822,0.722 -2.673,1.13c-0.18,0.085 -0.356,0.172 -0.531,0.26l-0.376,0.193c-0.248,0.13 -0.493,0.263 -0.735,0.399c-0.724,0.406 -1.416,0.837 -2.077,1.291l-0.328,0.229c-0.108,0.077 -0.216,0.154 -0.322,0.232l-0.318,0.236c-0.673,0.509 -1.311,1.043 -1.916,1.601c-1.152,1.061 -2.181,2.207 -3.096,3.422l-0.078,0.104c-0.073,0.1 -0.147,0.2 -0.22,0.3l-0.181,0.254c-1.083,1.537 -1.991,3.178 -2.742,4.896l-0.146,0.342c-0.133,0.315 -0.261,0.633 -0.384,0.953c-0.251,0.657 -0.481,1.322 -0.69,1.996l-0.063,0.204l-0.088,0.294c-0.042,0.143 -0.082,0.284 -0.122,0.426l-0.099,0.362c-0.462,1.721 -0.796,3.493 -1.018,5.292c-0.027,0.221 -0.053,0.443 -0.077,0.666l-0.039,0.381c-0.149,1.522 -0.22,3.063 -0.22,4.608l-0,39.034l57.711,0l-9.225,60.174l-48.486,0l-0,145.445c99.493,-15.616 175.61,-101.727 175.61,-205.619c0,-114.952 -93.186,-208.139 -208.153,-208.139c-114.952,0 -208.139,93.187 -208.139,208.139c0,103.892 76.118,190.003 175.625,205.619Z"
                                        class="nav-icon"
                                    />
                                </svg>
                            </div>
                    </a>

                    <div class="privacy-policy mt-4 font-family-secondary fw-light mb-5">
                        <a href="/polityka">Polityka prywatności</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6 p-0">
            <iframe height='100%' width="100%" src="https://api.mapbox.com/styles/v1/dencs08/cl210mbvs00c714mqvui4941i.html?title=false&access_token=pk.eyJ1IjoiZGVuY3MwOCIsImEiOiJjanYxaXgxN2YwYmlrNDRydHB6c3Q5eWNjIn0.Rs2kuHA93nRix-LXRVRDPA&zoomwheel=true#15/51.18974/16.17800/0/1" title="Monochrome" style="border:none;"></iframe>
        </div> 
        </div>
    </div>
    
    <div id="footer_light" data-scroll-section>
        <div class="container text-center">
            <div>
            <p class="footer_copy font-family-secondary font-color-fourth fw-light mb-5">Przedstawiona oferta cenowa ma charakter informacyjny, nie stanowi oferty handlowej w rozumieniu Art. 66 par. 1 Kodeksu Cywilnego oraz innych przepisów prawnych. Przedstawione na niniejszej stronie wizualizacje mają charakter wyłącznie poglądowy i stanowią wyłącznie materiał pomocniczy ułatwiający przyszłym nabywcą mieszkań zorientowanie się w ogólnym wyglądzie realizowanego przedsięwzięcia deweloperskiego. Przedstawione wizualizacje nie stanowią oferty w rozumieniu ustawy z dnia 23 kwietnia 1964 r. Kodeks cywilny (Dz. U. z 2014 r., poz. 121; ze zm.) i nie są wiążące dla Dewelopera.
                </p>
            </div>
            
            <div class="footer_copy font-family-secondary font-color-fourth fw-light">
                <p>© 2022 bielanypark wszelkie prawa zastrzeżone. Zrealizował: <a href="{{ env('APP_CREATOR') }}" rel="noreferrer" target="_blank">bisonstudio.pl</a></p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32656.612378360478!2d16.12203381155269!3d51.23123078778963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f128fb362d097%3A0x657bf6e8de4234c2!2sKOMB%20Biuro%20Sprzeda%C5%BCy%20Mieszka%C5%84!5e0!3m2!1spl!2spl!4v1645295210777!5m2!1spl!2spl" loading="lazy"></iframe>
</div> -->
@endsection