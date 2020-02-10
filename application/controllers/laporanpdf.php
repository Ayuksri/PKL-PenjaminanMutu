<?php
include APPPATH . '/controllers/mc_table.php';
Class laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        //$this->load->library('mc_table');
        //$this->load->library('wordwrap');
        //$this->load->library('html_table');
    }

    

function GenerateWord()
{
	//Get a random word
	$nb=rand(3,10);
	$w='';
	for($i=1;$i<=$nb;$i++)
		$w.=chr(rand(ord('a'),ord('z')));
	return $w;
}

function GenerateSentence()
{
	//Get a random sentence
	$nb=rand(1,10);
	$s='';
	for($i=1;$i<=$nb;$i++)
		$s.=GenerateWord().' ';
	return substr($s,0,-1);
}

    function index(){
        
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(300,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(300,7,'RENCANA PEMBELAJARAN',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Minggu Ke-',1,0);
        $pdf->Cell(65,6,'Kemampuan Akhir yang Diharapkan',1,0);
        $pdf->Cell(47,6,'Bahan Kajian (Materi Ajar)',1,0);
        $pdf->Cell(40,6,'Metode Pembelajaran',1,0);
        $pdf->Cell(15,6,'Waktu',1,0);
        $pdf->Cell(35,6,'Pengalaman Belajar',1,0);
        $pdf->Cell(35,6,'Kriteria Penilaian',1,0);
        $pdf->Cell(25,6,'Bobot Nilai',1,0);
        $pdf->SetFont('Arial','',10);
        
        $rencana_pembelajaran = $this->db->get('rencana_pembelajaran')->result();
        foreach ($rencana_pembelajaran as $row){
            $current_y = $pdf->GetY();
            $current_x = $pdf->GetX();
            $pdf->Ln();
            $pdf->Cell(20,6,$row->minggu_ke,1,0);
            $pdf->MultiCell( 65, 6, $row->kemampuan_akhir, 1,'L', 0);
            //$pdf->Cell(85,6,$row->kemampuan_akhir,1,0);
            //$pdf->SetXY($current_x + 65, $current_y);
            $current_x = $pdf->GetX();
            $pdf->Cell( 65, 6, $row->bahan_kajian, 1,0);
            //$pdf->SetXY($current_x + 65, $current_y);
            $current_x = $pdf->GetX();
            $pdf->Cell(40,6,$row->metode,1,0); 
            $pdf->Cell(15,6,$row->waktu,1,0); 
            $pdf->Cell(35,6,$row->pengalaman_belajar,1,0); 
            $pdf->Cell(35,6,$row->kriteria_penilaian,1,0); 
            $pdf->Cell(25,6,$row->bobot_nilai,1,0); 
        }
        $pdf->AddPage();
        foreach ($rencana_pembelajaran as $row){
            $pdf->Ln();
            $pdf->Ln();
            $pdf->Write(5,"Minggu ke-");
            $pdf->Write(5,$row->minggu_ke);
            $pdf->Ln();
            $pdf->Write(5,"Kemampuan Akhir: ");
            $pdf->Write(5,$row->kemampuan_akhir);
            $pdf->Ln();
            $pdf->Write(5,"Bahan Kajian: ");
            $pdf->Write(5,$row->bahan_kajian);
            $pdf->Ln();
            $pdf->Write(5,"Metode: ");
            $pdf->Write(5,$row->metode); 
            $pdf->Ln();
            $pdf->Write(5,"Waktu: ");
            $pdf->Write(5,$row->waktu); 
            $pdf->Ln();
            $pdf->Write(5,"Pengalaman Belajar: ");
            $pdf->Write(5,$row->pengalaman_belajar); 
            $pdf->Ln();
            $pdf->Write(5,"Kriteria Penilaian: ");
            $pdf->Write(5,$row->kriteria_penilaian); 
            $pdf->Ln();
            $pdf->Write(5,"Bobot Nilai: ");
            $pdf->Write(5,$row->bobot_nilai); 
        }
        
        $pdf->AddPage();
        foreach ($rencana_pembelajaran as $row){
            while(1){
                $cellWidth=20; //lebar sel
                $cellHeight=1; //tinggi sel satu baris normal
                
                //periksa apakah teksnya melibihi kolom?
                if($pdf->GetStringWidth($row->kemampuan_akhir) < $cellWidth){
                    //jika tidak, maka tidak melakukan apa-apa
                    $line=1;
                }else{
                    //jika ya, maka hitung ketinggian yang dibutuhkan untuk sel akan dirapikan
                    //dengan memisahkan teks agar sesuai dengan lebar sel
                    //lalu hitung berapa banyak baris yang dibutuhkan agar teks pas dengan sel
                    
                    $textLength=strlen($row->kemampuan_akhir);	//total panjang teks
                    $errMargin=5;		//margin kesalahan lebar sel, untuk jaga-jaga
                    $startChar=0;		//posisi awal karakter untuk setiap baris
                    $maxChar=0;			//karakter maksimum dalam satu baris, yang akan ditambahkan nanti
                    $textArray=array();	//untuk menampung data untuk setiap baris
                    $tmpString="";		//untuk menampung teks untuk setiap baris (sementara)
                    
                    while($startChar < $textLength){ //perulangan sampai akhir teks
                        //perulangan sampai karakter maksimum tercapai
                        while( 
                        $pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) &&
                        ($startChar+$maxChar) < $textLength ) {
                            $maxChar++;
                            $tmpString=substr($row->kemampuan_akhir,$startChar,$maxChar);
                        }
                        //pindahkan ke baris berikutnya
                        $startChar=$startChar+$maxChar;
                        //kemudian tambahkan ke dalam array sehingga kita tahu berapa banyak baris yang dibutuhkan
                        array_push($textArray,$tmpString);
                        //reset variabel penampung
                        $maxChar=0;
                        $tmpString='';
                        
                    }
                    //dapatkan jumlah baris
                    $line=count($textArray);
                }
                
                //tulis selnya
                $pdf->SetFillColor(255,255,255);
                //$pdf->Cell(1,($line * $cellHeight),$no++,1,0,'C',true); //sesuaikan ketinggian dengan jumlah garis
                $pdf->Cell(4,($line * $cellHeight),$row->minggu_ke,1,0); //sesuaikan ketinggian dengan jumlah garis
                
                //memanfaatkan MultiCell sebagai ganti Cell
                //atur posisi xy untuk sel berikutnya menjadi di sebelahnya.
                //ingat posisi x dan y sebelum menulis MultiCell
                $xPos=$pdf->GetX();
                $yPos=$pdf->GetY();
                $pdf->MultiCell($cellWidth,$cellHeight,$row->kemampuan_akhir,1);
                
                //kembalikan posisi untuk sel berikutnya di samping MultiCell 
                //dan offset x dengan lebar MultiCell
                $pdf->SetXY($xPos + $cellWidth , $yPos);
                
                $pdf->Cell(3,($line * $cellHeight),$row->metode,1,1); //sesuaikan ketinggian dengan jumlah garis
            }
        }
        
        
        
        
        $pdf->Output();
    }
}