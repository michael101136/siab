<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Alquiler_model extends CI_Model {


function get_alquiler(){

		$this->db->order_by('tnicho.id_nicho','DESC');
		$this->db->select('*');
		$this->db->from('tnicho');
		$this->db->join('tcuartel', 'tnicho.id_cuartel=tcuartel.id_cuartel');
		$this->db->join('tcategoria', 'tcuartel.id_categoria=tcategoria.id_categoria');
		$this->db->join('pasaje', 'pasaje.id_pasaje=tcuartel.id_pasaje');
		$consulta = $this->db->get();
		return $consulta->result();
	}


}