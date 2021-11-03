<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_admin extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_1');
	}
 
	public function index()
	{
		$this->load->view('admin/login_ad');
	}
 
	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth_1->login_user($username,$password))
		{
			redirect(base_url('admin/dashboard'));
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect(base_url('login_admin'));
		}
	}
 
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_login');
		redirect(base_url('login_admin'));
	}
 
	
 
}