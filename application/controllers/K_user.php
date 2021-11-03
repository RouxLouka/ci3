<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class K_user extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
		$this->load->model('auth_1');
        $this->load->model('m_kuser');
        $this->load->library('form_validation');
		$this->auth_1->cek_login();
	}
 
	public function index()
	{
        $data['user'] = $this->m_kuser->getAll();
		$this->load->view('admin/k_user',$data);
	}

	function delete($id)
	{
		$this->m_kuser->delete($id);
		redirect(base_url('admin/k_user'));
	}
}