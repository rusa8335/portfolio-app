<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>@yield('title')</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('front/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('front/css/magnific-popup.css')}}" rel="stylesheet">

    <link href="{{asset('front/css/templatemo-first-portfolio-style.css')}}" rel="stylesheet">

    <!--

    TemplateMo 578 First Portfolio

    https://templatemo.com/tm-578-first-portfolio

    -->
</head>

<body>

<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>
{{--navbar start--}}
@include('front.layouts.navbar')
{{--navbar end--}}
<main>
    {{--header start--}}
@include('front.layouts.header')

{{--header end--}}
{{--content start--}}
@include('front.layouts.content')
{{--content end--}}
{{--contend2 start    --}}
    @include('front.layouts.content2')
{{--content2 end--}}
</main>
{{--footer start--}}
@include('front.layouts.footer')
{{--footer end--}}
<!-- JAVASCRIPT FILES -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.sticky.js')}}"></script>
<script src="{{asset('front/js/click-scroll.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/magnific-popup-options.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>

</body>
</html>
