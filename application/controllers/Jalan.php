<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jalan extends CI_Controller
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
        //$data['macet'] = $this->Sembako_model->tsembako();
        $data['tb_pencurian'] = $this->Pencurian_model->get();
        $this->load->view("Layout/Header", $data);
        $this->load->view("Admin/vw_jalan", $data);
        $this->load->view("Layout/Footer");
    }
    public function tambah()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
        $this->form_validation->set_rules('jalan', 'Jalan', 'required', ['required' => 'Jalan Wajib di isi']);
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', ['required' => 'Latitude Wajib di isi']);
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', ['required' => 'Longitude prodi Wajib di isi']);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'Kategori Wajib di isi']);
		$this->form_validation->set_rules('foto', 'Foto', 'required', ['required' => 'Foto Wajib di isi']);
		if ($this->form_validation->run() == false) {
			$data['tb_pencurian'] = $this->Pencurian_model->get();
            $this->load->view("Layout/Header", $data);
            $this->load->view("Admin/vw_tambahjalan", $data);
            $this->load->view("Layout/Footer");
		} 
	}
	public function insert(){
		$data = [
			'jalan' => $this->input->post('jalan'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'kategori' => $this->input->post('kategori'),
			'foto' => "http://localhost/kriminal2/assets/images/jalan/".  $_FILES['foto']['name']
		];
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['upload_path'] = './assets/images/jalan/';
		$this->load->library('upload', $config);
		$this->upload->do_upload('foto');
		$this->Pencurian_model->insert($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jalan Berhasil Ditambah!</div>');
		redirect('Jalan');
	}
	public function ubah(){
		$upload_image = $_FILES['foto']['name'];
		$data = [
			'jalan' => $this->input->post('jalan'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'kategori' => $this->input->post('kategori'),
			'foto' => "http://localhost/kriminal2/assets/images/jalan/".  $_FILES['foto']['name']
		];
		$id = $this->input->post('id');
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['upload_path'] = './assets/images/jalan/';
		$this->load->library('upload', $config);
		$this->upload->do_upload('foto');
			$this->Pencurian_model->update(['id' => $id], $data);
		redirect('Jalan');
	}
	function edit($id)
	{
		
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('jalan', 'Jalan', 'required', ['required' => 'Alamat Wajib di isi']);
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', ['required' => 'Latitude Wajib di isi']);
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', ['required' => 'Longitude Wajib di isi']);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'Kategori Wajib di isi']);
		$this->form_validation->set_rules('foto', 'Foto', 'required', ['required' => 'Foto Wajib di isi']);
		if ($this->form_validation->run() == false) {
			$data['tb_pencurian'] = $this->Pencurian_model->getById($id);
            $this->load->view("Layout/Header", $data);
            $this->load->view("Admin/vw_editjalan", $data);
            $this->load->view("Layout/Footer");
		}
	}
	
    public function hapus($id)
	{
		$this->Pencurian_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-white font-weight-bold" role="alert"><i class="ni ni-books"></i>Data tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success text-white font-weight-bold" role="alert"><i
			class="ni ni-like-2"></i>Data Berhasil Dihapus!</div>');
		}
		redirect('Jalan');
	}
}