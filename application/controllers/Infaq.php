<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infaq extends CI_Controller {
    //put your code here
    
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('id_user') == ''){
            $this->session->set_flashdata('message', array('msg' => 'Please <strong>login</strong> to continue','class' => 'danger'));
            $this->session->set_flashdata('history', $this->uri->uri_string());
            redirect('login');
        }
        else
        {
            $this->load->helper('url');
            $this->load->database();
            $this->load->helper('date');
            $this->load->model('m_infaq');
        }
    }
	
    public function index(){
        $data['content'] = 'l_infaq';
        $data['title']= 'Infaq';
        $this->load->view('layout',$data);
    }
	
    public function ajaxProcess(){
        echo $this->m_infaq->ajaxProcess();
    }
    
    function postVariabel(){
	$data['inf_blangko']    = $this->input->post('inf_blangko');
        $data['inf_blangko']    =preg_replace("/[^0-9]/", "", $data['inf_blangko']);
        $data['inf_daftar']    = $this->input->post('inf_daftar');
        $data['inf_daftar']    =preg_replace("/[^0-9]/", "", $data['inf_daftar']);
        $data['inf_tahun']    = $this->input->post('inf_tahun');
        return $data;
    }
    
    public function tambah_infaq(){
        $data['content'] = 'f_infaq';
	$data['title']= 'Input infaq';
        $data['mode']= 'add';
        $this->load->view('layout',$data);
    }
    public function proses_tambah_infaq(){      
        $data = $this->postVariabel();
        $this->m_infaq->insert($data);
        redirect(site_url('Infaq'));
    }
    
    public function edit_infaq($id){
        $data['dataUnit'] = $this->m_infaq->selectById($id)->row();
        $data['id'] = $id;
        $data['mode'] = 'edit';
        $data['content'] = 'f_infaq';
        $data['title'] = 'Edit infaq';
        if($data['dataUnit']->inf_id != ''){
            $this->load->view('layout', $data);
        }else{
            redirect(site_url('Sidoel404'));
        }
    }
    
    public function proses_edit_infaq(){
        $data = $this->postVariabel();
        $id_edit=$this->input->post('inf_id');
        $this->m_infaq->update($id_edit, $data);
        redirect(site_url('Infaq'));
    }
    
    public function delete_infaq($id){
        $this->m_infaq->delete($id);
        redirect('Infaq');
    }
}
