<?php

class M_user extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('Datatables');
    }
     function insert($data){
        $this->db->insert('admin', $data);
        
    }
    
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('admin');
    }
    
    function activate($id){
	$data['usr_deleted'] = '0';
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }
	
    // cek keberadaan user di sistem
    function check_user_account($username, $password){
        return $this->db->query("SELECT * FROM admin "
                . "WHERE username LIKE BINARY ".$this->db->escape($username)." "
                . "AND Pass LIKE BINARY ".$this->db->escape(md5($password))." ;");
    }
    // mengambil data user tertentu
    function geadmin($id_user){
       $this->db->select('*');
       $this->db->from('admin');
       $this->db->where('id', $id_user);
       return $this->db->get();
    }
    	
    function check_username($username){
        $this->db
        ->select('*')
        ->from('admin')
        ->where('username', $username);
        return $this->db->get();
    }
		
    function selectAll(){
       $this->db->select('*');
       $this->db->from('admin');
       return $this->db->get();
    }
    function selectAllActiveUser(){
       $this->db->select('*');
       $this->db->from('admin');
       $this->db->where('usr_deleted', '0');
       return $this->db->get();
    }
    
    function selectById($id){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id', $id);
        return $this->db->get();
    }
	
    function selectByUsername($username){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        return $this->db->get();
    }
    
    
    function ajaxProcess(){
        $this->datatables
        ->select('id,Nama,username,REPLACE(REPLACE(usr_role,2,"Operator"),1,"Admin") as usr_role')
        ->from('admin')
        ->edit_column('aksi',"".
                "<form>".
                "<div class='form-group'>".
                "<a class='btn btn-danger btn-sm delete btn-aksi' data-toggle='tooltip' data-placement='top' title='Hapus' data-confirm='Anda yakin akan menghapus user ini?' href='User/deleteUser/$1'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Hapus</a>".
                "<a class='btn btn-info btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Edit' href='User/editUser/$1'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Ubah</a>".
                "</div>".
                "</form>".
        "",'id');
        return $this->datatables->generate();
    }
        
        
    function update($id, $data){
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }
    
    function updateNotif($id){
        $this->db->query("UPDATE admin SET usr_total_read=usr_total_read+1 WHERE id='".$id."'");
    }
    
    function updateNotifZero($id){
        $this->db->query("UPDATE admin SET usr_total_read=0 WHERE id='".$id."'");
    }
    
    function selectAllPaging($limit=array()){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->join('t_role','t_role.rle_id=admin.usr_role', 'left');
         $this->db->where('usr_deleted', '0');
        $this->db->order_by('id', 'asc');
        if ($limit != NULL)
        $this->db->limit($limit['perpage'], $limit['offset']);
        return $this->db->get();
    }
}
