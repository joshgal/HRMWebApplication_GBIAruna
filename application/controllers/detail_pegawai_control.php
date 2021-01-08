<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_pegawai_control extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('detail_pegawai_model');
    }

	 
	public function detail($id)
	{
		$data['emp'] = $this->detail_pegawai_model->get_employee($id);
		$this->load->view('detail_pegawai', $data);
	}

	public function edit_biodata_pegawai()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s', time());
		$data2 = [
	        "EMPLOYEE_ID" => $_POST['id'],
	        "STATUS_KEPEGAWAIAN" => $_POST['status_kepegawaian'],
	        "TANGGAL_BERGABUNG_PEGAWAI" => $_POST['tanggal_bergabung_pegawai'],
	        "TANGGAL_DIRUMAHKAN_PEGAWAI" => $_POST['tanggal_dirumahkan_pegawai'],
	        "JABATAN_PASTORAL" => $_POST['jabatan_pastoral'],
	        "FIRST_NAME" => $_POST['first_name'],
	        "LAST_NAME" => $_POST['last_name'],
	        "JENIS_KELAMIN" => $_POST['jenis_kelamin'],
	        "TANGGAL_LAHIR" => $_POST['tanggal_lahir'],
	        "ALAMAT" => $_POST['alamat'],
	        "PENDIDIKAN_TERAKHIR" => $_POST['pendidikan_terakhir'],
	        "GELAR_PENDIDIKAN" => $_POST['gelar_pendidikan'],
	        "STATUS_PEGAWAI" => $_POST['status_pegawai'],
	        "STATUS_PEGAWAI_PASTORAL" => $_POST['status_pegawai_pastoral'],
	        "DEPARTMENT_ID" => $_POST['department_id'],
	        "UPDATE_TERAKHIR" => $date
    	];
    	$id = $_POST['skill_id'];
		$emp_id = $_POST['emp_id'];
		$skill_name = $_POST['skill_name'];
		$i = 0;
		$data = array();
		foreach($id as $d){
			array_push($data, array(
				'SKILL_ID'=>$id[$i],
				'EMPLOYEE_ID'=>$emp_id[$i],
				'SKILL_NAME'=>$skill_name[$i]
			));
			$i++;
		}
    	$this->detail_pegawai_model->update_biodata_pegawai($data2);
    	$this->detail_pegawai_model->add_update_skill_pegawai($data);
		redirect("detail_pegawai_control/detail/". $data2['EMPLOYEE_ID']);
	}

	public function edit_keuangan_pegawai()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s', time());
		$data = [
	        "EMPLOYEE_ID" => $_POST['id'],
	        "POKOK_GAJI" => $_POST['pokok_gaji'],
	        "POKOK_UANG_MAKAN" => $_POST['uang_makan'],
	        "REKENING_BCA" => $_POST['rekening_bca'],
	        "UPDATE_TERAKHIR" => $date
    	];
    	$this->detail_pegawai_model->update_keuangan_pegawai($data);
		redirect("detail_pegawai_control/detail/". $data['EMPLOYEE_ID']);
	}

	public function edit_kesehatan_pegawai()
	{
		date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s', time());

        $status = $_POST['status'];
        $status2 = $_POST['insurance_id'];
        $status3 = $_POST['bpjs_id'];

        if($status2 == "kosong"){
        	if ($status3 == 0){
        		$data1 = [
	            "EMPLOYEE_ID" => $_POST['id'],
		        "INSURANCE_ID" => null,
		        "NO_POLIS_PEGAWAI" => null,
		        "UPDATE_TERAKHIR" => $date];
        	} else {
        		$data1 = [
	            "EMPLOYEE_ID" => $_POST['id'],
		        "INSURANCE_ID" => null,
		        "NO_POLIS_PEGAWAI" => null,
		        "BPJS_ID" => $_POST['bpjs_id'],
		        "UPDATE_TERAKHIR" => $date];
        	}
        } else {
        	if ($status3 == 0){
        		$data1 = [
	            "EMPLOYEE_ID" => $_POST['id'],
		        "INSURANCE_ID" => $_POST['insurance_id'],
		        "NO_POLIS_PEGAWAI" => $_POST['no_polis_pegawai'],
		        "UPDATE_TERAKHIR" => $date];	
        	} else {
        		$data1 = [
	            "EMPLOYEE_ID" => $_POST['id'],
		        "INSURANCE_ID" => $_POST['insurance_id'],
		        "NO_POLIS_PEGAWAI" => $_POST['no_polis_pegawai'],
		        "BPJS_ID" => $_POST['bpjs_id'],
		        "UPDATE_TERAKHIR" => $date];
        	}
        }

        if ($status3 != 0){
        	$data2 = [
            "BPJS_ID" => $_POST['bpjs_id'],
            "KELAS_BPJS" => $_POST['kelas_bpjs'],
            "TANGGAL_JOIN_BPJS" => $_POST['tanggal_join_bpjs']];
        } else {
        	$data2 = null;
        }

        if ($status == "baru"){
        	if ($status3 != 0){
        		$this->detail_pegawai_model->input_baru_bpjs_pegawai($data2,$data1);
        	} else {
        		$this->detail_pegawai_model->update_insurance_only($data1);
        	}
			redirect("detail_pegawai_control/detail/". $data1['EMPLOYEE_ID']);
    	} else {
    		$this->detail_pegawai_model->update_kesehatan_pegawai($data2,$data1);
    		redirect("detail_pegawai_control/detail/". $data1['EMPLOYEE_ID']);
    	}
	}

	public function edit_pernikahan_pegawai()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s', time());

		if ($_POST['tanggal_pernikahan'] != ""){
			$data = [
		        "EMPLOYEE_ID" => $_POST['id'],
		        "STATUS_PERNIKAHAN" => $_POST['status_pernikahan'],
		        "TANGGAL_PERNIKAHAN" => $_POST['tanggal_pernikahan'],
		        "JABATAN_KELUARGA" => $_POST['jabatan_keluarga'],
		        "NAMA_PASANGAN" => $_POST['nama_pasangan'],
		        "TEMPAT_KERJA_PASANGAN_PEGAWAI" => $_POST['tempat_kerja_pasangan_pegawai'],
		        "POSISI_PEKERJAAN_PASANGAN_PEGAWAI" => $_POST['posisi_pekerjaan_pasangan_pegawai'],
		        "UPDATE_TERAKHIR" => $date
	    	];
		} else {
			$data = [
		        "EMPLOYEE_ID" => $_POST['id'],
		        "STATUS_PERNIKAHAN" => $_POST['status_pernikahan'],
		        "TANGGAL_PERNIKAHAN" => null,
		        "JABATAN_KELUARGA" => $_POST['jabatan_keluarga'],
		        "NAMA_PASANGAN" => $_POST['nama_pasangan'],
		        "TEMPAT_KERJA_PASANGAN_PEGAWAI" => $_POST['tempat_kerja_pasangan_pegawai'],
		        "POSISI_PEKERJAAN_PASANGAN_PEGAWAI" => $_POST['posisi_pekerjaan_pasangan_pegawai'],
		        "UPDATE_TERAKHIR" => $date
	    	];
		}

    	$this->detail_pegawai_model->update_biodata_pegawai($data);
		redirect("detail_pegawai_control/detail/". $data['EMPLOYEE_ID']);
	}

	public function edit_anak_pegawai()
	{
		$emp = $_POST['id'];
		$id = $_POST['child_id'];
		$nama = $_POST['nama_child'];
		$tanggal = $_POST['tanggal_lahir_child'];
		$bpjs = $_POST['bpjs_orang_tua'];
		$pendidikan = $_POST['pendidikan_child'];
		$pernikahan = $_POST['status_pernikahan_child'];
		$i = 0;
		$data2 = array();
		foreach($id as $d){
			array_push($data2, array(
				'CHILD_ID'=>$id[$i],
				'NAMA_CHILD'=>$nama[$i],
				'TANGGAL_LAHIR_CHILD'=>$tanggal[$i],
				'BPJS_ORANG_TUA'=>$bpjs[$i],
				'PENDIDIKAN_CHILD'=>$pendidikan[$i],
				'STATUS_PERNIKAHAN_CHILD'=>$pernikahan[$i]
			));
			$i++;
		}
		$this->detail_pegawai_model->edit_anak_pegawai($data2);
		redirect("detail_pegawai_control/detail/". $emp);
	}

	public function tambah_anak_pegawai($id_ortu)
	{
		$id = $_POST['child_id'];
		$nama = $_POST['nama_child'];
		$tanggal = $_POST['tanggal_lahir_child'];
		$bpjs = $_POST['bpjs_orang_tua'];
		$pendidikan = $_POST['pendidikan_child'];
		$pernikahan = $_POST['status_pernikahan_child'];
		$i = 0;
		$data2 = array();
		foreach($id as $d){
			array_push($data2, array(
				'CHILD_ID'=>$id[$i],
				'EMPLOYEE_ID'=>$id_ortu,
				'NAMA_CHILD'=>$nama[$i],
				'TANGGAL_LAHIR_CHILD'=>$tanggal[$i],
				'BPJS_ORANG_TUA'=>$bpjs[$i],
				'PENDIDIKAN_CHILD'=>$pendidikan[$i],
				'STATUS_PERNIKAHAN_CHILD'=>$pernikahan[$i]
			));
			$i++;
		}
		$i = 0;
		$this->detail_pegawai_model->tambah_anak_pegawai($data2);
		redirect("detail_pegawai_control/detail/". $id_ortu);
	}	

	public function delete_anak_pegawai($id){
        $this->detail_pegawai_model->delete_anak_pegawai($id);
        redirect("beranda_control");
	}	
}
