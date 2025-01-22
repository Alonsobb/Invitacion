@extends('layout.index')

@section('app')
{{-- @dd($imagen[2][0]->path) --}}
@if ($errors->all()) {{ $errors }} @endif
    <div class="grid mx-11">
        {{-- imagen logo sin fecha --}}
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img class="object-contain"
                        src="{{ isset($imagen[0][0]->path) ? url('/storage/' . $imagen[0][0]->path) : '/content/vector0.png' }}"
                        alt="Placeholder image" />
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Logo sin fecha</p>
                    </div>
                </div>

                <div class="content">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="principal" value="0">
                        <div class="file is-success has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="file" />
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label"> Info file… </span>
                                </span>
                                <span class="file-name"> Seleccione un archivo </span>
                            </label>
                        </div>
                        <button class="button is-success" type="submit">Upload</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- imagen logo con fecha --}}
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img class="object-contain"
                        src="{{ isset($imagen[1][0]->path) ? url('/storage/' . $imagen[1][0]->path) : '/content/vector00.png' }}"
                        alt="Placeholder image" />
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Logo con fecha</p>
                    </div>
                </div>

                <div class="content">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="principal" value="1">

                        <div class="file is-success has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="file" />
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label"> Info file… </span>
                                </span>
                                <span class="file-name"> Seleccione un archivo </span>
                            </label>
                        </div>
                        <button class="button is-success" type="submit">Upload</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- imagen principal --}}
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img class="object-contain"
                        src="{{ isset($imagen[2][0]->path) ? url('/storage/' . $imagen[2][0]->path) : '/content/img/img001.jpeg' }}"
                        alt="Placeholder image" />
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Imagen principal</p>
                    </div>
                </div>

                <div class="content">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="principal" value="2">

                        <div class="file is-success has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="file" />
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label"> Info file… </span>
                                </span>
                                <span class="file-name"> Seleccione un archivo </span>
                            </label>
                        </div>
                        <button class="button is-success" type="submit">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h1 class="title is-1 text-center">Galeria</h1>
    {{-- subir imagenes a la galeria --}}
    <div class="flex justify-center mb-5">
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="principal" value="3">
            @csrf
            <div id="file-js-example" class=" file is-centered flex-col is-boxed is-success has-name">
                <label class="file-label">
                    <input class="file-input" type="file" name="file" />
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label"> Archivo </span>
                    </span>
                    <span class="file-name"> Seleccione un archivo </span>
                </label>
                <button class="button is-success m-4" type="submit">Subir</button>
            </div>
        </form>
    </div>
    {{-- galeria --}}
    <div class=" mx-6 !grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 ">
        @foreach ($galeria as $imagen)
            <div class="card">
                <div class="relative card-image">
                    <figure class="image is-4by3">
                        <div class="absolute right-0 top-0">
                            <form action="{{ route('eliminarimagen') }}" method="post">
                                @csrf
                                <input type="hidden" name="idImg" value="{{ $imagen->id }}">
                                <button class="delete is-large z-[1]"></button>
                            </form>
                        </div>
                        <img class="object-contain" src="{{ url('/storage/' . $imagen->path) }}"
                            alt="Placeholder image" />
                    </figure>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('script')
    <script>
        const fileInput = document.querySelector("#file-js-example input[type=file]");
        fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
                const fileName = document.querySelector("#file-js-example .file-name");
                fileName.textContent = fileInput.files[0].name;
            }
        };
    </script>
@endsection
