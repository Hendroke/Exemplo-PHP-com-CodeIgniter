<?php

class ModelEmails extends CI_Model{

	public function get_all($email){
		if($email !== ""){
			$this->db->where("email",$email);
		}
		$query = $this->db->get("emails");
		return $query->result();
	}
	
	public function add_record($dados = array()){
        $this->db->insert("emails",$dados);
        return $this->db->affected_rows();
    }
	
	public function delete_record(){
        $this->db->where("id",$this->uri->segment(3));
		$this->db->delete("emails");
        return $this->db->affected_rows();
    }
	
	public function update_record($dados = array()){
        if(isset($dados["email"])){
			$this->db->set("emails",$dados["email"]);
		}
		$this->db->where("email",$dados["email"]);
		$this->db->update("emails");
        return $this->db->affected_rows();
    }
	
	/*function get_by_id($id){
		$this->db->where("id",$id);
		$query = $this->db->get("emails");
		return $query->row(0);
	}*/
}
