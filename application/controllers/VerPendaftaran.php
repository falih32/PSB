<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerPendaftaran extends CI_Controller {
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
            $this->load->model('m_infaq');
            $this->load->library('pdf_mc_table1');
        }
    }
	
    public function index(){
         redirect('VerPendaftaran/all');       
    }
	
    public function ajaxProcess(){
        echo $this->m_siswa->ajaxProcess();
    }
    public function ajaxProcessSiswa($status){
        $result = $this->m_siswa->ajaxProcessSiswa($status);
        echo $result;
    }
    public function kelompok1(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'VP Kelompok I';
        $data['kelompok']= '1';
        $this->load->view('layout',$data);
    }
    public function kelompok2(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'VP Kelompok II';
        $data['kelompok']= '2';
        $this->load->view('layout',$data);    }
    public function kelompok3(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'VP Kelompok III';
        $data['kelompok']= '3';
        $this->load->view('layout',$data);
    }
    public function kelompok4(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'VP Kelompok IV';
        $data['kelompok']= '4';
        $this->load->view('layout',$data);
    }
    public function kelompok5(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'VP Kelompok V';
        $data['kelompok']= '5';
        $this->load->view('layout',$data);
    }
    public function kelompok6(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'VP Kelompok VI';
        $data['kelompok']= '6';
        $this->load->view('layout',$data);
    }
    public function kelompok7(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'VP Kelompok VII';
        $data['kelompok']= '7';
        $this->load->view('layout',$data);
    }
    public function all(){
//        $level = $this->session->userdata('id_level');
//        if($level != 1){$this->limitRole(array(1, 2, 3));}
        $data['content'] = 'l_VP';
        $data['title']= 'Tampilkan Semua';
        $data['kelompok']= '-1';
        $this->load->view('layout',$data); 
    }
    public function upload_config(){
        $config['upload_path'] = './uploads/files';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = '10000';
        //$config['file_name']=$tahun;

        $this->load->library('upload', $config);
	}
    function postVariabel(){
        
        $data['tmb_nama']    = $this->input->post('tmb_nama');
        $data['tmb_nisn']    = $this->input->post('tmb_nisn');
        $data['tmb_tempatL']    = $this->input->post('tmb_tempatL');
        $data['tmb_ttl']    = $this->input->post('tmb_ttl');
        $data['tmb_sdrk']    = $this->input->post('tmb_sdrk');
        $data['tmb_sdrt']    = $this->input->post('tmb_sdrt');
        $data['tmb_anakke']    = $this->input->post('tmb_anakke');
        $data['tmb_stsdkel']    = $this->input->post('tmb_stsdkel');
        $data['tmb_alamat']    = $this->input->post('tmb_alamat');
        $data['tmb_kec']    = $this->input->post('tmb_kec');
        $data['tmb_kota']    = $this->input->post('tmb_kota');
        $data['tmb_hobi']    = $this->input->post('tmb_hobi');
        $data['tmb_cita']    = $this->input->post('tmb_cita');
        $data['tmb_transport']    = $this->input->post('tmb_transport');
        $data['tmb_jarak']    = $this->input->post('tmb_jarak');
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
   
    public function daftar(){
        $data['content'] = 'f_Vdaftar';
	$data['title']= 'Pendaftran Calon Siswa Baru';
        $data['mode']= 'add';
        $this->load->view('layout',$data);
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
            $new_imgname='Rapor_'.$data['tmb_no_daftar'].''.$img_data['file_ext'];
            $data['tmb_rapor']=$new_imgname;
            $new_imgpath=$img_data['file_path'].$new_imgname;
            rename($img_data['full_path'], $new_imgpath);

        }
        
        $this->m_front->insert($data);
        
        if($data['tmb_kelompok']==1){
        redirect(site_url('VerPendaftaran/kelompok1'));
       }elseif($data['tmb_kelompok']==2){
        redirect(site_url('VerPendaftaran/kelompok2'));
       }elseif($data['tmb_kelompok']==3){
        redirect(site_url('VerPendaftaran/kelompok3'));
       }elseif($data['tmb_kelompok']==4){
        redirect(site_url('VerPendaftaran/kelompok4'));
       }elseif($data['tmb_kelompok']==5){
        redirect(site_url('VerPendaftaran/kelompok5'));
       }elseif($data['tmb_kelompok']==6){
        redirect(site_url('VerPendaftaran/kelompok6'));
       }elseif($data['tmb_kelompok']==7){
        redirect(site_url('VerPendaftaran/kelompok7'));
       }else{
        redirect(site_url('VerPendaftaran/all'));
       }
    }
    

    public function edit_siswa($id){
        $data['data'] = $this->m_siswa->selectById($id)->row();
        $data['id'] = $id;
        $data['mode'] = 'edit';
        $data['content'] = 'f_Vdaftar';
        $data['title'] = 'Data Calon Siswa';
        //$data['sutem'] = $this->m_siswa->selectsutem($id)->result();
        if($data['data']->tmb_id != ''){
            $this->load->view('layout', $data);
        }else{
            redirect(site_url('Sidoel404'));
        }
    }
    
    public function proses_edit_siswa(){
        $data = $this->postVariabel();
        $data['tmb_no_daftar']=$this->input->post('tmb_no_daftar');
        $id_edit=$this->input->post('tmb_id');
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
            $new_imgname='Rapor_'.$data['tmb_no_daftar'].''.$img_data['file_ext'];
            $data['tmb_rapor']=$new_imgname;
            $new_imgpath=$img_data['file_path'].$new_imgname;
            rename($img_data['full_path'], $new_imgpath);

        }
        
        $this->m_siswa->update($id_edit, $data);  
        
        if($data['tmb_kelompok']==1){
        redirect(site_url('VerPendaftaran/kelompok1'));
       }elseif($data['tmb_kelompok']==2){
        redirect(site_url('VerPendaftaran/kelompok2'));
       }elseif($data['tmb_kelompok']==3){
        redirect(site_url('VerPendaftaran/kelompok3'));
       }elseif($data['tmb_kelompok']==4){
        redirect(site_url('VerPendaftaran/kelompok4'));
       }elseif($data['tmb_kelompok']==5){
        redirect(site_url('VerPendaftaran/kelompok5'));
       }elseif($data['tmb_kelompok']==6){
        redirect(site_url('VerPendaftaran/kelompok6'));
       }elseif($data['tmb_kelompok']==7){
        redirect(site_url('VerPendaftaran/kelompok7'));
       }else{
        redirect(site_url('VerPendaftaran/all'));
       }
    }
     public function delete_siswa($id){
        $this->delete_scan($id);
        $this->m_siswa->delete($id);
        redirect('VerPendaftaran/all');
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
    
    function Verifikasi($id){
        
        $diterimadi="";
        if(($this->input->post('tmb_kelompok')==1)||($this->input->post('tmb_kelompok')==2)){
            $sts=2;
            $umur=date_diff(date_create($this->input->post('tmb_ttl')), date_create('today'))->y;
            if($umur > 6){
                $diterimadi="1b";
            }else {
                $diterimadi="1a";
            }
        }else {
            $sts=1;
        }
        $tmb_keterangan=$this->input->post('tmb_keterangan');
        $this->m_siswa->verifikasi($id,$tmb_keterangan,$sts,$diterimadi);
        
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
    public function delete_scan($id){
        $query_np = $this->m_siswa->selectById($id)->row();
        $foto = $query_np->tmb_foto; 
        $akte = $query_np->tmb_akte;
        $ijasah = $query_np->tmb_kk;
        $rapor = $query_np->tmb_rapor;
        
        //$base = base_url();
        //$base = 'sidoel.kkp.go.id/';
        $url=preg_replace('#^https?://#', '', base_url());
        $target1 = $url.'uploads/files/'.$foto;
      
        $target2 = base_url().'uploads/files/'.$ijasah;
        $target3 = base_url().'uploads/files/'.$rapor;
        $target4 = base_url().'uploads/files/'.$akte;
        if(file_exists($target1)){
            unlink($target1);
            echo "sukses";
        }else {
            echo "gagal";
        }
        if(file_exists($target2)){
            unlink($target2);
        }
        if(file_exists($target3)){
            unlink($target3);
        }
        if(file_exists($target4)){
            unlink($target4);
        }
    }
    
     function cetakKP($id){
        $datacetak['datasiswa'] = $this->m_siswa->selectById($id)->row();
        $tahun=$this->session->userdata('tahun');
        $datacetak['infaq'] = $this->m_infaq->selectBytahun($tahun)->row();
        
        $this->load->view('fpdf/c_CKP',$datacetak);
    }
    
}
