<?php

Class Petugas extends CI_Controller 
{

	public function index()
	{

		
		$data['petugas'] = $this->db->get('petugas')->result_array();

		$this->load->view('template/header');
		$this->load->view('petugas/index', $data);
		$this->load->view('template/footer');
	}
}