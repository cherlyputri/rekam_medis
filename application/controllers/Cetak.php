<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Resep_model');
    $this->load->model('Pemeriksaan_model');
    $this->load->model('m_id');
  }
  public function index()
  {
    $data = array(
      'pasien' => $this->db->get('pasien')
    );
    $this->load->view('v_index', $data);
  }

  public function cetak($kd_rm)
  {
    $data = array(
      'pasien'  => $this->db->query("SELECT * FROM pasien where kd_rm='$kd_rm'"),
    );
    ob_start();
    require('assets/pdf/fpdf.php');
    $this->load->view('data_pasien/cetak', $data);
  }
  
  public function cetakRekam($id)
  {
    $ket = 'Data Rekamedis';
		$alamat = 'Jl. Gita - Payahe, Talagamori, Oba Kota Tidore Kepulauan Maluku Utara';

		ob_start();
		require('assets/pdf/fpdf.php');

    $where = array('id_periksa' => $id);
    $data['pemeriksaan'] = $this->Pemeriksaan_model->detailRekam($where)->result();
    $data['pasien'] = $this->Pemeriksaan_model->detailRekam2($where)->result();
		$data['ket'] = $ket;
		$data['alamat'] = $alamat;
    $this->load->view('rekam_medis/print', $data);
  }

  public function cetak_resep($koderesep)
  {
    $data = array(
      'resep'  => $this->db->query("SELECT * FROM detail_resep JOIN obat on detail_resep.id_obat = obat.id_obat WHERE kd_resep='$koderesep'"),
    );
    $data['kd_resep'] = $this->db->query("SELECT * FROM detail_resep JOIN obat on detail_resep.id_obat = obat.id_obat WHERE kd_resep='$koderesep'")->row_array();
    ob_start();
    require('assets/pdf/fpdf.php');
    $this->load->view('resep_obat/cetak', $data);
    //  $this->load->view('resep_obat/cetak',$data);
    //  $html = $this->output->get_output();
    //  $this->load->library('dompdf_gen');
    //  $this->dompdf->load_html($html);
    //  $this->dompdf->render();
    //  $sekarang=date("d:F:Y:h:m:s");
    //  $this->dompdf->stream("Resep Obat".$sekarang.".pdf",array('Attachment'=>0));
  }

  public function cetak_bayar($kodebayar)
  {
    $data = array(
      'bayar'  => $this->db->query("SELECT * FROM detail_bayar JOIN tarif on detail_bayar.id_tarif = tarif.id_tarif WHERE kd_bayar='$kodebayar'"),
    );
    $data['kd_bayar'] = $this->db->query("SELECT * FROM detail_bayar JOIN tarif on detail_bayar.id_tarif = tarif.id_tarif WHERE kd_bayar='$kodebayar'")->row_array();

    $data['obat'] = $this->db->query("SELECT * FROM resep JOIN pembayaran on resep.kd_resep = pembayaran.kd_resep JOIN admin on pembayaran.id_admin = admin.id_admin JOIN pemeriksaan on resep.id_pemeriksaan=pemeriksaan.id_periksa JOIN pasien on pasien.kd_rm=pemeriksaan.kd_rm where kd_bayar = '$kodebayar'");

    ob_start();
    require('assets/pdf/fpdf.php');
    $this->load->view('pembayaran/cetak', $data);
  }
}
