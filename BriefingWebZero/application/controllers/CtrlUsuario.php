<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlUsuario extends CI_Controller {

	public function index(){
        //$this->load->model("ModelMembro");
		//$dados["membros"] = $this->ModelMembro->get_all("");
		//$this->load->view("ViewAdmMembro",$dados);
    }
	
	public function update_usuario($id){
        $this->load->model("ModelUsuario");
		$dados["usuario"] = $this->ModelUsuario->get_by_id($id);
		$_POST["id"] = $id;
			if($this->ModelUsuario->update_record($_POST)){
				$this->session->set_flashdata("msg","Alterado com sucesso!");
				redirect("CtrlHome");
			}
		}
	}
}
