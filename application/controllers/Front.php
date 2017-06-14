<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {
    //put your code here
    
    public function __construct(){
        parent::__construct();
      
            $this->load->helper('url');
            $this->load->database();
            $this->load->helper('date');
            $this->load->model('m_front');
            $this->load->model('m_siswa');
            $this->load->library('pdf_mc_table1');
        
    }
	
    public function index(){
        $data['content'] = 'frontend';
        $data['title']= 'PSB Madrasah Qudsiyyah';
        $this->load->view('layout3',$data);
    }
    
    public function CLR(){
        $data['content'] = 'v_CLR';
        $data['title']= 'Cetak Kartu Pendaftaran';
        $this->load->view('layout3',$data);
    }
    
     public function prosesCLR(){
        $data['content'] = 'v_ListCLR';
        $data['title']= 'Cetak Kartu Pendaftaran';
        $data['listdata'] = $this->m_front->selectAll($this->input->post('tmb_nama'), $this->input->post('tmb_ttl'))->result();
        
        $this->load->view('layout3',$data);
    }
    
    function cetakCLR($id){
        $datacetak['datasiswa'] = $this->m_siswa->selectById($id)->row();
        $this->load->view('fpdf/c_CLR',$datacetak);
    }
    
      function postVariabel(){
        $data['tmb_nama']    = $this->input->post('tmb_nama');
        $data['tmb_nisn']    = $this->input->post('tmb_nisn');
        $data['tmb_nisa']    = $this->input->post('tmb_nisa');
        $data['tmb_tempatL']    = $this->input->post('tmb_tempatL');
        $data['tmb_ttl']    = $this->input->post('tmb_ttl');
        $data['tmb_sdrk']    = $this->input->post('tmb_sdrk');
        $data['tmb_sdrt']    = $this->input->post('tmb_sdrt');
        $data['tmb_anakke']    = $this->input->post('tmb_anakke');
        $data['tmb_stsdkel']    = $this->input->post('tmb_stsdkel');
        $data['tmb_alamat']    = $this->input->post('tmb_alamat');
        $data['tmb_kec']    = $this->input->post('tmb_kec');
        $data['tmb_kota']    = $this->input->post('tmb_kota');
        $data['tmb_telp']    = $this->input->post('tmb_telp');
        $data['tmb_ayah']    = $this->input->post('tmb_ayah');
        $data['tmb_pnd_ayah']    = $this->input->post('tmb_pnd_ayah');
        $data['tmb_pek_ayah']    = $this->input->post('tmb_pek_ayah');
        $data['tmb_agm_ayah']    = $this->input->post('tmb_agm_ayah');
        
        $pengayah= $this->input->post('tmb_peng_ayah');
        $pengibu= $this->input->post('tmb_peng_ibu');
        
        $data['tmb_peng_ayah']    =preg_replace("/[^0-9]/", "", $pengayah);
        $data['tmb_alamat_ortu']    = $this->input->post('tmb_alamat_ortu');
        $data['tmb_kec_ortu']    = $this->input->post('tmb_kec_ortu');
        $data['tmb_kota_ortu']    = $this->input->post('tmb_kota_ortu');
        $data['tmb_telp_ortu']    = $this->input->post('tmb_telp_ortu');
        $data['tmb_ibu']    = $this->input->post('tmb_ibu');
        $data['tmb_pnd_ibu']    = $this->input->post('tmb_pnd_ibu');
        $data['tmb_pek_ibu']    = $this->input->post('tmb_pek_ibu');
        $data['tmb_agm_ibu']    = $this->input->post('tmb_agm_ibu');
        $data['tmb_peng_ibu']    = preg_replace("/[^0-9]/", "", $pengibu);
        $data['tmb_wali']    = $this->input->post('tmb_wali');
        $data['tmb_alamat_wali']    = $this->input->post('tmb_alamat_wali');
        $data['tmb_kec_wali']    = $this->input->post('tmb_kec_wali');
        $data['tmb_kota_wali']    = $this->input->post('tmb_kota_wali');
        $data['tmb_telp_wali']    = $this->input->post('tmb_telp_wali');
        $data['tmb_skl_asl']    = $this->input->post('tmb_skl_asl');
        $data['tmb_alm_skl']    = $this->input->post('tmb_alm_skl');
        $data['tmb_kelas']    = $this->input->post('tmb_kelas');
        $data['tmb_foto']    = $this->input->post('tmb_foto');
        $data['tmb_akte']    = $this->input->post('tmb_akte');
        $data['tmb_kk']    = $this->input->post('tmb_kk');
        $data['tmb_rapor']    = $this->input->post('tmb_rapor');
        $data['tmb_tanggal']    = date("Y-m-d");
//        $data['tmb_nilai']    = $this->input->post('tmb_nilai');
//        $data['tmb_diterimadi']    = $this->input->post('tmb_diterimadi');
//        $data['tmb_verify']    = $this->input->post('tmb_verify');
          
        if($data['tmb_kelas']==-1){
            $data['tmb_kelompok']=1;
        }else if($data['tmb_kelas']==0){
            $data['tmb_kelompok']=2;
        }else if(($data['tmb_kelas']>=1)&&($data['tmb_kelas']<=5)){
            $data['tmb_kelompok']=3;
        }else if($data['tmb_kelas']==6){
            $data['tmb_kelompok']=4;
        }else if(($data['tmb_kelas']>=7)&&($data['tmb_kelas']<=8)){
            $data['tmb_kelompok']=5;
        }else if($data['tmb_kelas']==9){
            $data['tmb_kelompok']=6;
        }else {
            $data['tmb_kelompok']=7;
        }
        
        return $data;
    }
    
     public function upload_config(){
        $config['upload_path'] = './uploads/files';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size']	= '10000';

        $this->load->library('upload', $config);
	}
        
     public function daftar(){
        $data['content'] = 'f_daftar';
        $data['mode']= 'add';
        $data['title']= 'Form Pendaftaran Calon Siswa ';    
        
        $this->load->view('layout',$data);
    }
     
     public function cek(){
         if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
             $secret='6Le7oyEUAAAAAF1rsO7js8qdtqgfmUV5qRyA8Grv';
             //
             $ip= $_SERVER['REMOTE_ADDR'];
             $captcha=$_POST['g-recaptcha-response'];
             $rsp=  file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
             $arr= json_decode($rsp,TRUE);
             if($arr['success']){
                 $this->proses_daftar();
             }else {
                 redirect(site_url('Front/daftar'));
             }
             
         }else {
            $this->session->set_flashdata('message', array('msg' => 'Masukkan <strong>Captcha</strong> dengan benar','class' => 'danger')); 
            redirect(site_url('Front/daftar'));
         }
     }
    
    public function proses_daftar(){      
       $data = $this->postVariabel();
        $tahun = date('Y');
        $thn = substr($tahun,2,2);
	$query_np = $this->m_front->selectLastNP($tahun);
	if($query_np){  		
                        $idmax = $query_np->NP; //nopendaftaran termax/terakhir
	  		$no_pendft = (int) substr($idmax,4,4); //dipecah
	  		$no_pendft++;
	  		$new_id = sprintf("%04s", $no_pendft);
        }else {
            $new_id=sprintf("%04s", 1);
            echo "gagal";
        }
        
	$data['tmb_no_daftar'] = "L".$thn.".".$new_id;

        $this->upload_config();
        if($this->upload->do_upload('tmb_foto')){
            $img_data=$this->upload->data();
            $new_imgname='Foto_'.$data['tmb_no_daftar'].''.$img_data['file_ext'];
            $data['tmb_foto']=$new_imgname;
            $new_imgpath=$img_data['file_path'].$new_imgname;
            rename($img_data['full_path'], $new_imgpath);
        }
        if($this->upload->do_upload('tmb_akte')){
            $img_data=$this->upload->data();
            $new_imgname='Akte_'.$data['tmb_no_daftar'].''.$img_data['file_ext'];
            $data['tmb_akte']=$new_imgname;
            $new_imgpath=$img_data['file_path'].$new_imgname;
            rename($img_data['full_path'], $new_imgpath);

        }
        
        if($this->upload->do_upload('tmb_kk')){
            $img_data=$this->upload->data();
            $new_imgname='KK_'.$data['tmb_no_daftar'].''.$img_data['file_ext'];
            $data['tmb_kk']=$new_imgname;
            $new_imgpath=$img_data['file_path'].$new_imgname;
            rename($img_data['full_path'], $new_imgpath);

        }
        if($this->upload->do_upload('tmb_rapor')){
            $img_data=$this->upload->data();
            $new_imgname='Rapor/Ijasah_'.$data['tmb_no_daftar'].''.$img_data['file_ext'];
            $data['tmb_rapor']=$new_imgname;
            $new_imgpath=$img_data['file_path'].$new_imgname;
            rename($img_data['full_path'], $new_imgpath);

        }
        
        $this->m_front->insert($data);
        $this->session->set_flashdata('message', array('msg' => 'Data berhasil disimpan silahkan lakukan registrasi dengan mencetak Lembar Registrasi pada halaman Cek status Calon Siswa','class' => 'success'));
        redirect(site_url('Front'));
    }
    
    
}
