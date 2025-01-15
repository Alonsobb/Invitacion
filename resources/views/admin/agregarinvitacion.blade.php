@extends('layout.index')

@section('app')
    
<form action="{{route('agregarinvitacionpost')}}" method="post">
@csrf
    <br><label for="nombre">Nombre</label>
    <input type="text" class="nombre" label="nombre">
    <br><label for="telefono">Telefono</label>
    <input type="text" class="telefono" >
    <br><label for="adultos">Adultos</label>
    <input type="text" class="adultos">
    <br><label for="ninos">Niños</label>
    <input type="text" class="ninos">
    <br><label for="comentario">Comentario</label>
    <input type="textarea" class="comentario">
    <input type="submit" value="acceptar">
</form>



@endsection