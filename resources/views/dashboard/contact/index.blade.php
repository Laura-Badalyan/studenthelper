@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')

@endpush

@section("content")

    <div class="container mt-5">
        <div class="container-with-adv">
            <div class="container-content">
                <form method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Ուղարկիր ինձ հարցը և մենք կպատասխանեմ առաջիկա 24 ժամվա ընթացքում։</label>
                        <textarea name="subject" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <input type="submit" value="Ուղարկել" class="btn btn-primary">
                </form>
            </div>





            <div class="container-adv">
                @include("globals.adv.js_lessons_vertical")
{{--                @include("globals.users.points_small_table", ["showMe" => false, "showTH" => false])--}}

            </div>
        </div>
    </div>


@endsection
