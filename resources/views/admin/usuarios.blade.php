@extends('layout.index')


@section('app')

<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth colordetabla ">
    <thead >
        <tr>
            <th><abbr title="Position">ID</abbr></th>
            <th><abbr title="Nombre">Nombre</abbr></th>
            <th><abbr title="Invitado">Usuario</abbr></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th><abbr title="Position">ID</abbr></th>
            <th><abbr title="Nombre">Nombre</abbr></th>
            <th><abbr title="Invitado">Usuario</abbr></th>
        </tr>
    </tfoot>
  
    @foreach ( $usuarios as  $usuario)
    <tbody>
        <tr>
            <th>{{ $usuario->id }}</th>
            <th>{{ $usuario->name }}</th>
            <th>{{ $usuario->user }}</th>
           
            
        </tr>
    </tbody>
    @endforeach
</table>

@endsection