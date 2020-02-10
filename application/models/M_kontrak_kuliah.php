<?php

/**
* 
*/
class M_kontrak_kuliah extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function jumlah_data()
	{
		return $this->db->count_all('kontrak_kuliah');
	}

	function read()
	{
		return $this->db->query('SELECT * FROM kontrak_kuliah ORDER BY id_kontrak_kuliah DESC')->result();
	}

	function save()
 	{
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
 	}

 	function edit($id)
 	{
  		return $this->db->get_where('kontrak_kuliah', array('id_kontrak_kuliah' => $id))->row();
 	}

 	function update()
 	{
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

  		return $this->db->where('id_kontrak_kuliah', $this->input->post('id'))->update('kontrak_kuliah', $data);
 	}

 	function delete($id)
 	{
  		return $this->db->delete('kontrak_kuliah', array('id_kontrak_kuliah' => $id));
 	}
}

?>