<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('M_siswa');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
        // melihat halaman login
    public function index(){
		if($this->session->userdata('id_user') == ''){   
                    $data['content'] = 'login';
                    $data['title'] = 'Sistem Penerimaan Siswa Baru'; 
                    $data['thn'] = $this->M_siswa->getFirstYearInput();
                    if($this->session->flashdata('history')!= ""){
                        $this->session->set_flashdata('history', $this->session->flashdata('history'));
                    }
                            
                    $this->load->view('layout2',$data);
		}
		else{
			redirect('Dashboard');
		}		
    }
        
    // memeriksa keberadaan akun username
    public function do_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tahun = $this->input->post('thn_pilih');
        $temp_account = $this->m_user->check_user_account($username, $password)->row();
        // check account
        $num_account = count($temp_account);
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->pageLogin();
        }else{
            if ($num_account > 0){
                if($this->input->post('remember') == '1'){
                    $this->session->sess_expiration = 0;
                    //$this->session->sess_update();
                    $this->session->sess_expire_on_close = FALSE;
                    //$this->session->sess_update();
                }
            	// kalau ada set session
                $array_items = array('id_user' => $temp_account->id,
                    'username' => $temp_account->username,
                    'nama' => $temp_account->Nama,
                    'id_role' => $temp_account->usr_role,
                    'tahun' => $tahun,
                    'logged_in' => true);
                $this->session->set_userdata($array_items);
                $data['content'] = 'dashboard';
                $data['title'] = 'Dashboard';    
                $this->session->set_flashdata('message', array('msg' => 'Anda berhasil login sebagai <strong>'.$this->session->userdata('username').'</strong>','class' => 'success'));   
                if($this->session->flashdata('history') != ""){redirect($this->session->flashdata('history'));}
                else{redirect(site_url('Dashboard'));}
            }
            else {
                // kalau ga ada diredirect lagi ke halaman login
                $this->session->set_flashdata('message', array('msg' => '<strong>Login gagal</strong>, periksa kembali username dan password Anda.','class' => 'danger'));
               redirect(site_url('login'));
            }
        }
    }
	
    // keluar dari sistem
    public function logout(){
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>