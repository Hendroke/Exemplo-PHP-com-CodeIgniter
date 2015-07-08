<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlLogin extends CI_Controller {

	public function index(){
        $dados["dados"] = array(
			"titulo" => "WebZero - Teste"
		);
		$this->load->view("ViewLogin",$dados);
    }
    
	function login(){
		$this->load->model("ModelUsuario");
		$user = $this->ModelUsuario->get_usuario($this->input->post("usuario"),$this->input->post("senha"));
		if(!$user){
			redirect("CtrlLogin");
		}
		$this->db->set("usuario",$user->usuario);
		$this->db->set("senha",$user->senha);
		$this->db->set("status","on");
		$this->db->where("id",$user->id);
		$this->db->update("usuarios");
		redirect("CtrlAdm");
	}
	
	function sair(){
		$this->load->model("ModelUsuario");
		$user = $this->ModelUsuario->get_usuario_status("on");
		if($user){
			$this->db->set("usuario",$user->usuario);
			$this->db->set("senha",$user->senha);
			$this->db->set("status","off");
			$this->db->where("id",$user->id);
			$this->db->update("usuarios");
			redirect("CtrlHome");
		}
	}
}
