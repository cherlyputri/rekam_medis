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
		// $data['detail'] = $this->Pemeriksaan_model->detailRekam();
		$data['dokter'] = $this->db->get_where('dokter', ['username' => $this->session->userdata('username')])->row_array();
		$data['rekammedis'] = $this->Pemeriksaan_model->getAll();
		$data['resep'] = $this->Pemeriksaan_model->getObat();

		$this->load->view('templates/home_header', $judul);
		$this->load->view('templates/home_sidebar');
		$this->load->view('templates/home_topbar', $data);
		$this->load->view('rekam_medis/index', $data);
		$this->load->view('templates/home_footer');
	}

	public function detailRekam($id)
	{
		$judul['judul'] = 'Detail Rekamedis';
		$where = array('id_periksa' => $id);
		$data1['pemeriksaan'] = $this->Pemeriksaan_model->detailRekam($where)->result();
		$data['data'] = $this->Pemeriksaan_model->detailRekam2($where)->result();
		$data['dokter'] = $this->db->get_where('dokter', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/home_header', $judul);
		$this->load->view('templates/home_sidebar');
		$this->load->view('templates/home_topbar', $data);
		$this->load->view('rekam_medis/detail', $data1);
		$this->load->view('templates/home_footer');
	}

	public function cetakRekam()
	{
		$ket = 'Semua Data Pasien';
		$alamat = 'Jl. Gita - Payahe, Talagamori, Oba Kota Tidore Kepulauan Maluku Utara';

		ob_start();
		require('assets/pdf/fpdf.php');
		$data['pasien'] = $this->Pasien_model->view_all();
		$data['ket'] = $ket;
		$data['alamat'] = $alamat;
		$this->load->view('data_pasien/preview', $data);
	}
}
