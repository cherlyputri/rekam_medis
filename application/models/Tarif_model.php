<?php

class Tarif_model extends CI_Model
{

	//fungsi untuk ngitung jumlah tindakan
	function jumlahtindakan()
	{
		$query = $this->db->get('tarif'); //pertama bikin variabel query isinya buat ambil data dr tabel tarif
		if ($query->num_rows() > 0) { //terus di cek jumlah baris di tabel tarif lebih dr 0 apa tidak
			return $query->num_rows(); //kalo lebih dari 0, misalnya jumlah barisnya ada 2 soalnya ada 2 tarif yg terdaftar nah angka 2 tadi dikembaliin buat ditampilin
		} else {
			return 0; //kalo kondisinya salah ya yg ditampilin 0
		}
	}

	public function getAllTarif()
	{
		return $this->db->get('tarif');
	}
	function tambah_data()
	{
		$data = [
			'nama_tarif' => $this->input->post('nama_tarif'),
			'harga' => $this->input->post('harga'),
		];

		$this->db->insert('tarif', $data);
	}

	public function hapus_data($id_tarif)
	{
		$this->db->where('id_tarif', $id_tarif);
		$this->db->delete('tarif');
	}

	public function hapus($id_tarif)
	{
		$this->db->where('id_tarif', $id_tarif);
		$this->db->delete('tarif');
	}

	public function getTarifById($id_tarif)
	{
		return $this->db->get_where('tarif', ['id_tarif' => $id_tarif])->row_array();
	}

	public function ubah_data($id_tarif)
	{
		$data = [
			'nama_tarif' => $this->input->post('nama_tarif'),
			'harga' => $this->input->post('harga'),
		];


		$this->db->where('id_tarif', $this->input->post('id_tarif'));
		$this->db->update('tarif', $data);
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
