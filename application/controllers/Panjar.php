<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panjar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('panjar_m');
	}

	public function index()
	{
		$data['row'] = $this->panjar_m->get();
		$this->template->load('template', 'panjar/panjar_data', $data);
	}

	public function add()
	{
		$panjar = new stdClass();
		$panjar->panjar_id = null;
		$panjar->date = null;
		$panjar->keterangan = null;
		$panjar->jumlah = null;
		$panjar->terbilang = null;
		$panjar->bagian = null;
		$data = array(
			'page' => 'add',
			'row' => $panjar
		);
		$this->template->load('template', 'panjar/panjar_form', $data);
	}

	public function edit($id) {
		$query = $this->panjar_m->get($id);
		if($query->num_rows() > 0) {
			$panjar = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $panjar
			);
			$this->template->load('template', 'panjar/panjar_form', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('panjar')."';</script>";
		}
	}

	public function cetak($id) {
		$query = $this->panjar_m->get($id);
		if($query->num_rows() > 0) {
			$panjar = $query->row();
			$data = array(
				'page' => 'cetak',
				'row' => $panjar
			);
			$this->template->load('template', 'panjar/struk_panjar', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('panjar')."';</script>";
		}
	}

	public function process() 
	{

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->panjar_m->add($post);
		}

		else if(isset($_POST['edit'])) {
			$this->panjar_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('panjar')."';</script>";
	}
	
	public function del($id)
	{
		$this->panjar_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('panjar')."';</script>";
	}
}
