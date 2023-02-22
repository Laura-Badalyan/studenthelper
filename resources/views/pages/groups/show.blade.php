@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/groups/show.css')}}">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />

    <style>
        .vjs-big-play-button{
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            background: var(--blue)!important;
        }
    </style>
@endpush

@push('_js')
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

    <script>

        // $(window).blur(function(){
        //     toHack()
        // });
        // document.addEventListener("visibilitychange", function(){
        //     if (document.hidden) {
        //         toHack()
        //     }
        // });

        window.onresize = function(){
            if ((window.outerHeight - window.innerHeight) > 1) {
                // console was opened (or screen was resized)
                console.log(1)
            }
        }

        function toHack(){
            $(location).attr('href','/groups/');
        }

    </script>
@endpush

@section('content')

    <div class="page_content_adv">

        <div class="left_side">
            <h1 class="block_title fz4">{{$group->name}}</h1>

            <p class="mb-20">{{$group->description}}</p>

            <div style="width: 100%" class="global_margin">
                <video
                    id="my-video"
                    class="video-js"
                    controls
                    preload="auto"
                    width="100%"
                    height="500px"
                    poster="/img/courses/{{$group->courses[0]->id}}.png"
                    data-setup="{}"
                >
                    <source src="/v/{{$group->courses[0]->video}}.mp4" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                        >
                    </p>
                </video>
            </div>

{{--            @php $i=0; @endphp--}}
            <div class="videos">
                @foreach($group->courses as $course)
                    <a href="/courses/{{$course->id}}" class="video">
                        <div class="video_img">
                            <img src="/img/courses/{{$course->id}}.png" alt="">
                        </div>
                        <div>{{$course->name}}</span></div>
                        <div class="video_duration">{{$course->duration}}</div>

                        @if(!$toShow && !$course->is_free)
                            <div class="video_lock">
                                @include("icons.lock",["class" => "main fz3"])
                            </div>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>

        @include("globals.adv", ["img" => "/img/adv2.jpg"])
    </div>





@endsection
