<?php

/**
* 
*/
class C_mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	function index()
	{
		$data = array();
	    
			$data['jumlah_data'] = $this->m_mahasiswa->jumlah_data();
			$data['mahasiswa'] = $this->m_mahasiswa->read();
			$data['jenis'] = "DataMahasiswa";
			$this->load->view('ui', $data);
			
	}

	function create()
	{
		$data = array();
	    
			$data['jenis'] = "TambahMahasiswa";
			$this->load->view('ui', $data);
		
	}

	function save()
 	{
		$this->m_mahasiswa->save();
		redirect('c_mahasiswa','refresh');
 	}

 	function edit($id)
 	{
 		$data = array();
	   
		  	$data['m']= $this->m_mahasiswa->edit($id);
		  	$data['jenis'] = "UbahMahasiswa";
		  	$this->load->view('ui', $data);
		
 	}

 	function update()
 	{
		$this->m_mahasiswa->update();
		redirect('c_mahasiswa','refresh');
 	}

 	function delete($id)
 	{
  		$this->m_mahasiswa->delete($id);
  		redirect('c_mahasiswa','refresh');
 	}
}

?>