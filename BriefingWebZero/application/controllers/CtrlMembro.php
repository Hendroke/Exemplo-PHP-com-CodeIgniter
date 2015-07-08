<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlMembro extends CI_Controller {

	public function index(){
        //$this->load->model("ModelMembro");
		//$dados["membros"] = $this->ModelMembro->get_all("");
		//$this->load->view("ViewAdmMembro",$dados);
    }
    
    public function create_membro(){
        $this->load->model("ModelMembro");
		$dados = array(
			"nome" => $this->input->post("nome"),
			"foto" => $this->input->post("foto")
		);
		if($this->ModelMembro->add_record($dados)){
             $this->session->set_flashdata("msg","Criado com sucesso!");
			 redirect("CtrlAdm");
        }
    }
	
	public function delete_membro(){
        $this->load->model("ModelMembro");
		if($this->ModelMembro->delete_record()){
			$this->session->set_flashdata("msg","Deletado com sucesso!");
			redirect("CtrlAdm");
		}else{
			die("Erro...");
		}
    }
	
	public function update_membro($id){
        $this->load->model("ModelMembro");
		$dados["membro"] = $this->ModelMembro->get_by_id($id);
		$this->form_validation->set_rules("nome", "nome", "trim|required");
		$this->form_validation->set_rules("foto", "foto", "trim|required");
		if($this->form_validation->run()){
			$_POST["id"] = $id;
			if($this->ModelMembro->update_record($_POST)){
				$this->session->set_flashdata("msg","Alterado com sucesso!");
				redirect("CtrlAdm");
			}
		}
		$this->load->view("ViewMembro_Update",$dados);
	}
}
