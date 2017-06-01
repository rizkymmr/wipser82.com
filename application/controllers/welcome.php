<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data = $this->mymodel->GetBarang();
		$this->load->view('tabel', array('data' => $data));
	}
	public function insert(){
		$res = $this->mymodel->InsertData('barang',array(
		"kode_barang" => "1100",
		"nama_barang" => "Baju",
		"satuan" => "pcs",
		"jumlah" => "10",
		"harga" => "20000",
		"kategori" => "Sandang"
		));
		if($res >= 1){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
	public function update(){
		$res = $this->mymodel->UpdateData('barang',array(
		"jumlah" => "73"
		),array('kode_barang'=> '1001'));
		if($res >= 1){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
	public function delete(){
		$res = $this->mymodel->DeleteData('barang',array('kode_barang'=> '1001'));
		if($res >= 1){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
}
