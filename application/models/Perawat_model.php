<?php

class Perawat_model extends CI_Model
{

	public function getAllPerawat()
	{
		return $this->db->get('perawat');
	}

	//fungsi untuk ngitung jumlah data perawatnya
	function jumlahperawat()
	{
		$query = $this->db->get('perawat'); //pertama bikin variabel query isinya buat ambil data dr tabel petugas obat
		if ($query->num_rows() > 0) { //terus di cek jumlah baris di tabel admin lebih dr 0 apa tidak
			return $query->num_rows(); //kalo lebih dari 0, misalnya jumlah barisnya ada 2 soalnya ada 2 perawat yg terdaftar nah angka 2 tadi dikembaliin buat ditampilin
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

		$this->db->insert('perawat', $data);
	}

	public function hapus_data($id_perawat)
	{
		$this->db->where('id_perawat', $id_perawat);
		$this->db->delete('perawat');
	}

	public function getPetugasObatById($id_petugas_obat)
	{
		return $this->db->get_where('petugas_obat', ['id_petugas_obat' => $id_petugas_obat])->row_array();
	}

	public function ubah_data($id_petugas_obat)
	{
		$$data = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'gambar' => "default.jpg",
			'id_level' => 2,
			'aktif' => 1,
		];

		$this->db->where('id_petugas_obat', $this->input->post('id_petugas_obat'));
		$this->db->update('petugas_obat', $data);
	}
	function jumlahobatmasuk()
	{
		$query = $this->db->get('obat_masuk');
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	/*LAPORAN TRANSAKSI*/

	public function view_by_date($tanggal1, $tanggal2)
	{
		$this->db->select('*');
		$this->db->from('obat_masuk');
		$this->db->join('petugas_obat', 'obat_masuk.id_petugas_obat = petugas_obat.id');
		$this->db->join('detail_masuk', 'obat_masuk.kd_masuk = detail_masuk.kd_masuk');
		$this->db->join('obat', 'detail_masuk.kd_obat = obat.id_obat');
		$this->db->where('obat_masuk.tanggal BETWEEN"' . date('Y-m-d', strtotime($tanggal1)) . '"and"' . date('Y-m-d', strtotime($tanggal2)) . '"');
		$this->db->order_by('obat_masuk.tanggal');
		return $query = $this->db->get()->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
	}

	public function view_by_date1($tanggal1, $tanggal2)
	{
		$this->db->select('*');
		$this->db->from('obat_masuk');
		$this->db->join('petugas_obat', 'obat_masuk.id_petugas_obat = petugas_obat.id');
		$this->db->where('obat_masuk.tanggal BETWEEN"' . date('Y-m-d', strtotime($tanggal1)) . '"and"' . date('Y-m-d', strtotime($tanggal2)) . '"');
		$this->db->order_by('obat_masuk.tanggal');
		return $query = $this->db->get()->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
	}

	public function kd_masuk()
	{
		$this->db->select('*');
		$this->db->from('obat_masuk');
		return $query = $this->db->get()->result();
	}


	public function view_by_kd_masuk($kd_masuk)
	{
		$this->db->select('*');
		$this->db->from('obat_masuk');
		$this->db->join('petugas_obat', 'obat_masuk.id_petugas_obat = petugas_obat.id');
		$this->db->join('detail_masuk', 'obat_masuk.kd_masuk = detail_masuk.kd_masuk');
		$this->db->join('obat', 'detail_masuk.kd_obat = obat.id_obat');
		$this->db->where('detail_masuk.kd_masuk', $kd_masuk);
		return $query = $this->db->get()->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
	}
	public function view_by_kd_masuk1($kd_masuk)
	{
		$this->db->select('*');
		$this->db->from('obat_masuk');
		$this->db->join('petugas_obat', 'obat_masuk.id_petugas_obat = petugas_obat.id');
		$this->db->where('obat_masuk.kd_masuk', $kd_masuk);
		return $query = $this->db->get()->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
	}




	public function view_by_resep($kd_resep)
	{
		$this->db->select('*');
		$this->db->from('pemeriksaan');
		$this->db->join('pasien', 'pemeriksaan.kd_rm = pasien.kd_rm');
		$this->db->join('resep', 'pemeriksaan.id_periksa = resep.id_pemeriksaan');
		$this->db->join('detail_resep', 'resep.kd_resep = detail_resep.kd_resep');
		$this->db->join('obat', 'detail_resep.id_obat = obat.id_obat');
		$this->db->where('resep.kd_resep', $kd_resep);
		return $query = $this->db->get()->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
	}

	public function view_by_year($tahun)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('siswa', 'transaksi.nis = siswa.nis');
		$this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas');
		$this->db->join('bulan', 'transaksi.id_bulan = bulan.id_bulan');
		$this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun = transaksi.id_tahun');
		$this->db->join('user', 'transaksi.user_id = user.user_id');
		$this->db->where('transaksi.id_tahun="' . $tahun . '"');
		$this->db->order_by('transaksi.id_tahun');
		return $query = $this->db->get();
	}

	function view_all()
	{

		$this->db->select('*');
		$this->db->from('obat_masuk');
		$this->db->join('petugas_obat', 'obat_masuk.id_petugas_obat = petugas_obat.id');
		$this->db->order_by('obat_masuk.tanggal', 'ASC');
		return $query = $this->db->get()->result();
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
