<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster_Proses extends CI_Model {

	public function list_all() {
		$data = $this->db->select('pro.kode_materi,mat.nama_materi,mat.deskripsi,mat.tanggal_post, 	mat.file')
					 ->from('proses as pro')
					 ->join('matakuliah as matk','matk.id_matkul=pro.id_matkul')
					 ->where('mat.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function list_all_proses() {
		$data = $this->db->select('mat.kode_materi,mat.nama_materi,mat.deskripsi,mat.tanggal_post, 	mat.file')
					 ->from('proses as p')
					 ->join('matakuliah as matk','matk.id_matkul=mat.id_matkul')
					 ->where('mat.id_matkul',$id)
					 ->get();
		return $data->result();
	}
	public function list_all_semester() {
		$data = $this->db->select('sm.id_semester,sm.tahun_ajar,sm.semester')
					 ->from('semester as sm')
					 ->where('sm.id_semester',$id)
					 ->get();
		return $data->result();
	}
	public function tambahProses($data,$id) 
	{
		$this->db->insert('proses', $data);
		$this->session->set_flashdata('msg_alert', 'Data proses pembelajaran berhasil ditambahkan!');
	}
	public function editProses($id)
	{
		$data = $this->db->select('p.id_proses,p.nama_rps,p.deskripsi,p.file')
						-> from('proses as p')
						-> where('p.id_proses',$id)
						->get();
		return $data->row();
	}
	public function updateProses($id,$data)
	{
		$this->db->where('id_proses',$id);
		$this->db->update('proses', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data proses pembelajaran berhasil diupdate!');
	}
	
 	public function hapusProses($id)
    {
	  	$this->db->where('id_proses',$id)
				 ->delete('proses');
	  	$this->session->set_flashdata('msg_alert', 'Data proses pembelajaran berhasil dihapus!');
	}
	public function tambahKontrakKuliah($data,$id) 
	{
		$this->db->insert('proses', $data);
		$this->session->set_flashdata('msg_alert', 'Data proses pembelajaran berhasil ditambahkan!');
	}
	public function editKontrakKuliah($id)
	{
		$data = $this->db->select('r.id_proses,r.nama_rps,r.deskripsi,r.file')
						-> from('rps as r')
						-> where('r.id_rps',$id)
						->get();
		return $data->row();
	}
	public function updateKontrakKuliah($id,$data)
	{
		$this->db->where('kode_RPS',$id);
		$this->db->update('RPS', $data);
	 	$this->session->set_flashdata('msg_alert', 'Data kontrak kuliah berhasil diupdate!');
 	}
 	public function hapusKontrakKuliah($id)
    {
	  	$this->db->where('id_proses',$id)
				 ->delete('KontrakKuliah');
	  	$this->session->set_flashdata('msg_alert', 'Data kontrak kuliah berhasil dihapus!');
    }
    public function time()
	{
		$time = time();
		return $time;
	}

	function get_file_byid($id){
		$data = $this->db->select('file')
						-> from('proses')
						-> where('kode_proses',$id)
						->get();
		return $data;
	}
	
	public function jumlah_data()
	{
		return $this->db->get('proses')->num_rows();
	}
	function get_matkul(){
		$query = $this->db->get('matakuliah');
		return $query;	
	}
	function get_dosen(){
		$query = $this->db->get('dosen');
		return $query;	
	}
	function get_sub_dosen($dosen_id){
		$query = $this->db->get_where('sub_category', array('subcategory_category_id' => $category_id));
		return $query;
	}
	function save_proses($product_name,$category_id,$subcategory_id,$product_price){
		$data = array(
			'product_name' => $product_name,
			'product_price' => $product_price,
			'product_category_id' => $category_id,
			'product_subcategory_id' => $subcategory_id 
		);
		$this->db->insert('product',$data);
	}

	function get_proses(){
		$this->db->select('proses_id,bobot,semester,nama_matkul,nama_dosen,angkatan,fileKontrakKuliah,fileRPS,deskripsi,');
		$this->db->from('proses');
		$this->db->join('matakuliah','id_matkul = id_matkul','left');
		$this->db->join('dosen','nidn = nidn','left');	
		$query = $this->db->get();
		return $query;
	}

	function get_product_by_id($product_id){
		$query = $this->db->get_where('product', array('product_id' =>  $product_id));
		return $query;
	}

	function update_product($product_id,$product_name,$category_id,$subcategory_id,$product_price){
		$this->db->set('product_name', $product_name);
		$this->db->set('product_price', $product_price);
		$this->db->set('product_category_id', $category_id);
		$this->db->set('product_subcategory_id', $subcategory_id);
		$this->db->where('product_id', $product_id);
		$this->db->update('product');
	}

	function update_proses($id_proses,$bobot,$category_id,$subcategory_id,$product_price){
		$this->db->set('bobot', $bobot);
		$this->db->set('deskripsi', $deskripsi);
		$this->db->set('product_category_id', $category_id);
		$this->db->set('product_subcategory_id', $subcategory_id);
		$this->db->where('id_proses', $id_proses);
		$this->db->update('proses');
	}

	//Delete Product
	function delete_product($product_id){
		$this->db->delete('product', array('product_id' => $product_id));
	}

	//Delete Proses
	function delete_proses($id_proses){
		$this->db->delete('proses', array('id_proses' => $id_proses));
	}
	public function list_all1() {
		$data = $this->db->select('mat.kode_matkul,mat.id_matkul,mat.nama_matkul,mat.kelas,mat.jalur,sem.semester,sem.id_semester,dos.nidn')
					 ->from('matakuliah as mat')
					 ->join('angkatan as ang','mat.id_angkatan=ang.id_angkatan')
					 ->join('semester as sem','mat.id_semester=sem.id_semester')
					 ->join('dosen as dos','mat.nidn=dos.nidn')
					 ->WHERE('ang.id_angkatan=11')
					 ->WHERE('dos.nidn=7047408')
					 ->get();
		return $data->result();
	}
	public function list_all2() {
		$data = $this->db->select('mat.kode_matkul,mat.id_matkul,mat.nama_matkul,mat.kelas,mat.jalur,sem.semester,sem.id_semester,dos.nidn')
					 ->from('matakuliah as mat')
					 ->join('angkatan as ang','mat.id_angkatan=ang.id_angkatan')
					 ->join('semester as sem','mat.id_semester=sem.id_semester')
					 ->join('dosen as dos','mat.nidn=dos.nidn')
					 ->WHERE('ang.id_angkatan=12')
					 ->WHERE('dos.nidn=7047408')
					 ->get();
		return $data->result();
	}
	public function list_all3() {
		$data = $this->db->select('pro.id_proses,mtk.nama_matkul,pro.bobot,dos.nama,sem.semester,ang.angkatan_mhs,pro.deskripsi,pro.tanggalPost,pro.fileKontrakKuliah,pro.fileRPS')
					 ->from('proses as pro')
					 ->join('matakuliah as mtk','pro.id_matkul=mtk.id_matkul')
					 ->join('dosen as dos','pro.nidn=dos.nidn')
					 ->join('semester as sem','pro.id_semester=sem.id_semester')
					 ->join('angkatan as ang','pro.id_angkatan=ang.id_angkatan')
					 ->get();
		return $data->result();
	}
	/**
     * This function is used to get the matkul information
     * @return array $result : This is result of the query
     */
    function getMatkul()
    {
        $this->db->select('id_matkul, nama_matkul');
        $this->db->from('matakuliah');
        $this->db->where('id_matkul !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }

    /**
     * This function is used to get the dosen information
     * @return array $result : This is result of the query
     */
    function getDosen()
    {
        $this->db->select('nidn, nama');
        $this->db->from('dosen');
        $this->db->where('nidn !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }

    function getSemester()
    {
        $this->db->select('id_semester, tahun_ajar');
        $this->db->from('semester');
        $this->db->where('id_semester !=', 1);
        $query = $this->db->get();
        
        return $query->result();
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);	
	}
}
