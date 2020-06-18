@extends('layaout')

@section('title')
    Editar Proyecto
@endsection

@section('content')
<div class="container">
    <br><br>
    <h1>Editar Projecto</h1>
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('portafolio.update', $project) }}">
                @method('PATCH')
                @include('portafolio._form', ['btnText' => 'Guardar Cambios'])
                {{-- <button class="btn btn-primary">Enviar</button> --}}
            </form>
        </div>
    </div>
</div>
@endsection
