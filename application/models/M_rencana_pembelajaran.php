<?php

/**
* 
*/
class M_rencana_pembelajaran extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function jumlah_data()
	{
		return $this->db->count_all('rencana_pembelajaran');
	}

	function read()
	{
		return $this->db->query('SELECT * FROM rencana_pembelajaran ORDER BY id_rencana_pembelajaran DESC')->result();
	}

	function read_dosen()
	{
		return $this->db->query('SELECT * FROM dosen ORDER BY nidn DESC')->result();
	}

	function read_matkul()
	{
		return $this->db->query('SELECT * FROM matakuliah ORDER BY id_matkul DESC')->result();
	}

	function read_semester()
	{
		return $this->db->query('SELECT * FROM semester ORDER BY id_semester DESC')->result();
	}

	function save()
 	{
  		$data['id_rencana_pembelajaran'] =$this->input->post('id_rencana_pembelajaran');
		$data['minggu_ke'] =$this->input->post('minggu_ke');
		$data['kemampuan_akhir'] =$this->input->post('kemampuan_akhir');
		$data['bahan_kajian'] =$this->input->post('bahan_kajian');
		$data['metode'] =$this->input->post('metode');
		$data['waktu'] =$this->input->post('waktu');
		$data['pengalaman_belajar'] =$this->input->post('pengalaman_belajar');

		$data['id_cp']=$this->input->post('id_cp');

		$data['id_cpl']=$this->input->post('id_cpl');

		$data['id_kriteria']=$this->input->post('id_kriteria');
		$data['bobot_nilai'] =$this->input->post('bobot_nilai');
		$data['id_referensi'] =$this->input->post('id_referensi');
		$data['id_matkul'] =$this->input->post('id_matkul');
		$data['id_semester'] =$this->input->post('id_semester');
		$data['nidn'] =$this->input->post('nidn');
  		return $this->db->insert('rencana_pembelajaran', $data);
 	}

 	function edit($id)
 	{
  		return $this->db->get_where('rencana_pembelajaran', array('id_rencana_pembelajaran' => $id))->row();
 	}

 	function update()
 	{
		$data['id_rencana_pembelajaran'] =$this->input->post('id_rencana_pembelajaran');
		$data['minggu_ke'] =$this->input->post('minggu_ke');
		$data['kemampuan_akhir'] =$this->input->post('kemampuan_akhir');
		$data['bahan_kajian'] =$this->input->post('bahan_kajian');
		$data['metode'] =$this->input->post('metode');
		$data['waktu'] =$this->input->post('waktu');
		$data['pengalaman_belajar'] =$this->input->post('pengalaman_belajar');
		$data['id_cp']=$this->input->post('id_cp');

		$data['id_cpl']=$this->input->post('id_cpl');

		$data['id_kriteria']=$this->input->post('id_kriteria');
		$data['bobot_nilai'] =$this->input->post('bobot_nilai');
		$data['id_referensi'] =$this->input->post('id_referensi');

  		return $this->db->where('id_rencana_pembelajaran', $this->input->post('id'))->update('rencana_pembelajaran', $data);
 	}

 	function delete($id)
 	{
  		return $this->db->delete('rencana_pembelajaran', array('id_rencana_pembelajaran' => $id));
 	}
}

?>