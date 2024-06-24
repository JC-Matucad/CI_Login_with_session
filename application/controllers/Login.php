<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Login_model');
    }

    function index()
    {
        if ($this->session->userdata('statusData') == false) {
            $this->load->view('Pages/Login');
        } else {
            redirect(base_url('Welcome'));
        }
    }

    function Validate()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name = $this->input->post('inpName');
            $password = $this->input->post('inpPassword');

            $data = array(
                'name'=>$name,
                'password'=>$password
            );

            $statusData = $this->Login_model->ValidateUser($data);

            if ($statusData){
                
                $this->session->set_userdata('statusData', $statusData);
                redirect(base_url('Welcome'));
            }
            else{
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect(base_url('Login'));
            }
            
        }
        else{
            $this->load->view('Pages/Login');
        }
    }
}