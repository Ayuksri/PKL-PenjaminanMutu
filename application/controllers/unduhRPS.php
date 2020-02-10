<?php
 include APPPATH . '/third_party/fpdf/fpdf.php';
 include APPPATH . '/controllers/exfpdf.php';
 include APPPATH . '/controllers/easyTable.php';

 Class unduhRPS extends CI_Controller{

   function __construct() {
     parent::__construct();
     $this->load->library('pdf');
     //$this->load->library('mc_table');
     //$this->load->library('wordwrap');
     //$this->load->library('html_table');
  }
  function index(){
 $pdf=new exFPDF();
 $pdf->AddPage('L','A4',0); 
 $pdf->SetFont('helvetica','',10);



//########################################################

 

//########################################################

 $tableB=new easyTable($pdf, 12, 'width:500; align:L{LC}; border:1;border-color:#000;');
//tabel rps
$tableB->easyCell("", 'img:unud.png;align:C;colspan:2;border:LTR');
$tableB->easyCell("UNIVERSITAS UDAYANA", 'colspan:10;border:TR');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2;border:LR');
$tableB->easyCell("FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM", 'colspan:10;border:R');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2;border:LBR');
$tableB->easyCell("PROGRAM STUDI TEKNIK INFORMATIKA", 'colspan:10;border:BR');
$tableB->printRow();

$tableB->easyCell("RENCANA PEMBELAJARAN SEMESTER", 'colspan:12;');
$tableB->printRow();

$tableB->easyCell("MATA KULIAH", 'colspan:4;');
$tableB->easyCell("Kode" );
$tableB->easyCell("RUMPUN MK", 'colspan:2;');
$tableB->easyCell("BOBOT (sks)" );
$tableB->easyCell("SEMESTER", 'colspan:2;');
$tableB->easyCell("TANGGAL PENYUSUNAN", 'colspan:2;');
$tableB->printRow();

$tableB->easyCell("Teori Bahasa dan Otomata", 'colspan:4;');
$tableB->easyCell("IF" );
$tableB->easyCell("Mata Kuliah Wajib", 'colspan:2;');
$tableB->easyCell("3" );
$tableB->easyCell("1", 'colspan:2;');
$tableB->easyCell("26 Juni 2020", 'colspan:2;');
$tableB->printRow();

$tableB->easyCell("OTORISASI", ' colspan:4;border:LTR');
$tableB->easyCell("Dosen Pengembang RPS", 'colspan:2;');
$tableB->easyCell("Koordinator MK", 'colspan:3;');
$tableB->easyCell("Koordinator Program Studi", 'colspan:3;');
$tableB->printRow();

$tableB->easyCell("", ' colspan:4;border:LBR');
$tableB->easyCell("I Dewa Made Bayu Atmaja Darmawan,S.Kom.M.Cs.", 'colspan:2;');
$tableB->easyCell("I Dewa Made Bayu Atmaja Darmawan,S.Kom.M.Cs.", 'colspan:3;');
$tableB->easyCell("Dr. I Ketut Gede Suhartana,S.Kom.,M.Kom", 'colspan:3;');
$tableB->printRow();

$tableB->easyCell("Capaian", 'colspan:2; border:LTR');
$tableB->easyCell("CPL-PRODI", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("Pembelajaran (CP)", 'colspan:2; border:LR');
$tableB->easyCell("S9", ' border:LTR');
$tableB->easyCell("Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.", 'colspan:9;border:LTR');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2; border:LR');
$tableB->easyCell("P1", ' border:LBR');
$tableB->easyCell("Menguasai konsep teoritis bidang pengetahuan Ilmu Komputer/Informatika secara umum dan konsep teoritis bagian khusus dalam bidang pengetahuan tersebut secara mendalam, serta mampu memformulasikan penyelesaian masalah prosedural.", 'colspan:9;border:LBR');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2; border:LR');
$tableB->easyCell("CP-MK", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2; border:LR');
$tableB->easyCell("M1", ' border:LTR');
$tableB->easyCell("Setelah mengikuti mata kuliah ini, mahasiswa dapat menjelaskan peran algoritma dan pemrograman dalam sistem komputer. (P1, P2)", 'colspan:9;border:LTR');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2; border:LR');
$tableB->easyCell("M2", ' border:LBR');
$tableB->easyCell("Setelah diberikan beberapa contoh algoritma dalam pseudocode dan flowchart, mahasiswa dapat menyelesaikan masalah dengan menggunakan pseudocode dan mengimplementasikan ke dalam bentuk flowchart. (S9, P1,KK1, KU1, KU8)", 'colspan:9;border:LBR');
$tableB->printRow();

$tableB->easyCell("Deskripsi Singkat MK", 'colspan:2; ');
$tableB->easyCell("Mata Kuliah Algoritma dan Pemrograman ditawarkan dalam 4 SKS yang terbagi atas 3 SKS Teori dan 1 SKS Praktikum. Algoritma adalah urutan langkah-langkah logis penyelesaian masalah yang disusun secara sistematis dan logis. Mengacu pada 4 tahap computational thinking, algoritma adalah tahap terakhir dari computational thinking yang didapatkan dari 3 tahap sebelumnya. Pada mata kulian ini mahasiswa akan diberikan pemahaman mengenai definisi algoritma dan pemrograman serta penerapannya pada sistem komputer, mendesain program dalam bentuk flowchart, pseudocode, tipe data, operator dan teknik lainnya dalam pemrograman. Pada akhir perkuliahan ini, anda akan menyelesaikan sebuah permasalahan komputasi dan menghasilkan program komputer berdasarkan sistematis pembuatan program. ", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("Materi Pembelajaran/Pokok Bahasan", 'colspan:2; ');
$tableB->easyCell("1.	Pengenalan algoritma dan pemrograman pada sistem komputer 
2.	Flowchart dan Pseudocode
3.	Tipe Data
4.	Operator dan Runtunan
5.	Teknik percabangan (bagian 1)
6.	Teknik percabangan (bagian 2)
7.	Teknik pengulangan (bagian 1)
8.	Teknik pengulangan (bagian 2)
9.	Array satu dimensi
10.	Array dua dimensi
11.	Tipe Data Bentukan (Record)
12.	Prosedur 
13.	Fungsi 
14.	Pencarian Data
", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("Pustaka", 'colspan:2; border:LTR');
$tableB->easyCell("Utama:", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2; border:LR');
$tableB->easyCell("Cormen, Thomas H.; Leiserson, Charles E.; Rivest, Ronald L.; Stein, Clifford (2009) [1990]. Introduction to Algorithms (3rd ed.). MIT Press and McGraw-Hill. ISBN 0-262-03384-4.  ", 'colspan:10;border:LBR');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2; border:LR');
$tableB->easyCell("Pendukung", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("", 'colspan:2; border:LBR');
$tableB->easyCell("Cormen, Thomas H.; Leiserson, Charles E.; Rivest, Ronald L.; Stein, Clifford (2009) [1990]. Introduction to Algorithms (3rd ed.). MIT Press and McGraw-Hill. ISBN 0-262-03384-4.  ", 'colspan:10;border:LBR');
$tableB->printRow();

$tableB->easyCell("Media Pembelajaran", 'colspan:2; ');
$tableB->easyCell("Elearning:
http://mooc.unud.ac.id
Compiler:
DevC++
Perangkat Keras
LCD & Projector
Referensi 
Slide
Ebook
Diktat 
Modul Praktikum 

", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("Dosen Pengampu", 'colspan:2; ');
$tableB->easyCell("I Dewa Made Bayu Atmaja Darmawan,S.Kom.M.Cs.", 'colspan:10;');
$tableB->printRow();

$tableB->easyCell("Mata Kuliah Syarat", 'colspan:2; ');
$tableB->easyCell("-", 'colspan:10;');
$tableB->printRow();

 $tableB->endTable(10);

//########################################################
$pdf->AddPage('L','A4',0); 
$pdf->SetFont('helvetica','',10);
$write=new easyTable($pdf, 1, ' align:C; font-style:B; font-size:15;');
$write->easyCell('Rencana Pembelajaran');
$write->printRow();
$write->endTable(5);

//########################################################

$tableB=new easyTable($pdf, 9, ' align:L{LC}; border:1;border-color:#000;');
//tabel rp
$tableB->easyCell("Minggu ke-", 'align:C');
$tableB->easyCell("Kemampuan akhir yang diharapkan", 'align:C');
$tableB->easyCell("Bahan Kajian (Materi Ajar)", 'align:C');
$tableB->easyCell("Metode Pembelajaran", 'align:C');
$tableB->easyCell("Waktu", 'align:C');
$tableB->easyCell("Pengalaman Belajar Mahasiswa", 'align:C');
$tableB->easyCell("Kriteria Penilaian dan Indikator", 'align:C');
$tableB->easyCell("Bobot Nilai", 'align:C');
$tableB->easyCell("Referensi", 'align:C');
$tableB->printRow();

$tableB->easyCell("1", 'align:C');
$tableB->easyCell("2", 'align:C');
$tableB->easyCell("3", 'align:C');
$tableB->easyCell("4", 'align:C');
$tableB->easyCell("5", 'align:C');
$tableB->easyCell("6", 'align:C');
$tableB->easyCell("7", 'align:C');
$tableB->easyCell("8", 'align:C');
$tableB->easyCell("9", 'align:C');
$tableB->printRow();

$this->db->select('*');    
$this->db->from('rencana_pembelajaran');
$this->db->join('matakuliah', 'rencana_pembelajaran.id_matkul = matakuliah.id_matkul');
$this->db->join('semester', 'rencana_pembelajaran.id_semester = semester.id_semester');
$this->db->join('dosen', 'rencana_pembelajaran.nidn = dosen.nidn');
$this->db->join('kriteria_penilaian', 'rencana_pembelajaran.id_kriteria = kriteria_penilaian.id_kriteria');
$rencana_pembelajaran = $this->db->get()->result();
foreach ($rencana_pembelajaran as $row){
   $tableB->easyCell($row->minggu_ke, 'align:C');
   $tableB->easyCell($row->kemampuan_akhir );
   $tableB->easyCell($row->bahan_kajian );
   $tableB->easyCell($row->metode);
   $tableB->easyCell($row->waktu, 'align:C');
   $tableB->easyCell($row->pengalaman_belajar );
   $tableB->easyCell($row->deskripsi_kriteria);
   $tableB->easyCell($row->bobot_nilai, 'align:C');
   $tableB->easyCell("[".$row->id_referensi."]", 'align:C');
   $tableB->printRow();
}
 $tableB->endTable(10);

//########################################################

$pdf->AddPage('L','A4',0); 
$pdf->SetFont('helvetica','',10);
$write=new easyTable($pdf, 1, ' align:C; font-style:B; font-size:15;');
$write->easyCell('Referensi');
$write->printRow();
$write->endTable(5);

$write=new easyTable($pdf, 1, ' align:C; ');
$referensi = $this->db->get('referensi')->result();
foreach ($referensi as $row){
   
   $write->easyCell('['.$row->id_referensi.']'.' '.$row->penulis.'.'.' '.$row->judul.'.'.' Edisi ke-'.$row->edisi.'.'.' '.$row->tahun.'.'.' '.$row->penerbit.'.');
   $write->printRow();
}
$write->endTable(10);

 $pdf->Output(); 
  }
 }
 

?>