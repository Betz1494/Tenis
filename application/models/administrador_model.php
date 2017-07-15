<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador_model extends CI_Model{

 

  function agregarTorneo($data){
         $this->db->insert('torneo',$data);

  }

  function agregarCompetencia($data){
    $this->db->insert('competicion',$data);

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

   function todosT(){
  	$query=$this->db->get("torneo");
  	if($query->num_rows()>0){
     return $query;
  	}else{
  		return FALSE;}
  }

  function detallesT($idTorneo)
  {
     $this->db->where('idTorneo',$idTorneo);
    $query=$this->db->get('torneo');
    if($query->num_rows()>0){
     return $query;
      }else{
      return FALSE;
    }
    
  }

   function Federacion($data){
   $this->db->insert('federacion',$data);

 }

 function todasFede(){
  $query=$this->db->get("federacion");
    if($query->num_rows()>0){
     return $query;
    }else{
      return FALSE;}

 }
   

}