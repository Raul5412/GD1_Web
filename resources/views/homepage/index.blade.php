@extends('layouts.main')

@section('content')
    <h1>Super Banco</h1>
    @auth
    <p>
        {{ auth()->user()->email }}
        <a href="{{ route('auth.logout') }}" class="btn btn-primary">
            Cerrar sesión
        </a>
    </p>
    @endauth
    <p>
        <a href="{{ route('auth.register')}}" class="btn btn-primary">
            Registrate aquí
        </a>

    </p>
@endsection