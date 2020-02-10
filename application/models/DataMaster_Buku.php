<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster_Buku extends CI_Model {

	public function list_all() {
		$data = $this->db->select('b.*')
					 ->from('buku as b')
					 ->get();
		return $data->result();
	}
<<<<<<< HEAD
	public function tambahBuku($data) 
=======
	public function tambahBuku($data)
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
	{
		$this->db->insert('buku', $data);
		$this->session->set_flashdata('msg_alert', 'Data Buku berhasil ditambahkan');
	}
	public function hapusBuku($id)
    {
	  	$this->db->where('Kd_Register',$id)
				 ->delete('buku');
	  	$this->session->set_flashdata('msg_alert', 'Data Buku berhasil dihapus');
    }
    public function updateBuku($id,$data)
    {
		$this->db->where('Kd_Register',$id)
				 ->update('buku', $data);
		$this->session->set_flashdata('msg_alert', 'Data Buku berhasil diupdate');
    }
}
