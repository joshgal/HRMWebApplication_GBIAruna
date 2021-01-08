<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class absensi_online_control extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }

	 
	public function index()
	{
		$this->load->view('absensi_online');
	}

	public function tambah_absensi_online()
	{
		$this->load->view('tambah_absensi_online');
	}
}
