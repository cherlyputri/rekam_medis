<?php

class Dokter_model extends CI_Model
{

	public function getAllDokter()
	{
		return $this->db->get('dokter');
	}

	//fungsi untuk ngitung jumlah dokternya
	function jumlahdokter()
	{
		$query = $this->db->get('dokter'); //pertama bikin variabel query isinya buat ambil data dr tabel dokter
		if ($query->num_rows() > 0) { //terus di cek jumlah baris di tabel dokter lebih dr 0 apa kaga
			return $query->num_rows(); //kalo lebih dari 0, misalnya jumlah barisnya ada 2 soalnya ada 2 dokter yg terdaftar nah angka 2 tadi dikembaliin buat ditampilin
		} else {
			return 0; //kalo kondisinya salah ya yg ditampilin 0
		}
	}

	function tambah_data()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'aktif' => 1,
		];

		$this->db->insert('dokter', $data);
	}

	public function hapus_data($id_dokter)
	{
		$this->db->where('id_dokter', $id_dokter);
		$this->db->delete('dokter');
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('petugas_obat');
	}

	public function getDokterById($id_dokter)
	{
		return $this->db->get_where('dokter', ['id_dokter' => $id_dokter])->row_array();
	}

	public function ubah_data($id_dokter)
	{
		$$data = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'gambar' => "default.jpg",
			'id_level' => 2,
			'aktif' => 1,
		];

		$this->db->where('id_dokter', $this->input->post('id_dokter'));
		$this->db->update('dokter', $data);
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
