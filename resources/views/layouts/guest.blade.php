<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-C6G_3qQV.css') }}">
        <script src="{{ asset('build/assets/app-DspuE8pW.js') }}"></script>

        <link rel="stylesheet" href="{{ asset('build/assets/app-7dFzyK7f.css') }}">

        <!-- Fonts and icons -->
        <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
        <script>
            WebFont.load({
                google: { families: ["Public Sans:300,400,500,600,700"] },
                custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"],
                },
                active: function () {
                sessionStorage.fonts = true;
                },
            });
        </script>


        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css ') }}"  />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css ') }}"  />
        <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css ') }}"  />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css ') }}"  />

        <style>
            .modal-content {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 5px;
            }

            .modal-header {
                background: linear-gradient(135deg, #0062cc, #0096ff);
                padding: 20px;
                border: none;
                color: white;
            }

            .modal-title {
                font-weight: 600;
            }

            .modal-body {
                padding: 30px;
            }

            .btn-close {
                filter: brightness(0) invert(1);
            }

            .form-control {
                padding: 12px 15px;
                border-radius: 10px;
                border: 2px solid #eee;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                border-color: #0062cc;
                box-shadow: none;
            }

            .input-group-text {
                border: none;
                background: transparent;
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                z-index: 4;
                color: #666;
            }

            .input-group {
                position: relative;
            }

            .btn-login {
                padding: 12px 20px;
                background: linear-gradient(135deg, #0062cc, #0096ff);
                border: none;
                border-radius: 10px;
                font-weight: 500;
                width: 100%;
                transition: all 0.3s ease;
            }

            .btn-login:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 98, 204, 0.3);
            }

            .social-login {
                display: flex;
                gap: 10px;
                margin-top: 20px;
            }

            .btn-social {
                flex: 1;
                padding: 12px;
                border-radius: 10px;
                border: 2px solid #eee;
                background: white;
                transition: all 0.3s ease;
            }

            .btn-social:hover {
                background: #f8f9fa;
                transform: translateY(-2px);
            }

            .btn-social i {
                margin-right: 10px;
            }

            .divider {
                text-align: center;
                margin: 20px 0;
                position: relative;
            }

            .divider::before {
                content: '';
                position: absolute;
                left: 0;
                top: 50%;
                width: 45%;
                height: 1px;
                background: #eee;
            }

            .divider::after {
                content: '';
                position: absolute;
                right: 0;
                top: 50%;
                width: 45%;
                height: 1px;
                background: #eee;
            }

            .divider span {
                background: white;
                padding: 0 10px;
                color: #666;
                font-size: 0.9rem;
            }

            .form-check {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 15px 0;
            }

            .password-toggle {
                cursor: pointer;
            }

            .register-link {
                text-align: center;
                margin-top: 20px;
                font-size: 0.9rem;
            }
        </style>

    </head>
    <body class="font-sans text-gray-900 antialiased bg-white">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
            {{-- <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> --}}

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>

</html>
