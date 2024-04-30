@extends ('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center m-5">
        
            <h1 class="text-center mb-4">{{$project->title}}</h1>
        
        <div class="col">
            
            <img src="{{ asset('storage/'. $project->img_path)}}" class="img-fluid w-100 " alt="{{$project->title}}">
        </div>
        <p class="text-center my-3"><span class="text-uppercase fw-bolder">Descrizione:</span>{{$project->description}}</p>
        <span class="text-center my-3 "><span class="text-uppercase  fw-bolder ">Tipo di progetto:</span> {{$project->Type_id}}</span>

        

        
        <span>{{$project->Tecnology}}</span>
        <span class="text-center my-3"><span class=" text-uppercase fw-bolder ">Link GitHub:</span>{{$project->LinkGit}}</span>
        <div class="col-auto my-5 d-flex  gap-5">
            <a href="{{route('admin.projects.index')}}" type="button" class="btn btn-primary text-uppercase ">torna indietro</a href="">
            <a href="{{route('admin.projects.edit', $project)}}" type="button" class="btn btn-warning text-uppercase ">modifica</a href="">
            <a href="" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger text-uppercase ">elimina</a href="">
        </div>
        
    </div>
    
    
</div>

@endsection


<div class="modal" tabindex="-1" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Conferma per l' eliminazione</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Sei sicuro di voler eliminare questo progetto?</p>
      </div>
      <div class="modal-footer">
        <!-- gestione del metodo delete -->
        <form action="{{ route('admin.projects.destroy',['project'=> $project->id])}}" method="POST">
        <!-- @csrf è un elemento di blade che praticamente capsice che il form è partito dal nostro pc e per cio è sicuro  -->
            @csrf

            @method('delete')
            <input class="btn btn-danger" type="submit" value="Cancella">
        </form>
        <a href="{{ route('admin.projects.show', $project->id) }}" type="button" class="btn btn-success">Annulla</a>
        <!-- fine gestione -->

      </div>
    </div>
  </div>
</div>