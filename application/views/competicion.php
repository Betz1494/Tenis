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
        <form  role="form" action="<?php base_url();?>AgreComp" method="POST">
	       <div class="input-field col s6">
	          <input name="NombreC" id="NombreC" type="text" class="validate">
	          <label for="NombreC">Nombre Competicion</label>
	       </div>

	        

		 <div class="input-field col s6 ">
		    <select name="Categoria">  
		      <option name="Categoria" value="Femenino">Femenino</option>
		      <option name="Categoria" value="Masculino">Masculino</option>
		      <option name="Categoria" value="Mixto">Mixto</option>
		    </select>
		    <label>Categoria</label>
		 </div>

		  <div class="form-group col s6 ">
		 
		   <select name="Torneos">  
		   <?php 
             foreach ($arrTorneos as $t => $NombreT) {
             	echo '<option value="',$t,'">',$NombreT,'</option>';
             	# code...
             }

		   ?>

		    </select>
		    <label>Asociar a Torneo</label>
		       
		   	 
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
			<ul class="collapsible" data-collapsible="accordion">
			  <li>
			    <div class="collapsible-header"><span class="new badge">4</span><i class="material-icons">whatshot</i>Acapulco Master</div>
			    <div class="collapsible-body"><p>Competicion 1</p>
			    <p>Femenino</p>


			    </div>
			  </li>
			</ul>
     </div>


<?php $this->load->view('footer');?>