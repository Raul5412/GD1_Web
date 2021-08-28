@extends('homepage.index')

@section('move_cuenta')
    @auth
        <h1>Cuentas por {{ auth()->user()->name }}</h1>
            @csrf
            <table style="border: 4px solid #C1437A; width 600px">
                <thead>
                    <tr>
                        <th style="border: 4px solid #C1437A; width 200px">ID de la cuenta</th>
                        <th style="border: 4px solid #C1437A; width 200px">Nombre de la cuenta</th>
                        <th style="border: 4px solid #C1437A; width 200px">Monto</th>
                        <th style="border: 4px solid #C1437A; width 200px">User ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                        <tr>
                            <th>{{$account["id"]}}</th>
                            <td>{{$account["name"]}}</td>
                            <td>{{$account["account_amount"]}}</td>
                            <td>{{$account["user_id"]}}</td>
                            <td>
                                <a href="{{ route('move.move3', $account['id'], $account['id'])}}" class="btn btn-primary">
                                    Hacer cambios en esta cuenta
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    @endauth
@endsection