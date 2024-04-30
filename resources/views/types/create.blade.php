@extends ('layouts/app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center ">
        <form action="{{ route ('admin.types.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="Tipologia" class="form-label text-uppercase ">nome tipo</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <input type="Text" class="form-control @error('Tipologia')is-invalid @enderror" id="Tipologia" name="Tipologia"  value="{{ old ('Tipologia' )}}">
            <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
            @error('Tipologia')
                    <!-- direttiva error di blade -->
                    <div class="invalid-feedback">
                        {{$message}}
                        <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
                    </div>

                    @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-uppercase ">Descrizione del tipo</label>
            <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
            <textarea type="text" class="form-control @error('description')is-invalid @enderror" id="description" name="description">{{ old ('description' )}}</textarea>
            @error('description')
                    <!-- direttiva error di blade -->
                    <div class="alert alert-danger ">
                        {{$message}}
                        <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
                    </div>

                    @enderror
        </div>
        <div class="col-auto my-5 d-flex justify-content-center ">
           <button type="submit" class="btn btn-primary">Submit</button> 
        </div>
        
        </form>
    </div>
</div>


@endsection