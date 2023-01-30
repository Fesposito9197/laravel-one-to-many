@extends('layouts.admin')



@section('content')
<div class="container mt-3">
  @if ($project->cover_image)
  <div class="card" style="width: 18rem;">
    <img src="{{asset('storage/'. $project->cover_image)}}" class="card-img-top" alt="{{$project->title}}">
    <div class="card-body">
      <h5 class="card-title">{{$project->title}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Progetto eseguito per:{{$project->client_name}}</h6>
      <p class="card-text"> {{$project->description}}</p>
      {{-- <p class="card-text">
        @if ($project->type)
        Tipologia: <a href="route{{'admin.types.show' , $project->type}}">{{$project->type->name}}</a>
        @else
        Nessun Categoria
        @endif
      </p> --}}
      <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Go Back</a>
    </div>
  </div>
  
  
  
  @else
  <div class="card" style="width: 18rem;">
    {{-- @dd($project->type) --}}
            <div class="card-body">
              <h5 class="card-title">{{$project->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Progetto eseguito per:{{$project->client_name}}</h6>
              <p class="card-text">{{$project->description}}</p>
              <h3>{{$project->type?->name ?: 'Nessun Tipologia'}}</h3>
              {{-- <h3>
                @if ($project->type)
                Tipologia: <a href="#">{{$project->type->name}}</a>
                @else
                Nessun Tipologia
                @endif
              </h3> --}}
              <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Go Back</a>
            </div>
          </div>
        @endif
                
                
                
              
              

            
        {{-- <h1>{{$project->title}}</h1>
        <h3>Progetto eseguito per: {{$project->client_name}}</h3>
        <img src="{{asset('storage/'. $project->cover_image)}}" alt="{{$project->title}}">
        <p class="mt-3">
            {{$project->description}}
        </p> --}}
    </div>
@endsection