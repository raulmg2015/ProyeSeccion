<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->helper ('url');
		$this->load->view ('admin/bien');
	}


}
?>