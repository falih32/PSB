<?php
$pdf=new PDF_MC_Table1('l','mm','A4');
$pdf->SetMargins(10,15,16);
$pdf->AddPage();

//Header
		$pdf->SetFont('Arial','B',14);
		//judulFormulir Pendaftaran Santri Baru
		$pdf->Cell(0,6,'DAFTAR SANTRI BARU MADRASAH QUDSIYYAH KUDUS',0,2,'C');
                $pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,6,'TAHUN PELAJARAN '.$pdf->tanggal('Y', $tahun).' / '.($pdf->tanggal('Y', $tahun)+1),0,2,'C');
		
		$pdf->Ln(6);
              
                $pdf->SetFont('Arial','',10);
          
                $header = array('No','No.Daftar','Kelas','Nama', 'Tempat Tanggal Lahir', 'Ayah/Pekerjaan','Ibu/Pekerjaan');                 
                $w = array(10,20,12,70,50,70,70);
		$pdf->SetWidths($w);
		$pdf->SetAligns('C');
		for($i=0;$i<1;$i++){
			$pdf->Row1($header); 
		}
                $pdf->Output('Kwitansi Ambil Blangko.pdf','I');	
?>		