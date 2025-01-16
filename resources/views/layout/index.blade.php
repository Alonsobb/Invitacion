<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alonso y Chanel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">

    <style>
        @yield('css');
    </style>
</head>

<body>


    <nav class="navbar w-full is-fixed-top " role="navigation" aria-label="main navigation">
        <div class="navbar-brand w-full ">
            <nav class="navbar w-full" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="" href="{{ route('dashboard') }}">
                        <img src="/content/vector00.png" class="w-[60px] object-cover">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                        data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item font-bold {{ request()->is('invitaciones') ? 'is-active' : '' }}"
                            href="{{ route('invitaciones') }}">
                            Invitados
                        </a>

                        <a class="navbar-item font-bold {{ request()->is('agregarinvitacion') ? 'is-active' : '' }} "
                            href="{{ route('agregarinvitacion') }}">
                            Agregar Invitaciones
                        </a>

                        {{--  <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                Mas
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    About
                                </a>
                                <a class="navbar-item is-selected">
                                    Jobs
                                </a>
                                <a class="navbar-item">
                                    Contact
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    Report an issue
                                </a>
                            </div>
                        </div> --}}
                    </div>


                    <div class="navbar-end w-full flex justify-end">
                        <div class="navbar-item">
                            <div class="buttons">
    
                                <a class="button is-light" href="/logout">
                                    Salir
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


               
            </nav>



        </div>
    </nav>
    <div class="w-full mt-20">
        @yield('app')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script')

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });

        });
        (document).ready(function() {

            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");

            });
        });
    </script>
</body>

</html>
