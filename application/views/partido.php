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


<div class="row">
      <div class="col s12"><br><br></div>
     <!--<div class="col s12 m4 l2"><p></p></div>-->
      <div class="col s6">
        <!-- Grey navigation panel -->
        <form  role="form" action="<?php base_url();?>creaPartido" method="POST">
	       <div class="input-field col s6">
	          <input name="HoraInicio" id="HoraInicio" type="time" class="validate">
	          <label for=""></label>
	       </div> 

	       <div class="input-field col s6">
	          <input name="HoraFinal" id="HoraFinal" type="time" class="validate">
	          <label for=""></label>
	       </div> 

	       <div class="input-field col s6">
	          <input name="Fecha" id="Fecha" type="date" class="validate">
	          <label for="Fecha"></label>
	       </div> 

	       <div class="input-field col s6">
	          <input name="Sets" id="Sets" type="text" class="validate">
	          <label for="Sets">Sets</label>
	       </div> 

	        <div class="input-field col s12">
			  <select name="idCompeticion" id="idCompeticion">
			      <option value=""></option>
			      <?php 
	             foreach ($arrDatos as $pa=> $Nombre) { 
			      echo '<option value="',$pa,'">',$Nombre,'</option>';}
			      ?>
			  </select>
             <label>Competicion</label>	   
	       </div>
	      

	        <div class="input-field col s12">
			  <select name="CategoriaE" id="Opcion" onChange="mostrarP(this.value);">
			    
			      <option value="SimpleFemenino">Simple Femenino</option>
			      <option value="SimpleMasculino">Simple Masculino</option>
			      <option value="DobleFemenino">Doble Femenino</option>
			      <option value="DobleMasculino">Doble Masculino</option>
			      <option value="Mixto">Mixto</option>
			      
			  </select>
             <label>Clasificacion</label>
            </div> 
          

		  <!-- Simple Femenino -->
	      
            <div id="SimpleFemenino" class="input-field col s6">
	          <select name="Jugador1" id="Jugador1">
	           <option for="IdJugador" value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($jugadorF as $eq => $Nombre) { 
			      echo '<option value="',$eq,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	        <div id="SimpleFemenino1" class="input-field col s6">
	          <select name="Jugador2" id="Jugador2">
			      <option value="" disabled selected>Elija un Jugador</option>
			     <?php 
	             foreach ($jugadorF as $eq => $Nombre) { 
			      echo '<option value="',$eq,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 

	       <!-- Simple Masculino -->
	       <div id="SimpleMasculino" class="input-field col s6">
	          <select name="Jugador1" id="Jugador1">
	           <option for="IdJugador" value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($jugadorH as $eq => $Nombre) { 
			      echo '<option value="',$eq,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	        <div id="SimpleMasculino1" class="input-field col s6">
	          <select name="Jugador2" id="Jugador2">
			      <option value="" disabled selected>Elija un Jugador</option>
			     <?php 
	             foreach ($jugadorH as $eq => $Nombre) { 
			      echo '<option value="',$eq,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 

	       <!-- Doble Femenino -->
	        <div id="DobleFemenino" class="input-field col s6">
	          <select name="Equipo1" id="Equipo1">
	           <option for="" value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($equipoF as $ef => $Nombre) { 
			      echo '<option value="',$ef,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	        <div id="DobleFemenino1" class="input-field col s6">
	          <select name="Equipo2" id="Equipo2">
			      <option value="" disabled selected>Elija un Jugador</option>
			     <?php 
	             foreach ($equipoF as $ef => $Nombre) { 
			      echo '<option value="',$ef,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 

	       <!-- Doble Masculino -->
	       <div id="DobleMasculino" class="input-field col s6">
	          <select name="Equipo1" id="Equipo1">
	           <option for="IdJugador" value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($equipoM as $eM => $Nombre) { 
			      echo '<option value="',$eM,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	        <div id="DobleMasculino1" class="input-field col s6">
	          <select name="Equipo2" id="Equipo2">
			      <option value="" disabled selected>Elija un Jugador</option>
			     <?php 
	             foreach ($equipoM as $eM => $Nombre) { 
			      echo '<option value="',$eM,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 

	       <!-- Mixto -->

	       <div id="Mixto" class="input-field col s6">
	          <select name="Jugador1" id="Jugador1">
	           <option for="IdJugador" value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($eqMixto as $eqM => $Nombre) { 
			      echo '<option value="',$eqM,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	        <div id="Mixto1" class="input-field col s6">
	          <select name="Jugador2" id="Jugador2">
			      <option value="" disabled selected>Elija un Jugador</option>
			     <?php 
	             foreach ($eqMixto as $eqM => $Nombre) { 
			      echo '<option value="',$eqM,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 



     
	       <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary red" align="left" value="Guardar">Guardar</button>  

        </form> 

      </div>
 
      <div class="col s6">
      <div class="col s12 m4 l2"><p></p></div>
        <!-- Teal page content  -->
        <img src="http://localhost:8081/Tenis/imagenes/p.jpg" style="max-width:600px; height:500px">
			
     </div>
  
 
<?php $this->load->view('footer');?>