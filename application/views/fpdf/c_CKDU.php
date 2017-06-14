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
		$pdf->Cell(0,6,'PANITIA PENERIMAAN SANTRI BARU',0,2,'C');
		$pdf->Cell(0,6,'MADRASAH QUDSIYYAH KUDUS',0,2,'C');
		$pdf->Cell(0,6,'TAHUN PELAJARAN '.$pdf->tanggal('Y', $datasiswa->tmb_tanggal).' / '.($pdf->tanggal('Y', $datasiswa->tmb_tanggal)+1),0,2,'C');
		
		//buat garis horisontal
		$pdf->Line(60,36,197,36);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(145,11,'Alamat : JL. K.H.R Asnawi gang Kerjasan Kudus Telpon (0291) 4244919 Kudus 59315',0,2,'C');
                $pdf->Line(60,42,197,42);
		$pdf->Ln(5);
                $pdf->SetFont('Arial','BU',12);
                $pdf->Cell(0,0,'KWITANSI',0,2,'C');
                $pdf->Ln(6);
                
                if($infaq==NULL){ $infa=""; $inf='...........................'; }else{$infa=$pdf->Terbilang($infaq->inf_daftar); $inf=$infaq->inf_daftar;}
                
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(50,6,'Telah terima dari wali santri',0,0,'L'); $pdf->Cell(3,6,':',0,0,'L'); $pdf->Cell(120,6,' '.$datasiswa->tmb_wali,0,1,'L');
                $pdf->Cell(50,6,'Nomor Pendaftaran',0,0,'L'); $pdf->Cell(3,6,':',0,0,'L'); $pdf->Cell(120,6,' '.$datasiswa->tmb_no_daftar,0,1,'L'); 
                $pdf->Cell(50,6,'Uang sebanyak',0,0,'L'); $pdf->Cell(3,6,':',0,0,'L'); $pdf->Cell(120,6,$infa.'rupiah',0,1,'L');
                $pdf->Cell(50,6,'Guna membayar',0,0,'L'); $pdf->Cell(3,6,':',0,0,'L'); $pdf->Cell(120,6,' Infaq Madrasah Qudsiyyah Kudus (Daftar Ulang)',0,1,'L');
                $pdf->Ln(5);
                $pdf->Cell(175,6,'Kudus, '.$pdf->tanggal('d M Y', date('d M Y')),0,0,'R');
                $pdf->Ln(10);
                $pdf->Cell(110,5,'',0,0,'C');$pdf->Cell(66,5,'Panitia',0,1,'C');
                $pdf->Ln(5);
                
                $pdf->Cell(40,6,'Rp.'.$pdf->formatrupiah($inf).',-','TLRB',1,'C');
                $pdf->Ln(5);
                $pdf->Cell(176,5,'(......................................................)',0,1,'R');
                
                
                $pdf->Output('Kwitansi Daftar Ulang '.$datasiswa->tmb_no_daftar.'.pdf','I');	
?>		