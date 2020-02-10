<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster_Peminjaman extends CI_Model {

	public function list_all() {
		$data = $this->db->select('pem.*,dp.*,p.nama as petugas, a.nama as anggota,b.*')
					 ->from('peminjaman as pem')
					 ->join('detail_pinjam as dp','pem.Kd_pinjam = dp.Kd_pinjam')
					 ->join('petugas as p','pem.Kd_petugas = p.Kd_Petugas')
					 ->join('anggota as a','pem.Kd_anggota = a.Kd_Anggota')
					 ->join('buku as b','dp.Kd_register = b.Kd_Register')
					 ->get();
		return $data->result();
	}
	public function petugas()
	{
		$data = $this->db->select('*')
					 ->from('petugas')
					 ->get();
		return $data->result();
	}
	public function anggota()
	{
		$data = $this->db->select('*')
					 ->from('anggota')
					 ->get();
		return $data->result();
	}
	public function buku()
	{
		$data = $this->db->select('*')
					 ->from('buku')
					 ->get();
		return $data->result();
	}
	public function jumlah_data()
	{
		return $this->db->get('peminjaman')->num_rows();
	}
	public function peminjaman($data,$item)
	{
		$this->db->insert('peminjaman', $data);

		$x = $this->db->select('*')
				  ->from('peminjaman as pem')
				  ->order_by('Kd_pinjam','desc')
				  ->limit(1)
				  ->get();

		$id = $x->row()->Kd_pinjam;
		$item['Kd_pinjam'] = $id;
		//var_dump($item);
		$this->db->insert('detail_pinjam', $item);
		$this->session->set_flashdata('msg_alert', 'Sukses ! Peminjaman Buku Berhasil !');
	}
	public function hapusPeminjaman($id)
    {
	  	$this->db->where('Kd_pinjam',$id)
				 ->delete('peminjaman');
		$this->db->where('Kd_pinjam',$id)
				 ->delete('detail_pinjam');
	  	$this->session->set_flashdata('msg_alert', 'Sukses ! Data Peminjaman berhasil dihapus');
    }
    public function updateTbPeminjaman($id,$data)
    {
		$this->db->where('Kd_pinjam',$id)
				 ->update('peminjaman', $data);
    }
    public function updateTbDetailPinjam($id,$item)
    {
		$this->db->where('Kd_pinjam',$id)
				 ->update('detail_pinjam', $item);
		$this->session->set_flashdata('msg_alert', 'Sukses ! Data Peminjaman berhasil diPerbaharui');
    }
    public function bukuKembali($id,$item)
    {
		$this->db->where('Kd_pinjam',$id)
				 ->update('detail_pinjam', $item);
		$this->session->set_flashdata('msg_alert', 'Sukses ! Buku Berhasil Dikembalikan');
    }
}
