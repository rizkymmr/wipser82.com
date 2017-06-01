<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->model('Mymodel');
	}
	public function open(){
		$this->load->view('tabel');
	}
	public function index(){
		$this->load->view('login2');
	}
	public function home(){
		$this->load->view('home');
	}
	function do_login(){
		$username = $this->input->POST('username');
		$password = $this->input->POST('pass');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->M_login->cek_login("admin",$where)->num_rows();
		if($cek> 0){
			$data_session = array(
				'username'=>$username,
				'status'=>"Login"
			);
			$this->session->set_userdata($data_session);
			// $data = $this->Mymodel->GetBarang();
			// $this->load->view('tabel', array('data'=>$data));
			//redirect('Crud');
			if($this->session->username=='admin'){
				redirect('Crud/lamanUser');
			}else{
				redirect('Crud');			}
		}
		else{
			$this->index();
			echo '<script language="javascript">';
			echo 'alert("Login Gagal");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}
	}
	function do_logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}