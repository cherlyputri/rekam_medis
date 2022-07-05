<?php

class Pemeriksaan_model extends CI_Model
{

	public function getAllRM()
	{

		$query = "SELECT `pasien`.`kd_rm` , `pasien`.`nama_pasien` , `pemeriksaan`.`id`,`pemeriksaan`.`kd_rm`,`pemeriksaan`.`keluhan`,`pemeriksaan`.`diagnosa`,`pemeriksaan`.`tindakan`,`pemeriksaan`.`tanggal`,`pemeriksaan`.`obat`
		FROM `pemeriksaan`
		LEFT JOIN `pasien`
		
		ON `pasien`.`kd_rm`=`pemeriksaan`.`kd_rm`
		ORDER BY `pemeriksaan`.`tanggal` DESC ";

		$pemeriksaan = $this->db->query($query)->result_array();
		return $pemeriksaan;
	}

	function tampil_detail($where1)
	{
		$this->db->select('*');
		$this->db->from('pasien');
		// $this->db->join('pemeriksaan', 'pasien.kd_rm = pemeriksaan.kd_rm', 'left');
		$this->db->where_in('kd_rm', $where1);
		// $query = $this->db->query("SELECT a.*, b.* from pasien a join pemeriksaan b on a.kd_rm=b.kd_rm where a.kd_rm = $where1")->result_array();
		return $query = $this->db->get();
	}

	function tampil_pemeriksaan($where1)
	{
		$this->db->select('*');
		$this->db->from('pemeriksaan');
		$this->db->where_in('kd_rm', $where1);
		return $query = $this->db->get();
	}

	public function getAllRMSortRm()
	{
		$query = "SELECT `pemeriksaan`.`kd_rm`
		          FROM  `pemeriksaan` 
		          ORDER BY `tanggal` DESC ";
		$rm = $this->db->query($query)->result_array();
		return $rm;
	}

	function getPemeriksaan()
	{
		$query = "SELECT `pemeriksaan`.`id_periksa`
		          FROM  `pemeriksaan` 
		          ORDER BY `id_periksa` DESC ";
		$periksa = $this->db->query($query)->result_array();
		return $periksa;
	}


	public function getRMById($kd_rm)
	{
		return $this->db->get_where('pemeriksaan', ['kd_rm' => $kd_rm])->row_array();
	}


	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function ubah_data($data, $table)
	{
		$this->db->update($table, $data);
		// $data = [

		// 	'kd_rm' => $this->input->post('kd_rm'),
		// 	'id_pasien' => $this->input->post('id_pasien'),
		// 	'keluhan' => $this->input->post('keluhan'),
		// 	'diagnosa' => $this->input->post('diagnosa'),
		// 	'tindakan' => $this->input->post('tindakan'),
		// 	'tanggal' => $this->input->post('tanggal')
		// ];

		// $this->db->where('kd_rm', $this->input->post('kd_rm'));
		// $this->db->update('pemeriksaan', $data);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($id_periksa)
	{
		$this->db->where('id_periksa', $id_periksa);
		$this->db->delete('pemeriksaan');
	}

	function jumlahrm()
	{
		$query = $this->db->get('pemeriksaan');
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
		$this->db->from('pemeriksaan');
		$this->db->join('pasien', 'pemeriksaan.kd_rm = pasien.kd_rm');
		$this->db->where('tanggal BETWEEN"' . date('Y-m-d', strtotime($tanggal1)) . '"and"' . date('Y-m-d', strtotime($tanggal2)) . '"');
		$this->db->order_by('tanggal');
		return $query = $this->db->get()->result_array(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
	}

	public function kd_rm()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		return $query = $this->db->get()->result();
	}

	public function kd_pasien()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		return $query = $this->db->get()->result();
	}


