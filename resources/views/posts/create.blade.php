@extends('layouts.app')

@section('titulo')
Crea una nueva publicación
@endsection

@push('styles')
<!-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> -->
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
        <form action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
            @csrf
        </form>
    </div>
    <div class="md:w-1/2 p-10 w-4/12 bg-white rounded-lg shadow-xl md:mt-0 mt-10 mr-5">
        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold" >
                    titulo
                </label>
                <input  
                    id="titulo"
                    name="titulo"
                    class="border p-3 w-full rounded-lg 
                        @error('titulo')
                            border-red-500
                        @enderror"
                    placeholder="descripcon de la publicacion"
                    type="text">
                @error('titulo')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold" >
                    Descripcion
                </label>
                <textarea  
                    id="descripcion"
                    name="descripcion"
                    class="border p-3 w-full rounded-lg 
                        @error('descripcion')
                            border-red-500
                        @enderror"
                    placeholder="descripcion de la publicacion">
                    {{old('descripcion')}}
                </textarea> 
                @error('descripcion')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-5">
                <input type="hidden" name="imagen" value="{{old('imagen')}}">
                @error('imagen')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                @enderror
            </div>

            <input 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                value="crear publicacion"
                type="submit">
        </form>
    </div>
</div>
@endsection