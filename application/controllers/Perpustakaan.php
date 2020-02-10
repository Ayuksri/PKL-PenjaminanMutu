<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {

	function __construct() {
		parent::__construct();
<<<<<<< HEAD
		$this->load->helper('download');
		$this->load->library('form_validation');


		$this->load->model('DataMaster_Matakuliah');
		$this->load->model('DataMaster_Materi');
		$this->load->model('DataMaster_Proses');
		$this->load->model('DataMaster_Mahasiswa');
		$this->load->model('DataMaster_Template');
		$this->load->model('DataMaster_CplProdi');
		$this->load->model('DataMaster_CpMK');
		$this->load->model('DataMaster_Kriteria');
		$this->load->model('RPS_model');
		$this->load->model('login_p');


		$this->md_matkul = $this->DataMaster_Matakuliah;
		$this->md_materi = $this->DataMaster_Materi;
		$this->md_proses = $this->DataMaster_Proses;
		$this->md_mahasiswa = $this->DataMaster_Mahasiswa;
		$this->md_template = $this->DataMaster_Template;
		$this->md_cplProdi = $this->DataMaster_CplProdi;
		$this->md_cpMk = $this->DataMaster_CpMK;
		$this->md_kriteria = $this->DataMaster_Kriteria;
		$this->md_rpsmodel= $this->RPS_model;
		$this->md_login=$this->login_p;
	}
	
	public function login_dosen()
	{
		$this->load->view('admin/dashboard/anggota/login_dsn');
	}
	public function login_admin()
	{
		$this->load->view('admin/dashboard/petugas/login_admin');
	}
	public function petugas()
	{
		$this->load->view('admin/dashboard/petugas/index');
=======
		$this->load->library('form_validation');

		$this->load->model('DataMaster_Buku');
		$this->load->model('DataMaster_Anggota');
		$this->load->model('DataMaster_Peminjaman');

		$this->md_buku = $this->DataMaster_Buku;
		$this->md_ang = $this->DataMaster_Anggota;
		$this->md_pem = $this->DataMaster_Peminjaman;
	}
	public function petugas()
	{
		$this->load->view('admin/dashboard/index');
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
	}
	public function anggota()
	{
		$this->load->view('admin/dashboard/anggota/index');
	}
<<<<<<< HEAD
	// public function login()
	// {
	// 	$this->load->view('admin/dashboard/anggota/login_dsn');
	// }
	public function index()
	{
		redirect( base_url() );
	}
	public function listAngkatan()
	{
		// $data['anggota'] = $this->md_ang->list_all();
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_angkatan');
	}
	public function listAngkatan_mhs()
	{
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_angkatan');
	}
//<---------------------------------------------------------------------------------------------------------------------------------------------------->
//<---------------------------------------------------------------------------------------------------------------------------------------------------->
	//Untuk Admin
	public function data_template()
	{
		$data['template'] = $this->md_template->full_template();
		$this->load->view('admin/dashboard/petugas/data_template',$data);
	}

	public function dataMatakuliah_full()
	{
		$data['matakuliah'] = $this->md_matkul->full_matkul();
		$data['dosen'] = $this->md_matkul->dosen();
		$data['semester'] = $this->md_matkul->semester();
		$data['angkatan'] = $this->md_matkul->angkatan();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/data_matakuliah',$data);
	}
	public function dataCpl_Prodi()
	{
		$data['cpl_prodi'] = $this->md_cplProdi->full_cpl();
		$this->load->view('admin/dashboard/petugas/data_cplprodi',$data);
	}
	public function dataCp_MK()
	{
		$data['cp_mk'] = $this->md_cpMk->full_cp();
		$this->load->view('admin/dashboard/petugas/data_cpmk',$data);
	}
	public function dataKriteria()
	{
		$data['kriteria_penilaian'] = $this->md_kriteria->full_kriteria();
		$this->load->view('admin/dashboard/petugas/data_kriteria',$data);
	}
//<---------------------------------------------------------------------------------------------------------------------------------------------------->
//<---------------------------------------------------------------------------------------------------------------------------------------------------->
// UNTUK MATERI PEMBELAJARAN

	public function listMatakuliah1()
	{
		$nidn = $this->session->userdata('nidn');
		$data['matakuliah'] = $this->md_matkul->list_all1($nidn);
		// return var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliah2() //untuk sementara
	{
		$nidn = $this->session->userdata('nidn');
		$data['matakuliah'] = $this->md_matkul->list_all2($nidn);
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliah3() //untuk materi sementara
	{
		$nidn = $this->session->userdata('nidn');
		$data['matakuliah'] = $this->md_matkul->list_all3($nidn);
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_matakuliah',$data);
	}
	public function listMateri()
	{
		$id=$this->uri->segment('3');
		$where = array('id_matkul' => $id);
		$data['materi'] = $this->md_materi->list_all($id);
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_materi',$data);
	}
	public function data_template_dosen()
	{
		$data['template'] = $this->md_template->full_template1();
		// $data['dosen'] = $this->md_template->dosen();
		$this->load->view('admin/dashboard/anggota/template_dosen',$data);
	}
	public function listMatakuliah_full()
	{
		$data['matakuliah'] = $this->md_matkul->full_matkul();
		// return var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_full_matakuliah',$data);
	}
	public function listMateri_full()
	{
		$id=$this->uri->segment('3');
		$where = array('id_matkul' => $id);
		$data['materi'] = $this->md_materi->list_all($id);
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_full_materi',$data);
	}
	
	//UNTUK PROSES PEMBELAJARAN
	public function data_kontrak_kuliah()
	{
		// $data['kontrak_kuliah']=$this->md_kontrakkuliah->jumlah_data();
		$data['kontrak_kuliah']=$this->md_kontrakkuliah->read();
		$this->load->view('admin/dashboard/anggota/kontrak_kuliah',$data);
	}
	public function data_mahasiswa(){
		$data['mahasiswa']=$this->md_mahasiswa->read();
		$this->load->view('admin/dashboard/anggota/mahasiswa',$data);
	}
	public function data_rencana_pembelajaran(){
		$data['rencana_pembelajaran']=$this->md_rencanapembelajaran->read();
		$this->load->view('admin/dashboard/anggota/rencana_pembelajaran',$data);
	}
	public function data_referensi(){
		$data['referensi']=$this->md_referensi->read();
		$this->load->view('admin/dashboard/anggota/referensi',$data);
	}
	public function tambah_kontrakkuliah()
	{
		$data['kontrak_kuliah']=$this->md_kontrakkuliah->read();
		$data['dosen'] = $this->md_kontrakkuliah->dosen();		
		$this->load->view('admin/dashboard/anggota/tambah_kontrak_kuliah',$data);
	}
	public function tambah_mahasiswa()
	{
		$data['mahasiswa']=$this->md_mhs->read();		
		$this->load->view('admin/dashboard/anggota/tambah_mahasiswa',$data);
	}
	public function tambah_Rpembelajaran()
	{
		$data['rencana_pembelajaran']=$this->md_rencanapembelajaran->read();		
		$this->load->view('admin/dashboard/anggota/tambah_rencana_pembelajaran',$data);
	}
	public function tambah_referensi()
	{
		$data['referensi']=$this->md_referensi->read();		
		$this->load->view('admin/dashboard/anggota/tambah_referensi',$data);
	}
	public function edit_kontrakkuliah()
	{
		$data['kontrak_kuliah']=$this->md_kontrakkuliah->read();
		$data['dosen'] = $this->md_kontrakkuliah->dosen();		
		$this->load->view('admin/dashboard/anggota/ubah_kontrak_kuliah',$data);
	}
	public function edit_mahasiswa()
	{
		$data['mahasiswa']=$this->md_mhs->read();		
		$this->load->view('admin/dashboard/anggota/ubah_mahasiswa',$data);
	}
	public function edit_referensi()
	{
		$data['referensi']=$this->md_referensi->read();		
		$this->load->view('admin/dashboard/anggota/ubah_referensi',$data);
	}
	public function listAngkatan_prosesPembelajaran()
	{
		// $data['anggota'] = $this->md_ang->list_all();
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/proses_pembelajaran_angkatan');
	}
	public function listMatakuliahProses1()
	{
		$data['matakuliah'] = $this->md_matkul->list_all1();
		// return var_dump($data);
		$arrToView['matakuliah'] = $this->RPS_model->getMatkul();
			$arrToView['dosen'] = $this->RPS_model->getDosen();
			$arrToView['semester'] = $this->RPS_model->getSemester();
		$this->load->view('admin/dashboard/anggota/proses_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliahProses1_mhs()//list matakuliah untuk mahasiswa
	{
		$data['matakuliah'] = $this->md_matkul->list_all1();
		// return var_dump($data);
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliahProses2() //untuk sementara
	{
		$data['matakuliah'] = $this->md_matkul->list_all2();
		//var_dump($data);
		$arrToView['matakuliah'] = $this->RPS_model->getMatkul();
			$arrToView['dosen'] = $this->RPS_model->getDosen();
			$arrToView['semester'] = $this->RPS_model->getSemester();
		$this->load->view('admin/dashboard/anggota/proses_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliahProses2_mhs() //list matakuliah untuk mahasiswa
	{
		$data['matakuliah'] = $this->md_matkul->list_all2();
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliahProses3() //untuk sementara
	{
		$id=$this->uri->segment('3');
		$data['proses'] = $this->md_proses->list_all3();
		//var_dump($data);
		$dataMatkul['matakuliah'] = $this->RPS_model->getMatkul();	
		$dataDosen['dosen'] = $this->RPS_model->getDosen();
		$dataSemester['semester'] = $this->RPS_model->getSemester();
		$arrToView['matakuliah'] = $this->RPS_model->getMatkul();
		$arrToView['dosen'] = $this->RPS_model->getDosen();
		$arrToView['semester'] = $this->RPS_model->getSemester();
		$this->load->view('admin/dashboard/anggota/proses_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliahProses3_mhs()// list matakuliah untuk mahasiswa
	{
		$data['matakuliah'] = $this->md_matkul->list_all3();
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/materi_pembelajaran_matakuliah',$data);
	}
	// public function listAngkatan_prosesPembelajaran()
	// {
	// 	// $data['anggota'] = $this->md_ang->list_all();
	// 	//var_dump($data);
	// 	$this->load->view('admin/dashboard/anggota/proses_pembelajaran_angkatan');
	// }
	// public function listMatakuliahProses1()
	// {
	// 	$data['matakuliah'] = $this->md_matkul->list_all1();
	// 	// return var_dump($data);
	// 	$arrToView['matakuliah'] = $this->RPS_model->getMatkul();
	// 		$arrToView['dosen'] = $this->RPS_model->getDosen();
	// 		$arrToView['semester'] = $this->RPS_model->getSemester();
	// 	$this->load->view('admin/dashboard/anggota/proses_pembelajaran_matakuliah',$data);
	// }
	// public function listMatakuliahProses1_mhs()//list matakuliah untuk mahasiswa
	// {
	// 	$data['matakuliah'] = $this->md_matkul->list_all1();
	// 	// return var_dump($data);
	// 	$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_matakuliah',$data);
	// }
	// public function listMatakuliahProses2() //untuk sementara
	// {
	// 	$data['matakuliah'] = $this->md_matkul->list_all2();
	// 	//var_dump($data);
	// 	$arrToView['matakuliah'] = $this->RPS_model->getMatkul();
	// 		$arrToView['dosen'] = $this->RPS_model->getDosen();
	// 		$arrToView['semester'] = $this->RPS_model->getSemester();
	// 	$this->load->view('admin/dashboard/anggota/proses_pembelajaran_matakuliah',$data);
	// }
	// public function listMatakuliahProses2_mhs() //list matakuliah untuk mahasiswa
	// {
	// 	$data['matakuliah'] = $this->md_matkul->list_all2();
	// 	//var_dump($data);
	// 	$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_matakuliah',$data);
	// }
	// public function listMatakuliahProses3() //untuk sementara
	// {
	// 	$id=$this->uri->segment('3');
	// 	$data['proses'] = $this->md_proses->list_all3();
	// 	//var_dump($data);
	// 	$dataMatkul['matakuliah'] = $this->RPS_model->getMatkul();
			
	// 		$dataDosen['dosen'] = $this->RPS_model->getDosen();
			
	// 		$dataSemester['semester'] = $this->RPS_model->getSemester();
	// 		$arrToView['matakuliah'] = $this->RPS_model->getMatkul();
	// 		$arrToView['dosen'] = $this->RPS_model->getDosen();
	// 		$arrToView['semester'] = $this->RPS_model->getSemester();
	// 	$this->load->view('admin/dashboard/anggota/proses_pembelajaran_matakuliah',$data);
	// }
	// public function listMatakuliahProses3_mhs()// list matakuliah untuk mahasiswa
	// {
	// 	$data['matakuliah'] = $this->md_matkul->list_all3();
	// 	//var_dump($data);
	// 	$this->load->view('admin/dashboard/anggota/materi_pembelajaran_matakuliah',$data);
	// }

// UNTUK NILAI PEMBELAJARAN
	public function listMatakuliah1_mhs()//list nilai matakuliah untuk mahasiswa
	{
		$nidn = $this->session->userdata('nidn');
		$data['matakuliah'] = $this->md_matkul->list_all1($nidn);
		// return var_dump($data);
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_matakuliah',$data);
	}
	
	public function listMatakuliah2_mhs() //list nili matakuliah untuk mahasiswa
	{
		$nidn = $this->session->userdata('nidn');
		$data['matakuliah'] = $this->md_matkul->list_all2($nidn);
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_matakuliah',$data);
	}
	
	public function listMatakuliah3_mhs()// list nilai matakuliah untuk mahasiswa
	{
		$nidn = $this->session->userdata('nidn');
		$data['matakuliah'] = $this->md_matkul->list_all3($nidn);
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_matakuliah',$data);
	}
	public function pencarian_semester(){
		$semester=$this->input->get('semester');
		$data['matakuliah'] = $this->md_matkul($semester)->result_array();
    	$this->load->view('admin/dashboard/anggota/materi_pembelajaran_matakuliah',$data); 
	}
	public function listRekapan()
	{
		$id=$this->uri->segment('3');
		$where = array('id_matkul' => $id);
		$data['mahasiswa'] = $this->md_mahasiswa->list_all($id);
		$data['nilai_mandiri'] = $this->md_mahasiswa->list_mandiri($id);
		$data['nilai_ujian'] = $this->md_mahasiswa->list_ujian($id);
		$data['nilai_kelompok'] = $this->md_mahasiswa->list_kelompok($id);
		$data['nilai_quiz'] = $this->md_mahasiswa->list_quiz($id);
		$data['nilai_keaktifan'] = $this->md_mahasiswa->list_keaktifan($id);
		$data['rekap_nilai'] = $this->md_mahasiswa->list_rekapan($id);
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_rekapan_matakuliah',$data);
	}
	public function listMahasiswa()//belum
	{
		$id=$this->uri->segment('3');
		$where = array('id_matkul' => $id);
		$data['mahasiswa'] = $this->md_mahasiswa->list_all($id);
		$data['nilai_mandiri'] = $this->md_mahasiswa->list_mandiri($id);
		$data['nilai_ujian'] = $this->md_mahasiswa->list_ujian($id);
		$data['nilai_kelompok'] = $this->md_mahasiswa->list_kelompok($id);
		$data['nilai_quiz'] = $this->md_mahasiswa->list_quiz($id);
		$data['nilai_keaktifan'] = $this->md_mahasiswa->list_keaktifan($id);
		
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/nilai_pembelajaran_mahasiswa',$data);
	}
// untuk menampilkan nama file di database yang telah di upload
	public function file(){
			$name = $this->uri->segment(4);
			// kenapa segmentnya 4 ya ?
			//$data = file_get_contents("./assets/file/".$name);
			$tofile= realpath("assets/file/".$name);
			header('Content-Type: application/pdf');
			// header('Content-Disposition: inline; filename="' . $name . '"');
  	// 		header('Content-Transfer-Encoding: binary');
  	// 		header('Accept-Ranges: bytes');
			readfile($tofile);
			//force_download($name, $data);
	}
	public function file_template(){
			$name = $this->uri->segment(4);
			// kenapa segmentnya 4 ya ?
			//$data = file_get_contents("./assets/file/".$name);
			$tofile= realpath("assets/template/".$name);
			header('Content-Type: application/pdf');
			// header('Content-Disposition: inline; filename="' . $name . '"');
  	// 		header('Content-Transfer-Encoding: binary');
  	// 		header('Accept-Ranges: bytes');
			readfile($tofile);
			//force_download($name, $data);
	}
	// //untuk download file
	function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->md_materi->get_file_byid($id); //ini inget//
		$q=$get_db->result_array();
		$file=$q[0]['file'];
		// echo print_r($file);
		// return false;
		$path=base_url().'/assets/file/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}
	function get_file_template(){
		$id=$this->uri->segment(3);
		$get_db=$this->md_template->get_file_byid($id); //ini inget//
		$q=$get_db->result_array();
		$file=$q[0]['file'];
		// echo print_r($file);
		// return false;
		$path=base_url().'/assets/template/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}
//uNTUK tAMBAH
=======
	public function login()
	{
		$this->load->view('admin/dashboard/petugas/login');
	}
	public function index()
	{
		redirect( base_url() );
	}
	public function listPeminjaman()
	{
		$data['peminjam'] = $this->md_pem->list_all();
		$data['petugas'] = $this->md_pem->petugas();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/master_peminjam',$data);
	}
	public function listBuku()
	{
		$data['buku'] = $this->md_buku->list_all();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/master_buku',$data);
	}
	public function listAnggota()
	{
		$data['anggota'] = $this->md_ang->list_all();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/master_anggota',$data);
	}
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
	public function addNew()
	{
		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}

<<<<<<< HEAD
		$cek=$this->uri->segment('3'); //lihat di link lalu hitung / nya setelah localhost/perpustakaan
		$id=$this->uri->segment('3');
		$filename_materi=$this->uri->segment('3');
		$filename_template=$this->uri->segment('3');
		//var_dump($cek);
		switch ($cek) {
			case 'materi':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					//untuk mengupload file pdfnya.
					$time_stamp = $this->md_materi->time();
				 	$namefile = $_FILES['file']['name'];
				 	$name = basename($namefile);
				 	$file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
				 	$document = $time_stamp."_".$name;
				 	$config['upload_path'] = './assets/file/';
				 	$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx';
				 	$config['file_name'] = $document;
				 	$config['overwrite'] = true;
				 	$config['max_size'] = 1024;

					$this->load->library('upload',$config);
					if ($this->upload->do_upload('file')) {
				 		$upload_data =$this->upload->data();
				 		$filename_materi= $upload_data['file_name'];
					}
					$kode_materi= $this->security->xss_clean( $this->input->post('kode_materi'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nama_materi= $this->security->xss_clean( $this->input->post('nama_materi'));
					$deskripsi= $this->security->xss_clean( $this->input->post('deskripsi'));
					$file= $document;
					// validasi
					$this->form_validation->set_rules('nama_materi', 'Nama Materi', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah materi');
						redirect( base_url('Perpustakaan/listMateri') );
					}
					$data['kode_materi'] = $kode_materi;
					$data['id_matkul'] = $id_matkul;
		            $data['nama_materi'] = $nama_materi;
					$data['deskripsi'] = $deskripsi;
					$data['file'] = $file;
					$this->md_materi->tambahMateri($data,$id);
					// redirect(base_url('Perpustakaan/listMateri'));
					redirect($_SERVER['HTTP_REFERER']);
				}
				break;
				case 'matakuliah':
					if( $_SERVER['REQUEST_METHOD'] == 'POST') {
						$kode_matkul= $this->security->xss_clean( $this->input->post('kode_matkul'));
						$nama_matkul= $this->security->xss_clean( $this->input->post('nama_matkul'));
						$nidn= $this->security->xss_clean( $this->input->post('nidn'));
						$kelas= $this->security->xss_clean( $this->input->post('kelas'));
						$jalur= $this->security->xss_clean( $this->input->post('jalur'));
						$id_semester= $this->security->xss_clean( $this->input->post('id_semester'));
						$id_angkatan= $this->security->xss_clean( $this->input->post('id_angkatan'));
					// validasi
					$this->form_validation->set_rules('nama_matkul', 'Nama Materi', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Matakuliah');
						redirect( base_url('Perpustakaan/dataMatakuliah_full') );
					}
		            $data['kode_matkul'] = $kode_matkul;
					$data['nama_matkul'] = $nama_matkul;
					$data['nidn'] = $nidn;
					$data['kelas'] = $kelas;
					$data['jalur'] = $jalur;
					$data['id_semester'] = $id_semester;
					$data['id_angkatan'] = $id_angkatan;
					var_dump($data);
					$this->md_matkul->tambahMatkul($data);
					redirect($_SERVER['HTTP_REFERER']);
				}
				break;
				case 'template':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					//untuk mengupload file pdfnya.
					$time_stamp = $this->md_template->time();
				 	$namefile = $_FILES['file']['name'];
				 	$name = basename($namefile);
				 	$file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
				 	$document = $time_stamp."_".$name;
				 	$config['upload_path'] = './assets/template/';
				 	$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx';
				 	$config['file_name'] = $document;
				 	$config['overwrite'] = true;
				 	$config['max_size'] = 1024;

					$this->load->library('upload',$config);
					if ($this->upload->do_upload('file')) {
				 		$upload_data =$this->upload->data();
				 		$filename_template= $upload_data['file_name'];
					}
					$id_template= $this->security->xss_clean( $this->input->post('id_template'));
					$nama_template= $this->security->xss_clean( $this->input->post('nama_template'));
					$file= $document;
					
					// validasi
					$this->form_validation->set_rules('nama_template', 'Nama Template', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah Template');
						redirect( base_url('Perpustakaan/data_template'));
					}
					$data['id_template'] = $id_template;
					$data['nama_template'] = $nama_template;
					$data['file'] = $file;
					$this->md_template->tambahTemplate($data);
					// redirect(base_url('Perpustakaan/listMateri'));
					redirect($_SERVER['HTTP_REFERER']);
				}
				break;
				case 'cpl':
					if( $_SERVER['REQUEST_METHOD'] == 'POST') {
						$kode_cpl= $this->security->xss_clean( $this->input->post('kode_cpl'));
						$deskripsi_cpl= $this->security->xss_clean( $this->input->post('deskripsi_cpl'));
						// validasi
						$this->form_validation->set_rules('kode_cpl', 'Kode CPL-PRODI', 'required');
						if(!$this->form_validation->run()) {
							$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Matakuliah');
							redirect( base_url('Perpustakaan/dataCpl_Prodi') );
						}
						$data['kode_cpl'] = $kode_cpl;
						$data['deskripsi_cpl'] = $deskripsi_cpl;
						var_dump($data);
						$this->md_cplProdi->tambahCPL($data);
						redirect($_SERVER['HTTP_REFERER']);
					}
				break;
				case 'cp':
					if( $_SERVER['REQUEST_METHOD'] == 'POST') {
							$kode_cp= $this->security->xss_clean( $this->input->post('kode_cp'));
							$deskripsi_cp= $this->security->xss_clean( $this->input->post('deskripsi_cp'));
						// validasi
						$this->form_validation->set_rules('deskripsi_cp', 'Deskripsi CP', 'required');
						if(!$this->form_validation->run()) {
							$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Matakuliah');
							redirect( base_url('Perpustakaan/dataCp_MK') );
						}
			            $data['kode_cp'] = $kode_cp;
						$data['deskripsi_cp'] = $deskripsi_cp;
						$this->md_cpMk->tambahCP($data);
						redirect($_SERVER['HTTP_REFERER']);
					}
				break;
				case 'kriteria':
					if( $_SERVER['REQUEST_METHOD'] == 'POST') {
							$kode_kriteria= $this->security->xss_clean( $this->input->post('kode_kriteria'));
							$deskripsi_kriteria= $this->security->xss_clean( $this->input->post('deskripsi_kriteria'));
						// validasi
						$this->form_validation->set_rules('deskripsi_kriteria', 'Deskripsi Kriteria', 'required');
						if(!$this->form_validation->run()) {
							$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Matakuliah');
							redirect( base_url('Perpustakaan/data_kriteria') );
						}
			            $data['kode_kriteria'] = $kode_kriteria;
						$data['deskripsi_kriteria'] = $deskripsi_kriteria;
						$this->md_kriteria->tambahKriteria($data);
						redirect($_SERVER['HTTP_REFERER']);
					}
				break;
				case 'proses':
					if( $_SERVER['REQUEST_METHOD'] == 'POST') {
						//untuk mengupload file pdfnya.
						$time_stamp = $this->md_proses->time();
						 $namefile = $_FILES['file_RPS']['name'];
						 $name = basename($namefile,".pdf");
						 $file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
						 $document_kontrakKuliah = $time_stamp."_".$name.".".$file_ext;
						 $config['upload_path'] = './assets/file/';
						 $config['allowed_types'] = 'pdf';
						 $config['file_name'] = $document_kontrakKuliah;
						 $config['overwrite'] = true;
						 $config['max_size'] = 1024;
	
						$this->load->library('upload',$config);
						if ($this->upload->do_upload('file')) {
							 $upload_data =$this->upload->data();
							 $filename_proses= $upload_data['file_name'];
						}

						//untuk mengupload file pdfnya.
						$time_stamp = $this->md_proses->time();
						 $namefile = $_FILES['file_kontrakKuliah']['name'];
						 $name = basename($namefile,".pdf");
						 $file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
						 $document_RPS = $time_stamp."_".$name.".".$file_ext;
						 $config['upload_path'] = './assets/file/';
						 $config['allowed_types'] = 'pdf';
						 $config['file_name'] = $document_RPS;
						 $config['overwrite'] = true;
						 $config['max_size'] = 1024;
	
						$this->load->library('upload',$config);
						if ($this->upload->do_upload('file')) {
							 $upload_data =$this->upload->data();
							 $filename_proses= $upload_data['file_name'];
						}

						$bobot= $this->security->xss_clean( $this->input->post('bobot'));
						$id_semester= $this->security->xss_clean( $this->input->post('id_semester'));
						$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
						$nidn= $this->security->xss_clean( $this->input->post('nidn'));
						$id_angkatan= $this->security->xss_clean( $this->input->post('id_angkatan'));
						$deskripsi= $this->security->xss_clean( $this->input->post('deskripsi'));
						$file_kontrakKuliah = $document_kontrakKuliah;
						$file_RPS= $document_RPS;
						// validasi
						$this->form_validation->set_rules('id_matkul', 'Nama Matakuliah', 'required');
						if(!$this->form_validation->run()) {
							$this->session->set_flashdata('msg_alert_error', 'Gagal menambah materi!');
							//redirect( base_url('Perpustakaan/listMatakuliahProses3') );
						}
						$data['bobot'] = $bobot;
						$data['id_semester'] = $id_semester;
						$data['id_matkul'] = $id_matkul;
						$data['nidn'] = $nidn;
						$data['id_angkatan'] = $id_angkatan;
						$data['filekontrakKuliah'] = $file_kontrakKuliah;
						$data['fileRPS'] = $file_RPS;
						$data['deskripsi'] = $deskripsi;
						$this->md_proses->tambahProses($data,$id);
						// redirect(base_url('Perpustakaan/listMateri'));
						redirect($_SERVER['HTTP_REFERER']);
					}
				case 'nilai':

					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nilai_mandiri= $this->security->xss_clean( $this->input->post('nilai_mandiri'));
					$nilai_kelompok= $this->security->xss_clean( $this->input->post('nilai_kelompok'));
					$nilai_keaktifan= $this->security->xss_clean( $this->input->post('nilai_keaktifan'));
					$nilai_quiz= $this->security->xss_clean( $this->input->post('nilai_quiz'));
					$nilai_uts= $this->security->xss_clean( $this->input->post('nilai_uts'));
					$nilai_uas= $this->security->xss_clean( $this->input->post('nilai_uas'));


					$data['id_mahasiswa'] = $id_mahasiswa;
					$data['id_matkul'] = $id_matkul;
					$data['nilai_mandiri'] = $nilai_mandiri;
		            $data['nilai_kelompok'] = $nilai_kelompok;
		            $data['nilai_keaktifan'] = $nilai_keaktifan;
		            $data['nilai_quiz'] = $nilai_quiz;
		            $data['nilai_uts'] = $nilai_uts;
		            $data['nilai_uas'] = $nilai_uas;
		            
					$this->md_mahasiswa->tambahNilai($data,$id);
				redirect($_SERVER['HTTP_REFERER']);
				break;
				case 'kontrak_kuliah':
					$data['id_kontrak_kuliah'] =$this->input->post('id_kontrak_kuliah');
					$data['sks'] =$this->input->post('sks');
					$data['deskripsi_mata_kuliah'] =$this->input->post('deskripsi_mata_kuliah');
					$data['strategi_perkuliahan'] =$this->input->post('strategi_perkuliahan');
					$data['referensi'] =$this->input->post('referensi');
					$data['persentase_kehadiran'] =$this->input->post('persentase_kehadiran');
					$data['persentase_keaktifan'] =$this->input->post('persentase_keaktifan');
					$data['persentase_kuis'] =$this->input->post('persentase_kuis');
					$data['persentase_uts'] =$this->input->post('persentase_uts');
					$data['persentase_uas'] =$this->input->post('persentase_uas');
					$data['id_matkul'] =$this->input->post('id_matkul');
			  		$data['id_semester'] =$this->input->post('id_semester');
					$data['nidn'] =$this->input->post('nidn');
					$data['topik_1'] =$this->input->post('topik_1');
					$data['topik_2'] =$this->input->post('topik_2');
					$data['topik_3'] =$this->input->post('topik_3');
					$data['topik_4'] =$this->input->post('topik_4');
					$data['topik_5'] =$this->input->post('topik_5');
					$data['topik_6'] =$this->input->post('topik_6');
					$data['topik_7'] =$this->input->post('topik_7');
					$data['topik_8'] =$this->input->post('topik_8');
					$data['topik_9'] =$this->input->post('topik_9');
					$data['topik_10'] =$this->input->post('topik_10');
					$data['topik_11'] =$this->input->post('topik_11');
					$data['topik_12'] =$this->input->post('topik_12');
					$data['topik_13'] =$this->input->post('topik_13');
					$data['topik_14'] =$this->input->post('topik_14');
					$data['topik_15'] =$this->input->post('topik_15');
					$data['topik_16'] =$this->input->post('topik_16');
					return $this->db->insert('kontrak_kuliah', $data);
				break;
				case 'proses':
					if( $_SERVER['REQUEST_METHOD'] == 'POST') {
						//untuk mengupload file pdfnya.
						$time_stamp = $this->md_proses->time();
						 $namefile = $_FILES['file_RPS']['name'];
						 $name = basename($namefile,".pdf");
						 $file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
						 $document_kontrakKuliah = $time_stamp."_".$name.".".$file_ext;
						 $config['upload_path'] = './assets/file/';
						 $config['allowed_types'] = 'pdf';
						 $config['file_name'] = $document_kontrakKuliah;
						 $config['overwrite'] = true;
						 $config['max_size'] = 1024;
	
						$this->load->library('upload',$config);
						if ($this->upload->do_upload('file')) {
							 $upload_data =$this->upload->data();
							 $filename_proses= $upload_data['file_name'];
						}

						//untuk mengupload file pdfnya.
						$time_stamp = $this->md_proses->time();
						 $namefile = $_FILES['file_kontrakKuliah']['name'];
						 $name = basename($namefile,".pdf");
						 $file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
						 $document_RPS = $time_stamp."_".$name.".".$file_ext;
						 $config['upload_path'] = './assets/file/';
						 $config['allowed_types'] = 'pdf';
						 $config['file_name'] = $document_RPS;
						 $config['overwrite'] = true;
						 $config['max_size'] = 1024;
	
						$this->load->library('upload',$config);
						if ($this->upload->do_upload('file')) {
							 $upload_data =$this->upload->data();
							 $filename_proses= $upload_data['file_name'];
						}

						$bobot= $this->security->xss_clean( $this->input->post('bobot'));
						$id_semester= $this->security->xss_clean( $this->input->post('id_semester'));
						$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
						$nidn= $this->security->xss_clean( $this->input->post('nidn'));
						$id_angkatan= $this->security->xss_clean( $this->input->post('id_angkatan'));
						$deskripsi= $this->security->xss_clean( $this->input->post('deskripsi'));
						$file_kontrakKuliah = $document_kontrakKuliah;
						$file_RPS= $document_RPS;
						// validasi
						$this->form_validation->set_rules('id_matkul', 'Nama Matakuliah', 'required');
						if(!$this->form_validation->run()) {
							$this->session->set_flashdata('msg_alert_error', 'Gagal menambah materi!');
							//redirect( base_url('Perpustakaan/listMatakuliahProses3') );
						}
						$data['bobot'] = $bobot;
						$data['id_semester'] = $id_semester;
						$data['id_matkul'] = $id_matkul;
						$data['nidn'] = $nidn;
						$data['id_angkatan'] = $id_angkatan;
						$data['filekontrakKuliah'] = $file_kontrakKuliah;
						$data['fileRPS'] = $file_RPS;
						$data['deskripsi'] = $deskripsi;
						$this->md_proses->tambahProses($data,$id);
						// redirect(base_url('Perpustakaan/listMateri'));
						redirect($_SERVER['HTTP_REFERER']);
					}
			default:
				redirect( base_url() );
				break;
		}
	}
//UNTUK UPDATE
	public function update()
	{
		// echo $this->uri->segment('3');
		// return false;

=======
		$cek=$this->uri->segment('3');
		//var_dump($cek);
		switch ($cek) {
			case 'buku':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$judul= $this->security->xss_clean( $this->input->post('judul'));
					$penerbit= $this->security->xss_clean( $this->input->post('penerbit'));
					$pengarang= $this->security->xss_clean( $this->input->post('pengarang'));
					$tahun= $this->security->xss_clean( $this->input->post('tahun'));

					// validasi
					$this->form_validation->set_rules('judul', 'Judul Buku', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Buku');
						redirect( base_url('Perpustakaan/listBuku') );
					}

		            $data['JudulBuku'] = $judul;
					$data['Pengarang'] = $pengarang;
					$data['Penerbit'] = $penerbit;
					$data['TahunTerbit'] = $tahun;
					$this->md_buku->tambahBuku($data);

					redirect(base_url('Perpustakaan/listBuku'));
				}
				break;
				case 'anggota':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$nama= $this->security->xss_clean( $this->input->post('nama'));
					$jenjang= $this->security->xss_clean( $this->input->post('jenjang'));
					$prodi= $this->security->xss_clean( $this->input->post('prodi'));
					$alamat= $this->security->xss_clean( $this->input->post('alamat'));

					// validasi
					$this->form_validation->set_rules('nama', 'Nama Anggot', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Anggot');
						redirect( base_url('Perpustakaan/listAnggota') );
					}

		            $data['Nama'] = $nama;
					$data['Jenjang'] = $jenjang;
					$data['Prodi'] = $prodi;
					$data['Alamat'] = $alamat;
					$this->md_ang->tambahAnggota($data);

					redirect(base_url('Perpustakaan/listAnggota'));
				}
				break;
			default:
				redirect( base_url() );
				break;
		}
	}
	public function hapus()
	{
		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}

		if( empty($this->uri->segment('4'))) {
			redirect( base_url() );
		}

		$cek = $this->uri->segment('3');
		$id = $this->uri->segment('4');
		//var_dump($id);

		switch ($cek) {
			case 'buku':
				$this->md_buku->hapusBuku($id);
			    redirect(base_url('Perpustakaan/listBuku'));
			break;
			case 'anggota':
				$this->md_ang->hapusAnggota($id);
			    redirect(base_url('Perpustakaan/listAnggota'));
			break;
			case 'peminjam':
				$this->md_pem->hapusPeminjaman($id);
			    redirect(base_url('Perpustakaan/listPeminjaman'));
			break;
			default:
				redirect( base_url() );
			break;
		}
	}
	public function update()
	{
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}
		$cek = $this->uri->segment('3');
<<<<<<< HEAD
		// $id=$this->uri->segment('3');
		$filename_materi=$this->uri->segment('3');
		$filename_template=$this->uri->segment('3');
		// var_dump($cek);
		switch ($cek) {
			case 'materi':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$time_stamp = $this->md_materi->time();
				 	$namefile = $_FILES['file']['name'];
				 	$name = basename($namefile);
				 	$file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
				 	$document = $time_stamp."_".$name;
				 	$config['upload_path'] = './assets/file/';
				 	$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx';
				 	$config['file_name'] = $document;
				 	$config['overwrite'] = true;
				 	$config['max_size'] = 1024;

					$this->load->library('upload',$config);
					if ($this->upload->do_upload('file')) {
				 		$upload_data =$this->upload->data();
				 		$filename_materi= $upload_data['file_name'];
					}
					$kode_materi= $this->security->xss_clean( $this->input->post('kode_materi'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nama_materi= $this->security->xss_clean( $this->input->post('nama_materi'));
					$deskripsi= $this->security->xss_clean( $this->input->post('deskripsi'));
					$file= $filename_materi;
					if ($filename_materi=="") {
						$file = $this->security->xss_clean($this->input->post('sementara_file'));
					}

					// validasi
					$this->form_validation->set_rules('nama_materi', 'Nama Materi', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Update Materi');
						redirect( base_url('Perpustakaan/listMateri'));
					}
					$id = $kode_materi;
		            $data['nama_materi'] = $nama_materi;
					$data['deskripsi'] = $deskripsi;
					$data['file'] = $file;
					// var_dump($data);
					$this->md_materi->updateMateri($id,$data);
					redirect($_SERVER['HTTP_REFERER']);
				}
			break;
			case 'matakuliah':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$kode_matkul= $this->security->xss_clean( $this->input->post('kode_matkul'));
					$nama_matkul= $this->security->xss_clean( $this->input->post('nama_matkul'));
					$nidn= $this->security->xss_clean( $this->input->post('nidn'));
					$kelas= $this->security->xss_clean( $this->input->post('kelas'));
					$jalur= $this->security->xss_clean( $this->input->post('jalur'));
					$id_semester= $this->security->xss_clean( $this->input->post('id_semester'));
					$id_angkatan= $this->security->xss_clean( $this->input->post('id_angkatan'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					// validasi
					$this->form_validation->set_rules('nama_matkul', 'Nama Materi', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Matakuliah');
						redirect( base_url('Perpustakaan/dataMatakuliah_full') );
					}
					$data['kode_matkul'] = $kode_matkul;
					$data['nama_matkul'] = $nama_matkul;
					$data['nidn'] = $nidn;
					$data['kelas'] = $kelas;
					$data['jalur'] = $jalur;
					$data['id_semester'] = $id_semester;
					$data['id_angkatan'] = $id_angkatan;
					$this->md_matkul->updateMatkul($id_matkul,$data);
					redirect($_SERVER['HTTP_REFERER']);
				}
			break;
			case 'template':
			if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$time_stamp = $this->md_template->time();
				 	$namefile = $_FILES['file']['name'];
				 	$name = basename($namefile);
				 	$file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
				 	$document = $time_stamp."_".$name;
				 	$config['upload_path'] = './assets/template/';
				 	$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx';
				 	$config['file_name'] = $document;
				 	$config['overwrite'] = true;
				 	$config['max_size'] = 1024;

					$this->load->library('upload',$config);
					if ($this->upload->do_upload('file')) {
				 		$upload_data =$this->upload->data();
				 		$filename_template= $upload_data['file_name'];
					}
					$id_template= $this->security->xss_clean( $this->input->post('id_template'));
					$nama_template= $this->security->xss_clean( $this->input->post('nama_template'));
					$file= $document;
					if ($filename_template=="") {
						$file = $this->security->xss_clean($this->input->post('sementara_file'));
					}

					// validasi
					$this->form_validation->set_rules('nama_template', 'Nama Template', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Update Template');
						redirect( base_url('Perpustakaan/data_template'));
					}
					$id = $id_template;
		            $data['nama_template'] = $nama_template;
					$data['file'] = $file;
					// var_dump($data);
					$this->md_template->updateTemplate($id,$data);
					redirect($_SERVER['HTTP_REFERER']);
				}
			break;
			case 'cpl':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_cpl = $this->security->xss_clean( $this->input->post('id_cpl'));
					$kode_cpl= $this->security->xss_clean( $this->input->post('kode_cpl'));
					$deskripsi_cpl= $this->security->xss_clean( $this->input->post('deskripsi_cpl'));
					
					$this->form_validation->set_rules('deskripsi_cpl', 'Deskripsi CPL-PRODI', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Matakuliah');
						redirect( base_url('Perpustakaan/dataCpl_Prodi') );
					}
					$id = $kode_cpl;
					$data['deskripsi_cpl'] = $deskripsi_cpl;
					$this->md_cplProdi->updateCPL($id,$data);
					redirect($_SERVER['HTTP_REFERER']);
				}
			break;
			case 'cp':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_cp = $this->security->xss_clean( $this->input->post('id_cp'));
					$kode_cp= $this->security->xss_clean( $this->input->post('kode_cp'));
					$deskripsi_cp= $this->security->xss_clean( $this->input->post('deskripsi_cp'));
					
					// validasi
					$this->form_validation->set_rules('deskripsi_cp', 'Deskripsi CP', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data CP-MK');
						redirect( base_url('Perpustakaan/dataCp_MK') );
					}
					$id = $kode_cp;
					$data['deskripsi_cp'] = $deskripsi_cp;
					$this->md_cpMk->updateCP($id,$data);
					redirect($_SERVER['HTTP_REFERER']);
				}
				# code...
				break;
			case 'kriteria':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_kriteria = $this->security->xss_clean( $this->input->post('id_kriteria'));
					$kode_kriteria= $this->security->xss_clean( $this->input->post('kode_kriteria'));
					$deskripsi_kriteria= $this->security->xss_clean( $this->input->post('deskripsi_kriteria'));
					
					// validasi
					$this->form_validation->set_rules('deskripsi_kriteria', 'Deskripsi kriteria', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data CP-MK');
						redirect( base_url('Perpustakaan/data_kriteria') );
					}
					$id = $kode_kriteria;
					$data['deskripsi_kriteria'] = $deskripsi_kriteria;
					$this->md_kriteria->updateKriteria($id,$data);
					redirect($_SERVER['HTTP_REFERER']);
				}
				# code...
				break;
			case 'proses':
					if( $_SERVER['REQUEST_METHOD'] == 'POST') {
						$time_stamp = $this->md_materi->time();
						 $namefile = $_FILES['file']['name'];
						 $name = basename($namefile,".pdf");
						 $file_ext = pathinfo($namefile, PATHINFO_EXTENSION);
						 $document = $time_stamp."_".$name.".".$file_ext;
						 $config['upload_path'] = './assets/file/';
						 $config['allowed_types'] = 'pdf';
						 $config['file_name'] = $document;
						 $config['overwrite'] = true;
						 $config['max_size'] = 1024;
	
						$this->load->library('upload',$config);
						if ($this->upload->do_upload('file')) {
							 $upload_data =$this->upload->data();
							 $filename_materi= $upload_data['file_name'];
						}
	
						$id_proses= $this->security->xss_clean( $this->input->post('id_proses'));
						$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
						$nidn= $this->security->xss_clean( $this->input->post('nidn'));
						$bobot= $this->security->xss_clean( $this->input->post('bobot'));
						$id_semester= $this->security->xss_clean( $this->input->post('id_semester'));
						$deskripsi= $this->security->xss_clean( $this->input->post('deskripsi'));
						$file= $filename_rps;
						if ($filename_rps=="") {
							$file = $this->security->xss_clean($this->input->post('sementara_file'));
						}
	
						// validasi
						$this->form_validation->set_rules('id_matkul', 'Nama Matkul', 'required');
						if(!$this->form_validation->run()) {
							$this->session->set_flashdata('msg_alert_error', 'Gagal update proses pembelajaran!');
							redirect( base_url('Perpustakaan/listAngkatan_prosesPembelajaran'));
						}
						$id = $kode_matkul;
						// $data['kode_materi'] = $kode_materi;
						// $data['id_matkul'] = $id_matkul;
						$data['nama_matkul'] = $nama_matkul;
						$data['deskripsi'] = $deskripsi;
						$data['file'] = $file;
						// echo print_r($this->input->post());
						// return false;
						
	
						// var_dump($data);
						$this->md_materi->updateMateri($id,$data);
						redirect($_SERVER['HTTP_REFERER']);
					}
			break;
			case 'nilai':
					$id_nilai = $this->security->xss_clean( $this->input->post('id_nilai'));
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nilai_mandiri= $this->security->xss_clean( $this->input->post('nilai_mandiri'));
					$nilai_kelompok= $this->security->xss_clean( $this->input->post('nilai_kelompok'));
					$nilai_keaktifan= $this->security->xss_clean( $this->input->post('nilai_keaktifan'));
					$nilai_quiz= $this->security->xss_clean( $this->input->post('nilai_quiz'));
					$nilai_uts= $this->security->xss_clean( $this->input->post('nilai_uts'));
					$nilai_uas= $this->security->xss_clean( $this->input->post('nilai_uas'));
					
					
					
					// validasi
					$this->form_validation->set_rules('nilai_uts', 'nilai_uas', 'required');
					if(!$this->form_validation->run()) {
					$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah Nilai');
					redirect( $_SERVER['HTTP_REFERER']);
					}

					$id=$id_nilai;

					$data['id_mahasiswa'] = $id_mahasiswa;
					$data['id_matkul'] = $id_matkul;
					$data['nilai_mandiri'] = $nilai_mandiri;
		            $data['nilai_kelompok'] = $nilai_kelompok;
		            $data['nilai_keaktifan'] = $nilai_keaktifan;
		            $data['nilai_quiz'] = $nilai_quiz;
		            $data['nilai_uts'] = $nilai_uts;
		            $data['nilai_uas'] = $nilai_uas;
					
					$this->md_mahasiswa->updateNilai($id,$data);
					redirect($_SERVER['HTTP_REFERER']);
		
			break;


			case 'nilaiUjian':
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nilai_uts= $this->security->xss_clean( $this->input->post('nilai_uts'));
					$nilai_uas= $this->security->xss_clean( $this->input->post('nilai_uas'));
					
					// validasi
					$this->form_validation->set_rules('nilai_uts', 'nilai_uas', 'required');
					if(!$this->form_validation->run()) {
					$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah Nilai');
					redirect( $_SERVER['HTTP_REFERER']);
					}

					$data['id_mahasiswa'] = $id_mahasiswa;
					$data['id_matkul'] = $id_matkul;
		            $data['nilai_uts'] = $nilai_uts;
		            $data['nilai_uas'] = $nilai_uas;
					$this->md_mahasiswa->tambahNilaiUjian($data,$id_mahasiswa,$id_matkul);
					redirect($_SERVER['HTTP_REFERER']);
		
			break;

			case 'mandiri':
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));

					$data['id_mahasiswa'] = $id_mahasiswa;
					$data['id_matkul'] = $id_matkul;

					$number = count($_POST["name"]);

					$this->md_mahasiswa->hapus_mandiri($id_mahasiswa,$id_matkul);
					
					for($i=0; $i<$number; $i++){
						$data['nilai_mandiri']=$this->security->xss_clean( $this->input->post('name')[$i]);
						$this->md_mahasiswa->tambahMandiri($data);
					}  
					redirect($_SERVER['HTTP_REFERER']);
			break;

			case 'kelompok':
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));

					$data['id_mahasiswa'] = $id_mahasiswa;
					$data['id_matkul'] = $id_matkul;

					$number = count($_POST["name"]);

					$this->md_mahasiswa->hapus_kelompok($id_mahasiswa,$id_matkul);
					
					for($i=0; $i<$number; $i++){
						$data['nilai_kelompok']=$this->security->xss_clean( $this->input->post('name')[$i]);
						$this->md_mahasiswa->tambahKelompok($data);
					}  
					redirect($_SERVER['HTTP_REFERER']);
			break;

			case 'quiz':
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));

					$data['id_mahasiswa'] = $id_mahasiswa;
					$data['id_matkul'] = $id_matkul;

					$number = count($_POST["name"]);

					$this->md_mahasiswa->hapus_quiz($id_mahasiswa,$id_matkul);
					
					for($i=0; $i<$number; $i++){
						$data['nilai_quiz']=$this->security->xss_clean( $this->input->post('name')[$i]);
						$this->md_mahasiswa->tambahQuiz($data);
					}  
					redirect($_SERVER['HTTP_REFERER']);
			break;

			case 'keaktifan':
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));

					$data['id_mahasiswa'] = $id_mahasiswa;
					$data['id_matkul'] = $id_matkul;

					$number = count($_POST["name"]);

					$this->md_mahasiswa->hapus_keaktifan($id_mahasiswa,$id_matkul);
					
					for($i=0; $i<$number; $i++){
						$data['nilai_keaktifan']=$this->security->xss_clean( $this->input->post('name')[$i]);
						$this->md_mahasiswa->tambahKeaktifan($data);
					}  
					redirect($_SERVER['HTTP_REFERER']);
			break;

			case 'rekap':
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nilai_keaktifan = $this->security->xss_clean( $this->input->post('persentase_keaktifan'));	
					$nilai_kelompok	= $this->security->xss_clean( $this->input->post('persentase_kelompok'));	
					$nilai_mandiri = $this->security->xss_clean( $this->input->post('persentase_mandiri'));		
					$nilai_quiz	= $this->security->xss_clean( $this->input->post('persentase_quiz'));	
					$nilai_uts = $this->security->xss_clean( $this->input->post('persentase_uts'));		
					$nilai_uas = $this->security->xss_clean( $this->input->post('persentase_uas'));

					$data['id_matkul'] = $id_matkul;
					$data['nilai_keaktifan'] = $nilai_keaktifan;
					$data['nilai_kelompok'] = $nilai_kelompok;
					$data['nilai_mandiri'] = $nilai_mandiri;
					$data['nilai_quiz'] = $nilai_quiz;
					$data['nilai_uts'] = $nilai_uts;
					$data['nilai_uas'] = $nilai_uas;

					$this->md_mahasiswa->update_rekap($id_matkul,$data);
					redirect($_SERVER['HTTP_REFERER']);	
			break;
			// case 'nilai':
			// 	$id_nilai = $this->security->xss_clean( $this->input->post('id_nilai'));
			// 	$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa'));
			// 	$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
			// 	$nilai_mandiri= $this->security->xss_clean( $this->input->post('nilai_mandiri'));
			// 	$nilai_kelompok= $this->security->xss_clean( $this->input->post('nilai_kelompok'));
			// 	$nilai_keaktifan= $this->security->xss_clean( $this->input->post('nilai_keaktifan'));
			// 	$nilai_quiz= $this->security->xss_clean( $this->input->post('nilai_quiz'));
			// 	$nilai_uts= $this->security->xss_clean( $this->input->post('nilai_uts'));
			// 	$nilai_uas= $this->security->xss_clean( $this->input->post('nilai_uas'));	
			// 		// validasi
			// 	$this->form_validation->set_rules('nilai_uts', 'nilai_uas', 'required');
			// 	if(!$this->form_validation->run()) {
			// 	$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah Nilai');
			// 	redirect( $_SERVER['HTTP_REFERER']);
			// 	}
			// 	$id=$id_nilai;

			// 	$data['id_mahasiswa'] = $id_mahasiswa;
			// 	$data['id_matkul'] = $id_matkul;
			// 	$data['nilai_mandiri'] = $nilai_mandiri;
		 //        $data['nilai_kelompok'] = $nilai_kelompok;
		 //        $data['nilai_keaktifan'] = $nilai_keaktifan;
		 //        $data['nilai_quiz'] = $nilai_quiz;
		 //        $data['nilai_uts'] = $nilai_uts;
		 //        $data['nilai_uas'] = $nilai_uas;
					
			// 		$this->md_mahasiswa->updateNilai($id,$data);
			// 		redirect($_SERVER['HTTP_REFERER']);
			// break;
