<div class="input-field col s6 ">
		  <?php 
		  foreach ($enlaces->result() as $fila) {
		  	?>
		    <select name="idTorneo">  
		   <option name="idTorneo" value="<?php echo $fila->idTorneo?>"><?php echo $fila->idTorneo?></option>
		    </select>
		    <label>Asociar a Torneo</label>
		    <?php 
		     }
		    ?>
</div>