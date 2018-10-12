<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aswho extends CI_Controller {
	public function index()
	{
 		// $_SESSION['activestat'] = $_REQUEST['value'];
 		$this->session->set_userdata('activestat', $_REQUEST['value']);
 		echo "string";
	}
}
