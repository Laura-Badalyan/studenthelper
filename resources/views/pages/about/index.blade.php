@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/about/index.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            @include("pages.about._partials.me")

            @include("globals.instagram")
            @include("pages.home._partials.what_i_do")
        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])
    </section>


@endsection
