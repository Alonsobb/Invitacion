<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alonso y Chanell</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- TODO: S -->
    <section class="containers md:h-svh py-24">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col items-center">
                {{-- <h2 class="cursiva mt-24">Nuestra Boda</h2> --}}
                <div class="flex">
                    @if(isset($invitado))
                    <img src="/content/vector0.png" alt="vector0" class="w-[650px]">
                    @else
                    <img src="/content/vector00.png" alt="vector0" class="w-[650px]">
                    @endif
                </div>
                <h2 class="mb-4">Chanell y Alonso</h2>
                @if(isset($invitado))
                <h4>08 • Marzo • 25</h4>
                @endif
            </div>
        </div>
        <img class="absolute top-0 left-0 md:w-[600px] w-[350px] rotate-[65deg] opacity-35 pointer-events-none" src="/content/vector1.png">
    </section>

    <section class="bg-amber-900/20 py-24">
        @if(isset($invitado))
        <div class="flex flex-col justify-center items-center">
            <span class="text-2xl text-slate-500 mb-4">Invicación reservada para</span>
            <h2 class="mb-4">Isabel y Mauricio</h2>
            <img src="/content/linea1.png" alt="linea" class="mb-2">
            <h class="text-2xl">2 personas</h>
            <h4 class="text-2xl">2 niños</h4>
            {!!QrCode::size(300)->generate('codigokonami') !!}
        </div>
        @else
        <div class="flex flex-col justify-center items-center">
            <h2 class="mb-4">Ingresa tu numero de telefono para ingresa</h2>
            <img src="/content/linea1.png" alt="linea" class="mb-2">
            <form class="bg-slate-50 md:w-[500px] w-11/12 px-4 py-3 items-center text-center rounded-md">
                <p class="mb-2">Número de Telefono</p>
                <div class="input-group mb-4">
                    <input type="tel" class="text-center" placeholder="322-333-33-22">
                </div>
                <div class="flex justify-center">
                    <button class="btn-primary">Enviar</butt>
                </div>
            </form>
        </div>
        @endif
    </section>

    <!-- TODO: -->
    <section class="containers  py-24">
        <div class="wrapper">
            <div class="grid md:grid-cols-3 items-center justify-items-center gap-4">
                <div class="md:col-span-2">
                    <h2>Con la bendición de nuestros padres</h2>
                    <div class="grid grid-cols-2 gap-4 justify-center items-center mt-8">
                        <div class="">
                            <h4 class="cursiva">Novia</h4>
                            <div class="">
                                <p>Ma. Lourdes Zolorzano Lopez</p>
                                <p>Ezequiel Gonzalez Soriano</p>
                            </div>
                        </div>
                        <div class="">
                            <h4 class="cursiva">Novio</h4>
                            <div class="">
                                <p>Yanett Bernal Gomez</p>
                                <p>Tapia Alonso Bravo Tapia</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-8">
                        <h2 class="my-4">Acompañados de nuestros padrinos</h2>
                        <div class="">
                            <p>Benita Rodrigez</p>
                            <p>Javier Bernal</p>
                        </div>
                    </div>
                </div>

                <div class="w-[300px] h-[500px]">
                    <img src="/content/img/img001.jpeg" alt="Vector"
                        class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- TODO: -->

    <section class="bg-amber-900/20 py-24">
        <div class="flex flex-col justify-center items-center text-center px-4">
            <span class="text-3xl text-slate-500 mb-4">“Amor es solo una palabra, hasta que alguien llega para darle sentido”</span>
            <h2 class="mb-4">Fecha de la boda</h2>
        </div>
    </section>

    <!-- TODO: -->

    <section class="containers py-24">
        <div class="wrapper">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="w-full">
                                <img src="/content/img/img00.jpeg" alt="Vector"
                                    class="w-full h-[600px] object-cover rounded-md" />
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="w-full">
                                <img src="/content/img/img001.jpeg" alt="Vector"
                                    class="w-full h-[600px] object-cover rounded-md" />
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="w-full">
                                <img src="/content/img/img002.jpeg" alt="Vector"
                                    class="w-full h-[600px] object-cover rounded-md" />
                            </div>
                        </li>

                    </ul>
                </div>
            </section>
        </div>
    </section>

    <section class="containers bg-amber-900/20 py-24">
        <div class="wrapper">
            <div class="flex max-md:flex-col max-md:items-center justify-center gap-8">

                <div class="flex flex-col w-[300px] max-md:mb-12">
                    <h2 class="cursiva mb-8">Ceremonia</h2>
                    @if(isset($invitado))
                    <span class="mb-8 text-2xl">16:00hrs</span>
                    @endif
                    <h4 class="mb-8 text-2xl">Templo De San Marcos</h4>
                    <span class="mb-8">Luis Echevarria 55, 63729 Lo de Marcos, Nay.</span>
                    <div class="flex justify-center">
                        <a href="https://maps.app.goo.gl/8WyagFNbWwNpgk6n9" class="btn-primary">Ver mapa</a>
                    </div>
                </div>

                <div class="flex flex-col w-[300px]">
                    <h2 class="cursiva mb-8">Recepción</h2>
                    @if(isset($invitado))
                    <span class="mb-8 text-2xl">18:00hrs</span>
                    @endif
                    <h4 class="mb-8 text-2xl">Rancho Los Reyes</h4>
                    <span class="mb-8">direccion.</span>
                    <div class="flex justify-center">
                        <a href="https://maps.app.goo.gl/HwnuetyomFsbqhVj8" class="btn-primary">Ver mapa</a>
                    </div>

                </div>
            </div>
        </div>
        <img class="absolute top-0 right-0 w-[600px] opacity-35 pointer-events-none" src="/content/vector2.png">
    </section>
    {{--
    <section class="containers bg-amber-900/20 py-24">
        <div class="wrapper">

        <div class="grid md:grid-cols-4 grid-cols-2 gap-4">

                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 flex justify-center items-center bg-amber-50 text-[#D9AE79] rounded-full text-5xl mb-8">
                        <i class="fa-solid fa-church"></i>
                    </div>
                    @if(isset($invitado)) 
                    <span>16:00hrs</span>
                    @endif
                    <h2>CEREMONIA</h2>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 flex justify-center items-center bg-amber-50 text-[#D9AE79] rounded-full text-5xl mb-8">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    @if(isset($invitado)) 
                    <span>18:00hrs</span>
                    @endif
                    <h2>RECEPCIÓN</h2>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 flex justify-center items-center bg-amber-50 text-[#D9AE79] rounded-full text-5xl mb-8">
                        <i class="fa-solid fa-champagne-glasses"></i>
                    </div>
                    @if(isset($invitado)) 
                    <span>18:30hrs</span>
                    @endif
                    <h2>CENA</h2>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 flex justify-center items-center bg-amber-50 rounded-full text-5xl mb-8">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="53 52 320 320" viewBox="53 52 320 320" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path fill="#fffbeb" clip-rule="evenodd" fill-rule="evenodd" d="M373 212c0 88.366-71.634 160-160 160S53 300.366 53 212 124.634 52 213 52s160 71.634 160 160z" data-color="1"></path>
                                <path d="M237.6 257.7c-5.2 2.3-10.4 4.5-15.6 6.8-18.8 8.5-37.5 17-56.3 25.4-15.2 6.8-30.4 13.6-45.6 20.3-2.3 1-4.9 2.2-7.2 2.1-7.4-.4-12.2-8.9-9.2-15.7 6.8-15.2 13.7-30.3 20.5-45.5 10.4-23.2 20.8-46.5 31.2-69.7 1-2.2 2-4.3 3-6.4-2.5 6.4-1 12.5 1.3 18.5 4.6 12 12.2 22 20.7 31.4 9.8 10.7 20.7 20.3 33.7 27.1 7.3 3.9 14.9 7.2 23.5 5.7z" fill="#D9AE79" data-color="2"></path>
                                <path d="M240.6 254.7c-8.7 1.5-16.2-1.8-23.5-5.7-13-6.8-23.9-16.4-33.7-27.1-8.5-9.3-16.1-19.4-20.7-31.4-2.3-6-3.8-12.1-1.3-18.5 3.2-4.2 7.8-5.1 12.4-4 5.3 1.2 10.8 2.7 15.5 5.4 23.6 12.9 41.8 31.3 53.9 55.4 2 3.9 3.1 8.3 3.9 12.7 1.4 6.4-.9 10.6-6.5 13.2z" fill="#D9AE79" data-color="2"></path>
                                <path d="M249.1 185.5h-1.7c-2.6-.2-3.9-1.4-3.9-3.5 0-2.4 1.5-3.3 3.6-3.5 3.7-.3 7.4-.4 11-1.1 12.2-2.3 20.1-9.8 24.6-21.1 2.9-7.3 5.3-14.7 8.2-22 1.5-3.7 3.3-7.4 5.6-10.6 5.3-7.4 12.8-10.5 21.8-10.4 2 0 3.6.7 3.8 3 .2 2.3-1.1 3.3-3.1 3.8-1.3.3-2.6.4-3.9.6-5.6.6-10.3 2.9-13.2 7.7-2.6 4.3-4.5 9.1-6.5 13.8-3.1 7.3-5.5 14.9-9 21.9-6.3 13-17.5 19.2-31.5 20.9-1.8.2-3.8.4-5.8.5z" fill="#D9AE79" data-color="2"></path>
                                <path d="M216.7 138.7c-.4 5.7-1.4 9.7-4 12.8-3.5 4.2-7.4 8.2-11.3 12-1.9 1.8-3.9 1.7-5.2.1-1.5-1.6-1.3-3.4.7-5.4 2.8-2.8 5.8-5.4 8.3-8.4 4.9-5.8 5.5-12.2 1.7-18.8-2.3-4-4.8-7.9-7.2-11.8-4.1-6.5-7.4-13.2-7.9-21-.1-1-.1-2 .1-2.9.4-1.8 1.7-2.6 3.4-2.6s2.8 1 3.1 2.6c.3 1.7.4 3.4.7 5.1 1 5.4 3.4 10.1 6.2 14.7 2.9 4.7 6 9.3 8.4 14.2 1.8 3.3 2.4 7.2 3 9.4z" fill="#D9AE79" data-color="2"></path>
                                <path d="M317.3 226.6c-7.7-.3-14.4-3.3-20.8-7.1-4.7-2.8-9.2-5.8-13.8-8.6-9.1-5.5-15.9-4.8-23.9 2.2-1.1 1-2.2 2-3.5 2.7-1.5.9-3 .6-4.2-.8-1.2-1.4-1.1-2.9.1-4.2 5.6-6.1 12.3-10.1 20.9-10.4 4.8-.2 8.9 1.5 12.9 3.8 5.3 3.1 10.5 6.5 15.8 9.7 5.5 3.4 11.3 5.8 17.8 6 2.6.1 3.8 1.5 3.7 3.7-.2 2.1-1.7 3-5 3z" fill="#D9AE79" data-color="2"></path>
                                <path d="M250.6 102.6c2 2 4.1 3.9 6.1 5.9 3.5 3.5 3.5 3.5 7.8 1.2 2.5-1.3 5.1-2.5 7.7-3.8.2.1.4.3.6.4-.4 1.2-.6 2.5-1.1 3.6-.4 1-1 1.9-1.5 2.8-3.4 5.4-3.2 6.4 1.6 10.5 1.8 1.6 3.4 3.4 5.2 5.1-.1.2-.1.4-.2.7-.9 0-1.8.1-2.7 0-2.4-.3-4.9-.7-7.3-1.2-3.4-.6-4.2-.3-5.7 2.7-1.6 3.1-3.2 6.3-4.8 9.4h-.7c-.5-3.2-1.2-6.3-1.5-9.5-.5-4.1-1.1-4.8-5.3-5.4-3-.4-6-1-9.3-2.1 1.7-1 3.3-2.2 5.1-3 9-4 7.1-4.4 5.9-11.7-.3-1.7-.3-3.5-.5-5.3.1 0 .4-.2.6-.3z" fill="#D9AE79" data-color="2"></path>
                                <path d="M226 113.2c-3.6-.1-6.8-3.3-6.7-6.9 0-3.6 3.2-6.8 6.8-6.8 3.6 0 7 3.4 6.9 7-.1 3.6-3.4 6.8-7 6.7z" fill="#D9AE79" data-color="2"></path>
                                <path d="M308.4 182.1c0 3.9-2.9 6.7-6.7 6.7-3.9 0-6.8-3-6.8-6.9 0-3.8 3-6.7 6.7-6.7 4-.1 6.9 2.9 6.8 6.9z" fill="#D9AE79" data-color="2"></path>
                                <path d="M305.3 264.4c-3.7.1-7-3.1-7-6.8 0-3.7 3-6.8 6.6-6.9 3.7-.1 7 3 7 6.8.2 3.5-3.1 6.9-6.6 6.9z" fill="#D9AE79" data-color="2"></path>
                                <path d="M181.4 147.5c-3.8 0-6.7-3-6.6-6.8 0-3.9 3-6.8 7-6.7 3.8.1 6.5 3 6.5 6.9-.2 3.9-3 6.6-6.9 6.6z" fill="#D9AE79" data-color="2"></path>
                            </g>
                        </svg>
                    </div>
                    @if(isset($invitado)) 
                    <span>19:00hrs</span>
                    @endif
                    <h2>FIESTA</h2>
                </div>

            </div> 

        </div>
    </section>
--}}
    <section class="containers h-svh py-24">
        <div class="wrapper items-center">
            <div class="border-2 md:w-[600px] md:p-24 p-12 rounded-lg">
                <i class="fa-solid fa-envelope text-5xl text-amber-900/30 mb-12"></i>
                <h2 class="mb-4">SUGERENCIA DE REGALO</h2>
                <h4 class="cursiva mb-4">Lluvia de Sobres</h4>
                <p>Nuestro mejor regalo es tu presencia. Sin embargo, si deseas obsequiarnos algo estaremos recibiendo sobres el día del evento. ¡Gracias por formar parte de este día!</p>
            </div>
        </div>
        <img class="absolute top-1/2 right-4 md:w-[600px] w-[350px] -translate-y-1/2 opacity-25 pointer-events-none" src="/content/vector3.png">
    </section>

    <section class="containers bg-amber-900/20 py-24">
        <div class="wrapper">
            <div class="">
                <h2 class="text-2xl mb-4">Código de vestimenta</h2>
                <h4 class="cursiva mb-4">​Formal</h4>
                <div class="flex justify-center">
                    <a href="" class="btn-primary mt-4">Ver ideas</a>
                </div>
            </div>
        </div>
    </section>


    <section class="containers py-24">
        <div class="wrapper items-center">

            <div class="border p-8 md:w-[600px] w-full flex flex-col items-center">
                @if(isset($invitado))
                <h2 class="mb-4">Confirma tu Asistencia</h2>
                @endif
                <img src="/content/linea4.png" alt="linea" class="mb-2">
                @if(isset($invitado))
                <h4 class="mb-4">Esta invitación está reservada para</h4>
                <h2 class="mb-4">Isabel y Mauricio</h2>
                <h4 class="mb-4">2 Personas</h4>
                @endif
                <p class="mb-4">Nuestro mejor regalo es tu presencia. Sin embargo, si deseas obsequiarnos algo estaremos recibiendo sobres el día del evento. ¡Gracias por formar parte de este día!</p>
                @if(isset($invitado))
                <form class="flex max-md:w-full flex-col gap-4 my-2">
                    <div class="w-full flex md:flex-wrap max-md:flex-col gap-4">
                        <div class="input-group">
                            <input type="text" placeholder="Nombre de los asistentes">
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="select-group">
                        <select type="text" placeholder="Nombre de los asistentes">
                            <option value="1">Si, asistiremos</option>
                            <option value="2">Lo siento, no podremos asistir</option>
                        </select>
                    </div>
                    <div class="textarea-group">
                        <textarea type="text" placeholder="Mensajes para los novios"></textarea>
                    </div>
                </form>
                @endif
            </div>

        </div>
    </section>

    <section class="containers bg-amber-900/20 py-24">
        <div class="wrapper">

            <div class="">

                <h2>Comparte con nosotros todas tus fotografías del evento, etiquetando a los novios en tus publicaciones e historias de Instagram.</h2>
                <div class="grid grid-cols-2 gap-4">
                    <h2>@GiovanaChanell</h2>
                    <h2>@AlonsoBravo</h2>
                </div>

            </div>

        </div>
    </section>

</body>

</html>