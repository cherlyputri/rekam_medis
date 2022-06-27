<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perawat extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect(base_url("auth"));
		}
		$this->load->model('Pemeriksaan_model');
		$this->load->model('Resep_model');
		$this->load->model('Tarif_model');
		$this->load->model('Aturan_pakai_model');
	}

	public function index()
	{
		$judul['judul'] = 'Halaman Beranda Perawat';
		//Ini buat manggil fungsi jumlahrm dari model Pemeriksaan_model terus ditampung di array namanya jumlahrm. $data['jumlahrm'] itu array
		$data['jumlahrm'] = $this->Pemeriksaan_model->jumlahrm();
		$data['jumlahresepobat'] = $this->Resep_model->jumlahresepobat();
		$data['jumlahtindakan'] = $this->Tarif_model->jumlahtindakan();
		$data['jumlahaturanpakai'] = $this->Aturan_pakai_model->jumlahaturanpakai();
		$data['perawat'] = $this->db->get_where('perawat', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/home_header', $judul);
		$this->load->view('templates/home_sidebar', $data);
		$this->load->view('templates/home_topbar', $data);
		$this->load->view('perawat/index', $data);
		$this->load->view('templates/home_footer', $data);
	}
}
