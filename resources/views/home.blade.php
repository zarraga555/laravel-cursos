@extends('layaout')

@section('title')
    Inicio

@endsection
{{-- // ! Tarea --}}
{{-- ESTRUCTURAS DE CONTROL --}}
@section('array')
    <h1>BLADE </h1>
    @foreach ($datos as $item)
        <span> {{ $item['title'] }}</span><br>
    @endforeach
@endsection

@section('array2')
    <h1>PHP</h1>
    @php
        foreach($datos as $item){
            echo "<span>" .$item['title'] ."</span> <br>";
        }
    @endphp
@endsection

@section('array3')
    <h2>PHP R</h2>
    @php
        foreach($datos1 as $persona => $color ){
            echo "<span> A: " .$persona." le gusta el color: " .$color." </span> <br>";
            // echo "A $persona le gusta el color $color <br>";
        }
    @endphp
@endsection


@section('array4')
    @if (count($datos) > 1)
        <br>
        <h1>Datos Disponibles</h1><br>
        @foreach ($datos as $item)
            <span> {{ $item['title'] }}</span><br>
        @endforeach
        <br>
        {{-- @foreach ($datos1 as $item => $tem2)
            <span> {{ $item }}</span><br>
        @endforeach --}}
        <br>
        @for ($i = 0; $i < count($datos); $i++)
            <span> {{ var_dump($i) }} </span><br>
        @endfor
    @else
        <h1>No hay datos Disponibles</h1>
    @endif
@endsection

@section('array5')
    <h1>forelse</h1>
    @forelse ($datos as $item)
        <span> {{ $item['title'] }}</span><br>
    @empty
        <h1>No hay datos Disponibles</h1>
    @endforelse
@endsection

@section('array6')
    <h1>DATABASE</h1>
    @forelse ($datos3 as $item3)
        <span> {{ $item3->title }}</span><br>
    @empty
        <h1>No hay datos Disponibles</h1>
    @endforelse

    {{ $datos3->links() }}
@endsection

@section('content')
    <h1>Te damos la Bienvenida</h1>
    <h2>Mas informacion</h2>
    @auth
        {{ auth()->user()->name }}
    @endauth

@endsection
