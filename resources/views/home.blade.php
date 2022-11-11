@extends('layouts.app')

@section('head')

@endsection

@section('contenido')
    <h1>
        hola {{Auth::user()->name}}
    </h1>

    <a href="{{ url(users') }}">
    ir a usuarios
    </a>

    <form action="post" action="{{ url('logout') }}">
        @csrf
        <button type="submit">
            salir
        </button>
    </form>
@endsection