<?php
require_once(dirname(__FILE__) . '/head.php');
?>
<style>
.bgMadera{
    background-image: url('../assets/img/tim-mossholder-J0sMjGu6jvQ-unsplash.jpg');
    background-position-x: 100em;
}
.round1{
background: rgb(11,11,11);
background: linear-gradient(180deg, rgba(11,11,11,1) 0%, rgba(48,48,48,1) 52%, rgba(21,22,22,1) 100%);
height: 7em;
border: none;
}
.round2{
background: rgb(11,11,11);
background: linear-gradient(180deg, rgba(11,11,11,1) 0%, rgba(48,48,48,1) 52%, rgba(21,22,22,1) 100%);
height: 3em;
border: none;

}
.curText{
    cursor: text;
}
</style>
<body class="bg-dark text-light">
    <div class="container mt-3">
        <div class="row text-center">
            <img class="img-fluid aling-self-left" src="../assets/img/habanos_logo.png" width="50px" alt="">
        </div>
        <div class="container mt-2 bgMadera">
            <div class="text-center mt-3">
            <h3>{{nombre_evento}}</h3>
            <h4> Acompañantes del socio{{nombre_socio}}</h4>
            </div>
            <div class="d-flex flex-column " action="#" method="#">
                <div class="form-control bg-dark text-center round1 my-2" > <p class="text-light"> Acompañante 1 grabado correctamente.</p> <p class="text-light">{{nombre_socio}}</p> <p class="text-light">socio{{esSocio}}</p></div>
                <div class="form-control bg-dark my-2 round2 text-center text-light" > <a class="text-decoration-none text-light curText" href="#"> Añadir participante</a></div>
                <div class="form-control bg-dark my-2 round2 text-center text-light" > <a class="text-decoration-none text-light curText" href="#"> Añadir participante</a></div>
            </div>
        </div>
        <p> &#169 2006-2022 Club Privado Pasión Habanos</p>
        <p class="col-12 col-sm-8">Si tienes alguna duda, estaremos encantado de atenderte. // 910 38 07 85 // Horarios: L-V de 11:00 a 15:00 // <a class="text-warning" href="info@clubpasionhabanos.com">info@clubpasionhabanos.com</a></p>
    </div>
</body>