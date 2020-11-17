@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresar datos targeta</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('tarjeta')}}" method="POST">
                        @csrf
                    <input type="text" name="card" placeholder="Card" class="form-control mb-2">
                    <input type="text" name="cvv" placeholder="CVV" class="form-control mb-2">
                    <input type="text" name="nip" placeholder="Nip" class="form-control mb-2">
                    <button class=" btn btn-primary btn-block" type="submit">{{ __('Agregar')}}</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
   <br>
   <br>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">desencriptar</div>

                        <form action="{{route('desencriptar')}}" method="POST">
                        @csrf
                        <input type="text" name="card" placeholder="Card" class="form-control mb-2">
                        <input type="text" name="cvv" placeholder="CVV" class="form-control mb-2">
                        <input type="text" name="nip" placeholder="Nip" class="form-control mb-2">
                        <button class=" btn btn-primary btn-block" type="submit">{{ __('desencriptar')}}</button>
                        </form
            </div>
        </div>    
    </div>
</div>   

</div>
@endsection

