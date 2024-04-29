@extends ('layouts/app')

@section('content')

<div class="container">
    <h1 class="m-5 text-uppercase text-center text-primary">galleria di progetti</h1>

    <div class="row row-cols-2">
    @foreach($projects as $project)
        <div class="col mb-4 text-center ">
            <div class="card h-100">
                <img src="{{ asset('storage/'. $project->img_path)}}" class="card-img-top img-fluid h-100 " alt="{{$project->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Visita</a>

                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="row justify-content-center ">
        <div class="col-auto">
            <a href="{{ route('admin.projects.create') }}" type="button" class="btn btn-success col-auto text-uppercase">inserisci progetto</a>
        </div>
    </div>
</div>

@endsection
