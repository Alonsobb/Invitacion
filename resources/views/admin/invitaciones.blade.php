@extends('layout.index')


@section('app')
<table class="table">
  <thead>
    <tr>
      <th><abbr title="Position">ID</abbr></th>
      <th>Novios</th>
      <th><abbr title="Nombre">Nombre</abbr></th>
      <th><abbr title="Adultos">Adultos</abbr></th>
      <th><abbr title="Niños">Niños</abbr></th>
   
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th><abbr title="Position">ID</abbr></th>
      <th>Novios</th>
      <th><abbr title="Nombre">Nombre</abbr></th>
      <th><abbr title="Adultos">Adultos</abbr></th>
      <th><abbr title="Niños">Niños</abbr></th>
   
    </tr>
  </tfoot>
@foreach ($invitados as $invitado )
  
<tbody>
  <tr>
    <th>{{$invitado->id}}</th>
    <th>{{$invitado->nombre}}</th>
    <th>{{$invitado->adultos}}</th>
    <th>{{$invitado->ninos}}</th>
    
  </tr>
</tbody>
@endforeach
</table>

@endsection