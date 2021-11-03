<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class K_formulir extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
		$this->load->model('auth_1');
		$this->auth_1->cek_login();
	}
 
 
	public function index()
	{
		$this->load->view('admin/k_formulir');
	}
}