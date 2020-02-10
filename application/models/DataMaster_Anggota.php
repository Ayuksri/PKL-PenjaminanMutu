<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_Anggota extends CI_Model {

	public function list_all() {
		$data = $this->db->select('*')
					 ->from('anggota')
					 ->get();
		return $data->result();
	}
	public function tambahAnggota($data)
	{
		$this->db->insert('anggota', $data);
		$this->session->set_flashdata('msg_alert', 'Anggota berhasil ditambahkan');
	}
	public function hapusAnggota($id)
    {
	  	$this->db->where('Kd_Anggota',$id)
				 ->delete('anggota');
	  	$this->session->set_flashdata('msg_alert', 'Data Anggota berhasil dihapus');
    }
    public function updateAnggota($id,$data)
    {
		$this->db->where('Kd_Anggota',$id)
				 ->update('anggota', $data);
		$this->session->set_flashdata('msg_alert', 'Data Anggota berhasil diupdate');
    }
}
