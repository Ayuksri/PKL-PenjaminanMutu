<?php

/**
* 
*/
class C_referensi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_referensi');
	}

	function index()
	{
		$data = array();
	   
			$data['jumlah_data'] = $this->m_referensi->jumlah_data();
			$data['referensi'] = $this->m_referensi->read();
			$data['jenis'] = "DataReferensi";
			$this->load->view('ui', $data);
	    
	}

	function create()
	{
		$data = array();
	    
			$data['jenis'] = "TambahReferensi";
			$this->load->view('ui', $data);
		
	}

	function save()
 	{
		$this->m_referensi->save();
		redirect('c_referensi','refresh');
 	}

 	function edit($id)
 	{
 		$data = array();
	   
		  	$data['m']= $this->m_referensi->edit($id);
		  	$data['jenis'] = "UbahReferensi";
		  	$this->load->view('ui', $data);
		
 	}

 	function update()
 	{
		$this->m_referensi->update();
		redirect('c_referensi','refresh');
 	}

 	function delete($id)
 	{
  		$this->m_referensi->delete($id);
  		redirect('c_referensi','refresh');
 	}
}

?>