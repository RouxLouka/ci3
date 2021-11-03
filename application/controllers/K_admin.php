<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class K_admin extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('auth_1');
        $this->load->model('m_kadmin');
        $this->load->library('form_validation');
		$this->auth_1->cek_login();
	}
 
 
	public function index()
	{
        $data['admin'] = $this->m_kadmin->getAll();
		$this->load->view('admin/k_admin',$data);
	}

	public function save()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('username','username','required');
		if ($this->form_validation->run()==true)
        {
			$data['username'] = $this->input->post('username');
			$password = $this->input->post('password');
			$data['password'] = password_hash($password,PASSWORD_DEFAULT);
			$this->m_kadmin->save($data);
			redirect(base_url('admin/k_admin'));
		}
		else
		{
			$this->load->view(base_url('admin/k_admin'));
		}
	}
	
	function delete($id)
	{
		$this->m_kadmin->delete($id);
		redirect(base_url('admin/k_admin'));
	}
}