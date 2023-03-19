@extends('layouts.app')

@section('titulo')
Iniciar sesión en Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/login.jpg')}}" alt="login de usuarios">
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl" >
        <form action="{{route('login')}}" method="POST" novalidate>
            @csrf
            @if (session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{session('mensaje')}}</p>
            @endif
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
                <input type="checkbox" name="remember">
                <label class="text-gray-500 text-sm" for="remember">Recordar Sesión</label>
            </div>
       
            <input 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold 
                w-full p-3 text-white rounded-lg"
                type="submit"
                value="Iniciar sesión">
           
        </form>
    </div>
</div>
@endsection