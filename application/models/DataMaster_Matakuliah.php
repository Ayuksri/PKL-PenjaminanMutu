<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_Matakuliah extends CI_Model {

//bisa untuk buat nilai dan materipelajaran
	public function list_all1($nidn) {
		$data = $this->db->select('mat.kode_matkul,mat.id_matkul,mat.nama_matkul,mat.kelas,mat.jalur,sem.semester,sem.id_semester,dos.nidn')
					 ->from('matakuliah as mat')
					 ->join('angkatan as ang','mat.id_angkatan=ang.id_angkatan')
					 ->join('semester as sem','mat.id_semester=sem.id_semester')
					 ->join('dosen as dos','mat.nidn=dos.nidn')
					 ->WHERE('ang.id_angkatan=11')
					 ->WHERE('dos.nidn',$nidn)
					 ->get();
		return $data->result();
	}
	public function list_all2($nidn) {
		$data = $this->db->select('mat.kode_matkul,mat.id_matkul,mat.nama_matkul,mat.kelas,mat.jalur,sem.semester,sem.id_semester,dos.nidn')
					 ->from('matakuliah as mat')
					 ->join('angkatan as ang','mat.id_angkatan=ang.id_angkatan')
					 ->join('semester as sem','mat.id_semester=sem.id_semester')
					 ->join('dosen as dos','mat.nidn=dos.nidn')
					 ->WHERE('ang.id_angkatan=12')
					 ->WHERE('dos.nidn',$nidn)
					 ->get();
		return $data->result();
	}
	public function list_all3($nidn) {
		$data = $this->db->select('mat.kode_matkul,mat.id_matkul,mat.nama_matkul,mat.kelas,mat.jalur,sem.semester,sem.id_semester,dos.nidn')
					 ->from('matakuliah as mat')
					 ->join('angkatan as ang','mat.id_angkatan=ang.id_angkatan')
					 ->join('semester as sem','mat.id_semester=sem.id_semester')
					 ->join('dosen as dos','mat.nidn=dos.nidn')
					 ->WHERE('ang.id_angkatan=13')
					 ->WHERE('dos.nidn',$nidn)
					 ->get();
		return $data->result();
	}
	public function full_matkul() {
		$data = $this->db->select('mat.kode_matkul,mat.id_matkul,mat.id_angkatan, mat.nama_matkul,sem.semester,sem.id_semester,ang.angkatan_mhs, mat.jalur,mat.kelas, dos.nama,dos.nidn')
					 ->from('matakuliah as mat')
					 ->join('dosen as dos','mat.nidn=dos.nidn')
					 ->join('semester as sem','mat.id_semester=sem.id_semester')
					 ->join('angkatan as ang','mat.id_angkatan=ang.id_angkatan')
					 ->order_by('mat.id_matkul','asc')
					 ->get();
		return $data->result();
	}
	public function tambahMatkul($data) 
	{
		$this->db->insert('matakuliah', $data);
		$this->session->set_flashdata('msg_alert', 'Data Materi berhasil ditambahkan');
	}
	public function hapusMatakuliah($id)
    {
	  	$this->db->where('id_matkul',$id)
				 ->delete('matakuliah');
	  	$this->session->set_flashdata('msg_alert', 'Data Matakuliah berhasil dihapus');
    }
	public function updateMatkul($id,$data)
	{
		$this->db->where('id_matkul',$id);
		$this->db->update('matakuliah', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data Matakuliah berhasil diupdate');
 	}
    public function dosen()
	{
		$data = $this->db->select('*')
					 ->from('dosen')
					 ->get();
		return $data->result();
	}
	public function semester()
	{
		$data = $this->db->select('*')
					 ->from('semester')
					 ->get();
		return $data->result();
	}
	public function angkatan()
	{
		$data = $this->db->select('*')
					 ->from('angkatan')
					 ->get();
		return $data->result();
	}
	public function pencarian_semester($semester){
		$data= $this->db->WHERE('semester',$semester);
		return $data->get('pmu');

	}
	// public function tambahAnggota($data)
	// {
	// 	$this->db->insert('anggota', $data);
	// 	$this->session->set_flashdata('msg_alert', 'Anggota berhasil ditambahkan');
	// }
	// public function hapusAnggota($id)
 //    {
	//   	$this->db->where('Kd_Anggota',$id)
	// 			 ->delete('anggota');
	//   	$this->session->set_flashdata('msg_alert', 'Data Anggota berhasil dihapus');
 //    }
 //    public function updateAnggota($id,$data)
 //    {
	// 	$this->db->where('Kd_Anggota',$id)
	// 			 ->update('anggota', $data);
	// 	$this->session->set_flashdata('msg_alert', 'Data Anggota berhasil diupdate');
 //    }
}
