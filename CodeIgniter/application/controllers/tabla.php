<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabla extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('base');

	}
	function index(){
		
		

		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('geral');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
	}
	function aviso(){
		$consulta=$this->base->consultatabla();
		if($consulta===NULL){
			$this->base->creartabla();
			$this->load->view('tabla/instalado');
				}
		else{
		
		$this->load->view ('tabla/aviso2');
		}
	}

	function nuevo_empleado(){
    	$this->load->helper('form');
    	$this->load->view("tabla/aviso");
	}

	public function prueba(){
		$this->load->view('geral');

	}

	public function username_check($str)
        {
                if ($str == 'test')
                {
                        $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

}
?>