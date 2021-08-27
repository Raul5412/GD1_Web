@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Crear nueva cuenta</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('accounts.save-account') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="name">Nombre de la cuenta</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Mi primer cuenta">
            </div>

            <div class="form-group">
                <label for="account_amount">Cantidad inicial</label>
                <input type="number" name="account_amount" class="form-control" id="account_amount" step= ".01" placeholder="$1,000" min="10" max="900000">
            </div>

            <div class="form-group" style= "display:none">
                <label for="user_id">Identificación de Usuario</label>
                <input type="number" name="user_id" class="form-control" id="user_id" value="{{ auth()->user()->id }}">
            </div>

                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection
