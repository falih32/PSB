<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DaftarUlang extends CI_Controller {
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
         redirect('DaftarUlang/all');       
    }
	
    public function ajaxProcessDaftarUlang($status){
        $result = $this->m_siswa->ajaxProcessDaftarUlang($status);
        echo $result;
    }
    
    public function kelompok1(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
        $data['title']= 'VP Kelompok I';
        $data['kelompok']= '1';
        $this->load->view('layout',$data);
    }
    public function kelompok2(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
        $data['title']= 'VP Kelompok II';
        $data['kelompok']= '2';
        $this->load->view('layout',$data);    
    }
    
    public function kelompok3(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
        $data['title']= 'TM Kelompok III';
        $data['kelompok']= '3';
        $this->load->view('layout',$data);
    }
    public function kelompok4(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
        $data['title']= 'TM Kelompok IV';
        $data['kelompok']= '4';
        $this->load->view('layout',$data);
    }
    public function kelompok5(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
        $data['title']= 'TM Kelompok V';
        $data['kelompok']= '5';
        $this->load->view('layout',$data);
    }
    public function kelompok6(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
        $data['title']= 'TM Kelompok VI';
        $data['kelompok']= '6';
        $this->load->view('layout',$data);
    }
    public function kelompok7(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
        $data['title']= 'TM Kelompok VII';
        $data['kelompok']= '7';
        $this->load->view('layout',$data);
    }
    public function all(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_DU';
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
    
    function VerifikasiSB($id){
        $this->m_siswa->verifikasiSB($id);
        $query_np = $this->m_siswa->selectById($id)->row();
        $kel = $query_np->tmb_diterimadi; 
        if($kel=='1a'){
        redirect(site_url('SiswaBaru/kelas1a'));
       }elseif($kel=='1b'){
        redirect(site_url('SiswaBaru/kelas1b'));
       }elseif($kel==2){
        redirect(site_url('SiswaBaru/kelas2'));
       }elseif($kel==3){
        redirect(site_url('SiswaBaru/kelas3'));
       }elseif($kel==4){
        redirect(site_url('SiswaBaru/kelas4'));
       }elseif($kel==5){
        redirect(site_url('SiswaBaru/kelas5'));
       }elseif($kel==6){
        redirect(site_url('SiswaBaru/kelas6'));
       }elseif($kel==7){
        redirect(site_url('SiswaBaru/kelas7'));
       }elseif($kel==8){
        redirect(site_url('SiswaBaru/kelas8'));
       }elseif($kel==9){
        redirect(site_url('SiswaBaru/kelas9'));
       }elseif($kel==10){
        redirect(site_url('SiswaBaru/kelas10'));
       }elseif($kel==11){
        redirect(site_url('SiswaBaru/kelas11'));
       }elseif($kel==12){
        redirect(site_url('SiswaBaru/kelas12'));
       }else{
        redirect(site_url('SiswaBaru/all'));
       }
    }
   
    
    
}
