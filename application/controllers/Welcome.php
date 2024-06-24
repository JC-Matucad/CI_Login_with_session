<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Login_model');
    }
	
	public function index()
	{
		$statusData = $this->session->userdata('statusData');
        $data['statusData'] = $statusData;

        $this->load->view('Pages/Welcome', $data);
	}

	public function Logout()
	{
		$this->session->sess_destroy();
        $this->load->model('Login_model');
	}
}
