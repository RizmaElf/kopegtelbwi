<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kembali_panjar_m extends CI_Model {
	
	public function get($id = null)
	{
		$this->db->from('kembali_panjar');
		if($id != null) {
			$this->db->where('kembalipanjar_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post) {
		$params = [
			'unit_kerja' => $post['unit_kerja'],
			'date' => $post['date'],  //name database => name views
			'no_akun' => $post['no_akun'],
			'uraian' => $post['uraian'],
			'sub_jumlah' => $post['sub_jumlah'],
			'jumlah' => $post['jumlah'],
			'keterangan' => $post['keterangan'],
		];
		$this->db->insert('kembali_panjar', $params); //name database
	}

	public function edit($post) {
		$params = [
			'unit_kerja' => $post['unit_kerja'],
			'date' => $post['date'],  //name database => name views
			'no_akun' => $post['no_akun'],
			'uraian' => $post['uraian'],
			'sub_jumlah' => $post['sub_jumlah'],
			'jumlah' => $post['jumlah'],
			'keterangan' => $post['keterangan'],
			'updated' => date('Y-m-d H:i:s')
		];
		
		$this->db->where('kembalipanjar_id', $post['id']);
		$this->db->update('kembali_panjar', $params);
	}

	public function del($id)
	{
		$this->db->where('kembalipanjar_id', $id);
		$this->db->delete('kembali_panjar'); //table kembali_panjar
	}

}
