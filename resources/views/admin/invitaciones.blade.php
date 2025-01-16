@extends('layout.index')


@section('app')
    <div class=" w-full flex justify-center ">
      <div class="w-3/4 mt-4">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth ">
            <thead>
                <tr>
                    <th><abbr title="Position">ID</abbr></th>
                    {{--     <th>Novios</th> --}}
                    <th><abbr title="Nombre">Nombre</abbr></th>
                    <th><abbr title="Adultos">Adultos</abbr></th>
                    <th><abbr title="Niños">Niños</abbr></th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th><abbr title="Position">ID</abbr></th>
                    {{-- <th>Novios</th> --}}
                    <th><abbr title="Nombre">Nombre</abbr></th>
                    <th><abbr title="Adultos">Adultos</abbr></th>
                    <th><abbr title="Niños">Niños</abbr></th>

                </tr>
            </tfoot>
            @foreach ($invitados as $invitado)
                <tbody>
                    <tr>
                        <th>{{ $invitado->id }}</th>
                        <th>{{ $invitado->nombre }}</th>
                        <th>{{ isset($invitado->adultos) ? $invitado->adultos : '0' }}</th>
                        <th>{{ isset($invitado->ninos) ? $invitado->ninos : '0' }}</th>

                    </tr>
                </tbody>
            @endforeach
        </table></div>
    </div>
@endsection
