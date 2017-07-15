<?php $this->load->view('header');?>

<nav class="blue darken-3">
  <div class="nav-wrapper">
    <a href="" class="brand-logo"><img class="circle responsive-img" src="http://localhost:8081/Tenis/imagenes/logo.jpg"  style="max-width:60px; height:60px"></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="http://localhost:8081/Tenis/gestor/">Inicio</a></li>
      <li><a href="http://localhost:8081/Tenis/gestor/verJugador">Jugador</a></li>
       <li><a href="http://localhost:8081/Tenis/gestor/verJugador">Equipos</a></li>
      <li><a href="http://localhost:8081/Tenis/gestor/partido">Partido</a></li>
      <li><a href="http://localhost:8081/Tenis/gestor/TodosP">Partidos<span class="new badge">2</span></a></li>

    </ul>
  </div>
</nav>

  
   <div class="row">
      <?php foreach ($arrTorneos as $t => $NombreT) {?>
        <div class="col s4 ">
          <div class="card blue-grey darken-1 small">
            <div class="card-image">
             <img src="http://localhost:8081/Tenis/imagenes/torneo.jpg" >
              
              <span class="card-title"><h2>
                      <?php echo $NombreT;?></h2>
              </span>
            </div>
            <div class="card-content">
              <p></p>
            </div>
            <div class="card-action">
              <a href="http://localhost:8081/Tenis/gestor/detalleTorneo">Detalles</a>
            </div>
          </div>
           <?php
     echo "</div>";
       }
      ?>
        <!--</div>-->
       <!-- <div class="col s4 ">
          <div class="card blue-grey darken-1 small">
            <div class="card-image">
              <img src="http://localhost:8081/Tenis/imagenes/partido2.jpg" >
              <span class="card-title">Partido Wimbledon</span>
            </div>
            <div class="card-content">
              <p>Maria Sharapova vs Serena Williams por el campeonato de Wimbledon</p>
            </div>
            <div class="card-action">
              <a href="#">Detalles</a>
            </div>
          </div>
        </div>
        <div class="col s4 ">
          <div class="card blue-grey darken-1 small">
            <div class="card-image">
              <img src="http://localhost:8081/Tenis/imagenes/partido3.jpg" >
              <span class="card-title">Partido Final</span>
            </div>
            <div class="card-content">
              <p>Segundo partido de USA Open</p>
            </div>
            <div class="card-action">
              <a href="#">Detalles</a>
            </div>
          </div>
        </div>-->
 </div>
 
<?php $this->load->view('footer');?>