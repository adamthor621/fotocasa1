
<form id="form-login">
    <p>mis campos y botón de envío del formulario de login aqui...</p>
    <a href="" class="form-cambiar">Registrarme</a>
</form>

<form id="form-registro">
    <p>mis campos y botón de envío del formulario de registro aqui...</p>
    <a href="" class="form-cambiar">Ya estoy registrado</a>
</form>


<script>

$(document).ready(function() {
    $("#form-login .form-cambiar").click(function(e) {
        e.preventDefault();
        $("#form-login").hide();
        $("#form-registro").show();
    });

    $("#form-registro .form-cambiar").click(function(e) {
        e.preventDefault();
        $("#form-registro").hide();
        $("#form-login").show();
    });
    $("#form-registro").hide();
});

    let formLogin = document.getElementById("form-login");
    let formRegistro = document.getElementById("form-registro");

    let  formCambiarLogin = formLogin.querySelector(".form-cambiar");
    let formCambiarRegistro = formRegistro.querySelector(".form-cambiar");

    formCambiarLogin.addEventListener("click", function(e) {
        e.preventDefault();
        formLogin.style.display = "none";
        formRegistro.style.display = "block";
    });

    formCambiarRegistro.addEventListener("click", function(e) {
        e.preventDefault();
        formRegistro.style.display = "none";
        formLogin.style.display = "block";
    });

    formRegistro.style.display = "none";
</script>