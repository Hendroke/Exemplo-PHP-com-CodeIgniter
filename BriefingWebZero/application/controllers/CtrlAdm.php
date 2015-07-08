<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlAdm extends CI_Controller {

	public function index(){
		$this->load->model("ModelUsuario");
		$user = $this->ModelUsuario->get_usuario_status("on");
		if(!$user){
			redirect("CtrlLogin");
		}else{
			$this->load->model("ModelBanner");
			$dados["banners"] = $this->ModelBanner->get_all("");
			$this->load->model("ModelTexto");
			$dados["textos"] = $this->ModelTexto->get_all("");
			$this->load->model("ModelMembro");
			$dados["membros"] = $this->ModelMembro->get_all("");
			$this->load->model("ModelEmails");
			$dados["emails"] = $this->ModelEmails->get_all("");
			$this->load->view("ViewAdm",$dados);
		}
    }
}
