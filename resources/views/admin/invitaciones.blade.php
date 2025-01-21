@extends('layout.index')

@section('css')
.colordetabla, thead, tr, th {
    border: 2px solid white;
    border-color: #000000
   
}
@endsection
@section('app')
    <div class=" w-full flex justify-center ">
        <div class="w-3/4 mt-4">
            <form action="{{ route('invitaciones') }}">
                <label class="label">Invitado</label>
                <input class="input" type="text" placeholder="Nombre" name="nombre" />
                <label class="label">Telefono</label>
                <input class="input" type="text" placeholder="Telefono" name="telefono" />
                <div class="select is-link">
                    <select name="novios">
                      <option value="">Selecciona uno</option>
                      <option value="chanell">Chanell</option>
                      <option value="alonso">Alonso</option>
                    </select>
                  </div>
                <button type="submit" class="button is-success ">Buscar</button>
                <a href="{{ route('invitaciones') }}" class="button is-warning">Reset</a>
            </form>
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth colordetabla ">
                <thead >
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
                @php 
$numero=1;
                @endphp
                @foreach ($invitados as $invitado)
                    <tbody>
                        <tr>
                            <th>{{ $numero++ }}</th>
                            <th>{{ $invitado->novios }}</th>
                            <th>{{ $invitado->nombre }}</th>
                            <th>{{ isset($invitado->adultos) ? $invitado->adultos : '0' }}</th>
                            <th>{{ isset($invitado->ninos) ? $invitado->ninos : '0' }}</th>
                            <th>{{ $invitado->telefono }}</th>
                            <th>
                                <button class="button is-info"
                                    onclick="copy('{{ route('invitado', $invitado->telefono) }}')">Copiar</button>
                                <a class="button is-info"
                                    href="{{ route('editinvitacion', $invitado->id) }}">Editar</a>
                                <a class="button is-danger"
                                    href="{{ route('eliminarinvitacion', $invitado->id) }}">Eliminar</a>
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

    @if (session()->has('success'))
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
    @if (session()->has('fail'))
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
