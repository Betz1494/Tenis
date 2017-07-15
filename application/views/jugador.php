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
        <form  role="form" name="formJugador" id="formJugador" action="<?php base_url();?>Jugador" method="POST">
	       <div class="input-field col s12">
	          <input name="Nombre" id="Nombre" type="text" class="validate">
	          <label for="Nombre">Nombre Jugador</label>
	       </div> 

	       <div class="input-field col s6">
	          <input name="Edad" id="Edad" type="text" class="validate">
	          <label for="Edad">Edad</label>
	       </div> 

	       <div class="input-field col s6">
			  <p>
			    <input class="with-gap" name="Sexo" type="radio" id="Femenino" value="Femenino">
			    <label for="Femenino">Femenino</label>
			  </p>

			   <p>
			    <input class="with-gap" name="Sexo" type="radio"  id="Masculino" value="Masculino" checked />
			    <label for="Masculino">Masculino</label>
			  </p>
        
	       </div>  

	       <div class="input-field col s6">
	          <input name="Nacionalidad" id="Nacionalidad" type="text" class="validate">
	          <label for="Nacionalidad">Nacionalidad</label>
	       </div> 

	       <div class="input-field col s6">
	          <input name="Altura" id="Altura" type="text" class="validate">
	          <label for="Altura">Altura</label>
	       </div> 

	       <div class="input-field col s8">
	          <input name="Profesional" id="Profesional" type="text" class="validate">
	          <label for="Profesional">Profesional desde</label>
	       </div> 

	       <div class="input-field col s12">
	          <!--<input name="Clasificacion" id="Clasificacion" type="text" class="validate">
	          <label for="Clasificacion">Clasificacion</label>-->

	          <select name="Clasificacion">
			      <option value="" disabled selected></option>
			      <option name="Clasificacion" value="ATP">ATP</option>
			      <option name="Clasificacion" value="Federacion">Federacion</option>
			      <option name="Clasificacion" value="Otra">Otra</option>
			  </select>
             <label>Clasificacion</label>
	       </div>
              <br><br>

           <div class="input-field col s12">
	          

	          <select name="idFederacion">
	           <option value="" disabled selected>Elija una Federacion</option>
	          <?php 
	             foreach ($arrFede as $fe => $NombreF) { 
			      echo '<option value="',$fe,'">',$NombreF,'</option>';}
			      ?>
              </select>
                     <label>Federacion</label>
	       </div>
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <div class="file-field input-field col s12">
		      <div class="waves-effect waves-light btn ">
		        <span>Imagen</span>
		        <input type="file" id="imagen" name="imagen">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		     <button onclick="registrar();" type="submit" class="btn btn-primary red" align="left" value="Guardar">Guardar</button>  

        </form> 

      </div>
 
      <div class="col s6">
        <!-- Teal page content  -->
        <img src="http://localhost:8081/Tenis/imagenes/jugador.jpg" style="max-width:600px; height:500px">
			
     </div>
  
 
<?php $this->load->view('footer');?>
