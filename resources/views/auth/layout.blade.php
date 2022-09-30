<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <link href="{{ asset('images/archive.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="archiver stuff, sistem pengarsipan, ACH Stuff">
        <meta name="author" content="LEFT4CODE">
        <title>{{ $title }} Page | Archiver Stuff</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @vite('resources/css/app.css')
    </head>

    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('images/logo.svg') }}">
                        <span class="text-white text-lg ml-3"> Mid<span class="font-medium">One</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('images/illustration.svg') }}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to
                            <br>
                            sign in to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white">Manage all your e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    @yield('content')
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
