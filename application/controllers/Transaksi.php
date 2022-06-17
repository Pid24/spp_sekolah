<?php

Class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_petugas')) {
			redirect('auth','refresh');
		}
	}

	public function index()
	{

							$this->db->join('siswa', 'nis');
							$this->db->order_by('tgl_bayar', 'desc');
		$data['transaksi'] = $this->db->get('transaksi', 10, 0)->result_array();

		$data['siswa'] = $this->db->get('siswa')->result_array();

		$this->load->view('template/header');
		$this->load->view('transaksi/index', $data);
		$this->load->view('template/footer');
	}

	public function detail_pembayaran()
	{
		$post = $this->input->post();

		$data['bulan_dibayar'] = $post['bulan_dibayar'];

		/* 
			Dapatkan data siswa berdasarkan yang telah dipilih oleh user
			kemudian join ke table kelas dan jurusan untuk mendapatkan data di table tersebut dan menampilkannya ke
			halaman detail pembayaran
		*/

						$this->db->join('kelas', 'id_kelas');
						$this->db->join('jurusan', 'siswa.id_jurusan=jurusan.id_jurusan');
		$data['siswa'] = $this->db->get_where('siswa', ['id_siswa' => $post['id_siswa']])->row_array();

		/*
			Cari data spp berdasarkan tahun pendaftaran siswa(yang telah dipilih)
			dan jurusan siswa tersebut
		*/

		$data_spp = [
			'id_jurusan' => $data['siswa']['id_jurusan'],
			'tahun_pendaftaran' => $data['siswa']['tahun_pendaftaran']
		];

		$data['spp'] = $this->db->get_where('spp', $data_spp)->row_array();

		/*
			Cek apakah siswa tersebut sudah membayar spp pada bulan tertentu
			Jika siswa tersebut sudah membayar, maka pada halaman detail pembayaran ditampilkan status SUDAH BAYAR
			dan jika belum bayar maka statusnya BELUM BAYAR dan tidak boleh menampilkan input jumlah bayar
		*/

		$data_sudah_bayar = [
			'nis' => $data['siswa']['nis'],
			'tahun_dibayar' => date('Y'),
			'bulan_dibayar' => $post['bulan_dibayar']
		];

		$sudah_bayar = $this->db->get_where('transaksi', $data_sudah_bayar)->row_array();

		if ($sudah_bayar) {
			$data['status'] = 'Sudah Dibayar';
		}else{
			$data['status'] = 'Belum Dibayar';
		}

		/*  
			Menghitung uang yang telah dibayar dan sisa tagihan
			1. Jumlah kan uang yang telah dibayar oleh siswa
			2. Kurangi dengan nominal pada tabel spp
		*/

					 $this->db->select_sum('jumlah_bayar');
		$jml_bayar = $this->db->get_where('transaksi', ['nis' => $data['siswa']['nis']])->row_array()['jumlah_bayar'];

		$data['sisa_tagihan'] = $data['spp']['nominal'] - $jml_bayar;
		$data['sudah_dibayar'] = $jml_bayar;

		/*
			Cet tagihan lunas atau belum
		*/

		if ($data['sisa_tagihan'] == 0) {
			$data['lunas'] = 'Lunas';
		}else{
			$data['lunas'] = 'Belum Lunas';
		}

		$this->load->view('template/header');
		$this->load->view('transaksi/detail_pembayaran', $data);
		$this->load->view('template/footer');
	}

	public function aksi_transaksi()
	{
		$post = $this->input->post();

		$data = [
			'tgl_bayar' => date('Y-m-d'),
			'nis' => $post['nis'],
			'bulan_dibayar' => $post['bulan_dibayar'],
			'jumlah_bayar' => $post['jumlah_bayar'],
			'tahun_dibayar' => date('Y'),
			'id_petugas' => $this->session->userdata('id_petugas')
		];

		$this->db->insert('transaksi', $data);

		/*
			Setelah melakukan transaksi alihkan ke halaman invoice (faktur)
		*/

			  $this->db->select_max('id_transaksi');
		$id = $this->db->get('transaksi')->row_array()['id_transaksi'];

		redirect('transaksi/invoice/' . $id,'refresh');
	}

	public function invoice($id = '')
	{

		$data_invoice = [
			'id_transaksi' => $id
		];

						$this->db->join('siswa', 'nis');
		$data['data'] = $this->db->get_where('transaksi', $data_invoice)->row_array();

		$this->load->view('template/header');
		$this->load->view('transaksi/invoice', $data);
		$this->load->view('template/footer');
	}

	public function cetak_invoice($id = '')
	{
		$data_invoice = [
			'id_transaksi' => $id
		];

						$this->db->join('siswa', 'nis');
		$data['data'] = $this->db->get_where('transaksi', $data_invoice)->row_array();

		$this->load->view('transaksi/cetak_invoice', $data);
	}


}