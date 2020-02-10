<?php

/**
* 
*/
class M_referensi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function jumlah_data()
	{
		return $this->db->count_all('referensi');
	}

	function read()
	{
		return $this->db->query('SELECT * FROM referensi ORDER BY id_referensi DESC')->result();
	}

	function save()
 	{
  		$data['id_referensi'] =$this->input->post('id_referensi');
		$data['jenis'] =$this->input->post('jenis');
		$data['penulis'] =$this->input->post('penulis');
		$data['judul'] =$this->input->post('judul');
		$data['edisi'] =$this->input->post('edisi');
		$data['tahun'] =$this->input->post('tahun');
		$data['kota'] =$this->input->post('kota');
		$data['penerbit'] =$this->input->post('penerbit');
		
		

  		return $this->db->insert('referensi', $data);
 	}

 	function edit($id)
 	{
  		return $this->db->get_where('referensi', array('id_referensi' => $id))->row();
 	}

 	function update()
 	{
		//$data['id_referensi'] =$this->input->post('id_referensi');
		$data['jenis'] =$this->input->post('jenis');
		$data['penulis'] =$this->input->post('penulis');
		$data['judul'] =$this->input->post('judul');
		$data['edisi'] =$this->input->post('edisi');
		$data['tahun'] =$this->input->post('tahun');
		$data['kota'] =$this->input->post('kota');
		$data['penerbit'] =$this->input->post('penerbit');

  		return $this->db->where('id_referensi', $this->input->post('id'))->update('referensi', $data);
 	}

 	function delete($id)
 	{
  		return $this->db->delete('referensi', array('id_referensi' => $id));
 	}
}

?>