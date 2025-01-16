<?php

use App\Http\Controllers\Invitacion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/weolcome', function () {  return view('admin.index');});
Route::get('/invitacion/{invitado}', [Invitacion::class, 'invitadoEspecial'])->name('invitado');
Route::post('/invitacion', [Invitacion::class, 'telefono'])->name('telefono');
Route::get('/dashboard', [Invitacion::class, 'viewwelcome'])->name('dashboard');
Route::get('/invitaciones', [Invitacion::class, 'invitaciones'])->name('invitaciones');
Route::get('/agregarinvitacion', [Invitacion::class, 'agregarinvitacion'])->name('agregarinvitacion');
Route::post('/agregarinvitacion', [Invitacion::class, 'agregarinvitacionpost'])->name('agregarinvitacionpost');
Route::post('/asistencia', [Invitacion::class, 'asistencia'])->name('asistencia');
