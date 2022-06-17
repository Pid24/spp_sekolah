<?php

Class Auth extends CI_Controller {
	
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function aksi_login()
	{
		$post = $this->input->post();

		$data_petugas = [
			'username' => $post['username'],
			'password' => $post['password']
		];

		$cek_petugas = $this->db->get_where('petugas', $data_petugas)->row_array();

		if ($cek_petugas) {

			$data_petugas = [
				'id_petugas' => $cek_petugas['id_petugas'],
				'nama_petugas' => $cek_petugas['nama_petugas'],
				'level' => $cek_petugas['level']
			];

			$this->session->set_userdata($data_petugas);

			redirect('jurusan','refresh');
		}else{
			
			echo "<script>alert('Username atau password anda salah')</script>";
			redirect('auth','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('auth','refresh');
	}
}