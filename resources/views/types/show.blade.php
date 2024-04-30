@extends ('layouts/app')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-uppercase text-primary ">{{$type->Tipologia}}</h1>
    <p class="my-4 text-center"><span class=" fw-bolder ">descrizione:</span> {{$type->description}}</p>
    <div class="col-auto d-flex justify-content-center gap-3">
        <a href="{{ route('admin.types.index') }}" class="text-uppercase btn btn-primary ">Torna indietro</a>
        <a href="{{ route('admin.types.edit',$type) }}" class="text-uppercase btn btn-warning  ">modifica</a>
        <a href="" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger text-uppercase ">elimina</a href="">
    </div>
    
</div>


@endsection

<div class="modal" tabindex="-1" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Conferma per l' eliminazione</h5>
        
      </div>
      <div class="modal-body">
        <p>Sei sicuro di voler eliminare questo progetto?</p>
      </div>
      <div class="modal-footer">
        <!-- gestione del metodo delete -->
        <form action="{{ route('admin.types.destroy',['type'=> $type->id])}}" method="POST">
        <!-- @csrf è un elemento di blade che praticamente capsice che il form è partito dal nostro pc e per cio è sicuro  -->
            @csrf

            @method('delete')
            <input class="btn btn-danger" type="submit" value="Cancella">
        </form>
        <a href="{{ route('admin.types.show', $type->id) }}" type="button" class="btn btn-success">Annulla</a>
        <!-- fine gestione -->

      </div>
    </div>
  </div>
</div>