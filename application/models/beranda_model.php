<?php defined('BASEPATH') OR exit ('no direct script access');

class beranda_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }


	public function get_all_employees()
	{
	  	$this->db->select('concat(FIRST_NAME," ", LAST_NAME) as NAMA, EMPLOYEE_ID, TEMPAT_LAHIR, TANGGAL_LAHIR, YEAR(CURDATE()) - YEAR(TANGGAL_LAHIR) as USIA, DEPARTMENT_NAME, JENIS_KELAMIN, POKOK_GAJI, POKOK_UANG_MAKAN, GELAR_PENDIDIKAN, JABATAN_PASTORAL');
	  	$this->db->from('employees');
	  	$this->db->join('departments', "departments.DEPARTMENT_ID = employees.DEPARTMENT_ID");
	  	$query = $this->db->get();
	  	return $query->result_array();
	}

	public function get_insurance($id){
		$this->db->select('INSURANCE_NAME');
		$this->db->from('insurance');
		$this->db->join('employees', "insurance.INSURANCE_ID = employees.INSURANCE_ID");
		$this->db->where('employees.EMPLOYEE_ID = ', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function add_insurance($data){
		return $this->db->insert_batch('insurance',$data);
	}

	public function get_employees_features()
	{
		return $this->db->list_fields('employees');
	}

	public function get_child_features()
	{
		$data = array();
		array_push($data, "NAMA_ORANG_TUA", "NAMA_CHILD", "TANGGAL_LAHIR_CHILD", "BPJS_ORANG_TUA", "STATUS_PERNIKAHAN_CHILD", "PENDIDIKAN_CHILD");
		return $data;
	}

	public function get_single_custom_table($table, $data){
		$this->db->select($data);
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_child_emp_custom_table($table1, $table2, $data){
		$this->db->select($data);
		$this->db->from($table1);
		$this->db->join($table2, "child.EMPLOYEE_ID = employees.EMPLOYEE_ID");
		$query = $this->db->get();
		return $query->result_array();
	}
}
