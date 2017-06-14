<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once APPPATH."/third_party/PHPExcel.php";
class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
	function tanggal($format,$nilai="now"){
			$en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
			"Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			$id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
			"Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September",
			"Oktober","November","Desember");
			return str_replace($en,$id,date($format,strtotime($nilai)));
	}
}
