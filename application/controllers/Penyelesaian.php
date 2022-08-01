<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penyelesaian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('penyelesaian_m');
	}

	public function index()
	{
		$data['row'] = $this->penyelesaian_m->get();
		$this->template->load('template', 'penyelesaian/penyelesaian_data', $data);
	}

	public function add()
	{
		$penyelesaian = new stdClass();
		$penyelesaian->penyelesaian_id = null;
		$penyelesaian->periode = null;
		$penyelesaian->unit_kerja = null;
		$data = array(
			'page' => 'add',
			'row' => $penyelesaian
		);
		$this->template->load('template', 'penyelesaian/penyelesaian_form', $data);
	}

	public function edit($id) {
		$query = $this->penyelesaian_m->get($id);
		if($query->num_rows() > 0) {
			$penyelesaian = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $penyelesaian
			);
			$this->template->load('template', 'penyelesaian/penyelesaian_form', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('penyelesaian')."';</script>";
		}
	}

	public function cetak($id) {
		$query = $this->penyelesaian_m->get($id);
		if($query->num_rows() > 0) {
			$penyelesaian = $query->row();
			$data = array(
				'page' => 'cetak',
				'row' => $penyelesaian
			);
			$this->template->load('template', 'penyelesaian/struk_penyelesaian', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('penyelesaian')."';</script>";
		}
	}

	public function process() 
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$config['upload_path'] = './uploads/docpenyelesaian/';
			$config['allowed_types'] = 'gif|zip|pdf|xls|xlsx|png|jpg|jpeg';
			$config['max_size'] = 10240;
			$config['file_name'] = 'DOC-'.date('dmy').'-'.substr(md5(rand()),0,10);

			$this->load->library('upload', $config);

			if(@$_FILES['file']['name'] != null) {
				if($this->upload->do_upload('file')) {
					$post['file'] = $this->upload->data('file_name');
					$this->penyelesaian_m->add($post);
					if($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('success', 'Data berhasil disimpan');
					}
					redirect('penyelesaian');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('eror', $error);
					redirect('penyelesaian/add');
				}
			} else {
				$post['file'] = null;
				$this->penyelesaian_m->add($post);
				if($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
				}
				redirect('penyelesaian');
			}
		}

		else if(isset($_POST['edit'])) {
			$this->penyelesaian_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('penyelesaian')."';</script>";
	}
	
	public function del($id)
	{
		$this->penyelesaian_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('penyelesaian')."';</script>";
	}
}
