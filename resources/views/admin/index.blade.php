@extends('layout.index')

@section('app')
    <div class="flex flex-wrap gap-4 mx-16">
        <div class="card w-[450px]">
            <div class="card-content">
                <p class="title  bg-slate-400">
                   Chanell lleva
                   @if (isset($Invitados_novia))    
                   {{$Invitados_novia}} 
                   @endif
                   Invitados
                </p>
            </div>
        </div>
        <div class="card w-[450px]">
            <div class="card-content">
                <p class="title bg-slate-400">
                    Alonso lleva
                   @if (isset($Invitados_novio))    
                   {{$Invitados_novio}} 
                   @endif
                   Invitados
                </p>
            </div>

        </div>
    </div>
@endsection
