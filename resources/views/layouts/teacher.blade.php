<!DOCTYPE html>
<html lang="es">
    <head>
        <title>{{ env('APP_NAME') }}</title>
        <meta charset="UTF-8">
        <meta name="description" content="WebUni Education Template">
        <meta name="keywords" content="webuni, education, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- ADD CSRF TOKEN FOR AJAX OPERATIONS --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Favicon -->
        <link href="/img/favicon.ico" rel="shortcut icon"/>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/css/style.css"/>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        @stack('css')
    </head>
    <body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('partials.teacher.hero')

    @include('partials.teacher.navigation')

    @component('components.alert-component')@endcomponent

    {{--  @component('components.alert-component')@endcomponent  --}}

    @yield('content')

    @include('partials.learning.footer')

    <!--====== Javascripts & Jquery ======-->
    {{--  <script src="/js/jquery-3.2.1.min.js"></script>  --}}
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset( '/js/bootstrap.min.js' ) }}"></script>
    <script src="{{ asset( '/js/mixitup.min.js' ) }}"></script>
    <script src="{{ asset( '/js/circle-progress.min.js' ) }}"></script>
    <script src="{{ asset( '/js/owl.carousel.min.js' ) }}"></script>
    <script src="{{ asset( '/js/main.js' ) }}"></script>

    <script src="{{ asset('/js/jConfirm.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.jConfirm.defaults.question = '{{ __("¿Estás seguro?") }}';
            $.jConfirm.defaults.confirm_text = '{{ __("Sí") }}';
            $.jConfirm.defaults.deny_text = '{{ __("No") }}';
            $.jConfirm.defaults.position = 'top';
            $.jConfirm.defaults.theme = 'black';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <script src="{{ asset('/js/functions.js') }}"></script>

    @stack('js')
    </body>
</html>
