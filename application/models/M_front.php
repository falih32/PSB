<?php

class M_front extends CI_Model{
    function __construct(){
        parent::__construct();
        	$this->load->library('Datatables');
    }
    
    function insert($data){
        $this->db->insert('t_calon_siswa', $data);
    }
    
    function selectAll($tmb_nama,$tmb_ttl){
        $this->db->select('*');
        $this->db->from('t_calon_siswa');
        $this->db->where('tmb_nama', $tmb_nama);
        $this->db->where('tmb_ttl', $tmb_ttl);
        $this->db->where('year(tmb_tanggal)', date('Y'));
        $this->db->order_by('tmb_id', 'asc');
        return $this->db->get();
    }
    
    
    function selectLastNP($tahun){
        $data = $this->db->query("Select max(tmb_no_daftar) as NP from t_calon_siswa WHERE year(tmb_tanggal)=".$tahun." and LOWER(tmb_no_daftar) LIKE \"%".strtolower('L')."%\"")->row();
        return $data;
    }
    
    

}
