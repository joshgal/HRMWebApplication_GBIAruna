<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uang_makan_control extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }

	 
	public function index()
	{
		$this->load->view('uang_makan');
	}

	public function tambah_uang_makan()
	{
		$this->load->view('tambah_uang_makan');
	}
}
