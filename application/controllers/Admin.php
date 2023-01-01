<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('User_model');
    }
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['user'] = $this->User_model->get();
        $this->load->view("Layout/Header", $data);
        $this->load->view("Admin/vw_admin", $data);
        $this->load->view("Layout/Footer");
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->User_model->get();
        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama Wajib di isi']);
        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email Wajib di isi']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("Layout/Header", $data);
            $this->load->view("Admin/vw_tambahadmin", $data);
            $this->load->view("Layout/Footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),               
            ];
            $this->User_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin Berhasil Ditambah!</div>');
            redirect('Admin');
        }
    }
    public function edit($id)
    {
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama Wajib di isi']);
        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email Wajib di isi']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password Wajib di isi']);
        if ($this->form_validation->run() == false) {
			$data['user'] = $this->User_model->getById($id);
            $this->load->view("Layout/Header", $data);
            $this->load->view("Admin/vw_editadmin", $data);
            $this->load->view("Layout/Footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                
            ];
            $id = $this->input->post('id');
            $this->User_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin Berhasil Di Ubah !</div>');
            redirect('Admin');
        }
    }
	public function ubah(){
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			
		];
	
		$id = $this->input->post('id');
		$this->User_model->update(['id' => $id], $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin Berhasil Di Ubah !</div>');
		redirect('Admin');
	}
    public function hapus($id)
    {
        $this->User_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-white font-weight-bold" role="alert"><i class="ni ni-books"></i>Data tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-white font-weight-bold" role="alert"><i
            class="ni ni-like-2"></i>Data Berhasil Dihapus!</div>');
        }
        redirect('Admin');
    }
    
}
