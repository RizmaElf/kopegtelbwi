<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('supplier_m');
	}

	public function index()
	{
		$data['row'] = $this->supplier_m->get();
		$this->template->load('template', 'supplier/supplier_data', $data);
	}

	public function add()
	{
		$supplier = new stdClass();
		$supplier->supplier_id = null;
		$supplier->name = null;
		$supplier->phone = null;
		$supplier->address = null;
		$supplier->description = null;
		$data = array(
			'page' => 'add',
			'row' => $supplier
		);
		$this->template->load('template', 'supplier/supplier_form', $data);
	}

	public function edit($id) {
		$query = $this->supplier_m->get($id);
		if($query->num_rows() > 0) {
			$supplier = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $supplier
			);
			$this->template->load('template', 'supplier/supplier_form', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('supplier')."';</script>";
		}
	}

	public function process() 
	{
		// $config['upload_path'] = './uploads/datapath/';
		// $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|docx|xlsx|zip';
		// $config['max_size'] = 10240;
		// $config['file_name'] = 'data-'.date('ymd').'-'.substr(md5(rand()),0,10);
		// $this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->supplier_m->add($post);
		}

		else if(isset($_POST['edit'])) {
			$this->supplier_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('supplier')."';</script>";
	

			// if($this->listdata_m->check_code($post['code'])->num_rows() > 0) {
			// 	$this->session->set_flashdata('error', "code $post[code] sudah dipakai data lain");
			// 	redirect('listdata/add');
			// } else {
			// 	if(@$_FILES['doc']['name'] != null) {
			// 		if($this->upload->do_upload('doc')) {
			// 			$post['doc'] = $this->upload->data('file_name');
			// 			$this->listdata_m->add($post);
			// 			if($this->db->affected_rows() > 0) {
			// 				$this->session->set_flashdata('success', "Data berhasil disimpan");
			// 			} 
			// 			redirect('listdata');
			// 	} else {
			// 		$error = $this->upload->display_errors();
			// 		$this->session->set_flashdata('error', $error);
			// 		redirect('listdata/add');
			// 	}	
			// 	} else {
			// 		$post['doc'] = null;
			// 			$this->listdata_m->add($post);
			// 			if($this->db->affected_rows() > 0) {
			// 				$this->session->set_flashdata('success', "Data berhasil disimpan");
			// 			} 
			// 			redirect('listdata');
			// 	}
			// }

			
		// }	else if(isset($_POST['edit'])) {
		// 	if($this->listdata_m->check_code($post['code'])->num_rows() > 0) {
		// 		$this->session->set_flashdata('error', "code $post[code] sudah dipakai data lain");
		// 		redirect('listdata/edit'.$post['id']);
		// 	} else {
		// 		if(@$_FILES['doc']['name'] != null) {
		// 			if($this->upload->do_upload('doc')) {

		// 				$listdata = $this->lisdata_m->get($post['id'])->row();
		// 				if($listdata->doc != null) {
		// 					$target_file ='./uploads/datapath/'.$listdata->doc;
		// 					unlink($target_file);
		// 				}

		// 				$post['doc'] = $this->upload->data('file_name');
		// 				$this->listdata_m->edit($post);
		// 				if($this->db->affected_rows() > 0) {
		// 					$this->session->set_flashdata('success', "Data berhasil disimpan");
		// 				} 
		// 				redirect('listdata');
		// 		} else {
		// 			$error = $this->upload->display_errors();
		// 			$this->session->set_flashdata('error', $error);
		// 			redirect('listdata/add');
		// 		}	
		// 		} else {
		// 			$post['doc'] = null;
		// 			$this->listdata_m->edit($post);
		// 			if($this->db->affected_rows() > 0) {
		// 				$this->session->set_flashdata('success', "Data berhasil disimpan");
		// 		} 
		// 		redirect('listdata');

		// 	} 
	// }  

	// if($this->db->affected_rows() > 0) {
	// 	// $this->session->set_flasdata('Succes', 'Data berhasil disimpan');

	// 	echo "<script>alert('Data berhasil disimpan');</script>";
	// }
	// 	echo "<script>window.location='".site_url('listdata')."';</script>";

	}
	
	public function del($id)
	{
		$this->supplier_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('supplier')."';</script>";
	}
}
