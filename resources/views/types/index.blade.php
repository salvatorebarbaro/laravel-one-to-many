@extends ('layouts/app')

@section('content')
<div class="container my-4">
    <h1 class=" text-primary text-uppercase text-center ">Tipologie di progetti</h1>
    @foreach ($Types as $Type)
    <div class="d-flex justify-content-between  align-items-center">
       <h3 class=" text-uppercase my-5">{{$Type->Tipologia}}</h3>
        <div class="col-auto">
            <a href="{{ route('admin.types.show', $Type->id) }}" class="text-uppercase btn btn-primary ">visita</a>
        </div>
    </div>
    
    
    @endforeach
    <div class="col-auto d-flex gap-4  justify-content-center ">
        <a href="{{ route('admin.Dashboard') }}" class="text-uppercase btn btn-success  ">Torna alla home</a>
        <a href="{{ route('admin.types.create') }}" class="text-uppercase btn btn-primary  ">Inserisci una tipologia</a>

    </div>
    
</div>


@endsection