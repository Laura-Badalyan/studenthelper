@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">Node JS</h1>

            <h2 class="block_title">Ծանոթացում</h2>

            <p class="global_margin">Սկիզբը դժվար է, ուստի ես առաջարկում եմ կապնվել ինձ հետ։ Ես կնշանակեմ օր, կհանդիպենք, կպատասխանեմ Ձեր բոլոր հուզող հարցերին</p>

            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>

            <ul class="list">
                <li>Պատրաստվում ենք հարցազրույցի</li>
            </ul>

            <hr class="list">

            <ul class="list">
                <li>Դասընթացի վերջում տալիս եմ հավաստագիր։</li>
            </ul>




        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>




@endsection
