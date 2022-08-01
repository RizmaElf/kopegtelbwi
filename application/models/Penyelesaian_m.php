<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penyelesaian_m extends CI_Model {
	
	public function get($id = null)
	{
		$this->db->from('penyelesaian');
		if($id != null) {
			$this->db->where('penyelesaian_id', $id);
		}
		$this->db->order_by('periode', 'desc');
		$query = $this->db->get();
		return $query;
	}

	public function add($post) {
		$params = [
			'periode' => $post['periode'],  //name database => name views
			'unit_kerja' => $post['unit_kerja'],
			'file' => $post['file'],
		];
		$this->db->insert('penyelesaian', $params); //name database
	}

	public function edit($post) {
		$params = [
			'periode' => $post['periode'],  //name database => name views
			'unit_kerja' => $post['unit_kerja'],
			'file' => $post['file'],
			'updated' => date('Y-m-d H:i:s')
		];
		
		$this->db->where('penyelesaian_id', $post['id']);
		$this->db->update('penyelesaian', $params);
	}

	public function del($id)
	{
		$this->db->where('penyelesaian_id', $id);
		$this->db->delete('penyelesaian'); //table penyelesaian
	}

}
