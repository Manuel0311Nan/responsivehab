<?php
require_once(dirname(__FILE__) . '/head.php');
?>

<body class="bg-dark text-light">
    <div class="container mt-3">
        <div class="row text-center">
            <img class="img-fluid aling-self-left" src="../assets/img/habanos_logo.png" width="50px" alt="">
        </div>
        <div class="container bg-primary mt-2">
            <div class="text-center bg-dark mt-3">
            <h3>{{nombre_evento}}</h3>
            <h4> Acompañantes del socio{{nombre_socio}}</h4>
            </div>
            <form class="d-flex flex-column bgMadera" action="#" method="#">
                <textarea class="form-control my-2 text-center rounded-5 cilindro" type="text" rows="4" placeholder="Acompañante 1 grabado correctamente. {{nombre_socio}} socio {{esSocio}}">Acompañante 1 grabado correctamente. <br> {{nombre_socio}} socio {{esSocio}}</textarea>
                <input class="form-control my-2 rounded" type="text">
                <input class="form-control my-2 rounded" type="text">
            </form>
        </div>
        <p> &#169 2006-2022 Club Privado Pasión Habanos</p>
        <p class="col-12 col-sm-8">Si tienes alguna duda, estaremos encantado de atenderte. // 910 38 07 85 // Horarios: L-V de 11:00 a 15:00 // <a class="text-warning" href="info@clubpasionhabanos.com">info@clubpasionhabanos.com</a></p>
    </div>
</body>