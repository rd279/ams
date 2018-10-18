<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SOTK extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_SOTK');
	}

	public function index(){
		if($this->session->userdata('status') !== "login"){
			redirect(base_url("login"));
		}
		if ($this->session->userdata('activestat') !== "admin") {
			echo "<script>
			alert('Anda tidak memiliki hak akses ini!');
			window.location.href='dashboard';
			</script>";
			// echo "<script type='text/javascript'>alert('Anda tidak memiliki hak akses ini!');</script>";
			// redirect(base_url("dashboard"));
		}
			$this->load->view('SOTK');
		
	}

	function data_sotk(){
		$data = $this->M_SOTK->list();
		echo json_encode($data);
	}

	function get(){
		$id = $this->input->get('id');
		$data = $this->M_SOTK->get_by_id($id);
		echo json_encode($data);
	}

	function simpan(){
		$this->db->select("MAX(id) AS id");
		$this->db->from("sotk_lvl1");
		$query = $this->db->get();
	    $this->db->limit(1);
	    $rows = $query->row()->id;
	    $jum = $query->num_rows();

	    if ($jum == 0) {
	    	$id = 1;
	    } else {
			$id = $rows + 1;
	    }
	    $id = $id;
		$name = $this->input->post('name');
		$data = $this->M_SOTK->simpan($id,$name);
		echo json_encode($data);
	}

	function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$data = $this->M_SOTK->update($id,$name);
		echo json_encode($data);
	}

	function hapus(){
		$id = $this->input->post('id');
		$data = $this->M_SOTK->hapus($id);
		echo json_encode($data);
	}
}