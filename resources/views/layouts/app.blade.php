<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css"
        integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw=="
        crossorigin="anonymous" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
</head>

<body class="c-app c-no-layout-transition">
    @include('partials.sidebar')
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button>
            
                <ul class="c-header-nav mfs-auto">
                    <li class="c-header-nav-item">
                        <a class="c-header-nav-link" href="{{ route('consultation') }}">{{ __('Get Consultation') }}</a>
                    </li>

                    <li class="c-header-nav-item d-md-down-none mx-2">
                        <a class="c-header-nav-link" href="{{ route('welcome') }}">
                            <svg class="c-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="c-header-nav-item dropdown">
                        <a class="c-header-nav-link" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pt-0">
                            <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <svg class="c-icon mfe-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                                </svg> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    
                </ul>
            {{-- </div> --}}
        </header>
        <div class="c-body">
            <main class="c-main">
                @yield('content')

            </main>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js" integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.4.0/dist/js/coreui.min.js"></script>
    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.2/dist/js/coreui.bundle.min.js" integrity="sha384-mUCFKFW9jQEIjhS6xOIxqiVI8jvvVKP9EU7P7Hu9CXqwso926ZGo41SQRhUX8CdC" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and CoreUI for Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.2/dist/js/coreui.min.js" integrity="sha384-SaOfVZfflYvITX2mrO/lzEHqlKsjF5PO3Jf+jowahmpQBKmO/fMoUypQcEMW0GJO" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    @yield('scripts')
</body>

</html>
