<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_Materi extends CI_Model {
	
	public function list_all($id) {
		$data = $this->db->select('mat.kode_materi,mat.nama_materi,mat.deskripsi,mat.tanggal_post, 	mat.file')
					 ->from('materi as mat')
					 ->join('matakuliah as matk','matk.id_matkul=mat.id_matkul')
					 ->where('mat.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function tambahMateri($data,$id) 
	{
		$this->db->insert('materi', $data);
		$this->session->set_flashdata('msg_alert', 'Data Materi berhasil ditambahkan');
	}
	public function editMateri($id)
	{
		$data = $this->db->select('mat.kode_materi,mat.nama_materi,mat.deskripsi,mat.file')
						-> from('materi as mat')
						-> where('mat.id_matkul',$id)
						->get();
		return $data->row();
	}
	public function updateMateri($id,$data)
	{
		$this->db->where('kode_materi',$id);
		$this->db->update('materi', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data Materi berhasil diupdate');
 	}
 	public function hapusMateri($id)
    {
	  	$this->db->where('kode_materi',$id)
				 ->delete('materi');
	  	$this->session->set_flashdata('msg_alert', 'Data Materi berhasil dihapus');
    }
    public function time()
	{
		$time = time();
		return $time;
	}

	function get_file_byid($id){
		$data = $this->db->select('file')
						-> from('materi')
						-> where('kode_materi',$id)
						->get();
		return $data;
	}
}
