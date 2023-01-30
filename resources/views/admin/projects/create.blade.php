@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Aggiungi un nuovo progetto</h1>
        @include('partials.error')
        <form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Aggiungi il titolo del progetto" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="client_name" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Aggiungi nome del cliente" value="{{old('client_name')}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Aggiungi una descrizione del progetto</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Aggiungi un'immagine</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image"  value="{{old('cover_image')}}">
            </div>
            <button type="submit" class="btn btn-success">Salva</button>
        </form>    
    </div>
@endsection