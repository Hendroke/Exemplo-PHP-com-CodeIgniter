<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlContato extends CI_Controller {

	public function index(){
        $dados["dados"] = array(
			"titulo" => "Avaliação - Contato"
		);
		$this->load->view("ViewContato",$dados);
    }
	
	public function send_email(){
        $nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$assunto = $this->input->post("assunto");
		$mensagem = $this->input->post("mensagem");
		$to  = "gabrielblcampos_@hotmail.com" ;
		if(mail($to, $assunto, $mensagem, $headers)){
			redirect("CtrlHome");
		}else{
			redirect("CtrlContato");
		}
	}
}
