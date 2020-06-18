@extends('layaout')

@section('title', 'Portafolio |'. $project->title)

@section('content')
<br><br>
<div class="container">
    <h1>{{ $project->title }}</h1>
    @auth
    <a href="{{ route('portafolio.edit', $project) }}" class="btn btn-primary">Editar</a><br><br>

    <form method="POST" action="{{ route('portafolio.destroy', $project) }}">
        @csrf @method('DELETE')
        <button class="btn btn-danger">Eliminar</button>
    </form>
    @endauth
    <p>{{ $project->description }}</p>
    <p>{{ $project->updated_at->diffForHumans() }}</p>
</div>
@endsection
