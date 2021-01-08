<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda_control extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('beranda_model');
    }

	 
	public function index()
	{
		$data['emp'] = $this->beranda_model->get_all_employees();
		$this->load->view('beranda', $data);
	}

	public function tambah_pegawai()
	{
		$this->load->view('tambah_pegawai');
	}

	public function buat_laporan_custom()
	{
		$this->load->view('laporan_custom');
	}


	public function add_insurance_data()
	{
		$insurance_id = $_POST['insurance_id'];
		$insurance_name = $_POST['insurance_name'];
		$i = 0;
		$data = array();
		foreach($insurance_id as $in){
			array_push($data, array(
				'INSURANCE_ID'=>$in,
				'INSURANCE_NAME'=>$insurance_name[$i]
			));
			$i++;
		}
		$this->beranda_model->add_insurance($data);
		redirect("beranda_control");
	}	

	public function submit_laporan_item()
	{
		$tabel = $_POST['pilihan_tabel'];
		$fitur = $_POST['kolom'];
		if ($tabel == "employees"){
			$data['emp'] = $this->beranda_model->get_single_custom_table($tabel, $fitur);
		} else if ($tabel == "child"){
			$data['emp'] = $this->beranda_model->get_child_emp_custom_table("child", "employees", $fitur);
		}
		$data['fitur'] = $fitur;
		$tabel = $_POST['pilihan_tabel'];

		$this->load->view('eksport_laporan', $data);
	}

}
