<?php

use App\Http\Controllers\Invitacion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/weolcome', function () {
    return view('admin.index');
});

Route::get('/invitados/{invitado}', [Invitacion::class, 'invitadoEspecial'])->name('welcome');
Route::get('/welcome', [Invitacion::class, 'viewwelcome'])->name('welcome');
Route::get('/invitaciones', [Invitacion::class, 'invitaciones'])->name('invitaciones');
Route::get('/agregarinvitacion', [Invitacion::class, 'agregarinvitacion'])->name('agregarinvitacion');
Route::post('/agregarinvitacion', [Invitacion::class, 'agregarinvitacionpost'])->name('agregarinvitacionpost');
