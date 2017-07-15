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
  
   <div class="col s4 "></div>
    
   <ul id="tabs-swipe-demo" class="tabs">
         <?php foreach ($compe as $t => $NombreC) {?>
          <li class="tab col s4"><a href="#test-swipe-1"><?php echo $NombreC; ?></a></li><?php }?>
        </ul>
        <div id="test-swipe-1" class="col s12 green">

              <table>
                <thead>
                  <tr>
                      <th>idPartido</th>
                      <th>Fecha</th>
                      <th>Hora Inicio</th>
                      <th>Hora Final</th>
                      <th>Sets</th>
                      <th>Marcador</th>
                      <th>Jugador 1</th>
                      <th>Jugador 2</th>
                      <th>idCompeticion</th>


                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach ($enlaces->result() as $fila) { 
                
                  echo "<tr>";
                  echo"<td>".$fila->idPartido."</td>";
                  echo"<td>".$fila->Fecha."</td>";
                  echo"<td>".$fila->HoraInicio."</td>";
                  echo"<td>".$fila->HoraFinal."</td>";
                  echo"<td>".$fila->Sets."</td>";
                  echo"<td>".$fila->Marcador."</td>";
                  echo"<td>".$fila->Jugador1."".$fila->Equipo1."</td>";
                  echo"<td>".$fila->Jugador2."".$fila->Equipo2."</td>";
                  echo"<td>".$fila->idCompeticion."</td>";
                   
                  echo "<td>";
                  echo"<a  href='#!' class='secondary-content'>";
                  echo"<i class='material-icons red'>edit</i>";
                  echo"</td>";
                  echo "</tr>";
                  
                  }
                  ?>
                </tbody>
              </table>

       <?php echo "</div>";?>
        <!--<div id="test-swipe-2" class="col s12 red">Test 2</div>
        <div id="test-swipe-3" class="col s12 green">Test 3</div>-->
    <div class="col s4 "></div>
         
 </div>
</div>
 
<?php $this->load->view('footer');?>