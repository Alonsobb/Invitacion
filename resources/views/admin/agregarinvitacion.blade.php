@extends('layout.index')
@section('css')
    /* Reset de márgenes y paddings */
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    /* Estilo del body */
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    }

    /* Contenedor del formulario */
    .form-container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    }

    /* Título */
    h2 {
    text-align: center;
    color: #333;
    margin-bottom: 1rem;
    }

    /* Estilo de los grupos de formulario */
    .form-group {
    margin-bottom: 1rem;
    }

    /* Etiquetas de los inputs */
    label {
    display: block;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #333;
    }

    /* Inputs y textarea */
    input, textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    }

    /* Textarea tiene un tamaño de fila mayor */
    textarea {
    resize: vertical;
    }

    /* Botón de enviar */
    button {
    width: 100%;
    padding: 1rem;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 1.1rem;
    cursor: pointer;
    margin-top: 1rem;
    }

    /* Cambio de color al pasar el mouse por encima */
    button:hover {
    background-color: #45a049;
    }

    /* Estilos para pantallas pequeñas */
    @media (max-width: 600px) {
    .form-container {
    padding: 1rem;
    }

    button {
    font-size: 1rem;
    }
    }
@endsection
@section('app')

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <form action="{{ route('agregarinvitacionpost') }}" method="post">
        @csrf
        <br><label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="input" placeholder="Nombre"
            @if ($errors->all()) value="{{ old('nombre') }}" @endif>
        @foreach ($errors->get('nombre') as $error)
            <p class="help is-danger">{{ $error }}</p>
        @endforeach
        <br><label for="telefono">Telefono</label>
        <input type="text" name="telefono" class="input" placeholder="Telefono"  @if ($errors->all()) class="is-danger" value="{{ old('telefono') }}" @endif >
        @foreach ($errors->get('telefono') as $error)
            <p class="help is-danger">{{ $error }}</p>
        @endforeach
        <br><label for="adultos">Adultos</label>
        <input type="text" name="adultos" class="input" placeholder="Adultos"@if ($errors->all()) value="{{ old('adultos') }}" @endif >
        @foreach ($errors->get('adultos') as $error)
            <p class="help is-danger">{{ $error }}</p>
        @endforeach
        <br><label for="ninos">Niños</label>
        <input type="text" name="ninos" class="input" placeholder="Niños" @if ($errors->all()) value="{{ old('ninos') }}" @endif >
        @foreach ($errors->get('ninos') as $error)
            <p class="help is-danger">{{ $error }}</p>
        @endforeach
        <br><label for="comentario">Comentario</label>
        <input type="textarea" name="comentario" class="input" placeholder="Comentario" @if ($errors->all()) value="{{ old('comentario') }}" @endif >
        <input type="submit" class="button is-success" value="acceptar">
    </form>
@endsection
