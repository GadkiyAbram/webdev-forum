<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webdev forum</title>
{{--    <link rel="stylesheet" href="{{ asset('css/paper.bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
@include('layouts.partials.navbar')

@yield('banner')

<div class="container">

    <div class="row">
        @section('category')
            @include('layouts.partials.categories')
        @show

        <div class="col-md-9">
            <div class="row content-heading"><h4>@yield('heading')</h4></div>
            <div class="content-wrap well">
                @yield('content')
            </div>
        </div>
    </div>
</div>

{{--<script--}}
{{--    src="https://code.jquery.com/jquery-3.5.1.js"--}}
{{--    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="--}}
{{--    crossorigin="anonymous">--}}
{{--    --}}
{{--</script>--}}
{{--<script src="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
