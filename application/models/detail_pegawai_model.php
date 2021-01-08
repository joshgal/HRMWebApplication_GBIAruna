<?php defined('BASEPATH') OR exit ('no direct script access');

class detail_pegawai_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }


	public function get_employee($id)
	{
	  	$this->db->select('EMPLOYEE_ID, concat(FIRST_NAME," ", LAST_NAME) as NAMA, JENIS_KELAMIN, TEMPAT_LAHIR, TANGGAL_LAHIR, ALAMAT, STATUS_PERNIKAHAN, JABATAN_KELUARGA, NAMA_PASANGAN, TANGGAL_PERNIKAHAN, GELAR_PENDIDIKAN, PENDIDIKAN_TERAKHIR, STATUS_PEGAWAI, STATUS_PEGAWAI_PASTORAL, POKOK_UANG_MAKAN, POKOK_GAJI, REKENING_BCA, DEPARTMENT_NAME, JABATAN_PASTORAL, FIRST_NAME, LAST_NAME, STATUS_KEPEGAWAIAN, TANGGAL_BERGABUNG_PEGAWAI, TANGGAL_DIRUMAHKAN_PEGAWAI, UPDATE_TERAKHIR, NO_POLIS_PEGAWAI, TEMPAT_KERJA_PASANGAN_PEGAWAI, POSISI_PEKERJAAN_PASANGAN_PEGAWAI');
	  	$this->db->from('employees');
	  	$this->db->join('departments', "employees.DEPARTMENT_ID = departments.DEPARTMENT_ID");
	  	$this->db->where('employees.EMPLOYEE_ID = ', $id);
	  	$query = $this->db->get();
	  	return $query->result_array();
	}

	public function get_employee_skill($id)
	{
	  	$this->db->select('SKILL_ID, SKILL_NAME');
	  	$this->db->from('skill');
	  	$this->db->where('EMPLOYEE_ID = ', $id);
	  	$query = $this->db->get();
	  	return $query->result_array();
	}

	public function get_all_skill(){
        $this->db->select('SKILL_ID');
	  	$this->db->from('skill');
	  	$query = $this->db->get();
	  	return $query->result_array();
	}

	public function get_bpjs($id)
	{
		$this->db->select('bpjs.BPJS_ID, TANGGAL_JOIN_BPJS, KELAS_BPJS');
		$this->db->from('bpjs');
		$this->db->join('employees', "employees.BPJS_ID = bpjs.BPJS_ID");
		$this->db->where('employees.EMPLOYEE_ID = ', $id);
	  	$query = $this->db->get();
	  	return $query->result_array();
	}

	public function get_insurance($id){
		$this->db->select('INSURANCE_NAME, NO_POLIS_PEGAWAI');
		$this->db->from('insurance');
		$this->db->join('employees', "insurance.INSURANCE_ID = employees.INSURANCE_ID");
		$this->db->where('employees.EMPLOYEE_ID = ', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function update_insurance_only($data){
		$this->db->where('EMPLOYEE_ID = ',$data['EMPLOYEE_ID']);
    	return $this->db->update('employees', $data);
	}

	public function get_child($id){
		$this->db->select('CHILD_ID, NAMA_CHILD, TANGGAL_LAHIR_CHILD, BPJS_ORANG_TUA, STATUS_PERNIKAHAN_CHILD, PENDIDIKAN_CHILD');
		$this->db->from('child');
		$this->db->order_by("TANGGAL_LAHIR_CHILD", "asc");
		$this->db->where('EMPLOYEE_ID = ', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_departments(){
		$this->db->select('DEPARTMENT_ID,DEPARTMENT_NAME');
		$this->db->from('departments');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_insurance(){
		$this->db->select('INSURANCE_ID, INSURANCE_NAME');
		$this->db->from('insurance');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function update_biodata_pegawai($data){
		$this->db->where('EMPLOYEE_ID = ',$data['EMPLOYEE_ID']);
    	return $this->db->update('employees', $data);
	}

	public function update_keuangan_pegawai($data){
		$this->db->where('EMPLOYEE_ID = ',$data['EMPLOYEE_ID']);
    	return $this->db->update('employees', $data);
	}

	public function update_kesehatan_pegawai($data1, $data2){
		$this->db->where('BPJS_ID = ',$data1['BPJS_ID']);
    	$this->db->update('bpjs', $data1);
    	$this->db->where('EMPLOYEE_ID = ',$data2['EMPLOYEE_ID']);
    	$this->db->update('employees', $data2);
	}

	public function input_baru_bpjs_pegawai($data1, $data2){
		$this->db->insert('bpjs',$data1);
		$this->db->where('EMPLOYEE_ID = ',$data2['EMPLOYEE_ID']);
    	$this->db->update('employees', $data2);
	}

	public function edit_anak_pegawai($data){
		foreach ($data as $d) {
			$this->db->where('CHILD_ID = ',$d['CHILD_ID']);
    		$this->db->update('child', $d);
		}
	}

	public function get_all_child(){
		$this->db->select('CHILD_ID');
		$this->db->from('child');
		$this->db->order_by("CHILD_ID", "desc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_anak_pegawai($data){
		return $this->db->insert_batch('child',$data);
	}

	public function delete_anak_pegawai($id){
        $this->db->where("CHILD_ID",$id);
        $this->db->delete("child");
	}

	public function check_skill($id){
        $this->db->select('SKILL_ID');
	  	$this->db->from('skill');
	  	$this->db->where('SKILL_ID = ', $id);
	  	$query = $this->db->get();
	  	return $query->result_array();
	}

	public function add_update_skill_pegawai($data){
		print_r($data);
		foreach ($data as $d) {
			$cek = $this->check_skill($d['SKILL_ID']);
			if ($cek == null) {
				echo "null";
				$this->db->insert('skill',$d);
			} else {
				echo "tidak null";
				$this->db->where('SKILL_ID = ',$d['SKILL_ID']);
    			$this->db->update('skill',$d);
			}
		}
	}

}