<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$data['kelas'] = $this->db->get('kelas')->result_array();

		$id_kelas = $this->input->get('id_kelas');
		$bulan_dibayar = $this->input->get('bulan_dibayar');
		$tahun_pendaftaran = $this->input->get('tahun_pendaftaran');

		if ($id_kelas) {
			$query  =   "SELECT * FROM siswa
			JOIN kelas USING(id_kelas)
			WHERE tahun_pendaftaran = '$tahun_pendaftaran' AND
			nis IN (SELECT nis FROM transaksi WHERE 
			id_kelas = $id_kelas AND
			bulan_dibayar = '$bulan_dibayar')";

			$query1  =   "SELECT * FROM siswa 
			JOIN kelas USING(id_kelas)
			WHERE tahun_pendaftaran = '$tahun_pendaftaran' AND
			nis NOT IN (SELECT nis FROM transaksi WHERE 
			id_kelas = $id_kelas AND
			bulan_dibayar = '$bulan_dibayar')";

			$data['laporan_sudah'] = $this->db->query($query)->result_array();
			$data['laporan_belum'] = $this->db->query($query1)->result_array();

			$data['id_kelas'] = $id_kelas;
			$data['tahun_pendaftaran'] = $tahun_pendaftaran;
			$data['bulan_dibayar'] = $bulan_dibayar;

		}

		$this->load->view('template/header');
		$this->load->view('laporan/index', $data);
		$this->load->view('template/footer');
	}

	public function cetak_sudah_bayar($tahun_pendaftaran, $id_kelas, $bulan_dibayar)
	{
		$query  =   "SELECT * FROM siswa 
		JOIN kelas USING(id_kelas)
		WHERE 
		tahun_pendaftaran = '$tahun_pendaftaran' AND
		nis IN (SELECT nis FROM transaksi WHERE 
		id_kelas = $id_kelas AND
		bulan_dibayar = '$bulan_dibayar')";	

		$data['laporan_sudah'] = $this->db->query($query)->result_array();

		$this->load->view('laporan/cetak_sudah_bayar', $data, FALSE);
	}

	public function cetak_belum_bayar($tahun_pendaftaran, $id_kelas, $bulan_dibayar)
	{
		$query  =   "SELECT * FROM siswa 
		JOIN kelas USING(id_kelas)
		WHERE 
		tahun_pendaftaran = '$tahun_pendaftaran' AND
		nis NOT IN (SELECT nis FROM transaksi WHERE 
		id_kelas = $id_kelas AND
		bulan_dibayar = '$bulan_dibayar')";	

		$data['laporan_sudah'] = $this->db->query($query)->result_array();

		$this->load->view('laporan/cetak_belum_bayar', $data, FALSE);
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */ ?>