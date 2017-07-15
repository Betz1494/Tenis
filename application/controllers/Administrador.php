<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
 {
 	   parent::__construct();
 	   $this->load->model("Administrador_model");
     /*$this->load->model("Ofertas_model");*/
 }

	
	public function index()
	{
		$this->load->view('admin');

	}

	public function torneovi(){
		$data=array(
            "enlaces"=>$this->Administrador_model->todosT()
  	    	);

  	      $this->load->view('torneo',$data);
		//$this->load->view('torneo');
	}

	public function Federacion(){
		$data=array(
            "enlaces"=>$this->Administrador_model->todasFede()
  	    	);
		$this->load->view('federacion',$data);

	}

	public function torneo()
	{
		$NombreT = $this->input->post("NombreT");
        $TipoTorneo= $this->input->post("TipoTorneo");
        $Modalidad = $this->input->post("Modalidad");
        $imagen=$this->input->post("imagen");

		  $datos= array(
          "NombreT"=> $NombreT,
          "TipoTorneo"=> $TipoTorneo,
          "Modalidad"=> $Modalidad,
           "imagen"=>$imagen
         	);
		 $this->Administrador_model->agregarTorneo($datos);
         
		//$this->load->view('torneo');
		redirect('administrador/torneovi');

	}

	public function mostrarT(){
		 $data=array(
            "enlaces"=>$this->Administrador_model->todosT()
  	    	);

  	      $this->load->view('torneo',$data);
	}

	public function competicion(){

           $datos['arrTorneos']=$this->Administrador_model->get_Torneo();
		  
		
  	      $this->load->view('competicion',$datos);     

	}

	public function AgreComp(){

		$NombreC = $this->input->post("NombreC");
        $Categoria= $this->input->post("Categoria");
        $idTorneo=$this->input->post("Torneos");

		  $datos= array(
         	"NombreC"=> $NombreC,
         	"Categoria"=> $Categoria,
            "idTorneo"=>$idTorneo
         	);

		
		  /*$torneos=array(
		  	"idTorneo"=>$idTorneo,
		  	"NombreT"=>$NombreT);*/
        /*$data['tenis']=$this->Administrador_model->get_Torneo();*/
		 $this->Administrador_model->agregarCompetencia($datos);

         
		//$this->load->view('competicion',$torneos);
		redirect('administrador/index');

	}
	function agreFederacion(){
    $NombreF = $this->input->post("NombreF");
    $Pais= $this->input->post("Pais");

     $datos= array(
          "NombreF"=> $NombreF,
          "Pais"=>$Pais);

      $this->Administrador_model->Federacion($datos);
         redirect('administrador/Federacion');

   }


}
