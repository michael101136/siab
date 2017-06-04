<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Alquiler_model extends CI_Model {


function get_alquiler(){

		$this->db->order_by('tnicho.id_nicho','DESC');
		$this->db->select(',categoria,nombre_cuartel,numero_nicho,nivel,CONCAT(tdifunto.nombre," ",tdifunto.apellido) as nombre,CONCAT(tresponsable.nombre_responsable," ",tresponsable.apellido_responsable) as responsable,fecha_inicio,fecha_final,EstadoA');
		$this->db->from('tnicho');
		$this->db->join('tcuartel', 'tnicho.id_cuartel=tcuartel.id_cuartel');
		$this->db->join('tcategoria', 'tcuartel.id_categoria=tcategoria.id_categoria');
		$this->db->join('pasaje', 'pasaje.id_pasaje=tcuartel.id_pasaje');
		//para difunto y responsable
		$this->db->join('tnicho_detalle', 'tnicho_detalle.id_nicho=tnicho.id_nicho');
		$this->db->join('tdifunto', 'tnicho_detalle.id_difunto=tdifunto.id_difunto');
		$this->db->join('tresponsable', 'tresponsable.Dni_responsable=tdifunto.Dni_responsable');
		$consulta = $this->db->get();
		return $consulta->result();
	}
function Get_categoria(){
		$this->db->select('id_categoria,categoria');
		$this->db->from('tcategoria');
		$consulta = $this->db->get();
		return $consulta->result();
		}
function get_cuartel($id_categoria){
	    $this->db->select('*');
		$this->db->from('tcuartel');
		$this->db->where('id_categoria',$id_categoria);
		$consulta = $this->db->get();
		return $consulta->result();
		}
function get_nicho($id_cuartel){
				$this->db->select('id_nicho,CONCAT("Nivel",nivel,":",numero_nicho) as nicho');
				$this->db->from('tnicho');
				$this->db->where('id_cuartel',$id_cuartel);
				$consulta = $this->db->get();
				return $consulta->result();
			}


}