<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chanell y Alonso</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    
</head>


<body>
    {{--  @dd($imagen) --}}
    <section class="containers py-24">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col items-center">
                <div class="flex">
                    @if (isset($invitado))
                        <img src="{{ isset($imagen[1][0]->path) ? url('storage/' . $imagen[1][0]->path) : '/content/vector0.png' }}"
                            alt="vector0" class="md:w-[650px] w-full">
                    @else
                        <img src="{{ isset($imagen[0][0]->path) ? url('storage/' . $imagen[0][0]->path) : '/content/vector00.png' }}"
                            alt="vector0" class="md:w-[650px] w-full">
                    @endif
                </div>
                <h2 class="mb-4">Chanell y Alonso</h2>
               {{--  @if (isset($invitado))
                    <h4>08 • Marzo • 25</h4>
                @endif --}}
            </div>
        </div>
        <img class="absolute top-0 left-0 md:w-[600px] w-[350px] rotate-[65deg] opacity-35 pointer-events-none"
            src="/content/vector1.png">
    </section>

    <section class="bg-amber-900/20 py-24">
        @if (isset($invitado))
            <div class="flex flex-col justify-center items-center">
                <span class="text-2xl text-slate-500 mb-4">Invitación reservada para</span>
                <h2 class="mb-4">{{ $invitado->nombre }}</h2>
                <img src="/content/linea1.png" alt="linea" class="mb-2">
                @if (isset($invitado->adultos))
                    <h class="text-2xl">{{ $invitado->adultos }} Adultos</h>
                @endif
                @if (isset($invitado->ninos))
                    <h class="text-2xl">{{ $invitado->ninos }} Niños</h>
                @endif
                @if (isset($invitado->adultos))
                    {!! QrCode::size(300)->generate(
                        '[' . $invitado->nombre . ', Adultos:' . $invitado->adultos . ', NiÃ±os;' . $invitado->ninos . ']',
                    ) !!}
                @endif
            </div>
        @else
            <div class="flex flex-col justify-center items-center">
                <h2 class="mb-4">Ingresa tu número de teléfono para ingresar</h2>
                <img src="/content/linea1.png" alt="linea" class="mb-2">
                <form action="{{ route('telefono') }}" method="post"
                    class="bg-slate-50 md:w-[500px] w-11/12 px-4 py-3 items-center text-center rounded-md">
                    @csrf
                    <p class="mb-2">Número de Teléfono</p>
                    <div class="input-group mb-4">
                        <input type="tel" name="telefono" class="text-center" placeholder="322-333-33-22">
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
                                <p>Nicolas Alonso Bravo Tapia</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-8">
                        <h2 class="my-4">Acompañados de nuestros padrinos</h2>
                        <div class="">
                            <p>Benita Rodriguez Sanchez</p>
                            <p>Javier Bernal Gomez</p>
                        </div>
                    </div>
                </div>

                <div class="w-[300px] h-[500px]">
                    <img src="{{ isset($imagen[2][0]->path) ? url('/storage/' . $imagen[2][0]->path) : '/content/img/img001.jpeg' }}"
                        alt="Vector" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- TODO: -->

    <section class="bg-amber-900/20 py-24">
        <div class="flex flex-col justify-center items-center text-center px-4">
            <span class="text-3xl text-slate-500 mb-4">“Amor es solo una palabra, hasta que alguien llega para darle
                sentido”</span>
            {{--      <h2 class="mb-4">Fecha de la boda</h2> --}}
        </div>
    </section>

    <!-- TODO: -->

    <section class="containers py-24">
        <div class="wrapper">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        @if (empty($galeria[0]))

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
                        @else
                            @foreach ($galeria as $imagen)
                                <li class="splide__slide">
                                    <div class="w-full">
                                        <img src="{{ url('/storage/' . $imagen->path) }}" alt="Vector"
                                            class="w-full h-[600px] object-cover object-center rounded-md" />
                                    </div>
                                </li>
                            @endforeach
                        @endif
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
                    @if (isset($invitado))
                        <span class="mb-8 text-2xl">4:00 PM</span>
                        <span class="mb-6 text-2xl">Horario Jalisco</span>
                    @endif
                    <h4 class="mb-8 text-2xl">Templo De San Marcos</h4>
                    <span class="mb-8">Luis Echevarria 55, 63729 Lo de Marcos, Nay.</span>
                    <div class="flex justify-center">
                        <a href="https://maps.app.goo.gl/8WyagFNbWwNpgk6n9" class="btn-primary">Ver mapa</a>
                    </div>
                </div>
                <div class="flex flex-col w-[300px]">
                    <h2 class="cursiva mb-8">Recepción</h2>
                    @if (isset($invitado))
                        <span class="mb-8 text-2xl">6:00 PM</span>
                        <span class="mb-6 text-2xl">Horario Jalisco</span>
                    @endif
                    <h4 class="mb-8 text-2xl">Rancho Los Reyes</h4>
                    <span class="mb-8">México 200 , El Tikilichi, 63732 San Francisco, Nay.</span>
                    <div class="flex justify-center">
                        <a href="https://maps.app.goo.gl/HwnuetyomFsbqhVj8" class="btn-primary">Ver mapa</a>
                    </div>
                </div>
            </div>
        </div>
        <img class="absolute top-0 right-0 w-[600px] opacity-35 pointer-events-none" src="/content/vector2.png">
    </section>

    <section class="containers h-svh py-24">
        <div class="wrapper items-center">
            <div class="border-2 md:w-[600px] md:p-24 p-12 rounded-lg">
                <i class="fa-solid fa-envelope text-5xl text-amber-900/30 mb-12"></i>
                <h2 class="mb-4">SUGERENCIA DE REGALO</h2>
                <h4 class="cursiva mb-4">@if (isset($data->titulo_mesa)) {{$data->titulo_mesa}}@endif</h4>
                <p>@if (isset($data->mensaje)) {{$data->mensaje}}@endif</p>
                    @if (isset($data->mesa))
                    <a href="{{$data->mesa}}" class="btn-mamalon ">Mesa de regalos</a>
                    @endif
            </div>
        </div>
        <img class="absolute top-1/2 right-4 md:w-[600px] w-[350px] -translate-y-1/2 opacity-25 pointer-events-none"
            src="/content/vector3.png">
    </section>

    <section class="containers bg-amber-900/20 py-24">
        <div class="wrapper">
            <div class="">
                <h2 class="text-2xl mb-4">Código de vestimenta</h2>
                <h4 class="cursiva mb-4">​Formal</h4>
                <div class="flex justify-center">
                    <a href="https://pin.it/3eRLVPB0u" class="btn-primary mt-4">Ver ideas</a>
                </div>
            </div>
        </div>
    </section>


    <section class="containers py-24">
        <div class="wrapper items-center">

            <div class="border p-8 md:w-[600px] w-full flex flex-col items-center">
                @if (isset($invitado))
                    <h2 class="mb-4">Confirma tu Asistencia</h2>
                @endif
                <img src="/content/linea4.png" alt="linea" class="mb-2">
                @if (isset($invitado))
                    <h2 class="mb-4">{{ $invitado->nombre }}</h2>
                    @if (isset($invitado->adultos))
                        <h class="text-2xl">{{ $invitado->adultos }} Adultos</h>
                    @endif
                    @if (isset($invitado->ninos))
                        <h4 class="text-2xl">{{ $invitado->ninos }} Niños</h4>
                    @endif
                @endif
                <p class="mb-4">Nuestro mejor regalo es tu presencia.</p>
                <p>¡Gracias por formar parte de este día!</p>
                @if (isset($invitado))
                    <form action="{{ route('asistencia') }}"
                        method="post"class="flex max-md:w-full flex-col gap-4 my-2">
                        @csrf
                        <div class="w-full flex md:flex-wrap max-md:flex-col gap-4">
                            {{--  <div class="input-group">
                                <input type="tel" required name="telefono_personal" placeholder="Telefono" value="@if (isset($invitado->telefono_personal)) {{$invitado->telefono_personal}} @endif">
                            </div> --}}
                        </div>
                        <input type="hidden" name="telefono" value="{{ $invitado->telefono }}">
                        <div class="select-group">
                            <select type="text" name="asistencia" placeholder="Nombre de los asistentes">
                                <option value="1">Si, asistiremos</option>
                                <option value="2">Lo siento, no podremos asistir</option>
                            </select>
                        </div>
                        <div class="textarea-group">
                            <textarea type="text" name="comentario_personal" placeholder="Mensajes para los novios">
@if (isset($invitado->comentario_personal))
{{ $invitado->comentario_personal }}
@endif
</textarea>
                        </div>
                        <div class="flex justify-center">
                            <button class="btn-primary mt-4">Enviar</button>
                        </div>
                    </form>
                @endif
            </div>

        </div>
    </section>

    <section class="containers bg-amber-900/20 py-24">
        <div class="wrapper">

            <div class="">

                <h2>Comparte con nosotros todas tus fotografías del evento, etiquetando a los novios en tus
                    publicaciones e historias de Instagram.</h2>
                <div class="grid grid-cols-2 gap-4">
                    <h2>@GiovanaChanell</h2>
                    <h2>@AlonsoBravo</h2>
                </div>

            </div>

        </div>
    </section>

</body>

</html>
