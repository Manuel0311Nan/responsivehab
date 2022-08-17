<?php
require_once(dirname(__FILE__) . '/head.php');
?>

<body class="bg-dark text-light container">
    <div class="row text-center">
        <h3>Inscripción de acompañantes</h3>
    </div>
    <div class="row text-center">
        <form action="#" method="#">
            <h4 class="form-label">¿Tu acompañante es socio del Club Pasión Habanos?</h4>
            <div class="d-flex justify-content-center">
                <input class="ms-3" type="radio" id="si" name="fav_language" value="SI">
                <label  class="ms-2" for="si">Si</label><br>
                <input class="ms-3" type="radio" id="no" name="fav_language" value="no">
                <label class="ms-2"  for="no">No</label>
                </div>
                <div class="d-flex flex-column justify-content-center text-left">
                <label class="text-left" for="identification">Introduzca email, DNI/NIE o código de socio</label>
                <input type="text" name="identification">
                </div>


        </form>
    </div>
    <div class="row">
        <div class="d-flex  border-top justify-content-end mt-5 border-2">
            <button type="button" class="btn btn-outline-primary mt-2">Button</button>
            <button type="button" class="btn btn-outline-primary mt-2">Button</button>
        </div>

    </div>
</body>