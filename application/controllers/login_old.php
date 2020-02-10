<?php
	class Login extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('login_p');
		}
		function index(){
			$this->load->view('admin/dashboard/petugas/login');
		}
		function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
					'username' => $username,
					'password' => $password
				);
			$cek = $this->login_p->cek_data("petugas",$where);
			if($cek >0)
			{
				$data_session = array(
								'nama' => $username,
								'status' => "login"
							);
				$this->session->set_userdata($data_session);
				$this->login_p->last_login();
				redirect(base_url("Perpustakaan/petugas"));
			}
			else{
        $this->session->set_flashdata('message', 'Mohon Maaf Password dan Username Yang Anda Masukkan Salah');
				// echo("Username dan password salah!");
			}
			$this->load->view('admin/dashboard/petugas/login');
		}
	}
 ?>
