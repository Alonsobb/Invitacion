<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- TODO: S -->
    <section class="relative w-full h-svh">
        <div class="absolute top-0 left-0 w-full h-full bg-black/20">
            <img
                src="/content/img1.jpg"
                alt="bg-hero"
                class="relative w-full h-full object-cover z-[-1]" />
        </div>
        <div class=""></div>
    </section>

    <section class="bg-amber-50 py-24">
        <div class="flex flex-col justify-center items-center">
            <span class="text-lg text-slate-400 mb-4">Invicación reservada para</span>
            <h2 class="mb-4">Isabel y Mauricio</h2>
            <h4>2 personas</h4>
        </div>
    </section>

    <!-- TODO: -->
    <section class="container py-24">
        <div class="wrapper">
            <div class="grid grid-cols-3 items-center justify-items-center gap-4">
                <div class="col-span-2">
                    <h2>Con la bendición de nuestros padres</h2>
                    <div class="grid grid-cols-2 gap-4 justify-center items-center mt-8">
                        <div class="">
                            <h4>Novia</h4>
                            <div class="">
                                <p>Nombre del padre</p>
                                <p>Nombre del madre</p>
                            </div>
                        </div>
                        <div class="">
                            <h4>Novio</h4>
                            <div class="">
                                <p>Nombre del padre</p>
                                <p>Nombre del madre</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-8">
                        <h2 class="my-4">Acompañados de nuestros padrinos</h2>
                        <div class="">
                            <p>Katya Ramírez García</p>
                            <p>Eduardo Gómez Galván</p>
                        </div>
                    </div>
                </div>

                <div class="w-[300px] h-[500px]">
                    <img src="https://static.wixstatic.com/media/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.jpg/v1/fill/w_306,h_485,fp_0.3_0.39,q_80/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.webp" alt="Vector"
                        class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- TODO: -->

    <section class="bg-amber-50 py-24">
        <div class="flex flex-col justify-center items-center">
            <span class="text-lg text-slate-400 mb-4">“Amor es solo una palabra, hasta que alguien llega para darle sentido”</span>
            <h2 class="mb-4">Fecha de la boda</h2>
        </div>
    </section>

    <!-- TODO: -->

    <section class="container py-24">
        <div class="wrapper">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="h-[500px]">
                                <img src="https://static.wixstatic.com/media/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.jpg/v1/fill/w_306,h_485,fp_0.3_0.39,q_80/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.webp" alt="Vector"
                                    class="w-full h-full" />
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="h-[500px]">
                                <img src="https://static.wixstatic.com/media/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.jpg/v1/fill/w_306,h_485,fp_0.3_0.39,q_80/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.webp" alt="Vector"
                                    class="w-full h-full" />
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="h-[500px]">
                                <img src="https://static.wixstatic.com/media/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.jpg/v1/fill/w_306,h_485,fp_0.3_0.39,q_80/f31768_d1bf5fc30903479db90ec9ef4f5a2bf8~mv2.webp" alt="Vector"
                                    class="w-full h-full" />
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>

    <section class="container py-24">
        <div class="wrapper">
            <div class="grid grid-cols-2 gap-4">

                <div class="flex flex-col">
                    <h2>Ceremonia</h2>
                    <span>18:30hrs</span>
                    <h4>Iglesia San Josemaría Escrivá de Balaguer</h4>
                    <span>José María Escrivá 550, Colinas de San Javier, 44660 Guadalajara, Jal.</span>
                    <div class="flex justify-center">
                        <a href="" class="btn-primary">Ver mapa</a>
                    </div>
                </div>

                <div class="flex flex-col">
                    <h2>Ceremonia</h2>
                    <span>18:30hrs</span>
                    <h4>Iglesia San Josemaría Escrivá de Balaguer</h4>
                    <span>José María Escrivá 550, Colinas de San Javier, 44660 Guadalajara, Jal.</span>
                    <div class="flex justify-center">
                        <a href="" class="btn-primary">Ver mapa</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container bg-amber-50 py-24">
        <div class="wrapper">

            <div class="grid grid-cols-4 gap-4">

                <div class="">
                    <span>18:30hrs</span>
                    <h2>CEREMONIA</h2>
                </div>
                <div class="">
                    <span>20:00hrs</span>
                    <h2>RECEPCIÓN</h2>
                </div>
                <div class="">
                    <span>21:30hrs</span>
                    <h2>CENA</h2>
                </div>
                <div class="">
                    <span>22:30hrs</span>
                    <h2>FIESTA</h2>
                </div>

            </div>

        </div>
    </section>

    <section class="container py-24">
        <div class="wrapper">

            <div class="border p-8">

                <i></i>
                <h2>SUGERENCIA DE REGALO</h2>
                <h4>Lluvia de Sobres</h4>
                <p>Nuestro mejor regalo es tu presencia. Sin embargo, si deseas obsequiarnos algo estaremos recibiendo sobres el día del evento. ¡Gracias por formar parte de este día!</p>

            </div>

        </div>
    </section>

    <section class="container bg-amber-50 py-24">
        <div class="wrapper">

            <div class="">

                <h2>Código de vestimenta</h2>
                <h4>​Formal</h4>
                <div class="flex justify-center">
                    <a href="" class="btn-primary">Ver ideas</a>
                </div>

            </div>

        </div>
    </section>

    <section class="container py-24">
        <div class="wrapper">

            <div class="border p-8">

                <i></i>
                <h2>Confirma tu Asistencia</h2>
                <h4>Esta invitación está reservada para</h4>
                <h2>Isabel y Mauricio</h2>
                <h4>2 Personas</h4>
                <p>Nuestro mejor regalo es tu presencia. Sin embargo, si deseas obsequiarnos algo estaremos recibiendo sobres el día del evento. ¡Gracias por formar parte de este día!</p>

                <form class="flex flex-col gap-4">
                    <div class="w-full flex flex-wrap gap-4">
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

            </div>

        </div>
    </section>

    <section class="container bg-amber-50 py-24">
        <div class="wrapper">

            <div class="">

                <h2>Comparte con nosotros todas tus fotografías del evento, etiquetando a los novios en tus publicaciones e historias de Instagram.</h2>
                <div class="grid grid-cols-2 gap-4">
                    <h2>@SandraTorres</h2>
                    <h2>@DanielRamirez</h2>
                </div>

            </div>

        </div>
    </section>

</body>

</html>