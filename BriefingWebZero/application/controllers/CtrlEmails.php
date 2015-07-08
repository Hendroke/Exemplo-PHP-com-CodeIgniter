<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlEmails extends CI_Controller {

	public function index(){
        //$this->load->model("ModelMembro");
		//$dados["membros"] = $this->ModelMembro->get_all("");
		//$this->load->view("ViewAdmMembro",$dados);
    }
    
    public function create_emails(){
        $this->load->model("ModelEmails");
		$dados = array(
			"email" => $this->input->post("email")
		);
		if($this->ModelEmails->add_record($dados)){
             $this->session->set_flashdata("msg","Criado com sucesso!");
			 redirect("CtrlHome");
        }
    }
	
	public function delete_emails(){
        $this->load->model("ModelEmails");
		if($this->ModelEmails->delete_record()){
			$this->session->set_flashdata("msg","Deletado com sucesso!");
			redirect("CtrlAdm");
		}else{
			die("Erro...");
		}
    }
	
}
