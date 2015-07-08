<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTexto extends CI_Controller {

	public function index(){
        //$this->load->model("ModelMembro");
		//$dados["membros"] = $this->ModelMembro->get_all("");
		//$this->load->view("ViewAdmMembro",$dados);
    }
    
    public function create_texto(){
        $this->load->model("ModelTexto");
		$dados = array(
			"titulo" => $this->input->post("titulo"),
			"texto" => $this->input->post("texto")
		);
		if($this->ModelTexto->add_record($dados)){
             $this->session->set_flashdata("msg","Criado com sucesso!");
			 redirect("CtrlAdm");
        }
    }
	
	public function delete_texto(){
        $this->load->model("ModelTexto");
		if($this->ModelTexto->delete_record()){
			$this->session->set_flashdata("msg","Deletado com sucesso!");
			redirect("CtrlAdm");
		}else{
			die("Erro...");
		}
    }
	
	public function update_texto(){
		$id = $this->input->post("id_texto");
        $this->load->model("ModelTexto");
		$dados["texto"] = $this->ModelTexto->get_by_id($id);
		$this->form_validation->set_rules("id_texto", "id_texto", "trim|required");
		$this->form_validation->set_rules("titulo", "titulo", "trim|required");
		$this->form_validation->set_rules("texto", "texto", "trim|required");
		if($this->form_validation->run()){
			$_POST["id"] = $id;
			if($this->ModelTexto->update_record($_POST)){
				$this->session->set_flashdata("msg","Alterado com sucesso!");
				redirect("CtrlAdm");
			}
		}
		redirect("CtrlHome");
	}
	
}
