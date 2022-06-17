	<?php

Class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_petugas')) {
			redirect('auth','refresh');
		}
	}
	
	public function index()
	{

						 $this->db->join('jurusan', 'id_jurusan');
		$data['kelas'] = $this->db->get('kelas')->result_array();

		$this->load->view('template/header');
		$this->load->view('kelas/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data['jurusan'] = $this->db->get('jurusan')->result_array();

		$this->load->view('template/header');
		$this->load->view('kelas/tambah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_tambah()
	{
		$post = $this->input->post();

		$data = [
			'nama_kelas' => $post['nama_kelas'],
			'id_jurusan' => $post['id_jurusan']
		];

		$this->db->insert('kelas', $data);

		redirect('kelas');
	}


	public function hapus($id)
	{
		$data = [
			'id_kelas' => $id
		];

		$this->db->delete('kelas', $data);

		redirect('kelas','refresh');
	}

	public function ubah($id)
	{
		$data = [
			'id_kelas' => $id
		];

		$data['kelas'] = $this->db->get_where('kelas', $data)->row_array();

		$data['jurusan'] = $this->db->get('jurusan')->result_array();

		$this->load->view('template/header');
		$this->load->view('kelas/ubah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah($id)
	{
		$post = $this->input->post();

		$data = [
			'nama_kelas' => $post['nama_kelas']
		];

		$this->db->where('id_kelas', $id);
		$this->db->update('kelas', $data);

		redirect('kelas','refresh');
	}

}