@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/blogs/show.css')}}">
@endpush

@section('content')

    <div>
        <img src="{{$blog->img}}" width="100%" alt="{{$blog->title}}">
    </div>
    <section class="page_content_adv">

        <div class="left_side">

            <div class="single_blog">
                <h3 class="block_title">{{$blog->title}}</h3>

                <div class="blog_description">{!! $blog->description !!}</div>

                <p class="global_margin"><b>Հրապարակվել է։</b> {{$blog->date}}</p>
            </div>

        </div>

        <div class="adv">
            <div class="blog_view">Դիտվել է <b class="number">{{$blog->views}}</b> անգամ</div>

            @include("globals.adv", ["img" => "/img/adv.png"])
        </div>
    </section>


@endsection
