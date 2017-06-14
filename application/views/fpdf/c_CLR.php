<?php

$pdf=new PDF_MC_Table1('p','mm','A4');
$pdf->SetMargins(20,15,16);
$pdf->AddPage();

//Header
		$pdf->Image(base_url().'assets/css/images/logoqudsy.jpg',25,14,-700);
		//Arial bold 15
		$pdf->SetFont('Arial','B',14);
				$pdf->Cell(35);
		//judulFormulir Pendaftaran Santri Baru
		$pdf->Cell(0,6,'FORMULIR PENDAFTARAN SANTRI BARU',0,2,'C');
		$pdf->Cell(0,6,'MADRASAH QUDSIYYAH KUDUS',0,2,'C');
		$pdf->Cell(0,6,'TAHUN PELAJARAN '.$pdf->tanggal('Y', $datasiswa->tmb_tanggal).' / '.($pdf->tanggal('Y', $datasiswa->tmb_tanggal)+1),0,2,'C');
		
		//buat garis horisontal
		$pdf->Line(60,36,197,36);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(145,11,'Alamat : JL. K.H.R Asnawi gang Kerjasan Kudus Telpon (0291) 4244919 Kudus 59315',0,2,'C');
                $pdf->Line(60,42,197,42);
		$pdf->Ln(5);
		$pdf->SetFont('Arial','',11);
                $pdf->Cell(0,0,'Nomor Pendaftaran : '.$datasiswa->tmb_no_daftar,0,2,'R');
                $pdf->SetFont('Arial','B',12);
                $pdf->Ln(5);
                $pdf->Cell(0,10,'A. SANTRI',0,2,'L');
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(50,5,'Nama Lengkap',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_nama,0,1,'L');
                $pdf->Cell(50,5,'Nomor Induk Nasional',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_nisn,0,1,'L'); 
                $pdf->Cell(50,5,'Nomor Induk Sekolah Asal',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_nisa,0,1,'L');
                $pdf->Cell(50,5,'Tempat & Tanggal Lahir',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_tempatL.' '.$pdf->tanggal('d - M - Y', $datasiswa->tmb_ttl) ,0,1,'L');
                $pdf->Cell(50,5,'Jumlah Saudara',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(40,5,'Kandung : '.$datasiswa->tmb_sdrk,0,0,'L'); $pdf->Cell(40,5,'Tiri : '.$datasiswa->tmb_sdrt,0,1,'L');
                if($datasiswa->tmb_stsdkel==1){ $status='kandung';}else if(($datasiswa->tmb_stsdkel==2)){$status='tiri';}else if(($datasiswa->tmb_stsdkel==3)){$status='angkat';}
                $pdf->Cell(50,5,'Anak Ke',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(40,5,$datasiswa->tmb_anakke,0,0,'L'); $pdf->Cell(60,5,'status dalam keluarga : '.$status,0,1,'L');
                $pdf->Cell(50,5,'Alamat',0,0,'L');$pdf->Cell(3,5,':',0,0,'L'); $pdf->MultiCell(0,5,$datasiswa->tmb_alamat,0,'J');
                $pdf->Cell(50,5,'Kecamatan',0,0,'R'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_kec,0,1,'L');
                $pdf->Cell(50,5,'Kabupaten/Kota',0,0,'R'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_kota,0,1,'L');
                $pdf->Cell(50,5,'Telp./Hp',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_telp ,0,0,'L'); 
               
                $pdf->SetFont('Arial','B',12);
                $pdf->Ln(8);
                $pdf->Cell(0,10,'B. ORANG TUA',0,2,'L');
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(50,5,'Nama',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(60,5,'Ayah : '.$datasiswa->tmb_ayah ,0,0,'L'); $pdf->Cell(60,5,'Ibu : '.$datasiswa->tmb_ibu,0,1,'L');
                $pdf->Cell(50,5,'Pendidikan',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(60,5,'Ayah : '.$datasiswa->tmb_pnd_ayah ,0,0,'L'); $pdf->Cell(60,5,'Ibu : '.$datasiswa->tmb_pnd_ibu,0,1,'L');
                $pdf->Cell(50,5,'Pekerjaan',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(60,5,'Ayah : '.$datasiswa->tmb_pek_ayah ,0,0,'L'); $pdf->Cell(60,5,'Ibu : '.$datasiswa->tmb_pek_ibu,0,1,'L');
                $pdf->Cell(50,5,'Agama',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(60,5,'Ayah : '.$datasiswa->tmb_agm_ayah ,0,0,'L'); $pdf->Cell(60,5,'Ibu : '.$datasiswa->tmb_agm_ibu,0,1,'L');
                $pdf->Cell(50,5,'Penghasilan perbulan',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(60,5,'Ayah : Rp. '.$datasiswa->tmb_peng_ayah.',-' ,0,0,'L'); $pdf->Cell(60,5,'Ibu : Rp.'.$datasiswa->tmb_peng_ibu.',-',0,1,'L');
                $pdf->Cell(50,5,'Alamat',0,0,'L');$pdf->Cell(3,5,':',0,0,'L'); $pdf->MultiCell(0,5,$datasiswa->tmb_alamat_ortu,0,'J');
                $pdf->Cell(50,5,'Kecamatan',0,0,'R'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_kec_ortu,0,1,'L');
                $pdf->Cell(50,5,'Kabupaten/Kota',0,0,'R'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_kota_ortu,0,1,'L');
                $pdf->Cell(50,5,'Telp./Hp',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_telp_ortu ,0,0,'L'); 
               
                $pdf->SetFont('Arial','B',12);
                $pdf->Ln(6);
                $pdf->Cell(0,10,'C. WALI',0,2,'L');
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(50,5,'Nama',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_wali ,0,1,'L'); 
                $pdf->Cell(50,5,'Alamat',0,0,'L');$pdf->Cell(3,5,':',0,0,'L'); $pdf->MultiCell(0,5,$datasiswa->tmb_alamat_wali,0,'J');
                $pdf->Cell(50,5,'Kecamatan',0,0,'R'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_kec_wali,0,1,'L');
                $pdf->Cell(50,5,'Kabupaten/Kota',0,0,'R'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_kota_wali,0,1,'L');
                $pdf->Cell(50,5,'Telp./Hp',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_telp_wali ,0,1,'L'); 
                
                
                $pdf->SetFont('Arial','B',12);
                $pdf->Ln(6);
                $pdf->Cell(0,10,'D. ASAL SEKOLAH',0,2,'L');
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(50,5,'Nama Madrasah',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$datasiswa->tmb_skl_asl ,0,1,'L'); 
                $pdf->Cell(50,5,'Alamat',0,0,'L');$pdf->Cell(3,5,':',0,0,'L'); $pdf->MultiCell(0,5,$datasiswa->tmb_alm_skl,0,'J');
                
                if($datasiswa->tmb_kelas ==-1){
                    $kelas = "Belum Sekolah / PAUD";
                }else if($datasiswa->tmb_kelas ==0){
                    $kelas = "TK / RA";
                }else if($datasiswa->tmb_kelas ==1){
                    $kelas = "1 (Satu) MI/SD";
                }else if($datasiswa->tmb_kelas ==2){
                    $kelas = "2 (Dua) MI/SD";
                }else if($datasiswa->tmb_kelas ==3){
                    $kelas = "3 (Tiga) MI/SD";
                }else if($datasiswa->tmb_kelas ==4){
                    $kelas = "4 (Empat) MI/SD";
                }else if($datasiswa->tmb_kelas ==5){
                    $kelas = "5 (Lima) MI/SD";
                }else if($datasiswa->tmb_kelas ==6){
                    $kelas = "6 (Enam) Lulus MI/SD ";
                }else if($datasiswa->tmb_kelas ==7){
                    $kelas = "1 (Satu) MTs/SMP ";
                }else if($datasiswa->tmb_kelas ==8){
                    $kelas = "2 (Dua) MTs/SMP ";
                }else if($datasiswa->tmb_kelas ==9){
                    $kelas = "3 (Tiga) MTs/SMP ";
                }else if($datasiswa->tmb_kelas ==10){
                    $kelas = "1 (Satu) MA/SMA/SMK";
                }else if($datasiswa->tmb_kelas ==11){
                    $kelas = "1 (Satu) MA/SMA/SMK";
                }else if($datasiswa->tmb_kelas ==12){
                    $kelas = "2 (Dua) MA/SMA/SMK";
                }else if($datasiswa->tmb_kelas ==13){
                    $kelas = "3 (Tiga) MA/SMA/SMK";
                }
    
                $pdf->Cell(50,5,'Dari Kelas',0,0,'L'); $pdf->Cell(3,5,':',0,0,'L'); $pdf->Cell(120,5,$kelas ,0,1,'L');
                $pdf->Ln(2);
                $pdf->Cell(0,0,'Kudus, ......................................... '.$pdf->tanggal('Y', $datasiswa->tmb_tanggal),0,1,'R');
                $pdf->Ln(2);
                $pdf->Cell(85,5,'Petugas',0,0,'C'); $pdf->Cell(85,5,'Yang Mendaftarkan',0,1,'C');
                $pdf->Ln(15);
                $pdf->Cell(85,5,'(......................................................)',0,0,'C'); $pdf->Cell(85,5,'(......................................................)',0,1,'C');
                
                
                $pdf->Output('Lembar Registrasi '.$datasiswa->tmb_no_daftar.'.pdf','I');	
?>		