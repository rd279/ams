<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	public function index()
	{
		if($this->session->userdata('status') == "login"){
			redirect(base_url("dashboard"));
		}
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$whereu = array(
			'username' => $username
			);
		$cek = $this->m_login->cek_login("user",$where);
		$ceku = $this->m_login->cek_login("user",$whereu);
		// $cek = $this->m_login->cek_login("user",$where)->result();
		if($cek->num_rows() > 0){
 			foreach($cek->result() as $data){
 				if ($data->admin == 1){
 					$activestat = 'admin';
 				} elseif ($data->auditor == 1) {
 					$activestat = 'auditor';
 				} elseif ($data->auditee == 1) {
 					$activestat = 'auditee';
 				}

			$data_session = array(
				'username' => $username,
				'status' => "login",
				'admin' => $data->admin,
				'auditor' => $data->auditor,
				'auditee' => $data->auditee,
				'activestat' => $activestat
				);
 			}
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else if ($ceku->num_rows() == 0){
			$pesan = array(
	        'login'  => "kosong"
				);
			$this->session->set_tempdata($pesan, NULL, 10);
			redirect(base_url("login"));
		}else{
			$pesan = array(
	        'login'  => "gagal"
				);
			$this->session->set_tempdata($pesan, NULL, 10);
			redirect(base_url("login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
