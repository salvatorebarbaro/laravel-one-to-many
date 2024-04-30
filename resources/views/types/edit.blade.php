@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <h1 class="mb-5">Edit</h1>

    <form action="{{route('admin.types.update', $type->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Tipologia" class="form-label">name :</label>
            <input type="text" required class="form-control @error('Tipologia') is-invalid @enderror" id="Tipologia" name="Tipologia" value="{{old('Tipologia') ?? $type->Tipologia}}">
              @error('Tipologia')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ?? $type->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="col-12 d-flex justify-content-between ">
          <button type="submit" class="btn btn-primary">submit</button>

          <a class="text-decoration-none" href="{{route('admin.types.show', $type->id)}}">cancella i cambiamenti</a>
        </div>
    </form>

@endsection