<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mymodel','mymodel');
	}
	public function index()
	{
		if($this->session->status == 'Login'){
		$data = $this->mymodel->GetBarang();
		$this->load->view('tabel', array('data'=>$data));
		}
		else{
			redirect('login/do_login');
		}
	}
	public function add_data(){
		$this->load->view('form_add');
	}
	public function do_insert(){
		$id = $_POST['id'];
		$nama_barang = $_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$status = $_POST['status'];
		$target = "upload/";
		$uploadOk = 1;
		$target_file = $target.basename($_FILES["foto"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if(move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)){
			echo "The file ".basename($_FILES["foto"]["name"]). " has been uploaded";
		} else {
			echo "Sorry there was a problem when uploading your file";
		}
		$foto=basename($_FILES["foto"]["name"],".jpg");
		
		$data_insert = array(
			'id' => $id,
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'status' => $status,
			'foto' => $foto
		);
		$res = $this->mymodel->InsertData('kosan',$data_insert);
		if($res>=1){
			redirect('Crud/index');
		}else{
			echo "gagal";
		}
	}
	public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->mymodel->DeleteData('kosan',$where);
		if($res>=1){
			redirect('Crud/index');
		}else{
			echo "gagal";
		}
	}
	public function edit_data($id){
		$brg = $this->mymodel->GetBarang("where id = '$id'");
		$data = array(
			"id" => $brg[0]['id'],
			"nama_barang" => $brg[0]['nama_barang'],
			"jumlah" => $brg[0]['jumlah'],
			"status" => $brg[0]['status'],
		);
		$this->load->view('form_edit',$data);
	}
	public function do_update(){
		$id = $_POST['id'];
		$nama_barang = $_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$status = $_POST['status'];
		$data_update = array(
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'status' => $status,
		);
		$where = array('id' => $id);
		$res = $this->mymodel->UpdateData('kosan',$data_update,$where);
		if($res>=1){
			redirect('Crud/index');
		}else{
			echo gagal;
		}
		
	}
	public function lamanUser(){
		if($this->session->status == 'Login'){
		$data['user'] = $this->mymodel->GetUser();
		$data['barang'] = $this->mymodel->GetBarang();
		$this->load->view('tabel_admin', $data);
		}
		else{
			redirect('login/do_login');
		}
	}
}
	