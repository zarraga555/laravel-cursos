@extends('layaout')

@section('title')
    Crear Proyecto
@endsection

@section('content')
<div class="container">
    <br><br>
    <h1>Crear Projecto</h1>
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('portafolio.store') }}">
                @include('portafolio._form', ['btnText' => 'Guardar'])
            </form>
        </div>
    </div>
</div>
@endsection
