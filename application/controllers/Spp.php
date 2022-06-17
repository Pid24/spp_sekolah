<?php

Class Spp extends CI_Controller 
{

	public function index()
	{

						 $this->db->join('jurusan', 'id_jurusan');
		$data['spp'] = $this->db->get('spp')->result_array();

		$this->load->view('template/header');
		$this->load->view('spp/index', $data);
		$this->load->view('template/footer');
	}
}