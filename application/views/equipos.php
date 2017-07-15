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
       
		<div class="col s2">
		        <!-- Promo Content 1 goes here -->
		</div>
              
		<div class="col s8">   
		<form  name="equipos" id="equipos" role="form" action="<?php base_url();?>agregaEquipo" method="POST" >
	       <div class="input-field col s12">
	          <input name="NombreE" id="NombreE" type="text" class="validate">
	          <label for="NombreE">Nombre del Equipo</label>
	       </div> 

	       <div class="input-field col s12">
			  <!--<p>
		        <input class="with-gap" name="CategoriaE" type="radio" id="Doble" value="Doble" />
			    <label for="Doble">Doble</label>
			  </p>

			   <p>
		        <input class="with-gap" name="CategoriaE" type="radio" id="Mixto" value="Mixto" />
			    <label for="Mixto">Mixto</label>
			  </p>-->
			  <select name="CategoriaE" id="Opcion" onChange="mostrar(this.value);">
			    
			      <option value="Mixto">Mixto</option>
			      <!--<option value="Doble">Doble</option>-->
			      <option value="DobleMasculino">Doble Masculino</option>
			      <option value="DobleFemenino">Doble Femenino</option>
			      
			  </select>
             <label>Clasificacion</label>
        
	       </div> 

	        <!--- Doble Masculino - -->
	         <div id="DobleMasculino" class="input-field col s6">
	          <select name="IdJugador" id="IdJugador">
	           <option for="IdJugador" value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($jugadorH as $eq => $Nombre) { 
			      echo '<option value="',$eq,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	        <div id="DobleMasculino1" class="input-field col s6">
	          <select name="IdJugador1" id="IdJugador1">
			      <option value="" disabled selected>Elija un Jugador</option>
			     <?php 
	             foreach ($jugadorH as $eq => $Nombre) { 
			      echo '<option value="',$eq,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 
	      


	       <!-- Femenino doble -->
	        <div id="DobleFemenino" class="input-field col s6">
	          <select name="IdJugadorF" id="IdJugadorF">
	           <option value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($jugadorF as $eq => $Nombre) { 
			      echo '<option value="',$eq,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	        <div id="DobleFemenino1" class="input-field col s6">
	          <select name="idJugadorF1" id="IdJugadorF1">
			      <option value="" disabled selected>Elija un Jugador</option>
			     <?php 
	             foreach ($jugadorF as $eq1 => $Nombre) { 
			      echo '<option value="',$eq1,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 




	       <!--           MIXTO       -->

	       <div id="Mixto" class="input-field col s6">
	          <select name="IdJugador" id="IdJugador">
	           <option value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($jugadorF as $eq1 => $Nombre) { 
			      echo '<option value="',$eq1,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 1</label>
	       </div> 

	       <div id="Mixto1" class="input-field col s6">
	          <select name="IdJugador1" id="IdJugador1">
	           <option value="" disabled selected>Elija un Jugador</option>
	          <?php 
	             foreach ($jugadorH as $eq1 => $Nombre) { 
			      echo '<option value="',$eq1,'">',$Nombre,'</option>';}
			      ?>
              </select>
                     <label>Jugador 2</label>
	       </div> 


          
		  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		     <button type="submit" class="btn btn-primary red" align="left" value="Guardar">Guardar</button>  

        </form>    
		</div>
		   

		<div class="col s2">
        <!-- Promo Content 3 goes here -->
         </div>

</div>


      
  
 
<?php $this->load->view('footer');?>

