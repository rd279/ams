<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('status') !== "login"){
			redirect(base_url("login"));
		}
		$this->load->view('dashboard');
	}
}
