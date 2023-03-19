@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{auth()->user()->username}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center ">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{route('perfil.store')}}" method="POST" enctype="multipart/form-data" class="mt-10 md:mt-0">
                @csrf
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Username
                    </label>
                    <input  
                        id="username"
                        name="username"
                        class="border p-3 w-full rounded-lg 
                            @error('username')
                                border-red-500
                            @enderror"
                        value="{{auth()->user()->username}}"
                        placeholder="Tu nombre de usuario"
                        type="text"
                    />
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Imagen Perfil
                    </label>
                    <input  
                        id="imagen"
                        name="imagen"
                        class="border p-3 w-full rounded-lg" 
                        value=""
                        type="file"
                        accept=".jpg, .png, .jpeg"
                    />
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                    @enderror
                </div>
                <input 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold 
                    w-full p-3 text-white rounded-lg"
                    type="submit"
                    value="Guardar Cambios"
                >
            </form>
        </div>
    </div>
@endsection