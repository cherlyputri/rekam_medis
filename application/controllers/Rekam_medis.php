<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekam_medis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('username')) {
			redirect(base_url("auth"));
		}
		$this->load->model('Pasien_model');
		$this->load->model('Pemeriksaan_model');
		$this->load->model('Resep_model');
		$this->load->model('Obat_model');
		$this->load->model('m_id');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$judul['judul'] = 'Halaman Rekam Medis';
		$data['koderesep'] = $this->m_id->buat_kode_resep();
		$data['data'] = $this->Pemeriksaan_model->getRekamMedisData();
		$data['dokter'] = $this->db->get_where('dokter', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/home_header', $judul);
		$this->load->view('templates/home_sidebar');
		$this->load->view('templates/home_topbar', $data);
		$this->load->view('rekam_medis/index', $data);
		$this->load->view('templates/home_footer');
	}
}
