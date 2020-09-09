<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestor extends CI_Controller {

	public function __construct()
 {
 	   parent::__construct();
 	   $this->load->model("Gestor_model");
     $this->load->helper(array('form'));
     $this->load->library('form_validation');
     /*$this->load->model("Ofertas_model");*/
     /*comentario*/
 }

	
	public function index()
	{
    $datos['arrTorneos']=$this->Gestor_model->get_Torneo();
    $datos['arrComp']=$this->Gestor_model->get_Competencia();
      /*$data=array(
            "enlaces"=>$this->Gestor_model->todosCompetencias());*/
      
    
		$this->load->view('inicioGestor',$datos);
	}

	public function partido()
	{
    $datos['arrPar']=$this->Gestor_model->get_jugador();
    $datos['arrDatos']=$this->Gestor_model->get_Competencia();
    $datos['jugadorF']=$this->Gestor_model->get_jugadorMujer1();
    $datos['jugadorH']=$this->Gestor_model->get_jugadorHombre1();
    $datos['equipoF']=$this->Gestor_model->get_EquipoFemenino();
    $datos['equipoM']=$this->Gestor_model->get_EquipoMasculino();
    $datos['eqMixto']=$this->Gestor_model->get_EquipoMixto();
		$this->load->view('partido',$datos);

	}

	public function TodosP()
	{
    $datos['arrTorneos']=$this->Gestor_model->get_Torneo();
    $datos['compe']=$this->Gestor_model->competicion();
    //$datos=array("enlaces"=>$this->Gestor_model->Partido());
		$this->load->view('TodosPartidos',$datos);

	}

  public function detalleTorneo(){
    $datos['arrTorneos']=$this->Gestor_model->get_Torneo();
    $datos['compe']=$this->Gestor_model->competicion();
    $datos=array("enlaces"=>$this->Gestor_model->Partido());
    $this->load->view('DetallesTorneo',$datos);
  }

	

	public function CompetenciEInscribir()
  {
  	  $idCompetencia=$this->uri->segment(3);
      $data=array(
	 "enlace"=>$this->Gestor_model->idCompetencia($idCompetencia)
			);

      $idJudador=$this->Gestor_model->inscribeJugador($idJudador);
      $data=array();

       $this->load->view('competencia',$data);

  }

  public function Jugador(){

        $Nombre = $this->input->post("Nombre");
        $Edad= $this->input->post("Edad");
        $Sexo=$this->input->post("Sexo");
        $Nacionalidad= $this->input->post("Nacionalidad");
        $Altura=$this->input->post("Altura");
        $Profesional=$this->input->post("Profesional");
        $Clasificacion= $this->input->post("Clasificacion");
        $idFederacion= $this->input->post("idFederacion");
        $imagen= $this->input->post("imagen");
        

		  $datos= array(
         	"Nombre"=> $Nombre,
         	"Edad"=> $Edad,
          "Sexo"=>$Sexo,
          "Nacionalidad"=> $Nacionalidad,
         	"Altura"=> $Altura,
          "Profesional"=>$Profesional,
          "Clasificacion"=>$Clasificacion,
          "idFederacion"=>$idFederacion,
          "imagen"=>$imagen

         	);
          $this->Gestor_model->agregarJugador($datos);
          redirect('Gestor/verJugador');
     }


   public function verJugador(){
    $datos['arrFede']=$this->Gestor_model->get_Federacion();

    $this->load->view('jugador',$datos);

   }

   public function equipo(){
    $datos['arrEquipo']=$this->Gestor_model->get_jugador();
    $datos['jugadorF']=$this->Gestor_model->get_jugadorMujer();
    $datos['jugadorH']=$this->Gestor_model->get_jugadorHombre();
     $this->load->view('equipos',$datos);
   }

   public function agregaEquipo(){
        //$idEquipo = $this->input->post("idEquipo");
        $NombreE= $this->input->post("NombreE");
        $CategoriaE= $this->input->post("CategoriaE");
        $IdJugador=$this->input->post("IdJugador");
        $IdJugador1= $this->input->post("IdJugador1");
       
        

      $datos= array(
          //"idEquipo"=> $idEquipo,
          "NombreE"=> $NombreE,
          "CategoriaE"=>$CategoriaE,
          "IdJugador"=>$IdJugador,
          "IdJugador1"=> $IdJugador1,
          

          );


     $this->Gestor_model->agregarEquipo($datos);
     redirect('Gestor/equipo');

   }

   public function creaPartido(){
        $Fecha = $this->input->post("Fecha");
        $HoraInicio= $this->input->post("HoraInicio");
        $HoraFinal=$this->input->post("HoraFinal");
        $Sets= $this->input->post("Sets");
        $Marcador=$this->input->post("Marcador");
        $Equipo1=$this->input->post("Equipo1");
        $Equipo2= $this->input->post("Equipo2");
        $Jugador1= $this->input->post("Jugador1");
        $Jugador2= $this->input->post("Jugador2");
        $idCompeticion= $this->input->post("idCompeticion");

        $datos= array(
          "Fecha"=> $Fecha,
          "HoraInicio"=>$HoraInicio,
          "HoraFinal"=>$HoraFinal,
          "Sets"=> $Sets,
          "Marcador"=> $Marcador,
          "Equipo1"=>$Equipo1,
          "Equipo2"=>$Equipo2,
          "Jugador1"=> $Jugador1,
          "Jugador2"=>$Jugador2,
          "idCompeticion"=> $idCompeticion
          );

         $this->Gestor_model->agregaPartido($datos);
         redirect('Gestor/partido');


   }

   
  /*public function Categoria_Inscritos($idJugador,$Categoria){

    $this->db->where('idJugador',$idJugador);
    $query=$this->db->get('Jugador');


  if($fila["Sexo"]=="Masculino"&& $fila1["Categoria"]=="Masculino"){
  	return true;
  }

  else if($fila["Sexo"]=="Femenino"&& $fila1["Categoria"]=="Femenino"){ 
    return true;
  }

  else{
  	return false;
  }*/

	
}
