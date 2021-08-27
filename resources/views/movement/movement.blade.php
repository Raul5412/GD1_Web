@extends('homepage.index')

@section('table')
    @auth
        <h1>Cuentas por {{ auth()->user()->name }}</h1>
        @csrf
        <table style="border: 4px solid #C1437A; width 600px">
            <thead>
                <tr>
                    <th style="border: 4px solid #C1437A; width 200px">Nombre</th>
                    <th style="border: 4px solid #C1437A; width 200px">Cantidad</th>
                    <th style="border: 4px solid #C1437A; width 200px">Cuenta ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movements as $movimiento)
                error_log('Some message here.');
                    <tr>
                        <th>{{$movimiento["movements.name"]}}</th>
                        <td>{{$movimiento["movements.amount"]}}</td>
                        <td>{{$movimiento["movements.account_id"]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endauth
@endsection