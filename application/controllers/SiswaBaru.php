<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaBaru extends CI_Controller {
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
            $this->load->library('Excel');
        }
    }
	
    public function index(){
         redirect('SiswaBaru/all');       
    }
	
    public function ajaxProcess(){
        echo $this->m_siswa->ajaxProcess();
    }
    public function ajaxProcessSiswaBaru($status){
        $result = $this->m_siswa->ajaxProcessSiswaBaru($status);
        echo $result;
    }
    public function kelas1a(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas I A';
        $data['state']= '1';
        $this->load->view('layout',$data);
    }
    public function kelas1b(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas I B';
        $data['state']= '2';
        $this->load->view('layout',$data);
    }
    public function kelas2(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas II';
        $data['state']= '3';
        $this->load->view('layout',$data);
    }
    public function kelas3(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas III';
        $data['state']= '4';
        $this->load->view('layout',$data);
    }
    public function kelas4(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas IV';
        $data['state']= '5';
        $this->load->view('layout',$data);
    }
    public function kelas5(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas V';
        $data['state']= '6';
        $this->load->view('layout',$data);
    }
    public function kelas6(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas VI';
        $data['state']= '7';
        $this->load->view('layout',$data);
    }
    public function kelas7(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas VII';
        $data['state']= '8';
        $this->load->view('layout',$data);
    }
    public function kelas8(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas VIII';
        $data['state']= '9';
        $this->load->view('layout',$data);
    }
    public function kelas9(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas IX';
        $data['state']= '10';
        $this->load->view('layout',$data);
    }
    public function kelas10(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas X';
        $data['state']= '11';
        $this->load->view('layout',$data);
    }
    public function kelas11(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas XI';
        $data['state']= '12';
        $this->load->view('layout',$data);
    }
    public function kelas12(){
        $data['content'] = 'l_SB';
        $data['title']= 'SB Kelas XII';
        $data['state']= '13';
        $this->load->view('layout',$data);
    }
    
    public function all(){
        $data['content'] = 'l_SB';
        $data['title']= 'Tampilkan Semua';
        $data['state']= '-1';
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
    
    function Verifikasi($id){
        if(($this->input->post('tmb_kelompok')==1)||($this->input->post('tmb_kelompok')==1)){
            $sts=2;
        }else {
            $sts=1;
        }
        $tmb_keterangan=$this->input->post('tmb_keterangan');
        $this->m_siswa->verifikasi($id,$tmb_keterangan,$sts);
        
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
   
    
     function cetakKDU($id){
        $datacetak['datasiswa'] = $this->m_siswa->selectById($id)->row();
        $tahun=$this->session->userdata('tahun');
        $datacetak['infaq'] = $this->m_infaq->selectBytahun($tahun)->row();
        $this->load->view('fpdf/c_CKDU',$datacetak);
    }
    function cetakListSB(){
        $datasiswa = $this->m_siswa->selectSiswaBytahun()->result();
        $tahun=$this->session->userdata('tahun');
    //activate worksheet number 1
    $this->excel->setActiveSheetIndex(0);
    //name the worksheet
    $this->excel->getActiveSheet()->setTitle('Siswa Baru '.$tahun.'-'.($tahun+1));
    //set cell A1 content with some text
    $this->excel->getActiveSheet()->setCellValue('A1', 'DAFTAR SISWA BARU  MADRASAH QUDSIYYAH');
    $this->excel->getActiveSheet()->setCellValue('A2', 'Tahun pelajaran '.$tahun.'-'.($tahun+1));
    //change the font size
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14);
    $this->excel->getActiveSheet()->getStyle('A2')->getFont()->setSize(12);
    //make the font become bold
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
    //merge cell A1 until D1
    $this->excel->getActiveSheet()->mergeCells('A1:F1');
    $this->excel->getActiveSheet()->mergeCells('A2:D2');
    //set aligment to center for that merged cell (A1 to D1)
    $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    
    //header
    $this->excel->getActiveSheet()->setCellValue('A4', 'No.');
    $this->excel->getActiveSheet()->mergeCells('A4:A5');
    $this->excel->getActiveSheet()->setCellValue('B4', 'No. Daftar');
    $this->excel->getActiveSheet()->mergeCells('B4:B5');
    $this->excel->getActiveSheet()->setCellValue('C4', 'Kelas');
    $this->excel->getActiveSheet()->mergeCells('C4:C5');
    $this->excel->getActiveSheet()->setCellValue('D4', 'Nama');
    $this->excel->getActiveSheet()->mergeCells('D4:D5');
    $this->excel->getActiveSheet()->setCellValue('E4', 'Alamat');
    $this->excel->getActiveSheet()->mergeCells('E4:E5');
    $this->excel->getActiveSheet()->setCellValue('F4', 'Tempat Tanggal Lahir');
    $this->excel->getActiveSheet()->mergeCells('F4:F5');
    $this->excel->getActiveSheet()->setCellValue('G4', 'Orang Tua/Pekerjaan');
    $this->excel->getActiveSheet()->mergeCells('G4:H4');
    $this->excel->getActiveSheet()->setCellValue('G5', 'Ayah/Pekerjaan');
    $this->excel->getActiveSheet()->setCellValue('H5', 'Ibu/Pekerjaan');
    $this->excel->getActiveSheet()->setCellValue('I4', 'Asal Sekolah');
    $this->excel->getActiveSheet()->mergeCells('I4:I5');
    //lebar
    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(6);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
    $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
    $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
    //isi
    $baris=6;
    $no=1;
   foreach($datasiswa as $data){
        $this->excel->getActiveSheet()->setCellValue('A'.$baris, $no);
        $this->excel->getActiveSheet()->setCellValue('B'.$baris, $data->tmb_no_daftar);
        $this->excel->getActiveSheet()->setCellValue('C'.$baris, $data->tmb_diterimadi);
        $this->excel->getActiveSheet()->setCellValue('D'.$baris, $data->tmb_nama);
        $this->excel->getActiveSheet()->setCellValue('E'.$baris, $data->tmb_alamat.' '.$data->tmb_kec.' '.$data->tmb_kota);
        $this->excel->getActiveSheet()->setCellValue('F'.$baris, $data->tmb_tempatL.' '.$this->excel->tanggal("d M Y",$data->tmb_ttl ));
        $this->excel->getActiveSheet()->setCellValue('G'.$baris, $data->tmb_ayah.'/'.$data->tmb_pek_ayah);
        $this->excel->getActiveSheet()->setCellValue('H'.$baris, $data->tmb_ibu.'/'.$data->tmb_pek_ibu);
        $this->excel->getActiveSheet()->setCellValue('I'.$baris, $data->tmb_skl_asl);
   }
    
    $filename='Siswa Baru '.$tahun.'-'.($tahun+1).'.xls'; //save our workbook as this file name
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache

    //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
    //if you want to save it as .XLSX Excel 2007 format
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
    //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');
    }
    
}
