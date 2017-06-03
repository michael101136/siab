<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alquiler extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
        $this->load->model("Alquiler_model");

	}
    
    /* Pagina principal de la vista entidad Y servicio publico asociado */
	public function index()
	{
		$this->_load_layout('admin/alquiler/alquiler');
    //$this->_load_layout('Front/Administracion/frmFuncion');
	}
  public function get_alquiler()
  {
    if ($this->input->is_ajax_request()) {
      $datos = $this->Alquiler_model->get_alquiler();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }

  }
	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