=======
		//var_dump($cek);

		switch ($cek) {
			case 'buku':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id= $this->security->xss_clean( $this->input->post('id'));
					$judul= $this->security->xss_clean( $this->input->post('judul'));
					$penerbit= $this->security->xss_clean( $this->input->post('penerbit'));
					$pengarang= $this->security->xss_clean( $this->input->post('pengarang'));
					$tahun= $this->security->xss_clean( $this->input->post('tahun'));

					// validasi
					$this->form_validation->set_rules('judul', 'Judul Buku', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Update data Buku');
						redirect( base_url('Perpustakaan/listBuku') );
					}

					$data['JudulBuku'] = $judul;
					$data['Pengarang'] = $pengarang;
					$data['Penerbit'] = $penerbit;
					$data['TahunTerbit'] = $tahun;

					// var_dump($data);
					$this->md_buku->updateBuku($id,$data);
					redirect(base_url('Perpustakaan/listBuku'));
				}
			break;
			case 'anggota':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id= $this->security->xss_clean( $this->input->post('id'));
					$nama= $this->security->xss_clean( $this->input->post('nama'));
					$jenjang= $this->security->xss_clean( $this->input->post('jenjang'));
					$prodi= $this->security->xss_clean( $this->input->post('prodi'));
					$alamat= $this->security->xss_clean( $this->input->post('alamat'));

					// validasi
					$this->form_validation->set_rules('nama', 'Nama Anggot', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Updata Anggot');
						redirect( base_url('Perpustakaan/listAnggota') );
					}

		            $data['Nama'] = $nama;
					$data['Jenjang'] = $jenjang;
					$data['Prodi'] = $prodi;
					$data['Alamat'] = $alamat;

					// var_dump($data);
					$this->md_ang->updateAnggota($id,$data);
					redirect(base_url('Perpustakaan/listAnggota'));
				}
			break;
			case 'peminjam':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_buku= $this->security->xss_clean( $this->input->post('id_buku'));
					$id_peminjam= $this->security->xss_clean( $this->input->post('id_anggota'));
					$id_pinjam= $this->security->xss_clean( $this->input->post('id_pinjam'));
					$id_petugas= $this->security->xss_clean( $this->input->post('petugas'));
					$kembali= $this->security->xss_clean( $this->input->post('kembali'));
					$pinjam= $this->security->xss_clean( $this->input->post('pinjam'));

					// validasi
					$this->form_validation->set_rules('pinjam', 'Nama Anggot', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal update data Peminjaman');
						redirect( base_url('Perpustakaan/listPeminjaman') );
					}

					$id = $id_pinjam;

					$data['Kd_anggota'] = $id_peminjam;
					$data['Kd_petugas'] = $id_petugas;

		            $item['Kd_register'] = $id_buku;
					$item['Tgl_kembali'] = $kembali;
					$item['Tgl_pinjam'] = $pinjam;
					//$data['sekarang'] = date('Y-m-d');

					//var_dump($data);
					$this->md_pem->updateTbPeminjaman($id,$data);
					$this->md_pem->updateTbDetailPinjam($id,$item);
					redirect(base_url('Perpustakaan/listPeminjaman'));
				}
			break;
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
			default:
				redirect( base_url() );
				break;
		}
	}
