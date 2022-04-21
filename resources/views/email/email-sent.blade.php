@extends('layouts.master')
@section('title', 'Wysłano!')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('js')
@endsection

@section('content')
    <div class="ContactSentWrapper">
        <div id="ContactSent" class="container mb-10 mt-5" data-scroll-section>
            <h1>Udało się! Mail został wysłany.</h1>
            <h3>Dziękujemy za kontakt, w oczekiwaniu na odpowiedź możesz wrócić na stronę główną</h3>
            <div>
                <a href="/start" class="underline">Strona Główna </a><x-arrow/>
            </div>
            <span class="bg_text" data-scroll data-scroll-speed="3">Email wysłany</span>
            <span class="bg_text" data-scroll data-scroll-speed="12">Dziękujemy</span>
        </div>
    </div>
<x-MainFooterDark/>
@endsection