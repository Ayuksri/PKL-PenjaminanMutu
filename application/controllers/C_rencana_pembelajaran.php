<?php

/**
* 
*/
class C_rencana_pembelajaran extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_rencana_pembelajaran');
	}

	function index()
	{
		$data = array();
	   
			$data['jumlah_data'] = $this->m_rencana_pembelajaran->jumlah_data();
			$data['rencana_pembelajaran'] = $this->m_rencana_pembelajaran->read();
			$data['jenis'] = "DataRencanaPembelajaran";
			$this->load->view('ui', $data);
	    
	}

	function create()
	{
		$data = array();
	    
			//$data['dosen'] = $this->m_rencana_pembelajaran->read_dosen();
			$data['jenis'] = "TambahRencanaPembelajaran";
			$this->load->view('ui', $data);
		
	}

	function save()
 	{
		$this->m_rencana_pembelajaran->save();
		redirect('c_rencana_pembelajaran','refresh');
 	}

 	function edit($id)
 	{
 		$data = array();
	   
		  	$data['m']= $this->m_rencana_pembelajaran->edit($id);
		  	$data['jenis'] = "UbahRencanaPembelajaran";
		  	$this->load->view('ui', $data);		
 	}

 	function update()
 	{
		$this->m_rencana_pembelajaran->update();
		redirect('c_rencana_pembelajaran','refresh');
 	}

 	function delete($id)
 	{
  		$this->m_rencana_pembelajaran->delete($id);
  		redirect('c_rencana_pembelajaran','refresh');
	 }
	 
	function donwload()
 	{
  		$this->m_rencana_pembelajaran->delete($id);
  		redirect('c_rencana_pembelajaran','refresh');
 	}
}

?>