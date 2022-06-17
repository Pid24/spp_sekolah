<?php

Class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_petugas')) {
			redirect('auth','refresh');
		}
	}

	public function index()
	{
		$data['jurusan'] = $this->db->get('jurusan')->result_array();

		$this->load->view('template/header');
		$this->load->view('jurusan/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('jurusan/tambah');
		$this->load->view('template/footer');
	}

	public function aksi_tambah()
	{
		$post = $this->input->post();

		$data = [
			'nama_jurusan' => $post['nama_jurusan']
		];

		$this->db->insert('jurusan', $data);

		redirect('jurusan');
	}

	public function hapus($id)
	{
		$this->db->delete('jurusan', ['id_jurusan' => $id]);

		redirect('jurusan','refresh');
	}

	public function ubah($id)
	{
		$data['jurusan'] = $this->db->get_where('jurusan', ['id_jurusan' => $id])->row_array();

		$this->load->view('template/header');
		$this->load->view('jurusan/ubah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah($id)
	{
		$post = $this->input->post();

		$data = [
			'nama_jurusan' => $post['nama_jurusan']
		];

		$this->db->where('id_jurusan', $id);
		$this->db->update('jurusan', $data);

		redirect('jurusan','refresh');
	}

}