	public function view_by_kd_rm($kd_rm)
	{
		$this->db->select('*');
		$this->db->from('pemeriksaan');
		$this->db->join('pasien', 'pemeriksaan.kd_rm = pasien.kd_rm');
		$this->db->where('pemeriksaan.kd_rm', $kd_rm);
		$this->db->order_by('pemeriksaan.id_periksa');
		return $query = $this->db->get()->result_array(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
	}
	public function view_by_kd_pasien($kd_pasien)
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->where('pasien.kd_pasien', $kd_pasien);
		$this->db->order_by('pasien.kd_pasien');
		return $query = $this->db->get(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter  
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

		// 		$this->db->select('pasien.kd_pasien');    
		// $this->db->from('rekam_medis');
		// $this->db->join('pasien', 'pasien.kd_pasien = rekam_medis.kd_pasien');

		// return $this->db->get()->result();

		$query = "SELECT `pasien`.`kd_rm` , `pasien`.`nama_pasien`, `pasien`.`pengobatan`, `pemeriksaan`.`kd_rm`,`pemeriksaan`.`keluhan`,`pemeriksaan`.`diagnosa`,`pemeriksaan`.`tindakan`,`pemeriksaan`.`tanggal`, `pemeriksaan`.`id_periksa` 
		FROM `pemeriksaan`
		LEFT JOIN `pasien`
		ON `pasien`.`kd_rm`=`pemeriksaan`.`kd_rm`
		ORDER BY `pemeriksaan`.`tanggal` ASC ";

		$pemeriksaan = $this->db->query($query)->result_array();
		return $pemeriksaan;
	}

	function view_all1()
	{
		$query = "SELECT `pasien`.`kd_rm` , `pasien`.`nama_pasien`, `pasien`.`pengobatan`, `pemeriksaan`.`kd_rm`,`pemeriksaan`.`keluhan`,`pemeriksaan`.`diagnosa`,`pemeriksaan`.`tindakan`,`pemeriksaan`.`tanggal`, `pemeriksaan`.`id_periksa` 
		FROM pemeriksaan
		LEFT JOIN pasien
		ON pemeriksaan.kd_rm=pasien.kd_rm
		ORDER BY pemeriksaan.id_periksa ASC ";

		$pemeriksaan = $this->db->query($query)->result_array();
		return $pemeriksaan;
	}

	function view_trans()
	{
		// $query = "SELECT a.*, b.*, c.*, d.*, e.*
		// FROM pemeriksaan a
		// LEFT JOIN pasien b
		// ON b.kd_rm=a.kd_rm
		// LEFT JOIN dokter c
		// ON a.id_dokter=c.id_dokter
		// LEFT JOIN resep d ON a.id_periksa=d.id_pemeriksaan
		// LEFT JOIN detail_resep e ON d.kd_resep=e.kd_resep
		// ORDER BY a.id_periksa ASC ";
		$query = "SELECT a.*, b.id_dokter, b.nama as nama_dokter, c.*, d.*
		FROM resep a JOIN dokter b ON a.id_dokter=b.id_dokter
		JOIN pemeriksaan c ON a.id_pemeriksaan=c.id_periksa
		JOIN pasien d ON c.kd_rm=d.kd_rm
		ORDER BY a.tanggal_resep ASC";

		$pemeriksaan = $this->db->query($query)->result_array();
		return $pemeriksaan;
	}

	public function getRekamMedisData()
	{
		// $query = "SELECT pemeriksaan.*, resep.*, pasien.nama_pasien, detail_resep.*, obat.* FROM pemeriksaan JOIN resep ON pemeriksaan.id_periksa = resep.id_pemeriksaan JOIN pasien ON pasien.kd_rm = pemeriksaan.kd_rm JOIN detail_resep ON detail_resep.kd_resep=resep.kd_resep JOIN obat ON obat.id_obat=detail_resep.id_obat ORDER BY pemeriksaan.tanggal DESC ";
		// $query = "SELECT pemeriksaan.*, resep.*, pasien.nama_pasien FROM pemeriksaan JOIN resep ON pemeriksaan.id_periksa = resep.id_pemeriksaan JOIN pasien ON pasien.kd_rm = pemeriksaan.kd_rm ORDER BY pemeriksaan.id_periksa DESC ";
		$query = "SELECT a.*, b.*, c.* FROM pemeriksaan a 
		JOIN pasien b ON a.kd_rm=b.kd_rm
		JOIN resep c ON a.id_periksa=c.id_pemeriksaan  
		GROUP BY a.id_periksa;
		-- ORDER BY a.id_periksa DESC ";

		$data = $this->db->query($query)->result_array();
		return $data;
	}

	public function detailRekam($id)
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('pemeriksaan', 'pasien.kd_rm = pemeriksaan.kd_rm');
		$this->db->where_in('id_periksa', $id);
		return $query = $this->db->get();
	}

	public function getAll()
	{
		$this->db->select(
			'a.id_periksa, a.kd_rm, a.id_dokter, a.id_perawat, a.keluhan, a.tb, a.bb, a.td, a.alergi, a.diagnosa, a.tindakan, a.tanggal, b.kd_resep, b.subtotal, b.id_pemeriksaan, b.id_dokter, b.tanggal_resep, c.kd_rm, c.nik, c.nama_pasien, c.jenkel, c.tempat_lahir, c.tanggal_lahir, c.alamat, c.telp, c.pengobatan, c.no_bpjs, d.id_obat, d.nama_obat, d.stok, d.harga, e.id_detail, e.kd_resep, e.id_obat, e.aturan_pakai, e.stok_out, e.stok_tot, e.total, e.status'
		);
		$this->db->from('pemeriksaan a');
		$this->db->join('resep b', 'a.id_periksa = b.id_pemeriksaan');
		$this->db->join('pasien c', 'a.kd_rm = c.kd_rm');
		$this->db->join('detail_resep e', 'b.kd_resep = e.kd_resep');
		$this->db->join('obat d', 'd.id_obat = e.id_obat');
		$this->db->group_by('a.id_periksa');
		return $this->db->get('pemeriksaan')->result_array();
	}

	public function getObat()
	{
		$this->db->select(
			'a.kd_resep, a.subtotal, a.id_pemeriksaan, a.id_dokter, a.tanggal_resep, b.id_obat, b.nama_obat, b.stok, b.harga, c.id_detail, c.kd_resep, c.id_obat, c.aturan_pakai, c.stok_out, c.stok_tot, c.total, c.status'
		);
		$this->db->from('resep a');
		$this->db->join('detail_resep c', 'a.kd_resep = c.kd_resep');
		$this->db->join('obat b', 'b.id_obat = c.id_obat');
		$this->db->group_by('a.kd_resep');
		return $this->db->get('resep')->result_array();
	}
}
