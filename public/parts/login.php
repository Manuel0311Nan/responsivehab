<?php
require_once(dirname(__FILE__) . '/head.php');
?>

<body>
    <div class="container ">
        <div class="d-flex flex-column justify-content-center mx-auto my-2">
        <div class="bg-light row text-center"> <img class="img-fluid aling-self-left" src="../assets/img/habanos_logo.png" width ="50px"alt=""></div>
        <div class="bg-light row col-8"> <img class="img-fluid aling-self-left" src="../assets/img/habanos_logo.png" width ="200px"alt=""></div>
        <form class="mt-5" method="" action="">
            <input class="form-control col-4 mb-3" type="text" placeholder="Email o Dni" required>
            <input class="form-control col-4" type="text" placeholder="Contraseña" required>
            <h6 class="text-decoration-underline mt-2"> ¿Has olvidado tu contraseña?</h6>
            <button id="aceptar" class="btn btn-danger mt-5 col"> Aceptar</button>
        </form>
        </div>
    </div>
</body>