@extends('layouts.app')

@section('titulo')
Registrate en Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/registrar.jpg')}}" alt="imagen registro de usuarios">
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl" >
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold" >
                    Nombre
                </label>
                <input  
                    id="name"
                    name="name"
                    class="border p-3 w-full rounded-lg 
                        @error('name')
                            border-red-500
                        @enderror"
                    value="{{old('name')}}"
                    placeholder="Tu nombre de usuario"
                    type="text">
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                @enderror
            </div>

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
                    value="{{old('username')}}"
                    placeholder="Tu nombre de usuario"
                    type="text">
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold" >
                    Email
                </label>
                <input 
                    id="email"
                    name="email"
                    class="border p-3 w-full rounded-lg 
                        @error('email')
                            border-red-500
                        @enderror"
                    value="{{old('email')}}"
                    placeholder="Tu Email de registro"
                    type="email">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" >
                    Password
                </label>
                <input 
                    id="password"
                    name="password"
                    class="border p-3 w-full rounded-lg 
                        @error('password')
                            border-red-500
                        @enderror"
                    placeholder="Password de registro"
                    type="password">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold" >
                    Repetir Password
                </label>
                <input 
                    id="password_confirmation"
                    name="password_confirmation"
                    class="border p-3 w-full rounded-lg"
                    placeholder="Repite tu password"
                    type="password">
            </div>
       
            <input 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold 
                w-full p-3 text-white rounded-lg"
                type="submit">
           
        </form>
    </div>
</div>
@endsection