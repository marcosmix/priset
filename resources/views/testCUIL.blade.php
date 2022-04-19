@extends('template.base')

@section('title')
CUIL
@endsection

@section('content')

<section class="container center">
    <div>
        <h1> Calcular CUIL</h1>
    </div>

    <form action="/cuil/guardar" method="POST" enctype="multipart/form-data">
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name='nombre' id="nombre" aria-describedby="emailHelp">
            <div id="nombre" class="form-text">Ingrese nombre</div>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="apellido" class="form-control" id="apellido" name='apellido' aria-describedby="emailHelp">
            <div id="apellido" class="form-text">Ingrese apellido</div>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">Ingrese DIN</label>
            <input type="number" name='dni' class="form-control" id="dni" aria-describedby="emailHelp">
            <div id="dni" class="form-text">numero de DNI sin guines ni puntos</div>
        </div>

        <select class="form-select" name='sexo' aria-label="Default select example">
            <option selected>Seleccione el sexo</option>
            <option value="1">Femenino</option>
            <option value="2">Masculino</option>
        </select>
        @csrf
        <button type="submit" class="btn btn-primary">Calcular CUIL</button>
    </form>
</section>
@endsection