<?php

class Admin_model extends CI_Model
{

	public function getAllAdmin()
	{
		return $this->db->get('admin');
	}
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	//fungsi untuk ngitung jumlah adminnya
	function jumlahadmin()
	{
		$query = $this->db->get('admin'); //pertama bikin variabel query isinya buat ambil data dr tabel admin
		if ($query->num_rows() > 0) { //terus di cek jumlah baris di tabel admin lebih dr 0 apa kaga
			return $query->num_rows(); //kalo lebih dari 0, misalnya jumlah barisnya ada 2 soalnya ada 2 admin yg terdaftar nah angka 2 tadi dikembaliin buat ditampilin
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

		$this->db->insert('admin', $data);
	}

	public function hapus_data($id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		$this->db->delete('admin');
	}

	public function getAdminById($id_admin)
	{
		return $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
	}

	public function ubah_data($id_admin)
	{
		$$data = [
			'id_admin' => $this->input->post('id_admin'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'aktif' => $this->input->post('aktif')
		];

		$this->db->where('id_admin',  $id_admin);
		$this->db->update('admin', $data);
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
