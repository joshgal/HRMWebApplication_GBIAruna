<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class absensi_pegawai_control extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }

	 
	public function index()
	{
		$this->load->view('absensi_pegawai');
	}

	public function tambah_absensi_pegawai()
	{
		$this->load->view('tambah_absensi');
	}
}
