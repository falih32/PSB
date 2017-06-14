<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    //put your code here
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('id_user') == ''){
			$this->session->set_flashdata('message', array('msg' => 'Silahkan <strong>login</strong> untuk melanjutkan','class' => 'danger'));
			redirect('login');
		}
		else
		{
			$this->load->helper('url');
			$this->load->database();
                        $this->load->model('m_user');
                        $this->load->model('M_dashboard');
		}
    }
	
    public function index(){
            $data['title'] = '';
            $year = date('Y');
            $role = $this->session->userdata('id_role');
            $user = $this->session->userdata('id_user');
            $tahun = $this->session->userdata('tahun');
            $nama=$this->session->userdata('nama');
            $data['content'] = 'dashboard';
            $data['chart']=$this->getChart();
            //$data['chart2']=$this->getChart2();
            $this->load->view('layout', $data);
    }
    
    public function getChart(){

         $totsiswa=$this->M_dashboard->TotalSiswa();
        $i=0;
        $output = array();
        foreach($totsiswa as $t){
            $output['data'][$i]['tahun']=$t->tahun;    
            $output['data'][$i]['tot_siswaL']=$t->tot_siswaL;
            $output['data'][$i]['tot_siswabaru']=$t->tot_siswabaru;
            $i++;
            
        }
        return json_encode($output);
    }
    
}
?>