@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Aggiungi una Tipologia</h1>
    @include('partials.error')
    <form action="{{route('admin.types.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Aggiungi il Tipologia per il progetto" value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn-success">Salva</button>
    </form>
</div>
@endsection