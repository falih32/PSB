<?php

class M_siswa extends CI_Model{
    function __construct(){
        parent::__construct();
        	$this->load->library('Datatables');
    }
    
   function getFirstYearInput(){
        return $this->db->query("select ifnull((SELECT year(tmb_tanggal) as tahun "
                . "FROM t_calon_siswa WHERE tmb_tanggal IS NOT NULL ORDER BY tahun LIMIT 1),"
                . "(select year(NOW()) from dual)) as thn from dual")->row()->thn;
    }
   
    function ajaxProcessSiswa($status){
    $this->db->query("SET lc_time_names = 'id_ID'");    
		$this->datatables
		->select('tmb_id, tmb_no_daftar, tmb_nama, tmb_alamat, tmb_kec, tmb_kota, tmb_skl_asl, tmb_alm_skl')
                ->from('t_calon_siswa')
                ->where('tmb_status', 0)
                ->where('year(tmb_tanggal)', $this->session->tahun);
         switch ($status) {
            case "1":
                $this->datatables->where('tmb_kelompok = 1');
                break;
            case "2":
               $this->datatables->where('tmb_kelompok = 2');
                break;
            case "3":
                $this->datatables->where('tmb_kelompok = 3');
                break;
            case "4":
                $this->datatables->where('tmb_kelompok = 4');
                break;
            case "5":
                $this->datatables->where('tmb_kelompok = 5');
                break;
            case "6":
                $this->datatables->where('tmb_kelompok = 6');
                break;
            case "7":
                $this->datatables->where('tmb_kelompok = 7');
                break;
     
            default:             
                break;
        }
        
              $this->datatables->edit_column('aksi',"".
			"<form>".
			"<div class='form-group'>".
			"<a class='btn btn-info btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Edit' href='edit_siswa/$1'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Ubah</a>".
                        "<a class='btn btn-danger btn-sm delete btn-aksi' data-toggle='tooltip' data-placement='top' title='Hapus' data-confirm='Anda yakin akan menghapus ini?' href='delete_siswa/$1'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Hapus</a>".
			"</div>".
			"</form>".
		"",'tmb_id');
		return $this->datatables->generate();
	}
        
         function ajaxProcessTesMasuk($status){
    $this->db->query("SET lc_time_names = 'id_ID'");    
		$this->datatables
		->select('tmb_id, tmb_no_daftar, tmb_nama, tmb_alamat, tmb_kec, tmb_kota, tmb_skl_asl, tmb_kelas, tmb_diterimadi')
                ->from('t_calon_siswa')
                ->where('tmb_status', 1)
                ->where('year(tmb_tanggal)', $this->session->tahun);
         switch ($status) {
            case "1":
                $this->datatables->where('tmb_kelompok = 1');
                break;
            case "2":
               $this->datatables->where('tmb_kelompok = 2');
                break;
            case "3":
                $this->datatables->where('tmb_kelompok = 3');
                break;
            case "4":
                $this->datatables->where('tmb_kelompok = 4');
                break;
            case "5":
                $this->datatables->where('tmb_kelompok = 5');
                break;
            case "6":
                $this->datatables->where('tmb_kelompok = 6');
                break;
            case "7":
                $this->datatables->where('tmb_kelompok = 7');
                break;
     
            default:             
                break;
        }
        
              $this->datatables->edit_column('aksi',"".
			"<form>".
			"<div class='form-group'>".
			"<a class='btn btn-info btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Input Nilai Akhir' href='input_nilai/$1'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Input Nilai</a>".
                        "<a class='btn btn-warning btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Cetak Kwitansi Pendaftaran' href='".base_url()."verPendaftaran/cetakKP/$1'><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Kwitansi Pendaftaran</a>".
                        "<a class='btn btn-success btn-sm delete btn-aksi' data-toggle='tooltip' data-placement='top' title='Verifikasi Tes Masuk' data-confirm='Anda yakin akan memverifikasi calon siswa ini?' href='VerifikasiTM/$1'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Verifikasi</a>".
			"</div>".
			"</form>".
		"",'tmb_id');
		return $this->datatables->generate();
	}
        
