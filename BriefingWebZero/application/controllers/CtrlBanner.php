<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlBanner extends CI_Controller {

	public function index(){
        //$this->load->model("ModelMembro");
		//$dados["membros"] = $this->ModelMembro->get_all("");
		//$this->load->view("ViewAdmMembro",$dados);
    }
    
    public function create_banner(){
        $this->load->model("ModelBanner");
		$dados = array(
			"banner" => $this->input->post("foto")
		);
		if($this->ModelBanner->add_record($dados)){
             $this->session->set_flashdata("msg","Criado com sucesso!");
			 redirect("CtrlAdm");
        }
    }
	
	public function delete_banner(){
        $this->load->model("ModelBanner");
		if($this->ModelBanner->delete_record()){
			$this->session->set_flashdata("msg","Deletado com sucesso!");
			redirect("CtrlAdm");
		}else{
			die("Erro...");
		}
    }
	
	public function update_banner($id){
        $this->load->model("ModelBanner");
		$dados["banner"] = $this->ModelBanner->get_by_id($id);
		$this->form_validation->set_rules("foto", "foto", "trim|required");
		if($this->form_validation->run()){
			$_POST["id"] = $id;
			if($this->ModelBanner->update_record($_POST)){
				$this->session->set_flashdata("msg","Alterado com sucesso!");
				redirect("CtrlAdm");
			}
		}
		$this->load->view("ViewBanner_Update",$dados);
	}
	
}
