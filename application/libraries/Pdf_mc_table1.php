<?php
require('fpdf.php');


class PDF_MC_Table1 extends FPDF
{
var $widths;
var $aligns;
var $a;
var $o;
function SetWidths($w)
{
    //Set the array of column widths
    $this->widths=$w;
}

function SetRataKanan($o)
{
    //Set the array of column widths
    $this->o=$o;
}
function SetHeaders($header,$wi)
			{
				// Column widths
				// Header
				for($i=0;$i<count($header);$i++)
					$this->Cell($wi[$i],7,$header[$i],1,0,'C');
				$this->Ln();
			}
function SetAligns($a)
{
    //Set the array of column alignments
    $this->a=$a;
}

function Row($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=6*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : $this->a;
        $o=$this->o;
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->Rect($x,$y,$w,$h);
        //Print the text
        if($i>=$o){ $a='R'; }
        $this->MultiCell($w,6,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function Row1($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=6*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : $this->a;
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->Rect($x,$y,$w,$h);
        //Print the text
        //if($i==4||$i==3||$i==2){ $a='R'; }
        $this->MultiCell($w,6,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}


function RowNoLines($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : $this->a;
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        //$this->Rect($x,$y,$w,$h);
        //Print the text
        //if($i<=1){ $this->SetFont('Arial','B',12); } else {$this->SetFont('Arial','',12);}
        $this->MultiCell($w,5,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function RowNoLines1($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : $this->a;
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        //$this->Rect($x,$y,$w,$h);
        //Print the text
        if($i<=1){ $this->SetFont('Arial','B',12); } else {$this->SetFont('Arial','',12);}
        $this->MultiCell($w,5,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function CheckPageBreak($h)
{
    //If the height h would cause an overflow, add a new page immediately
    if($this->GetY()+$h>$this->PageBreakTrigger)
        $this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
    //Computes the number of lines a MultiCell of width w will take
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}

var $angle=0;

function Rotate($angle,$x=-1,$y=-1)
{
    if($x==-1)
        $x=$this->x;
    if($y==-1)
        $y=$this->y;
    if($this->angle!=0)
        $this->_out('Q');
    $this->angle=$angle;
    if($angle!=0)
    {
        $angle*=M_PI/180;
        $c=cos($angle);
        $s=sin($angle);
        $cx=$x*$this->k;
        $cy=($this->h-$y)*$this->k;
        $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
    }
}

function _endpage()
{
    if($this->angle!=0)
    {
        $this->angle=0;
        $this->_out('Q');
    }
    parent::_endpage();
}

function RotatedText($x,$y,$txt,$angle)
{
    //Text rotated around its origin
    $this->Rotate($angle,$x,$y);
    $this->Text($x,$y,$txt);
    $this->Rotate(0);
}
//---------------------------------------------konversi angka---------------------------------------------------------------------------------------


			function Terbilang($x)
				{
				$abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
				if ($x < 12)
				return " " . $abil[$x];
				elseif ($x < 20)
				return $this->Terbilang($x - 10) . " belas";
				elseif ($x < 100)
				return $this->Terbilang($x / 10) . " puluh" . $this->Terbilang($x % 10);
				elseif ($x < 200)
				return " seratus" . $this->Terbilang($x - 100);
				elseif ($x < 1000)
				return $this->Terbilang($x / 100) . " ratus" . $this->Terbilang($x % 100);
				elseif ($x < 2000)
				return " seribu" . $this->Terbilang($x - 1000);
				elseif ($x < 1000000)
				return $this->Terbilang($x / 1000) . " ribu" . $this->Terbilang($x % 1000);
				elseif ($x < 1000000000)
				return $this->Terbilang($x / 1000000) . " juta" . $this->Terbilang($x % 1000000);
				}
			function formatrupiah($x) {
				$f=number_format($x, 0, '','.');
				return $f;
			}

//---------------------------------------------konversi tanggal---------------------------------------------------------------------------------------
			
			function tanggal($format,$nilai="now"){
			$en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
			"Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			$id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
			"Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September",
			"Oktober","November","Desember");
			return str_replace($en,$id,date($format,strtotime($nilai)));
			}
 //-------------------------------------------footerldp---------------------------------------------------------
    function Foot($kata)
{
   //Geser posisi ke 1,5 cm dari bawah
  $this->SetY(-30);
   //Pilih font Arial italic 8
   $this->Cell(75);
		$this->SetFont('Arial','',8);
		$this->MultiCell(40,3,$kata,0,'C');

}

}
?>