<?php

class ModelBanner extends CI_Model{

	public function get_all($banner){
		if($banner !== ""){
			$this->db->where("banner",$banner);
		}
		$query = $this->db->get("banners");
		return $query->result();
	}
	
	public function add_record($dados = array()){
        $this->db->insert("banners",$dados);
        return $this->db->affected_rows();
    }
	
	public function delete_record(){
        $this->db->where("id",$this->uri->segment(3));
		$this->db->delete("banners");
        return $this->db->affected_rows();
    }
	
	public function update_record($dados = array()){
        if(isset($dados["foto"])){
			$this->db->set("banner",$dados["foto"]);
		}
		$this->db->where("id",$dados["id"]);
		$this->db->update("banners");
        return $this->db->affected_rows();
    }
	
	function get_by_id($id){
		$this->db->where("id",$id);
		$query = $this->db->get("banners");
		return $query->row(0);
	}
}
