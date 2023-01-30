@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <h1>Modifica: {{$project->title}}</h1>
        @include('partials.error')
        <form action="{{route('admin.projects.update' , $project )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Modifica il titolo del progetto" value="{{old('title' , $project->title )}}">
            </div>
            <div class="mb-3">
                <label for="client_name" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Modifica nome del cliente" value="{{old('client_name' , $project->client_name)}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Modifica la descrizione del progetto</label>
                <textarea class="form-control" id="description" name="description" rows="10">{{old('description' , $project->description)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Aggiungi un'immagine</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image"  value="{{old('cover_image')}}">
            </div>
            <button type="submit" class="btn btn-success">Salva</button>
        </form>    
    </div>
@endsection