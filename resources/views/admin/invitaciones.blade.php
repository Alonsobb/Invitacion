@extends('layout.index')


@section('app')
    <div class=" w-full flex justify-center ">
        <div class="w-3/4 mt-4">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth ">
                <thead>
                    <tr>
                        <th><abbr title="Position">ID</abbr></th>
                        <th><abbr title="Invitado">Invitado</abbr></th>
                        <th><abbr title="Nombre">Nombre</abbr></th>
                        <th><abbr title="Adultos">Adultos</abbr></th>
                        <th><abbr title="Niños">Niños</abbr></th>
                        <th><abbr title="Niños">Telefono</abbr></th>
                        <th><abbr title="Opccion">Opccion</abbr></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th><abbr title="Position">ID</abbr></th>
                        <th><abbr title="Invitado">Invitado</abbr></th>
                        <th><abbr title="Nombre">Nombre</abbr></th>
                        <th><abbr title="Adultos">Adultos</abbr></th>
                        <th><abbr title="Niños">Niños</abbr></th>
                        <th><abbr title="Niños">Telefono</abbr></th>
                        <th><abbr title="Opccion">Opccion</abbr></th>
                    </tr>
                </tfoot>
                @foreach ($invitados as $invitado)
                    <tbody>
                        <tr>
                            <th>{{ $invitado->id }}</th>
                            <th>{{ $invitado->novios }}</th>
                            <th>{{ $invitado->nombre }}</th>
                            <th>{{ isset($invitado->adultos) ? $invitado->adultos : '0' }}</th>
                            <th>{{ isset($invitado->ninos) ? $invitado->ninos : '0' }}</th>
                            <th>{{ $invitado->telefono }}</th>
                            <th>
                               <button class="button is-info" onclick="copy('{{route('invitado',$invitado->telefono)}}')">Copiar</button>
                               <a class="button is-info" href="{{route('editinvitacion',$invitado->telefono) }}">Editar</a>
                               <a class="button is-danger" href="{{route('eliminarinvitacion',$invitado->id) }}">Eliminar</a>
                              </th>

                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
  
@endsection

@section('script')
    <script>
        function copy(texto) {
            navigator.clipboard.writeText(texto)
        }
    </script>

@if( session()->has('success') )
<script>
    Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Se Elimino correctamente",
  showConfirmButton: false,
  timer: 1500
});
</script>
@endif
@if( session()->has('fail') )
<script>
    Swal.fire({
  position: "top-end",
  icon: "error",
  title: "Error al eliminar",
  showConfirmButton: false,
  timer: 1500
});
</script>
@endif

@endsection
