<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <title>Rig Ice Service Ltd</title>


    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Construction and Architecture Template" />
    <meta name="description" content="Builder - Construction and Architecture Template" />


    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

    <!-- theme core css -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        @livewire('component.header')

        {{ $slot }}

        @livewire('component.footer')

    </div>

    <!-- start scroll to top -->
    <a href="#!" class="scroll-to-top">
        <i class="fas fa-angle-up" aria-hidden="true"></i>
    </a>
    <!-- end scroll to top -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- jquery -->
    <script src="{{ asset('js/core.min.js') }}"></script>

    <!-- Search -->
    <script src="{{ asset('js/search.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- form plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'disableScrolling': true,
            'positionFromTop': 100,
            'fitImagesInViewport': true
        })
    </script>

    <!-- form scripts js -->
    <script src="{{ asset('js/scripts.js') }}"></script>

    <!-- all js include end -->
    @livewireScripts
</body>

</html>
