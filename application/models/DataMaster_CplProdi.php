<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_CplProdi extends CI_Model {

	
	public function full_cpl() {
		$data = $this->db->select('cpl.id_cpl,cpl.kode_cpl, cpl.deskripsi_cpl')
					 ->from('cpl_prodi as cpl')
					 ->order_by('cpl.id_cpl','asc')
					 ->get();
		return $data->result();
	}
	public function tambahCpl($data) 
	{
		$this->db->insert('cpl_prodi', $data);
		$this->session->set_flashdata('msg_alert', 'Data Materi berhasil ditambahkan');
	}
	public function hapusCPL($id)
    {
	  	$this->db->where('id_cpl',$id)
				 ->delete('cpl_prodi');
	  	$this->session->set_flashdata('msg_alert', 'Data Matakuliah berhasil dihapus');
    }
	public function updateCPL($id,$data)
	{
		$this->db->where('kode_cpl',$id);
		$this->db->update('cpl_prodi', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data Matakuliah berhasil diupdate');
	}
}