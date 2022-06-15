<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aturan_pakai extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect(base_url("auth"));
        }
        $this->load->model('Aturan_pakai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $judul['judul'] = 'Halaman Data Aturan Pakai';
        $data['aturan_pakai'] = $this->Aturan_pakai_model->getAllAturan_pakai()->result();
        $data['dokter'] = $this->db->get_where('dokter', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/home_header', $judul);
        $this->load->view('templates/home_sidebar');
        $this->load->view('templates/home_topbar', $data);
        $this->load->view('aturan_pakai/index', $data);
        $this->load->view('templates/home_footer');
    }
    public function tambah()
    {

        $judul['judul'] = 'Halaman Tambah Data Aturan Pakai';
        $data['dokter'] = $this->db->get_where('dokter', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama_aturan', 'Nama Aturan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/home_header', $judul);
            $this->load->view('templates/home_sidebar');
            $this->load->view('templates/home_topbar', $data);
            $this->load->view('aturan_pakai/input');
            $this->load->view('templates/home_footer');
        } else {
            $this->Aturan_pakai_model->tambah_data();
            redirect('aturan_pakai/index');
        }
    }

    public function hapus($id)
    {
        $this->Aturan_pakai_model->hapus_data($id);
        redirect('aturan_pakai/index');
    }


    public function ubah($id)
    {

        $judul['judul'] = 'Halaman Ubah Data Aturan Pakai';
        $where1 = array('id' => $id);
        $data1['aturan_pakai'] = $this->Aturan_pakai_model->edit_data($where1, 'aturan_pakai')->result();
        $data['dokter'] = $this->db->get_where('dokter', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/home_header', $judul);
        $this->load->view('templates/home_sidebar');
        $this->load->view('templates/home_topbar', $data);
        $this->load->view('aturan_pakai/ubah', $data1);
        $this->load->view('templates/home_footer');
    }
    function update()
    {
        $id = $this->input->post('id');
        $nama_aturan = $this->input->post('nama_aturan');
        $data = array(
            'nama_aturan' => $nama_aturan
        );
        $where = array('id' => $id);

        $this->Aturan_pakai_model->update_data($where, $data, 'aturan_pakai');
        redirect('aturan_pakai');
    }
}
