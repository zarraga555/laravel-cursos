@extends('layaout')

@section('title')
    Portafolio
@endsection

@section('content')
    <div class="container">
        <h1>Portafolio</h1>
    </div>
@endsection

@section('array6')
<br>
<div class="container">
    @auth
    <a href="{{ route('portafolio.create') }}" class="btn btn-primary">Agregar Proyecto</a><br><br>
    @endauth
    @forelse ($projects as $project)
    {{-- Este for else mostrara todos los datos disponibles de la DB y los va mostar en una
        etiuquta a --}}
        <li><a href="{{ route('portafolio.show', $project) }}"> {{ $project->title }}</a> </li>
    @empty
        <h1>No hay datos Disponibles</h1>
    @endforelse

    {{ $projects->links() }}
</div>
@endsection
