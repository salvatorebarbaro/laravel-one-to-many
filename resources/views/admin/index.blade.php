<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')
<div class="container">
    <h1 class="m-5 text-uppercase text-center">Pagina di amministrazione</h1>

    <h2 class=" text-uppercase text-center fs-4">benvenuto , <span class=" text-primary mb-4  ">{{$user->name}}</span> </h2>

    <div class="row justify-content-center my-5">
        <div class="col-auto">
            <a href="{{ route('admin.projects.index') }}" type="button" class="btn btn-primary text-uppercase text-black ">Visita progetti</a>

        </div>
    </div>
    
    
</div>



@endsection