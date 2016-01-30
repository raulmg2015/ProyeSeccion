<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vistas extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}
	function index(){
		
						
                        $this->load->view('conten_adm');                
	}
	function u(){
		
						
                        $this->load->view('u');                
	}
	function c(){
		
						
                        $this->load->view('c');                
	}
	function g(){
		
						
                        $this->load->view('g');                
	}
	function t(){
		
						
                        $this->load->view('t');                
	}

	function usuario(){
		
						
                        $this->load->view('conten_usuario');                
	}
}
?>