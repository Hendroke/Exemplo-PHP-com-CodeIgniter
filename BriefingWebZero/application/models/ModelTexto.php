<?php

class ModelTexto extends CI_Model{

	public function get_all($id){
		if($id !== ""){
			$this->db->where("id",$id);
		}
		$query = $this->db->get("textos");
		return $query->result();
	}
	
	public function update_record($dados = array()){
        if(isset($dados["titulo"])){
			$this->db->set("titulo",$dados["titulo"]);
		}
		if(isset($dados["texto"])){
			$this->db->set("texto",$dados["texto"]);
		}
		$this->db->where("id",$dados["id"]);
		$this->db->update("textos");
        return $this->db->affected_rows();
    }
	
	function get_by_id($id){
		$this->db->where("id",$id);
		$query = $this->db->get("textos");
		return $query->row(0);
	}
}
