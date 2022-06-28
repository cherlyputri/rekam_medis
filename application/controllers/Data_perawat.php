<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_perawat extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect(base_url("auth"));
		}
		$this->load->model('Dokter_model');
		$this->load->model('Perawat_model');
		$this->load->model('Perawat_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$judul['judul'] = 'Halaman Data Perawat';
		$data['perawat'] = $this->db->query("SELECT * FROM perawat ")->result();
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/home_header', $judul);
		$this->load->view('templates/home_sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('data_perawat/index', $data);
		$this->load->view('templates/home_footer');
	}
	public function tambah()
	{

		$judul['judul'] = 'Halaman Tambah Data Perawat';
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Pengguna', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas_obat.username]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password tidak sama !', 'min_length' => 'password terlalu pendek !'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/home_header', $judul);
			$this->load->view('templates/home_sidebar');
			$this->load->view('templates/topbar', $data);
			$this->load->view('data_perawat/input');
			$this->load->view('templates/home_footer');
		} else {
			$this->Perawat_model->tambah_data();
			redirect('data_perawat/index');
		}
	}

	public function hapus_data($id)
	{
		$this->Perawat_model->hapus_data($id);
		// $this->db->query("DELETE * From perawat where id_perawat=$id");
		redirect('data_perawat/index');
	}


	public function ubah($id)
	{

		$judul['judul'] = 'Halaman Ubah Data Perawat';
		$where1 = array('id_perawat' => $id);
		$data1['perawat'] = $this->Perawat_model->edit_data($where1, 'perawat')->result();
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/home_header', $judul);
		$this->load->view('templates/home_sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('data_perawat/ubah', $data1);
		$this->load->view('templates/home_footer');
	}
	function update()
	{
		$id = $this->input->post('id_perawat');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$aktif = $this->input->post('aktif');
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'aktif' => $aktif
		);
		$where = array('id_perawat' => $id);

		$this->Perawat_model->update_data($where, $data, 'perawat');
		redirect('data_perawat');
	}
}
