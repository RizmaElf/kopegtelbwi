<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pengaturan_m');
	}

	
	public function index()
	{
		$data['row'] = $this->pengaturan_m->get();
		$this->template->load('template', 'pengaturan/pengaturan', $data);
	}
	

	public function set_pengaturan()
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'periode' => $this->input->post('periode')
		);
		$this->db->where('id', 1);
		if ($this->db->update('pengaturan', $data)) {
			$this->db->select('judul, periode');
			$pengaturan = $this->db->get('pengaturan')->row();
			$this->session->set_userdata('pengaturan', $pengaturan);
			echo json_encode('sukses');
		}
	}
}
