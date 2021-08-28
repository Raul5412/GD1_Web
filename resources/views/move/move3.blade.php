@extends('homepage.index')

@section('move2_cuenta')
    @auth 
        @csrf
        <table style="border: 4px solid #C1437A; width 600px">
            <thead>
                <tr>
                    <th style="border: 4px solid #C1437A; width 200px">ID de la cuenta</th>
                    <th style="border: 4px solid #C1437A; width 200px">Nombre de la cuenta</th>
                    <th style="border: 4px solid #C1437A; width 200px">Monto</th>
                    <th style="border: 4px solid #C1437A; width 200px">User ID</th>
                    <th style="border: 4px solid #C1437A; width 200px">Concepto</th>
                </tr>
            </thead>
            <tbody>
                <form action="" method="post">
                    @foreach ($accounts as $account)
                        <tr>
                            <th>{{$account["id"]}}</th>
                            <td>{{$account["name"]}}</td>
                            <td>{{$account["account_amount"]}}</td>
                            <td>{{$account["user_id"]}}</td>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary">Aceptar cambios</button></td>
                        </tr>
                    @endforeach
                </form>
            </tbody>
        </table>
    @endauth
@endsection