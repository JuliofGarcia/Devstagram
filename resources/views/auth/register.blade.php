@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Imagen aqui</p>
        </div>

        <div class="md:w-1/2">
            <form action="">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase font-bold text-gray-500">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu Nombre" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase font-bold text-gray-500">Username</label>
                    <input id="username" name="username" type="text" placeholder="Tu Username" class="border p-3 w-full rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection
