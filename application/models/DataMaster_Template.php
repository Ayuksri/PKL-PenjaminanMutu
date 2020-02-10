<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_Template extends CI_Model {
	public function full_template() {
		$data = $this->db->select('tem.id_template, tem.nama_template,tem.file,tem.tgl_post')
					 ->from('template as tem')
					 ->order_by('tem.id_template','asc')
					 ->get();
		return $data->result();
	}
	public function full_template1() {
		$data = $this->db->select('tem.id_template, tem.nama_template,tem.file,tem.tgl_post')
					 ->from('template as tem')
					 ->order_by('tem.id_template','asc')
					 ->get();
		return $data->result();
	}
	public function tambahTemplate($data) 
	{
		$this->db->insert('template', $data);
		$this->session->set_flashdata('msg_alert', 'Data Template berhasil ditambahkan');
	}
	public function updateTemplate($id,$data)
	{
		$this->db->where('id_template',$id);
		$this->db->update('template', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data Template berhasil diupdate');
 	}
 	public function hapusTemplate($id)
    {
	  	$this->db->where('id_template',$id)
				 ->delete('template');
	  	$this->session->set_flashdata('msg_alert', 'Data Template berhasil dihapus');
    }
	 public function dosen()
	{
		$data = $this->db->select('*')
					 ->from('dosen')
					 ->get();
		return $data->result();
	}
	public function time()
	{
		$time = time();
		return $time;
	}
	function get_file_byid($id){
		$data = $this->db->select('file')
						-> from('template')
						-> where('id_template',$id)
						->get();
		return $data;
	}
//bisa untuk buat nilai dan materipelajaran

}
