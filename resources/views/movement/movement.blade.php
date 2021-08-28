@extends('homepage.index')

@section('table')
    @auth
        <h1>Movimientos por {{ auth()->user()->name }}</h1>
        @csrf
        <table style="border: 4px solid #C1437A; width 600px">
            <thead>
                <tr>
                    <th style="border: 4px solid #C1437A; width 200px">Concepto</th>
                    <th style="border: 4px solid #C1437A; width 200px">Cantidad</th>
                    <th style="border: 4px solid #C1437A; width 200px">Cuenta ID</th>
                    <th style="border: 4px solid #C1437A; width 200px">Último movimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movements as $movimiento)
                    <tr>
                        <th>{{$movimiento["name"]}}</th>
                        <td>{{$movimiento["amount"]}}</td>
                        <td>{{$movimiento["account_id"]}}</td>
                        <td>{{$movimiento["update_at"]}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endauth
@endsection