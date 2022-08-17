<?php
require_once(dirname(__FILE__) . '/head.php');
?>

<body class="bg-dark text-light">
  <div class="container mt-3">
    <div class="d-flex flex-column justify-content-center mx-auto my-2">
      <div class=" row "> <img class="img-fluid" src="../assets/img/habanos_logo.png" alt="habanos"> </div>
      <div class="container">
        <div class="d-flex flex-md-row-reverse flex-column justify-content-md-between mt-2">
          <div class="d-flex justify-content-end align-items-md-end mt-2">
            <button class="col-4  p-2 border-dark bg-transparent text-light"><span class="material-icons ">u_turn_left</span></button>
            <button class="col-4  p-2 border-dark bg-transparent text-light"><span class="material-icons">qr_code</span></button>
            <button class="col-4  p-2 border-dark bg-transparent text-light"><span class="material-icons">person_add_alt_1</span></button>
          </div>
          <div class="d-flex flex-row col-md-7">
            <div class="col-4 p-2  rounded botonMenu text-center">
              <p class=" text-break"> Listados</p>
            </div>
            <div class="col-4 p-2 rounded botonMenu text-center">
              <p class="text-break"> Accesos</p>
            </div>
            <div class="col-4 p-2 rounded botonMenu text-center">
              <p class="text-break">Escanear QR</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container bg-dark text-white w-100 text-center">
      <h2>Nombre evento</h2>
      <h4>Fecha-Ciudad</h4>
      <button id="#" class="bg-dark"><span class="material-icons ">arrow_upward</span></button>
      <h6>Han entrado ? personas</h6>
    </div>
  </div>
</body>