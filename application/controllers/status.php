<?php
	class Status extends CI_controller{
		function __construct(){
			parent :: __construct();

			if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
			}
		}
		 function index(){
		 	$this->load->view('admin/index');
		 }
	}
?>