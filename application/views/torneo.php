<?php $this->load->view('header');?>

<nav class="blue darken-3">
  <div class="nav-wrapper">
    <a href="" class="brand-logo"><img class="circle responsive-img" src="http://localhost:8081/Tenis/imagenes/logo.jpg"  style="max-width:60px; height:60px"></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="http://localhost:8081/Tenis/administrador/torneovi">Torneo</a></li>
        <li><a href="http://localhost:8081/Tenis/administrador/competicion">Competencia <span class="new badge">4</span></a></li>
        <li><a href="http://localhost:8081/Tenis/administrador/Federacion">Federacion</a></li>
      
    </ul>
  </div>
</nav>
  <div>
    <h5 class="right-align">Torneos</h5>
 </div>

 <div class="row">

      <div class="col s6">
        <!-- Grey navigation panel -->
        <form  role="form" action="<?php base_url();?>torneo" method="POST">
	       <div class="input-field col s6">
	          <input name="NombreT" id="NombreT" type="text" class="validate">
	          <label for="NombreT">Nombre Torneo</label>
	       </div>

	        <div class="input-field col s6">
	          <input name="TipoTorneo" id="TipoTorneo" type="text" class="validate">
	          <label for="TipoTorneo">Tipo Torneo</label>
	        </div> 

		 <div class="input-field col s12">
		    <select name="Modalidad">  
		      <option name="Modalidad" value="Simple">Simple</option>
		      <option name="Modalidad" value="Mixto">Doble</option>
		    </select>
		    <label>Modalidad</label>
		 </div>

		    <div class="file-field input-field col s12">
		      <div class="waves-effect waves-light btn ">
		        <span>Imagen</span>
		        <input type="file" id="imagen" name="imagen">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div><br>
           <div class="input-field col s11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		     <button type="submit" class="btn btn-primary red" align="left" value="Guardar">Guardar</button>  
		    </div>                
         </form> 

      </div>
 
      <div class="col s6">
        <!-- Teal page content  -->

						 <div>
						    <h4 class="center-align">Torneos Existentes</h4>

						 </div>
						<?php 
                        foreach ($enlaces->result() as $fila) {                        	
                        
					    echo  "<ul class='collection'>";
					    echo "<li class='collection-item avatar'>";
					    ?>
					  
					  
					      <img src="http://localhost:8081/Tenis/imagenes/<?php echo $fila->imagen;?>" alt="" class="circle" >
					      <span class="title"><?php echo $fila->NombreT;?></span>
					      <p><?php echo $fila->TipoTorneo;?> <br>
					         <?php echo $fila->Modalidad;?>
					      </p>
					     
					      <a  href="#!" class="secondary-content"><i class="material-icons">edit</i>
					      <i class="material-icons">clear</i>
					      </a>
					      
                     <?php 
                     echo  "</li>";  
                      
					 echo "</ul>";
					}
					?>

		 </div>

 </div>

 


<?php $this->load->view('footer');?>