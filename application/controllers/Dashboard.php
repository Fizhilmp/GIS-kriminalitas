<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Pencurian_model');
        $this->load->model('User_model');
    }
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['us'] = $this->User_model->tuser();
        $this->load->view("Layout/Header", $data);
        $this->load->view("Admin/Dashboard", $data);
        $this->load->view("Layout/Footer");
    }
    function dashboard_user()
    { 
        $data['kriminal'] = $this->Pencurian_model->get();
        $this->load->view("Layout/Header_User");
        $this->load->view("User/Dashboard", $data);
        $this->load->view("Layout/Footer_User");
    }
    function search()
    {
        $jalan=$this->input->post("search");
        $data['kriminal'] = $this->Pencurian_model->getByIdSearch($jalan);
        $this->load->view("Layout/Header_User");
        $this->load->view("User/Search", $data);
        $this->load->view("Layout/Footer_User");
    }
}
