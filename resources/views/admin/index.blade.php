@extends('layout.index')

@section('app')
    <div class="flex justify-center flex-col mt-[150px] ">
        <div class="flex flex-wrap gap-6 justify-center">
            <div class="card  bg-fuchsia-500  w-1/3 border h-28 ">
                <div class="card-content w-full ">
                    <p class="title text-center">
                        Chanell lleva
                        @if (isset($Invitados_novia))
                            {{ $Invitados_novia }}
                        @endif
                        Invitados adultos @if ($niños[0] != 0)
                            y
                            {{ $niños[0] }} niños
                        @endif
                    </p>
                </div>
            </div>
            <div class="card bg-indigo-300 w-1/3 h-28">
                <div class="card-content">
                    <p class="title text-center">
                        Alonso lleva
                        @if (isset($Invitados_novio))
                            {{ $Invitados_novio }}
                        @endif
                        Invitados adultos @if ($niños[1] != 0)
                            y
                            {{ $niños[1] }} niños
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center">
            <div class="card bg-green-400 w-1/3 h-28">
                <div class="card-content">
                    <p class="title text-center">
                        El total de invitados son: {{$Invitados_novia+$Invitados_novio+$niños[0]+$niños[1]}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
