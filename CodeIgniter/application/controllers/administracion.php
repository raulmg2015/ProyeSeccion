<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administracion extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view ('administracion/principal');
	}


}
?>