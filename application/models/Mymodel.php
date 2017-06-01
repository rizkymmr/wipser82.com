<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetBarang($where=""){
		$data = $this->db->query('select * from kosan '.$where);
		return $data->result_array();	
	}
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
	public function GetUser($where=""){
		$data = $this->db->query('select * from admin '.$where);
		return $data->result_array();	
	}
}
