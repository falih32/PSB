<?php

class M_tembusan extends CI_Model{
    function __construct(){
        parent::__construct();
        	$this->load->library('Datatables');
    }
    
    function insert($data){
        $this->db->insert('t_tembusan', $data);
    }
    
    function selectAll(){
        $this->db->select('*');
        $this->db->from('t_tembusan');
        $this->db->order_by('tmb_id', 'asc');
        return $this->db->get();
    }
    function selectById($id){
        $this->db->select('*');
        $this->db->from('t_tembusan');
        $this->db->where('tmb_id', $id);
        return $this->db->get();
    }
  
    function ajaxProcess(){
		$this->datatables
		->select('tmb_id, tmb_nama ')
		->from('t_tembusan')    
		->edit_column('aksi',"".
			"<form>".
			"<div class='form-group'>".
			"<a class='btn btn-danger btn-sm delete btn-aksi' data-toggle='tooltip' data-placement='top' title='Hapus' data-confirm='Anda yakin akan menghapus ini?' href='Tembusan/delete_tembusan/$1'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Hapus</a>".
			"<a class='btn btn-info btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Edit' href='Tembusan/edit_tembusan/$1'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Ubah</a>".
			"</div>".
			"</form>".
		"",'tmb_id');
		return $this->datatables->generate();
	}
    function update($id, $data){
        $this->db->where('tmb_id', $id);
        $this->db->update('t_tembusan', $data);
    }
    
    function delete($id){
        $this->db->where('tmb_id', $id);
       $this->db->delete('t_tembusan');
    }

}