<<<<<<< HEAD
	public function hapus()
	{
		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}

		if( empty($this->uri->segment('4'))) {
			redirect( base_url() );
		}

		$cek = $this->uri->segment('3');
		$id = $this->uri->segment('4');
		//var_dump($id);

		switch ($cek) {
			case 'materi':
				$this->md_materi->hapusMateri($id);
				redirect($_SERVER['HTTP_REFERER']);
			break;
			case 'matakuliah':
				$this->md_matkul->hapusMatakuliah($id);
				redirect($_SERVER['HTTP_REFERER']);
			break;
			case 'template':
				$this->md_template->hapusTemplate($id);
				redirect($_SERVER['HTTP_REFERER']);
			break;
			case 'cpl':
				$this->md_cplProdi->hapusCPL($id);
				redirect($_SERVER['HTTP_REFERER']);
			break;
			case 'cp':
				$this->md_cpMk->hapusCP($id);
				redirect($_SERVER['HTTP_REFERER']);
			break;
			case 'kriteria':
				$this->md_kriteria->hapusKriteria($id);
				redirect($_SERVER['HTTP_REFERER']);
			break;
			case 'proses':
				$this->md_proses->hapusProses($id);
			    redirect(base_url('Perpustakaan/listMatakuliahProses'));
			break;
			default:
				redirect( base_url() );
			break;
		}
	}
	
