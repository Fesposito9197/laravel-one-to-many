@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-4">
        <h1>{{$type->name}}</h1>
        @if(count($type->projects) > 0)
        <h3>Progetti associati:</h3>
        <ul>
            @foreach ($type->projects as $project)
                <li><a href="{{route('admin.projects.show', $project->slug)}}">{{$project->title}}</a></li>
            @endforeach
        </ul>
    @else
        <h3>Nessun progetto associato</h3>
    @endif
    </div>
    
</div>
@endsection