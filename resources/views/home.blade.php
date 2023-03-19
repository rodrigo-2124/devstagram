@extends('layouts.app')

@section('titulo')
    
    pagina principal
    
@endsection

@section('contenido')
    
    <x-listar-post :posts="$posts"/>
  
@endsection