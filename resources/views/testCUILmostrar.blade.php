@extends('template.base')

@section('title')
CUIL
@endsection

@section('content')

<section class="container center">
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">{{$persona->nombre}} {{$persona->Apellido}}</div>
        <div class="card-body">
            <h5 class="card-title">{{$persona->cuil}}</h5>
            <p class="card-text">El CUIL se calculo exitosamente</p>
        </div>
    </div>
</section>

@endsection