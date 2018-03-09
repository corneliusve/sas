<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('includes/styles/styles')
</head>
<body>
    <div id="app">

        @include('includes/navigation')

        <div class="container">
            <h1 class="is-size-3 m-b-30">Account</h1>
            @include('includes/account_navigation')

            <div class="columns">
                <div class="column is-2">

                    @yield('navigation')

                </div>
                <div class="column is-10">
                    <div class="dashboard-content-wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
