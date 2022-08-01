<!-- use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kembali_panjar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('kembali_panjar_m');
	}

	public function index()
	{
		$data['row'] = $this->kembali_panjar_m->get();
		$this->template->load('template', 'kembali_panjar/kembali_panjar_data', $data);
	}

	public function add()
	{
		$kembali_panjar = new stdClass();
		$kembali_panjar->kembalipanjar_id = null;
		$kembali_panjar->unit_kerja = null;
		$kembali_panjar->date = null;
		$kembali_panjar->no_akun = null;
		$kembali_panjar->uraian = null;
		$kembali_panjar->sub_jumlah = null;
		$kembali_panjar->jumlah = null;
		$kembali_panjar->keterangan = null;
		$data = array(
			'page' => 'add',
			'row' => $kembali_panjar
		);
		$this->template->load('template', 'kembali_panjar/kembali_panjar_form', $data);
	}


	// public function show($id)
    // {
    //     $employee = Employee::find($id);

    //     return view('employee.show', compact('pageTitle', 'employee'));
	// }

	// public function show($id) {
	// $kembali_panjar = DB::table('kembali_panjar')
    //        ->select('*')
    //        ->where('databarangs.id', $id)
    //        ->first();

    // return view('struk_kembali_panjar');
	// }
	/////////
	

	public function edit($id) {
		$query = $this->kembali_panjar_m->get($id);
		if($query->num_rows() > 0) {
			$kembali_panjar = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $kembali_panjar
			);
			$this->template->load('template', 'kembali_panjar/kembali_panjar_form', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('kembali_panjar')."';</script>";
		}
	}

	public function process() 
	{

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->kembali_panjar_m->add($post);
		}

		else if(isset($_POST['edit'])) {
			$this->kembali_panjar_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('kembali_panjar')."';</script>";
	}

	public function kpanjar($id) {
		$query = $this->kembali_panjar_m->get($id);
		if($query->num_rows() > 0) {
			$panjar = $query->row();
			$data = array(
				'page' => 'kpanjar',
				'row' => $panjar
			);
			$this->template->load('template', 'kembali_panjar/struk_kembali_panjar', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('kembali_panjar')."';</script>";
		}
	}
	
	public function del($id)
	{
		$this->kembali_panjar_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('kembali_panjar')."';</script>";
	}
}
