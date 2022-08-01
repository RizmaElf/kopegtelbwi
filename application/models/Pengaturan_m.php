<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_m extends CI_Model {
	
	public function get($id = null)
	{
		$this->db->from('pengaturan');
		if($id != null) {
			$this->db->where('judul_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
