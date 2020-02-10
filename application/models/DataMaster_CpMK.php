<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_CpMK extends CI_Model {

//bisa untuk buat nilai dan materipelajaran
	public function full_cp() {
		$data = $this->db->select('cp.id_cp, cp.kode_cp, cp.deskripsi_cp')
					 ->from('cp_mk as cp')
					 ->order_by('cp.id_cp','asc')
					 ->get();
		return $data->result();
	}
	public function tambahCP($data) 
	{
		$this->db->insert('cp_mk', $data);
		$this->session->set_flashdata('msg_alert', 'Data Materi berhasil ditambahkan');
	}
	public function hapusCP($id)
    {
	  	$this->db->where('id_cp',$id)
				 ->delete('cp_mk');
	  	$this->session->set_flashdata('msg_alert', 'Data Matakuliah berhasil dihapus');
    }
	public function updateCP($id,$data)
	{
		$this->db->where('kode_cp',$id);
		$this->db->update('cp_mk', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data Matakuliah berhasil diupdate');
 	}
}
