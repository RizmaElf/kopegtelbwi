<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_m extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('sale_m');
	}

	// public function sale()
	// {
	// 	$this->load->library('pagination');
	// 	$data['row'] = $this->sale_m->get_sale();
	// 	$this->template->load('template', 'report/sale_report', $data);
	// }

	// public function sale_product($sale_id = null)
	// {
	// 	$detail = $this->sale_m->get_sale_detail($sale_id)->result();
	// 	echo json_oncode($detail);
	// }
}