=======
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
	public function kembali()
	{
		$id = $this->uri->segment('3');

		$item['Tgl_kembali'] = date('Y-m-d');
		$this->md_pem->bukuKembali($id,$item);
		//var_dump($id);
		redirect(base_url('Perpustakaan/listPeminjaman'));
	}
<<<<<<< HEAD
=======
	public function pinjamBuku()
	{
		$data['petugas'] = $this->md_pem->petugas();
		$data['anggota'] = $this->md_pem->anggota();
		$data['buku'] = $this->md_pem->buku();
		//var_dump($data);
		$this->load->view('admin/dashboard/anggota/peminjaman_buku',$data);
	}
	public function riwayatPeminjam()
	{
		$data['peminjam'] = $this->md_pem->list_all();
		$this->load->view('admin/dashboard/anggota/riwayat_peminjaman',$data);
	}
	public function peminjaman()
	{
		if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$buku= $this->security->xss_clean( $this->input->post('buku'));
			$petugas= $this->security->xss_clean( $this->input->post('petugas'));
			$anggota= $this->security->xss_clean( $this->input->post('anggota'));
			
			// validasi
			$this->form_validation->set_rules('anggota', 'Nama Anggot', 'required');
			if(!$this->form_validation->run()) {
				$this->session->set_flashdata('msg_alert_error', 'Gagal Meminjam Buku');
				redirect( base_url('Perpustakaan/pinjamBuku') );
			}

			$data['Kd_anggota'] = $anggota;
			$data['Kd_petugas'] = $petugas;

			$item['Kd_register'] = $buku;
			$item['Tgl_pinjam'] = date('Y-m-d');
			$this->md_pem->peminjaman($data,$item);

			redirect(base_url('Perpustakaan/riwayatPeminjam'));
		}
	}
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
}
