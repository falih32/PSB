<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TesMasuk extends CI_Controller {
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
            $this->load->model('m_siswa');
            $this->load->model('m_front');
            $this->load->library('pdf_mc_table1');
        }
    }
	
    public function index(){
         redirect('TesMasuk/all');       
    }
	
    public function ajaxProcessTesMasuk($status){
        $result = $this->m_siswa->ajaxProcessTesMasuk($status);
        echo $result;
    }
    
    public function kelompok3(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_TM';
        $data['title']= 'TM Kelompok III';
        $data['kelompok']= '3';
        $this->load->view('layout',$data);
    }
    public function kelompok4(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_TM';
        $data['title']= 'TM Kelompok IV';
        $data['kelompok']= '4';
        $this->load->view('layout',$data);
    }
    public function kelompok5(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_TM';
        $data['title']= 'TM Kelompok V';
        $data['kelompok']= '5';
        $this->load->view('layout',$data);
    }
    public function kelompok6(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_TM';
        $data['title']= 'TM Kelompok VI';
        $data['kelompok']= '6';
        $this->load->view('layout',$data);
    }
    public function kelompok7(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_TM';
        $data['title']= 'TM Kelompok VII';
        $data['kelompok']= '7';
        $this->load->view('layout',$data);
    }
    public function all(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_TM';
        $data['title']= 'Tampilkan Semua';
        $data['kelompok']= '-1';
        $this->load->view('layout',$data); 
    }
    
    public function detail_siswa($id){
        $data['data'] = $this->m_siswa->selectById($id)->row();
        $data['id'] = $id;
        $data['content'] = 'v_calonsiswa';
        $data['title'] = 'Verifikasi Data Siswa';
        if($data['data']->tmb_id != ''){
            $this->load->view('layout', $data);
        }else{
            redirect(site_url('Sidoel404'));
        }
    }
    
    function VerifikasiTM($id){
        $this->m_siswa->verifikasiTM($id);
        $query_np = $this->m_siswa->selectById($id)->row();
        $kel = $query_np->tmb_kelompok; 
        
        if($kel==3){
        redirect(site_url('DaftarUlang/kelompok3'));
       }elseif($kel==4){
        redirect(site_url('DaftarUlang/kelompok4'));
       }elseif($kel==5){
        redirect(site_url('DaftarUlang/kelompok5'));
       }elseif($kel==6){
        redirect(site_url('DaftarUlang/kelompok6'));
       }elseif($kel==7){
        redirect(site_url('DaftarUlang/kelompok7'));
       }
    }
    
     public function input_nilai($id){
        $data['data'] = $this->m_siswa->selectById($id)->row();
        $data['id'] = $id;
        $data['content'] = 'f_InputNilai';
        $data['title'] = 'Input Nilai Calon Siswa';
        if($data['data']->tmb_id != ''){
            $this->load->view('layout', $data);
        }else{
            redirect(site_url('Sidoel404'));
        }
    }
    
    public function proses_InputNilai(){
        $data['tmb_nilai']=$this->input->post('tmb_nilai');
        $data['tmb_diterimadi']=$this->input->post('tmb_diterimadi');
        $id_edit=$this->input->post('tmb_id');
        
        $this->m_siswa->update($id_edit, $data);
        if($this->input->post('tmb_kelompok')==3){
        redirect(site_url('TesMasuk/kelompok3'));
       }elseif($this->input->post('tmb_kelompok')==4){
        redirect(site_url('TesMasuk/kelompok4'));
       }elseif($this->input->post('tmb_kelompok')==5){
        redirect(site_url('TesMasuk/kelompok5'));
       }elseif($this->input->post('tmb_kelompok')==6){
        redirect(site_url('TesMasuk/kelompok6'));
       }elseif($this->input->post('tmb_kelompok')==7){
        redirect(site_url('TesMasuk/kelompok7'));
       }    
        
    }
    
    
}
