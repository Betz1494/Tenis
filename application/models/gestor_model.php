<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestor_model extends CI_Model{

	function agregarJugador($data){

      $query=$this->db->get_where('jugador',array('Nombre'=>$data['Nombre']));
        if($query->num_rows()>0){
      echo'<script>alert("Error.Jugador ya registrado!")</script>';
         }else{
          
             $this->db->insert('jugador',$data);
             echo'<script>alert("!Jugador Registrado!")</script>' ;
         }
  }

  function agregaPartido($data){
    $this->db->insert('partido',$data);
  }


 function get_Torneo(){
$query=$this->db->query('SELECT idTorneo,NombreT FROM torneo');

   if($query->num_rows()>0){
     foreach($query->result() as $row)
       $arrDatos[htmlspecialchars($row->idTorneo,ENT_QUOTES)]=htmlspecialchars($row->NombreT,ENT_QUOTES);
     $query->free_result();
     return $arrDatos;

   }
}

function get_Competencia(){
   $query=$this->db->query('SELECT idCompeticion,NombreC,Categoria,idTorneo FROM competicion');
   if($query->num_rows()>0){
     foreach($query->result() as $row)
       $arrDatos[htmlspecialchars($row->idCompeticion,ENT_QUOTES)]=htmlspecialchars($row->NombreC,ENT_QUOTES);
     return $arrDatos;

   }

}

function Partido(){
  $query=$this->db->get("partido");
    if($query->num_rows()>0){
     return $query;
    }else{
      return FALSE;
    }
  
}

function todosCompetencias(){
  	$query=$this->db->get("competicion");
  	if($query->num_rows()>0){
     return $query;
  	}else{
  		return FALSE;}
  }

 function get_jugador(){
 	 $query=$this->db->query('SELECT idJugador,Nombre FROM jugador');
   if($query->num_rows()>0){
     foreach($query->result() as $row)
       $arrDatos[htmlspecialchars($row->idJugador,ENT_QUOTES)]=htmlspecialchars($row->Nombre,ENT_QUOTES);
     return $arrDatos;

   }
 }
 function get_jugadorMujer(){
 $this->db->select('idJugador,Nombre');
 $this->db->where('Sexo','Femenino');
 $jugadorF=$this->db->get('Jugador');
 $data=array();

  foreach($jugadorF->result() as $fila)
   {
       $data[htmlspecialchars($fila->idJugador,ENT_QUOTES)]=htmlspecialchars($fila->Nombre,ENT_QUOTES);
   } 

   return $data; 
   
 }

 function get_jugadorHombre(){
 $this->db->select('idJugador,Nombre');
 $this->db->where('Sexo','Masculino');
 $jugadorH=$this->db->get('Jugador');
 $data=array();

  foreach($jugadorH->result() as $fila)
   {
       //$data[$fila->Nombre]=$fila->Nombre;
        $data[htmlspecialchars($fila->idJugador,ENT_QUOTES)]=htmlspecialchars($fila->Nombre,ENT_QUOTES);
   } 

   return $data; 
   
 }

 function get_EquipoFemenino(){
  $this->db->select('idEquipo,NombreE');
  $this->db->where('CategoriaE','DobleFemenino');
  $equipoF=$this->db->get('equipo');
  $data=array();
    foreach($equipoF->result() as $fila)
   {
       $data[$fila->NombreE]=$fila->NombreE;
        //$data[htmlspecialchars($fila->idEquipo,ENT_QUOTES)]=htmlspecialchars($fila->NombreE,ENT_QUOTES);
   } 

   return $data; 
 }

 function get_EquipoMasculino(){

  $this->db->select('idEquipo,NombreE');
  $this->db->where('CategoriaE','DobleMasculino');
  $equipoM=$this->db->get('equipo');
  $data=array();
    foreach($equipoM->result() as $fila)
   {
       $data[$fila->NombreE]=$fila->NombreE;
        //$data[htmlspecialchars($fila->idEquipo,ENT_QUOTES)]=htmlspecialchars($fila->NombreE,ENT_QUOTES);
   } 

   return $data; 

 }

 function get_EquipoMixto(){
  $this->db->select('idEquipo,NombreE');
  $this->db->where('CategoriaE','Mixto');
  $eqMixto=$this->db->get('equipo');
  $data=array();
    foreach($eqMixto->result() as $fila)
   {
       //$data[$fila->Nombre]=$fila->Nombre;
        $data[htmlspecialchars($fila->idEquipo,ENT_QUOTES)]=htmlspecialchars($fila->NombreE,ENT_QUOTES);
   } 

   return $data; 

 }
  function get_jugadorMujer1(){
 $this->db->select('idJugador,Nombre');
 $this->db->where('Sexo','Femenino');
 $jugadorF=$this->db->get('Jugador');
 $data=array();

  foreach($jugadorF->result() as $fila)
   {
       $data[$fila->Nombre]=$fila->Nombre;
       //$data[htmlspecialchars($fila->idJugador,ENT_QUOTES)]=htmlspecialchars($fila->Nombre,ENT_QUOTES);
   } 

   return $data; 
   
 }

 function get_jugadorHombre1(){
 $this->db->select('idJugador,Nombre');
 $this->db->where('Sexo','Masculino');
 $jugadorH=$this->db->get('Jugador');
 $data=array();

  foreach($jugadorH->result() as $fila)
   {
       $data[$fila->Nombre]=$fila->Nombre;
        //$data[htmlspecialchars($fila->idJugador,ENT_QUOTES)]=htmlspecialchars($fila->Nombre,ENT_QUOTES);
   } 

   return $data; 
   
 }





 function agregarEquipo($data){
         $this->db->insert('equipo',$data);

  }

 function get_Federacion(){
 	 $query=$this->db->query('SELECT idFederacion,NombreF FROM federacion');
   if($query->num_rows()>0){
     foreach($query->result() as $row)
       $arrDatos[htmlspecialchars($row->idFederacion,ENT_QUOTES)]=htmlspecialchars($row->NombreF,ENT_QUOTES);
     return $arrDatos;

   }
 }

 function competicion(){
   $this->db->select('idCompeticion,NombreC');
   $this->db->where('idTorneo',1);
   $compe=$this->db->get('competicion');
   $data=array();

  foreach($compe->result() as $fila)
   {
       $data[$fila->NombreC]=$fila->NombreC;
        //$data[htmlspecialchars($fila->idJugador,ENT_QUOTES)]=htmlspecialchars($fila->Nombre,ENT_QUOTES);
   } 

   return $data; 


 }



}