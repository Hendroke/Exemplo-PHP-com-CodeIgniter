<?php

class ModelMembro extends CI_Model{

	public function get_all($nome){
		if($nome !== ""){
			$this->db->where("nome",$nome);
		}
		$query = $this->db->get("membros");
		return $query->result();
	}
	
	public function add_record($dados = array()){
        $this->db->insert("membros",$dados);
        return $this->db->affected_rows();
    }
	
	public function delete_record(){
        $this->db->where("id",$this->uri->segment(3));
		$this->db->delete("membros");
        return $this->db->affected_rows();
    }
	
	public function update_record($dados = array()){
        if(isset($dados["nome"])){
			$this->db->set("nome",$dados["nome"]);
		}
		if(isset($dados["foto"])){
			$this->db->set("foto",$dados["foto"]);
		}
		$this->db->where("id",$dados["id"]);
		$this->db->update("membros");
        return $this->db->affected_rows();
    }
	
	function get_by_id($id){
		$this->db->where("id",$id);
		$query = $this->db->get("membros");
		return $query->row(0);
	}
}
