<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class panjar_m extends CI_Model {
	
	public function get($id = null)
	{
		$this->db->from('panjar');
		if($id != null) {
			$this->db->where('panjar_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post) {
		$params = [
			'date' => $post['date'],  //name database => name views
			'keterangan' => $post['keterangan'],
			'jumlah' => $post['jumlah'],
			'terbilang' => $post['terbilang'],
			'bagian' => $post['bagian'],
		];
		$this->db->insert('panjar', $params); //name database
	}

	public function edit($post) {
		$params = [
			'date' => $post['date'],  //name database => name views
			'keterangan' => $post['keterangan'],
			'jumlah' => $post['jumlah'],
			'terbilang' => $post['terbilang'],
			'bagian' => $post['bagian'],
			'updated' => date('Y-m-d H:i:s')
		];
		
		$this->db->where('panjar_id', $post['id']);
		$this->db->update('panjar', $params);
	}

	public function del($id)
	{
		$this->db->where('panjar_id', $id);
		$this->db->delete('panjar'); //table panjar
	}

}
