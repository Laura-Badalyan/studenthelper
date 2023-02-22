@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/about/index.css')}}">
@endpush

@section('content')

    <div class="page_content_adv">

        @include("pages.home._partials.courses")
    </div>





@endsection
