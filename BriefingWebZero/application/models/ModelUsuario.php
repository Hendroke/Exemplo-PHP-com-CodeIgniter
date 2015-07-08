<?php

class ModelUsuario extends CI_Model{

	public function get_all($status){
		if($status !== ""){
			$this->db->where("status",$status);
		}
		$query = $this->db->get("usuarios");
		return $query->result();
	}
	
	function get_by_id($id){
		$this->db->where("id",$id);
		$query = $this->db->get("usuarios");
		return $query->row(0);
	}
	
	function get_usuario($usuario,$senha){
		$this->db->where("usuario",$usuario);
		$this->db->where("senha",$senha);
		$query = $this->db->get("usuarios");
		return $query->row(0);
	}
	
	function get_usuario_status($status){
		$this->db->where("status",$status);
		$query = $this->db->get("usuarios");
		return $query->row(0);
	}
}
