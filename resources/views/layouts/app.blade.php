<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
  

    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/rotund1.ico') }}">

    <meta name="description" content="@yield('meta_description')">
    <meta name="description" content="@yield('meta_keyword')">
    <meta name="description" content="">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Exzoom  product image--}}
     <link href="{{ asset('assets/exzoom/jquery.exzoom.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet"> 


    
</head>
<body>
    <div id="app">

    

        @include('layouts.inc.frontend.navbar')
        <main>
                            <div class="copyright-areaa">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="">Florile sunt cuvintele iubirii si respectului!</p>
                                            <p>
                                                <a href="tel:+40721332458">Comanda acum : 0721 332 458</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>
            @yield('content')
        </main>
            
        @include('layouts.inc.frontend.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/exzoom/jquery.exzoom.js') }}"></script>

    @yield('scripts')

    @livewireScripts
    @stack('scripts')

    
</body>
</html>
