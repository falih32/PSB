<?php

class M_dashboard extends CI_Model{
    //put your code here
    function __construct(){
        parent::__construct();
		$this->load->library('Datatables');
    }
    function TotalSiswa(){
        $this->db->query("SET lc_time_names = 'id_ID'");
        $data = $this->db->query("SELECT year(cs.tmb_tanggal) as tahun, "
                . "(SELECT COUNT(*) as 'total' FROM t_calon_siswa b WHERE YEAR(b.tmb_tanggal)=tahun ) as tot_siswaL, "
                . "(SELECT COUNT(*) as 'total' FROM t_calon_siswa c WHERE YEAR(c.tmb_tanggal)=tahun and c.tmb_status = 3  ) as tot_siswabaru "
                . "FROM t_calon_siswa cs "
                . "group by tahun ")->result();
       return $data;
    }
}
