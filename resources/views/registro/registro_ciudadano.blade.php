@extends('template.base')

@section('title')
Bienvenidos
@endsection



@section('content')

@endsection

@section('script')
<main>
    <h2>Bienvenido al Sistema PR.I.S.ET</h2>
    <div class="separador-naranja">
        <div class="separador-texto">
            <h3>Registro</h3>
        </div>
        <div class="borde-naranja"></div>
    </div>


    <div class="form-registro">
        <form action="" class="primer-pantalla">
            <!-- Tipo TEXT -->
            <input type="text" name="nombre" placeholder="Nombre y Apellido" required>

            <!-- Tipo EMAIL -->
            <input type="email" name="email" placeholder="Mail" required>

            <!-- Tipo PASSWORD / SHOW PASSWORD -->
            <div class="password-input">
                <div class="pass-icons">
                    <img src="img/show.svg" alt="" class="d-none">
                    <img src="img/hidden.svg" alt="">
                </div>

                <input type="password" name="pass1" placeholder="Contraseña" required>
            </div>

            <div class="password-input">
                <div class="pass-icons">
                    <img src="img/show.svg" alt="" class="d-none">
                    <img src="img/hidden.svg" alt="">
                </div>

                <input type="password" name="pass2" placeholder="Repetir Contraseña" required>
            </div>

            <div class="btn">
                <input class="disable" type="button" value="Registrarse" onclick="validarPerfil(video_validacion);">
            </div>

            <a href="#c">¿Ya tenés cuenta? ¡Inicia sesión!</a>
        </form>
    </div>


    <div class="modal-form-validado">
        <div class="content-modal">
            <p>¡Ya podés comenzar a navegar y conocer todos los beneficios con los que cuenta el Sitema PR.I.S.ET!</p>

            <video id="video_validacion" width="200" src="video/73582-ok-icon.mp4"></video>

            <div class="btn">
                <a href="dashboard.html" class="btn disable btn-fill-magenta">Ir al Perfil</a>
            </div>
        </div>
    </div>
</main>
@endsection