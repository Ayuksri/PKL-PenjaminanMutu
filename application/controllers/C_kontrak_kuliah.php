<?php

/**
* 
*/
class C_kontrak_kuliah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_kontrak_kuliah');
	}

	function index()
	{
		$data = array();
	    
		    // $pisah_info = explode("|");
		    // $data['username'] = $pisah_info[0];
		    // $data['nama'] = $pisah_info[1];
		    // $data['profil'] = $pisah_info[2];
			$data['jumlah_data'] = $this->m_kontrak_kuliah->jumlah_data();
			$data['mahasiswa'] = $this->m_kontrak_kuliah->read();
			$data['jenis'] = "DataKontrakKuliah";
			$this->load->view('ui', $data);
	    
	}

	function create()
	{
		$data = array();
	    // $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
	    // if($session!=""){
		    // $pisah_info = explode("|", $session);
		    // $data['username'] = $pisah_info[0];
		    // $data['nama'] = $pisah_info[1];
		    // $data['profil'] = $pisah_info[2];
			$data['jenis'] = "TambahKontrakKuliah";
			$this->load->view('ui', $data);
	}
		

	function save()
 	{
		$this->m_kontrak_kuliah->save();
		redirect('c_kontrak_kuliah','refresh');
 	}

 	function edit($id)
 	{
 		$data = array();
	    // $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
	    // if($session!=""){
		    // $pisah_info = explode("|", $session);
		    // $data['username'] = $pisah_info[0];
		    // $data['nama'] = $pisah_info[1];
		    // $data['profil'] = $pisah_info[2];
		  	$data['m']= $this->m_kontrak_kuliah->edit($id);
		  	$data['jenis'] = "UbahKontrakKuliah";
		  	$this->load->view('ui', $data);
		// }
		// 
 	}

 	function update()
 	{
		$this->m_kontrak_kuliah->update();
		redirect('c_kontrak_kuliah','refresh');
 	}

 	function delete($id)
 	{
  		$this->m_kontrak_kuliah->delete($id);
  		redirect('c_kontrak_kuliah','refresh');
 	}
}

?>