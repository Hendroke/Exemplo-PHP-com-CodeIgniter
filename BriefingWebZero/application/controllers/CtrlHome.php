<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlHome extends CI_Controller {

	public function index(){
        $this->load->model("ModelBanner");
		$dados["banners"] = $this->ModelBanner->get_all("");
		$this->load->model("ModelTexto");
		$dados["textos"] = $this->ModelTexto->get_all("");
		$this->load->model("ModelUsuario");
		$dados["dados"] = array(
			"titulo" => "Avaliação - Home"
		);
		$this->load->view("ViewHome",$dados);
    }
	
	public function gologin(){
		redirect("CtrlLogin");
	}
    
    public function create_membro(){
        $this->load->model("ModelMembro");
		$dados = array(
			"nome" => $this->input->post("usuario"),
			"email" => $this->input->post("email"),
			"senha" => $this->input->post("senha")
		);
		if($this->ModelMembro->add_record($dados)){
             $this->session->set_flashdata("msg","Criado com sucesso!");
			 redirect("CtrlMembro");
        }
    }
	
	public function delete_membro(){
        $this->load->model("ModelMembro");
		if($this->ModelMembro->delete_record()){
			$this->session->set_flashdata("msg","Deletado com sucesso!");
			redirect("CtrlMembro");
		}else{
			die("Erro...");
		}
    }
	
	public function update_membro($id){
        $this->load->model("ModelMembro");
		$dados["membro"] = $this->ModelMembro->get_by_id($id);
		$this->form_validation->set_rules("usuario", "usuario", "trim|required");
		if($this->form_validation->run()){
			$_POST["id"] = $id;
			if($this->ModelMembro->update_record($_POST)){
				$this->session->set_flashdata("msg","Alterado com sucesso!");
				redirect("CtrlHome");
			}
		}
		$this->load->view("ViewMembro_Update",$dados);
	}
}
