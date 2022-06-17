<?php

class Siswa extends CI_Controller
{

	public function index()
	{

		$this->db->join('jurusan', 'id_jurusan');
		$data['siswa'] = $this->db->get('siswa')->result_array();

		$this->load->view('template/header');
		$this->load->view('siswa/index', $data);
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
			'id_jurusan' => $post['id_jurusan'],
			'id_jurusan' => $post['id_jurusan'],
		];

		$this->db->insert('kelas', $data);

		redirect('kelas');
	}


	public function hapus($id)
	{
		$data = [
			'id_siswa' => $id
		];

		$this->db->delete('siswa', $data);

		redirect('siswa', 'refresh');
	}

	public function ubah($id)
	{
		$data = [
			'id_siswa' => $id
		];

		$data['siswa'] = $this->db->get_where('siswa', $data)->row_array();

		$data['jurusan'] = $this->db->get('jurusan')->result_array();

		$this->load->view('template/header');
		$this->load->view('siswa/ubah', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah($id)
	{
		$post = $this->input->post();

		$data = [
			'nis' => $post['nis'],
			'nama_siswa' => $post['nama_siswa'],
			'tahun_pendaftaran' => $post['tahun_pendaftaran']
		];

		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $data);

		redirect('siswa');
	}
}
