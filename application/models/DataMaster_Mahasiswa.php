<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataMaster_Mahasiswa extends CI_Model {
	
	public function list_all($id) {
		$data = $this->db->select('mhs.id_mahasiswa,mhs.nim,mhs.nama_mhs,matk.id_matkul')
					 ->from('mahasiswa as mhs')
					 ->join('matakuliah as matk','matk.id_matkul=mhs.id_matkul')
					 ->where('mhs.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function list_rekapan($id){
		$data = $this->db->select('nilai_keaktifan, nilai_mandiri, nilai_kelompok, nilai_quiz, nilai_uts, nilai_uas, id_matkul')
					 ->from('rekap_nilai')
					 ->where('rekap_nilai.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function update_rekap($id_matkul,$data){
		$this->db->where('id_matkul',$id_matkul)
				 ->delete('rekap_nilai');
		$this->db->insert('rekap_nilai', $data);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil ditambahkan');
	}
	public function list_ujian($id){
		$data = $this->db->select('nilai_uts_uas.nilai_uts, nilai_uts_uas.nilai_uas, nilai_uts_uas.id_mahasiswa')
					 ->from('nilai_uts_uas')
					 ->where('nilai_uts_uas.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function tambahNilaiUjian($data,$id_mahasiswa,$id_matkul) 
	{
		$this->db->where('id_mahasiswa',$id_mahasiswa)
				 ->where('id_matkul',$id_matkul)
				 ->delete('nilai_uts_uas');
		$this->db->insert('nilai_uts_uas', $data);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil ditambahkan');
	}
	public function list_mandiri($id){
		$data = $this->db->select('nilai_mandiri.nilai_mandiri, nilai_mandiri.id_mahasiswa')
					 ->from('nilai_mandiri')
					 ->where('nilai_mandiri.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function hapus_mandiri($id_mahasiswa,$id_matkul){
		$this->db->where('id_mahasiswa',$id_mahasiswa)
				 ->where('id_matkul', $id_matkul)
				 ->delete('nilai_mandiri');
	}
	public function tambahMandiri($data) 
	{
		$this->db->insert('nilai_mandiri', $data);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil ditambahkan');
	}

	public function list_kelompok($id){
		$data = $this->db->select('nilai_kelompok.nilai_kelompok, nilai_kelompok.id_mahasiswa')
					 ->from('nilai_kelompok')
					 ->where('nilai_kelompok.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function hapus_kelompok($id_mahasiswa,$id_matkul){
		$this->db->where('id_mahasiswa',$id_mahasiswa)
				 ->where('id_matkul', $id_matkul)
				 ->delete('nilai_kelompok');
	}
	public function tambahKelompok($data) 
	{
		$this->db->insert('nilai_kelompok', $data);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil ditambahkan');
	}

	public function list_quiz($id){
		$data = $this->db->select('nilai_quiz.nilai_quiz, nilai_quiz.id_mahasiswa')
					 ->from('nilai_quiz')
					 ->where('nilai_quiz.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function hapus_quiz($id_mahasiswa,$id_matkul){
		$this->db->where('id_mahasiswa',$id_mahasiswa)
				 ->where('id_matkul', $id_matkul)
				 ->delete('nilai_quiz');
	}
	public function tambahQuiz($data) 
	{
		$this->db->insert('nilai_quiz', $data);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil ditambahkan');
	}

	public function list_keaktifan($id){
		$data = $this->db->select('nilai_keaktifan.nilai_keaktifan, nilai_keaktifan.id_mahasiswa')
					 ->from('nilai_keaktifan')
					 ->where('nilai_keaktifan.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function hapus_keaktifan($id_mahasiswa,$id_matkul){
		$this->db->where('id_mahasiswa',$id_mahasiswa)
				 ->where('id_matkul', $id_matkul)
				 ->delete('nilai_keaktifan');
	}
	public function tambahKeaktifan($data) 
	{
		$this->db->insert('nilai_keaktifan', $data);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil ditambahkan');
	}



	public function tambahNilai($data,$id) 
	{
		$this->db->insert('nilai', $data);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil ditambahkan');
	}

	
	public function editNilai($id)
	{
		$data = $this->db->select('nilai_mandiri,nilai_kelompok,nilai_keaktifan,nilai_quiz,nilai_uts,nilai_uas')
						-> from('nilai')
						-> where('nilai.id_matkul',$id)
						->get();
		return $data->row();
	}
	public function updateNilai($id,$data)
	{
		$this->db->where('id_nilai',$id);
		$this->db->update('nilai', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data Materi berhasil diupdate');
 	}
 	public function hapusMateri($id)
    {
	  	$this->db->where('kode_materi',$id)
				 ->delete('nilai');
	  	$this->session->set_flashdata('msg_alert', 'Data Nilai berhasil dihapus');
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
