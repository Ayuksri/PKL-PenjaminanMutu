<?php
 include APPPATH . '/third_party/fpdf/fpdf.php';
 include APPPATH . '/controllers/exfpdf.php';
 include APPPATH . '/controllers/easyTable.php';

 Class unduhKontrakKuliah extends CI_Controller{

   function __construct() {
     parent::__construct();
     $this->load->library('pdf');
     //$this->load->library('mc_table');
     //$this->load->library('wordwrap');
     //$this->load->library('html_table');
  }
  function index(){
 $pdf=new exFPDF();
 $pdf->AddPage('P','A4',0); 
 $pdf->SetFont('helvetica','',10);

$this->db->select('*');    
$this->db->from('kontrak_kuliah');
$this->db->join('matakuliah', 'kontrak_kuliah.id_matkul = matakuliah.id_matkul');
$this->db->join('semester', 'kontrak_kuliah.id_semester = semester.id_semester');
$this->db->join('dosen', 'kontrak_kuliah.nidn = dosen.nidn');
$kontrak_kuliah = $this->db->get()->result();


 $write=new easyTable($pdf, 1, ' align:C; font-style:B; font-size:15;');
 $write->easyCell('KONTRAK PERKULIAHAN');
 $write->printRow();
 $write->endTable(5);

//########################################################

 

//########################################################

$tableB=new easyTable($pdf, 5, ' align:L; border:0;border-color:#000;');
//tabel kontrak kuliah
foreach ($kontrak_kuliah as $row){
$tableB->easyCell("Nama Mata Kuliah");
$tableB->easyCell(": ".$row->nama_matkul, 'colspan:4');
$tableB->printRow();

$tableB->easyCell("Kode Mata Kuliah" );
$tableB->easyCell(": ".$row->kode_matkul, 'colspan:4');
$tableB->printRow();

$tableB->easyCell("Bobot (SKS)" );
$tableB->easyCell(": ".$row->sks, 'colspan:4');
$tableB->printRow();

$tableB->easyCell("Semester");
$tableB->easyCell(": ".$row->semester, 'colspan:4');
$tableB->printRow();

$tableB->easyCell("Jumlah Pertemuan" );
$tableB->easyCell(": 16", 'colspan:4');
$tableB->printRow();

$tableB->easyCell("Tempat Pertemuan");
$tableB->easyCell(": Kampus Teknik Informatika", 'colspan:4');
$tableB->printRow();
}
$tableB->endTable(10);

$tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
//tabel Course Description
$tableB->easyCell("Deskripsi Mata Kuliah:",'font-style:B' );
$tableB->printRow();

$tableB->easyCell("".$row->deskripsi_mata_kuliah );
$tableB->printRow();

 $tableB->endTable(10);

 $tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
 //tabel Course Description
 $tableB->easyCell("Strategi Perkuliahan:",'font-style:B' );
 $tableB->printRow();
 
 $tableB->easyCell("".$row->strategi_perkuliahan );
 $tableB->printRow();
 
  $tableB->endTable(10);

  $tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
  //tabel Course Description
  $tableB->easyCell("Topik Mata Kuliah:",'font-style:B' );
  $tableB->printRow();
  
  $tableB->easyCell("".$row->strategi_perkuliahan);
  $tableB->printRow();
  
   $tableB->endTable(10);

   $tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
   //tabel Course Description
   $tableB->easyCell("Referensi:",'font-style:B' );
   $tableB->printRow();
   
   $tableB->easyCell("Kode Mata Kuliah");
   $tableB->printRow();
   
    $tableB->endTable(10);

    $tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
    //tabel Course Description
    $tableB->easyCell("Penilaian:",'font-style:B' );
    $tableB->printRow();
    
     $tableB->endTable(10);

     $tableB=new easyTable($pdf, 5, ' align:L; border:0;border-color:#000;');
     //tabel kontrak kuliah
     foreach ($kontrak_kuliah as $row){
     $tableB->easyCell("Persentase Kehadiran");
     $tableB->easyCell(": ".$row->persentase_kehadiran, 'colspan:4');
     $tableB->printRow();
     
     $tableB->easyCell("Persentase Keaktifan");
     $tableB->easyCell(": ".$row->persentase_keaktifan, 'colspan:4');
     $tableB->printRow();
     
     $tableB->easyCell("Persentase Kuis");
     $tableB->easyCell(": ".$row->persentase_kuis, 'colspan:4');
     $tableB->printRow();
     
     $tableB->easyCell("Persentase UTS" );
     $tableB->easyCell(": ".$row->persentase_uts, 'colspan:4');
     $tableB->printRow();
     
     $tableB->easyCell("Persentase UAS" );
     $tableB->easyCell(": ".$row->persentase_uas, 'colspan:4');
     $tableB->printRow();
     }
     $tableB->endTable(10);

     $tableB=new easyTable($pdf, 3, ' align:C; border:1;border-color:#000;');
     
     $tableB->easyCell("Angka Mutu (Skala 0-10)" );
     $tableB->easyCell("Angka Mutu (Skala 0-4)" );
     $tableB->easyCell("Huruf Mutu (Skala Kualitatif)" );
     $tableB->printRow();
     
     $tableB->easyCell("80-100" );
     $tableB->easyCell("4" );
     $tableB->easyCell("A" );
     $tableB->printRow();
     
     $tableB->easyCell("80-100");
     $tableB->easyCell("4" );
     $tableB->easyCell("A" );
     $tableB->printRow();
     
     $tableB->easyCell("80-100" );
     $tableB->easyCell("4" );
     $tableB->easyCell("A" );
     $tableB->printRow();
     
     $tableB->easyCell("80-100" );
     $tableB->easyCell("4" );
     $tableB->easyCell("A" );
     $tableB->printRow();
     
     $tableB->endTable(10);

   $tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
    //tabel Course Description
    $tableB->easyCell("Tata Tertib:",'font-style:B' );
    $tableB->printRow();
    
    $tableB->easyCell("1.	Mahasiswa diwajibkan menggunakan pakaian (tidak oblong) dan pantas pada waktu mengikuti perkuliahan di kelas.
    2.	Mahasiswa tidak diperkenankan memakai sandal baik waktu mengikuti perkuliahan maupun pada waktu praktikum, atau menghadap dosen untuk bimbingan maupun konsultasi akademik.
    3.	Pada waktu perkuliahan semua handphone harus dalam keadaan mati/silent. 
    4.	Keterlambatan masuk di kelas hanya diijinkan maksimal 15 menit dari jadwal.
    5.	Tidak diperkenakan melakukan keributan di kelas dalam bentuk apapun selama perkuliahan berlangsung, kecuali pada saat diskusi.
    6.	Mahasiswa wajib hadir minimal 75 % dari tatap muka. Kehadiran < 75%, seluruh item nilai = 0.
    7.	Tidak ada ujian susulan untuk UTS dan UAS, kecuali dengan alasan jelas.
    " );
    $tableB->printRow();
    
     $tableB->endTable(10);

     $tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
    //tabel Course Description
    $tableB->easyCell("Jadwal:",'font-style:B' );
    $tableB->printRow();
    
     $tableB->endTable(10);

     $tableB=new easyTable($pdf, 4, ' align:C; border:1;border-color:#000;');
     
     $tableB->easyCell("No.", 'font-style:B');
     $tableB->easyCell("Pokok Bahasan", 'font-style:B');
     $tableB->easyCell("Minggu Ke", 'font-style:B');
     $tableB->easyCell("Dosen Pengajar", 'font-style:B');
     $tableB->printRow();
     
     $tableB->easyCell("1." );
     $tableB->easyCell("".$row->topik_1);
     $tableB->easyCell("I" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();
     
     $tableB->easyCell("2." );
     $tableB->easyCell("".$row->topik_2);
     $tableB->easyCell("II" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("3." );
     $tableB->easyCell("".$row->topik_3);
     $tableB->easyCell("III" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("4." );
     $tableB->easyCell("".$row->topik_4);
     $tableB->easyCell("IV" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("1." );
     $tableB->easyCell("".$row->topik_5);
     $tableB->easyCell("I" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("6." );
     $tableB->easyCell("".$row->topik_6);
     $tableB->easyCell("VI" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("7." );
     $tableB->easyCell("".$row->topik_7);
     $tableB->easyCell("VII" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("8." );
     $tableB->easyCell("".$row->topik_8);
     $tableB->easyCell("VIII" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("9." );
     $tableB->easyCell("".$row->topik_9);
     $tableB->easyCell("IX" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("10." );
     $tableB->easyCell("".$row->topik_10);
     $tableB->easyCell("X" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("11." );
     $tableB->easyCell("".$row->topik_11);
     $tableB->easyCell("XI" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("12." );
     $tableB->easyCell("".$row->topik_12);
     $tableB->easyCell("XII" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("13." );
     $tableB->easyCell("".$row->topik_13);
     $tableB->easyCell("XIII" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("14." );
     $tableB->easyCell("".$row->topik_14);
     $tableB->easyCell("XIV" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("15." );
     $tableB->easyCell("".$row->topik_15);
     $tableB->easyCell("XV" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng." );
     $tableB->printRow();

     $tableB->easyCell("16." );
     $tableB->easyCell("".$row->topik_16);
     $tableB->easyCell("XVI" );
     $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng.");
     $tableB->printRow();
     
     $tableB->endTable(10);

   $tableB=new easyTable($pdf, 1, ' align:L; border:0;border-color:#000;');
 //tabel Course Description
 $tableB->easyCell("Lain-Lain:",'font-style:B' );
 $tableB->printRow();
 
 $tableB->easyCell("Apabila ada hal-hal yang diluar kesepakatan ini untuk perlu disepakati, dapat dibicarakan secara teknis pada saat setiap acara perkuliahan. Apabila ada perubahan isi kontrak perkuliahan, akan ada pemberitahuan terlebih dahulu.
 Kontrak perkuliahan ini dapat dilaksanakan, mulai dari disampaikan kesepakatan ini.
" );
 $tableB->printRow();
 
  $tableB->endTable(10);

  $tableB=new easyTable($pdf, 2, ' align:C; border:0;border-color:#000;');
  //tabel kontrak kuliah
  foreach ($kontrak_kuliah as $row){
  $tableB->easyCell("Pihak I
  Dosen Pengampu");
  $tableB->easyCell("Pihak II
  a.n. Mahasiswa Semester ".$row->semester);
  $tableB->printRow();
  
  $tableB->easyCell(" ");
  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell(" ");
  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell(" ");
  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell(" ");
  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell("Dr. A.A.I.N. Eka Karyawati, S.Si., M.Eng.");
  $tableB->easyCell("_________________________________________");
  $tableB->printRow();
  }
  $tableB->endTable(10);

  $tableB=new easyTable($pdf, 1, ' align:C; border:0;border-color:#000;');
  //tabel kontrak kuliah
  
  $tableB->easyCell("Mengetahui,
  Koordinator Program Studi Teknik Informatika  ");
  $tableB->printRow();
  
  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell(" ");
  $tableB->printRow();

  $tableB->easyCell("Dr. I Ketut Gede Suhartana, S.Kom., M.Kom.");
  $tableB->printRow();
  
  $tableB->endTable(10);

//########################################################


 $pdf->Output(); 
  }
 }
 

?>