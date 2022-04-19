@extends('template.base')

@section('title')
Bienvenidos
@endsection

@section('style')
<link rel="stylesheet" href="assets/css/style.css">
@endsection

@section('content')
<main>
    <h2>Bienvenido al Sistema PR.I.S.ET</h2>
    <div class="separador-naranja">
        <div class="separador-texto">
            <h3>¿Cómo desea registrarse?</h3>
        </div>
        <div class="borde-naranja"></div>
    </div>

    <div class="registracion container">
        @foreach($botones as $btn)
        <x-btn-bg href="{{$btn['url']}}" cuerpo="{{$btn['cuerpo']}}" strong="{{$btn['strong']}}" />
        @endforeach
    </div>
</main>
@endsection

@section('script')
<script src="assets/js/main.js"></script>
@endsection