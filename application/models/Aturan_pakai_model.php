<?php

class Aturan_pakai_model extends CI_Model
{

    //fungsi untuk ngitung jumlah aturan pakai
    function jumlahaturanpakai()
    {
        $query = $this->db->get('aturan_pakai'); //pertama bikin variabel query isinya buat ambil data dr tabel aturan_pakai
        if ($query->num_rows() > 0) { //terus di cek jumlah baris di tabel aturan_pakai lebih dr 0 apa tidak
            return $query->num_rows(); //kalo lebih dari 0, misalnya jumlah barisnya ada 2 soalnya ada 2 aturan_pakai yg terdaftar nah angka 2 tadi dikembaliin buat ditampilin
        } else {
            return 0; //kalo kondisinya salah ya yg ditampilin 0
        }
    }

    public function getAllAturan_pakai()
    {
        return $this->db->get('aturan_pakai');
    }
    function tambah_data()
    {
        $data = [
            'nama_aturan' => $this->input->post('nama_aturan')
        ];

        $this->db->insert('aturan_pakai', $data);
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('aturan_pakai');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('aturan_pakai');
    }

    public function getAturan_pakaiById($id)
    {
        return $this->db->get_where('aturan_pakai', ['id' => $id])->row_array();
    }

    public function ubah_data($id)
    {
        $data = [
            'nama_aturan' => $this->input->post('nama_aturan')
        ];


        $this->db->where('id', $this->input->post('id'));
        $this->db->update('aturan_pakai', $data);
    }
    function edit_data($where1, $table)
    {
        return $this->db->get_where($table, $where1);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
