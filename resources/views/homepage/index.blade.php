@extends('layouts.main')

@section('content')
    <div class="menu">
        <h1>Super Banco</h1>
        <a href="{{ route('auth.register')}}" class="btn btn-primary">
            Registrate aquí
        </a>
    </div>
    @auth
    <p>
        {{ auth()->user()->email }}
        <a href="{{ route('auth.logout') }}" class="btn btn-primary">
            Cerrar sesión
        </a>
    </p>
    <p>
        <a href="{{ route('accounts.account')}}" class="btn btn-primary">
            Crear cuenta 
        </a>
    </p>
    <p>
        <a href="{{ route('move.move2')}}" class="btn btn-primary">
            Hacer movimientos
        </a>
    </p>

    @yield('move_cuenta')
    @yield('move2_cuenta')
    
    <p>
        <a href="{{ route('movement.movement')}}" class="btn btn-primary">
            Ver movimientos
        </a>
    </p>

    @yield('table')

    @endauth
@endsection