@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
       
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="post">
                @csrf

                <div class="mb-5">
                    <label for="name" class="block text-sm font-semibold text-gray-600 mb-2">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Nombre" class="border p-3 w-full rounded-md focus:outline-none focus:border-sky-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="cedula" class="block text-sm font-semibold text-gray-600 mb-2">Cédula</label>
                    <input type="number" id="cedula" name="cedula" placeholder="Cédula" class="border p-3 w-full rounded-md focus:outline-none focus:border-sky-500 @error('cedula') border-red-500 @enderror" value="{{ old('cedula') }}">
                    @error('cedula')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="telefono" class="block text-sm font-semibold text-gray-600 mb-2">Teléfono</label>
                    <input type="number" id="telefono" name="telefono" placeholder="Teléfono" class="border p-3 w-full rounded-md focus:outline-none focus:border-sky-500 @error('telefono') border-red-500 @enderror" value="{{ old('telefono') }}">
                    @error('telefono')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="direccion" class="block text-sm font-semibold text-gray-600 mb-2">Dirección</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Dirección" class="border p-3 w-full rounded-md focus:outline-none focus:border-sky-500 @error('direccion') border-red-500 @enderror" value="{{ old('direccion') }}">
                    @error('direccion')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
             
                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-semibold w-full py-3 text-white rounded-md">
            </form>
        </div>
    </div>
@endsection


