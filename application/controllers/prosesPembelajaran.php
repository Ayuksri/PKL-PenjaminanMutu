<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('DataMaster_Buku');
		$this->load->model('DataMaster_Anggota');
		$this->load->model('DataMaster_Peminjaman');
		$this->load->model('DataMaster_Matakuliah');
		$this->load->model('DataMaster_Proses');
		$this->load->model('DataMaster_Materi');

		$this->md_buku = $this->DataMaster_Buku;
		$this->md_ang = $this->DataMaster_Anggota;
		$this->md_pem = $this->DataMaster_Peminjaman;
		$this->md_matkul = $this->DataMaster_Matakuliah;
		$this->md_materi = $this->DataMaster_Materi;
	}
	public function petugas()
	{
		$this->load->view('admin/dashboard/index');
	}
	public function anggota()
	{
		$this->load->view('admin/dashboard/anggota/index');
	}
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
	public function listAngkatan()
	{
		// $data['anggota'] = $this->md_ang->list_all();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/materi_pembelajaran_angkatan');
	}
	public function listAngkatan_prosesPembelajaran()
	{
		// $data['anggota'] = $this->md_ang->list_all();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/proses_pembelajaran_angkatan');
	}
	public function listMatakuliah1()
	{
		$data['matakuliah'] = $this->md_matkul->list_all1();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/materi_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliah2() //untuk sementara
	{
		$data['matakuliah'] = $this->md_matkul->list_all2();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/materi_pembelajaran_matakuliah',$data);
	}
	public function listMatakuliah3() //untuk sementara
	{
		$data['matakuliah'] = $this->md_matkul->list_all3();
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/materi_pembelajaran_matakuliah',$data);
	}
	public function listMateri()
	{
		$id=$this->uri->segment('3');
		$where = array('id_matkul' => $id);
		$data['materi'] = $this->md_materi->list_all($id);
		//var_dump($data);
		$this->load->view('admin/dashboard/petugas/materi_pembelajaran_materi',$data);
	}
	// //untuk download file
	// function get_file(){
	// 	$id=$this->uri->segment(3);
	// 	$get_db=$this->m_files->get_file_byid($id); //ini inget//
	// 	$q=$get_db->row_array();
	// 	$file=$q['file'];
	// 	$path='./assets/files/'.$file;
	// 	$data = file_get_contents($path);
	// 	$name = $file;
	// 	force_download($name, $data);
	// }
	public function addNew()
	{
		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}

		$cek=$this->uri->segment('3');
		$id=$this->uri->segment('3');
		//var_dump($cek);
		switch ($cek) {
			case 'materi':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$kode_materi= $this->security->xss_clean( $this->input->post('kode_materi'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nama_materi= $this->security->xss_clean( $this->input->post('nama_materi'));
					$deskripsi= $this->security->xss_clean( $this->input->post('deskripsi'));
					$file= $this->security->xss_clean( $this->input->post('file'));
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
					redirect(base_url('Perpustakaan/listMateri'));
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
	// public function addNew()
	// {
	// 	if( empty($this->uri->segment('3'))) {
	// 		redirect( base_url() );
	// 	}

	// 	$cek=$this->uri->segment('3');
	// 	//var_dump($cek);
	// 	switch ($cek) {
	// 		case 'buku':
	// 			if( $_SERVER['REQUEST_METHOD'] == 'POST') {
	// 				$judul= $this->security->xss_clean( $this->input->post('judul'));
	// 				$penerbit= $this->security->xss_clean( $this->input->post('penerbit'));
	// 				$pengarang= $this->security->xss_clean( $this->input->post('pengarang'));
	// 				$tahun= $this->security->xss_clean( $this->input->post('tahun'));

	// 				// validasi
	// 				$this->form_validation->set_rules('judul', 'Judul Buku', 'required');
	// 				if(!$this->form_validation->run()) {
	// 					$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Buku');
	// 					redirect( base_url('Perpustakaan/listBuku') );
	// 				}

	// 	            $data['JudulBuku'] = $judul;
	// 				$data['Pengarang'] = $pengarang;
	// 				$data['Penerbit'] = $penerbit;
	// 				$data['TahunTerbit'] = $tahun;
	// 				$this->md_buku->tambahBuku($data);

	// 				redirect(base_url('Perpustakaan/listBuku'));
	// 			}
	// 			break;
	// 			case 'anggota':
	// 			if( $_SERVER['REQUEST_METHOD'] == 'POST') {
	// 				$nama= $this->security->xss_clean( $this->input->post('nama'));
	// 				$jenjang= $this->security->xss_clean( $this->input->post('jenjang'));
	// 				$prodi= $this->security->xss_clean( $this->input->post('prodi'));
	// 				$alamat= $this->security->xss_clean( $this->input->post('alamat'));

	// 				// validasi
	// 				$this->form_validation->set_rules('nama', 'Nama Anggot', 'required');
	// 				if(!$this->form_validation->run()) {
	// 					$this->session->set_flashdata('msg_alert_error', 'Gagal Menambah data Anggot');
	// 					redirect( base_url('Perpustakaan/listAnggota') );
	// 				}

	// 	            $data['Nama'] = $nama;
	// 				$data['Jenjang'] = $jenjang;
	// 				$data['Prodi'] = $prodi;
	// 				$data['Alamat'] = $alamat;
	// 				$this->md_ang->tambahAnggota($data);

	// 				redirect(base_url('Perpustakaan/listAnggota'));
	// 			}
	// 			break;
	// 		default:
	// 			redirect( base_url() );
	// 			break;
	// 	}
	// }
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
			case 'materi':
				$this->md_materi->hapusMateri($id);
			    redirect(base_url('Perpustakaan/listMateri'));
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
		if( empty($this->uri->segment('2'))) {
			redirect( base_url() );
		}
		$cek = $this->uri->segment('2');
		//var_dump($cek);

		switch ($cek) {
			case 'materi':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$kode_materi= $this->security->xss_clean( $this->input->post('kode_materi'));
					$id_matkul= $this->security->xss_clean( $this->input->post('id_matkul'));
					$nama_materi= $this->security->xss_clean( $this->input->post('nama_materi'));
					$deskripsi= $this->security->xss_clean( $this->input->post('deskripsi'));
					$file= $this->security->xss_clean( $this->input->post('file'));

					// validasi
					$this->form_validation->set_rules('nama_materi', 'Nama Materi', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert_error', 'Gagal Update Materi');
						redirect( base_url('Perpustakaan/listMateri') );
					}

		            $data['kode_materi'] = $kode_materi;
					$data['id_matkul'] = $id_matkul;
		            $data['nama_materi'] = $nama_materi;
					$data['deskripsi'] = $deskripsi;
					$data['file'] = $file;

					// var_dump($data);
					$this->md_materi->updateMateri($id,$data);
					redirect(base_url('Perpustakaan/listMateri'));
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
			default:
				redirect( base_url() );
				break;
		}
	}
	public function kembali()
	{
		$id = $this->uri->segment('3');

		$item['Tgl_kembali'] = date('Y-m-d');
		$this->md_pem->bukuKembali($id,$item);
		//var_dump($id);
		redirect(base_url('Perpustakaan/listPeminjaman'));
	}

	public function prosesPembelajaran()
    {
        if(1)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('isiPembelajaran_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->isiPembelajaran_model->userListingCount($searchText);

            $returns = $this->paginationCompress ( "prosesPembelajaran/", $count, 5 );
            
            $data['userRecords'] = $this->isiPembelajaran_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Manajemen Proses Pembelajaran';
            
            $this->loadViews("proses_pembelajaran", $this->global, $data, NULL);
        }
    }

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
	// add new product
	function add_new(){
		$data['matkul'] = $this->DataMaster_Proses->get_matkul()->result();
		$this->load->view('admin/dashboard/petugas/tambahProses', $data);
	}
	
}