        function ajaxProcessDaftarUlang($status){
    $this->db->query("SET lc_time_names = 'id_ID'");    
		$this->datatables
		->select('tmb_id, tmb_no_daftar, tmb_nama, tmb_alamat, tmb_kec, tmb_kota, tmb_diterimadi, tmb_keterangan')
                ->from('t_calon_siswa')
                ->where('tmb_status', 2)
                ->where('year(tmb_tanggal)', $this->session->tahun);
         switch ($status) {
            case "1":
                $this->datatables->where('tmb_kelompok = 1');
                break;
            case "2":
               $this->datatables->where('tmb_kelompok = 2');
                break;
            case "3":
                $this->datatables->where('tmb_kelompok = 3');
                break;
            case "4":
                $this->datatables->where('tmb_kelompok = 4');
                break;
            case "5":
                $this->datatables->where('tmb_kelompok = 5');
                break;
            case "6":
                $this->datatables->where('tmb_kelompok = 6');
                break;
            case "7":
                $this->datatables->where('tmb_kelompok = 7');
                break;
     
            default:             
                break;
        }
        
              $this->datatables->edit_column('aksi',"".
			"<form>".
			"<div class='form-group'>".
			"<a class='btn btn-warning btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Cetak Kwitansi Pendaftaran' href='".base_url()."verPendaftaran/cetakKP/$1'><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Kwitansi Pendaftaran</a>".
                        "<a class='btn btn-success btn-sm delete btn-aksi' data-toggle='tooltip' data-placement='top' title='Verifikasi Daftar Ulang' data-confirm='Anda yakin akan memverifikasi calon siswa ini?' href='VerifikasiSB/$1'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Verifikasi</a>".
			"</div>".
			"</form>".
		"",'tmb_id');
		return $this->datatables->generate();
	}
        
        function ajaxProcessSiswaBaru($status){
    $this->db->query("SET lc_time_names = 'id_ID'");    
		$this->datatables
		->select('tmb_id, tmb_no_daftar, tmb_nama, tmb_alamat, tmb_kec, tmb_kota, tmb_diterimadi')
                ->from('t_calon_siswa')
                ->where('tmb_status', 3)
                ->where('year(tmb_tanggal)', $this->session->tahun);
         switch ($status) {
            case "1":
                $this->datatables->where('tmb_diterimadi = "1a"');
                break;
            case "2":
               $this->datatables->where('tmb_diterimadi = "1b"');
                break;
            case "3":
                $this->datatables->where('tmb_diterimadi = 2');
                break;
            case "4":
                $this->datatables->where('tmb_diterimadi = 3');
                break;
            case "5":
                $this->datatables->where('tmb_diterimadi = 4');
                break;
            case "6":
                $this->datatables->where('tmb_diterimadi = 5');
                break;
            case "7":
                $this->datatables->where('tmb_diterimadi = 6');
                break;
            case "8":
                $this->datatables->where('tmb_diterimadi = 7');
                break;
            case "9":
                $this->datatables->where('tmb_diterimadi = 8');
                break;
            case "10":
                $this->datatables->where('tmb_diterimadi = 9');
                break;
            case "11":
                $this->datatables->where('tmb_diterimadi = 10');
                break;
            case "12":
                $this->datatables->where('tmb_diterimadi = 11');
                break;
            case "13":
                $this->datatables->where('tmb_diterimadi = 12');
                break;
            
            default:             
                break;
        }
        
              $this->datatables->edit_column('aksi',"".
			"<form>".
			"<div class='form-group'>".
			"<a class='btn btn-warning btn-sm btn-aksi' data-toggle='tooltip' data-placement='top' title='Cetak Kwitansi Daftar Ulang' href='".base_url()."SiswaBaru/cetakKDU/$1'><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Kwitansi Daftar Ulang</a>".
                        "</div>".
			"</form>".
		"",'tmb_id');
		return $this->datatables->generate();
	}
    
    function selectById($id){
        $this->db->select('*');
        $this->db->from('t_calon_siswa');
        $this->db->where('tmb_id', $id);
        return $this->db->get();
    }
    function selectSiswaByTahun(){
        $this->db->select('*');
        $this->db->from('t_calon_siswa');
        $this->db->where('year(tmb_tanggal)', $this->session->tahun);
        $this->db->where('tmb_status', 3);
        $this->db->order_by("tmb_diterimadi asc,tmb_no_daftar asc");
        return $this->db->get();
    }
    
     function update($id, $data){
        $this->db->where('tmb_id', $id);
        $this->db->update('t_calon_siswa', $data);
    }
//    function updateNilai($id, $data){
//        $this->db->where('tmb_id', $id);
//        $this->db->update('t_calon_siswa', $data);
//    }
    function delete($id){
        $this->db->where('tmb_id', $id);
        $this->db->delete('t_calon_siswa');
    }
    function verifikasi($id,$tmb_keterangan,$sts,$diterimadi){
        $data['tmb_status'] = $sts;
        $data['tmb_keterangan']=$tmb_keterangan;
        $data['tmb_diterimadi']=$diterimadi;
        $this->db->where('tmb_id', $id);
        $this->db->update('t_calon_siswa', $data);
    }
    function verifikasiTM($id){
        $data['tmb_status'] = 2;
        $this->db->where('tmb_id', $id);
        $this->db->update('t_calon_siswa', $data);
    }
    function verifikasiSB($id){
        $data['tmb_status'] = 3;
        $this->db->where('tmb_id', $id);
        $this->db->update('t_calon_siswa', $data);
    }
    
}
