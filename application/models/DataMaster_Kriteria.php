<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_Kriteria extends CI_Model {

	
	public function full_kriteria() {
		$data = $this->db->select('kri.id_kriteria,kri.kode_kriteria, kri.deskripsi_kriteria')
					 ->from('kriteria_penilaian as kri')
					 ->order_by('kri.id_kriteria','asc')
					 ->get();
		return $data->result();
	}
	public function tambahKriteria($data) 
	{
		$this->db->insert('kriteria_penilaian', $data);
		$this->session->set_flashdata('msg_alert', 'Data Materi berhasil ditambahkan');
	}
	public function hapusKriteria($id)
    {
	  	$this->db->where('id_kriteria',$id)
				 ->delete('kriteria_penilaian');
	  	$this->session->set_flashdata('msg_alert', 'Data Matakuliah berhasil dihapus');
    }
	public function updateKriteria($id,$data)
	{
		$this->db->where('kode_kriteria',$id);
		$this->db->update('kriteria_penilaian', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data Kriteria Penilaian berhasil diupdate');
	}
}