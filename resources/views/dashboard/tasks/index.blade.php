@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')

@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">

            <div class="container-content">

                <div class="page-header d-flex justify-content-between my-5">
                    <h1 class="page-title">Տեղեկություն</h1>


                </div>

                <div class="task">
                    {!! $task->subject !!}
                </div>
            </div>

            <div class="container-adv">
{{--                @include("globals.users.points_small_table", ["showMe" => false, "showTH" => false])--}}
                @include("globals.adv.js_lessons_vertical")
            </div>

        </div>
    </div>


@endsection
