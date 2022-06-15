<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mimin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect(base_url("auth"));
		}

		$this->load->model('Pasien_model');
		$this->load->model('Admin_model');
		$this->load->model('Dokter_model');
		$this->load->model('Apoteker_model');
		$this->load->model('Pembayaran_model');
	}

	public function index()
	{
		$judul['judul'] = 'Halaman Beranda Admin';
		//Ini buat manggil fungsi jumlahpasien dari model Pasien_model terus ditampung di array namanya jumlahpasien. $data['jumlahpasien'] itu array
		$data['jumlahpasien'] = $this->Pasien_model->jumlahpasien();
		//Ini buat manggil fungsi jumlahadmin dari model Admin_model terus ditampung di array namanya jumlahadmin. $data['jumlahadmin'] itu array
		$data['jumlahadmin'] = $this->Admin_model->jumlahadmin();
		$data['jumlahdokter'] = $this->Dokter_model->jumlahdokter();
		$data['jumlahapoteker'] = $this->Apoteker_model->jumlahapoteker();
		$data['jumlahpembayaran'] = $this->Pembayaran_model->jumlahpembayaran();
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/home_header', $judul);
		$this->load->view('templates/home_sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/home_footer', $data);
	}
}
