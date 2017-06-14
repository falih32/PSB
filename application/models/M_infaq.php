<?php

class M_infaq extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('Datatables');
    }
    
    function insert($data){
        $this->db->insert('t_infaq', $data);
    }
    
    function selectAll(){
        $this->db->select('*');
        $this->db->from('t_infaq');
        $this->db->order_by('inf_id', 'asc');
        return $this->db->get();
    }
    function selectBytahun($tahun){
        $this->db->select('*');
        $this->db->from('t_infaq');
        $this->db->where('year(inf_tahun)', $tahun);
        return $this->db->get();
    }
    function selectById($id){
        $this->db->select('*');
        $this->db->from('t_infaq');
        $this->db->where('inf_id', $id);
        return $this->db->get();
    }
    function update($id, $data){
        $this->db->where('inf_id', $id);
        $this->db->update('t_infaq', $data);
    }
    
    function delete($id){
        $this->db->where('inf_id', $id);
        $this->db->delete('t_infaq');
    }
    
    function ajaxProcess(){
        $this->datatables
        ->select('inf_id, inf_blangko, inf_daftar, inf_tahun')
        ->from('t_infaq')
        ->edit_column('aksi',"".
            "<form>".
            "<div class='form-group'>".
            "<a class='btn btn-danger btn-sm delete btn-aksi' data-toggle='tooltip' data-placement='top' title='Hapus' data-confirm='Anda yakin akan menghapus ini?' href='Infaq/delete_infaq/$1'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Hapus</a>".
            "<a class='btn btn-info btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Edit' href='Infaq/edit_infaq/$1'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Ubah</a>".
            "</div>".
            "</form>".
        "",'inf_id');
        return $this->datatables->generate();
    }
}
