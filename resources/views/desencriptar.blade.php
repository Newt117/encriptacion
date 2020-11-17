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