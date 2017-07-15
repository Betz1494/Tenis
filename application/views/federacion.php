<?php $this->load->view('header');?>

<nav class="blue darken-3">
  <div class="nav-wrapper">
    <a href="" class="brand-logo"><img class="circle responsive-img" src="http://localhost:8081/Tenis/imagenes/logo.jpg"  style="max-width:60px; height:60px"></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="http://localhost:8081/Tenis/administrador/torneovi">Torneo</a></li>
      <li><a href="http://localhost:8081/Tenis/administrador/competicion">Competencia <span class="new badge">1</span></a></li>
      <li><a href="http://localhost:8081/Tenis/administrador/Federacion">Federacion</a></li>
    </ul>
  </div>
</nav>
  
  <div class="row">

      <div class="col s6">
        <!-- Grey navigation panel -->
        <form  role="form" action="<?php base_url();?>agreFederacion" method="POST">
	       <div class="input-field col s6">
	          <input name="NombreF" id="NombreF" type="text" class="validate">
	          <label for="NombreF">Nombre Federacion</label>
	       </div>

	       <div class="input-field col s6">
	          <input name="Pais" id="Pais" type="text" class="validate">
	          <label for="Pais">Pais</label>
	       </div>

	        

		 

		    

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
						    <h4 class="center-align">Federaciones</h4>

						 </div>
						<?php 
                        foreach ($enlaces->result() as $fila) {                        	
                        
					    echo  "<ul class='collection'>";
					    echo "<li class='collection-item avatar'>";
					    ?>
					  
					      <span class="title"><?php echo $fila->NombreF;?></span>
					      <p><?php echo $fila->Pais;?> <br>
					        
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


<?php $this->load->view('footer');?>