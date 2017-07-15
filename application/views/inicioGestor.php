<?php $this->load->view('header');?>

<nav class="blue darken-3">
  <div class="nav-wrapper">
    <a href="" class="brand-logo"><img class="circle responsive-img" src="http://localhost:8081/Tenis/imagenes/logo.jpg"  style="max-width:60px; height:60px"></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="http://localhost:8081/Tenis/gestor/">Inicio</a></li>
       <li><a href="http://localhost:8081/Tenis/gestor/verJugador">Jugador</a></li>
        <li><a href="http://localhost:8081/Tenis/gestor/equipo">Equipos</a></li>
       <li><a href="http://localhost:8081/Tenis/gestor/partido">Partido</a></li>
       <li><a href="http://localhost:8081/Tenis/gestor/TodosP">Partidos<span class="new badge">2</span></a></li>
    </ul>
  </div>
</nav>

   <div class="carousel">
<a class="carousel-item" href="#one!"><img src="http://localhost:8081/Tenis/imagenes/ca1.jpg" style="max-width:250px; height:300px"></a>
<a class="carousel-item" href="#two!"><img src="http://localhost:8081/Tenis/imagenes/ca2.jpg" style="max-width:250px; height:300px"></a>
<a class="carousel-item" href="#three!"><img src="http://localhost:8081/Tenis/imagenes/ca3.jpg" style="max-width:250px; height:300px"></a>
<a class="carousel-item" href="#four!"><img src="http://localhost:8081/Tenis/imagenes/ca4.jpg" style="max-width:250px; height:300px"></a>
<a class="carousel-item" href="#five!"><img src="http://localhost:8081/Tenis/imagenes/ca5.jpg" style="max-width:250px; height:300px"></a>
  </div>

<div class="row">
         <?php 
                foreach ($arrTorneos as $t => $NombreT) { ?>
		<div class="col s2">
		        <!-- Promo Content 1 goes here -->
		</div>
              
		<div class="col s8">      
		 <ul class="collapsible" data-collapsible="accordion">
			 <li>
			 <div class="collapsible-header"><span class="new badge">4</span><i class="material-icons">filter_drama</i>
	                      <?php echo $NombreT;?>
			 </div>
			   <div class="collapsible-body">
			    <!--<?php //foreach($arrComp as $c=>$NombreC){?>-->
			       <p>Nombre Competencia:Competencia 1<!--<?php// echo $NombreC;}?>--></p>
			       <p>Categoria:Femenino</p>

			       <p>Nombre Competencia:Competencia 4<!--<?php// echo $NombreC;}?>--></p>
			       <p>Categoria:Femenino</p>
			    
			   </div>
			 </li>
		 </ul>
		 <?php
		 echo "</div>";
		   }
		  ?>

		<div class="col s2">
        <!-- Promo Content 3 goes here -->
        </div>

</div>



      
  
 
<?php $this->load->view('footer');?>