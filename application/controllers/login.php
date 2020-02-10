<?php
	class Login extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('login_p');
<<<<<<< HEAD
			$this->login = $this->login_p;

		}
		// function index(){
		// 	$this->load->view('admin/dashboard/petugas/login');
		// }
		function login_d(){
			$nidn = $this->input->post('nidn');
			$password = $this->input->post('password');
			$where = array(
			 		'nidn' => $nidn,
			 		'password' => $password
			 	);
			 $cek = $this->login_p->cek_data("dosen",$where);
			 if($cek >0)
			 {
			 	$data_session = array(
			 					'nidn' => $nidn,
			 					'nama' => $cek->nama,
			 					'status' => "login"
			 				);
			 	$this->session->set_userdata($data_session);
			 	// $this->login_p->last_login();
			 	redirect(base_url("Perpustakaan/anggota"));
			 }
			 else{
			 	$this->session->set_flashdata('message', 'Mohon Maaf Password dan Username Yang Anda Masukkan Salah');
			// 	// echo("Username dan password salah!");
			}
			//$this->load->view('admin/dashboard/index');
		}
		function login_a(){
			$id_admin = $this->input->post('id_admin');
			$password_admin = $this->input->post('password_admin');
			$where = array(
			 		'id_admin' => $id_admin,
			 		'password_admin' => $password_admin
			 	);
			 $cek_a = $this->login_p->cek_data("admin",$where);
			 if($cek_a >0)
			 {
			 	$data_session = array(
			 					'id_admin' => $id_admin,
			 					'nama_admin' => $cek_a->nama_admin,
			 					'status' => "login"
			 				);
			 	$this->session->set_userdata($data_session);
			 	// $this->login_p->last_login();
			 	redirect(base_url("Perpustakaan/petugas"));
			 }
			 else{
			 	$this->session->set_flashdata('message', 'Mohon Maaf Password dan Username Yang Anda Masukkan Salah');
			// 	// echo("Username dan password salah!");
			}
			//$this->load->view('admin/dashboard/index');
		}
		function logout(){
			    $this->session->sess_destroy();
        		redirect(base_url('Welcome/index'));
		}

=======
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
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
	}
 ?>
