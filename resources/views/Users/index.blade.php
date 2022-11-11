@extends('layouts.app')

@section('contenido')
<body>
    <h1>usuarios del sistema</h1>
    @foreach ($users as $user)
    <li>
        {{ $user->name}}
        <a href="{{url('/users', $user->id)}}">
            editar
        </a>
    </li>
    @endforeach
</body>

@endsection('contenido')
