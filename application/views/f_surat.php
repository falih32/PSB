<?php
	if($mode == 'edit'){
		$id = $dataUnit->srt_id;
		$srt_nomor_agenda= $dataUnit->srt_nomor_agenda; //no agenda
                $srt_jenis = $dataUnit ->srt_jenis;
                $srt_sifat = $dataUnit ->srt_sifat;
                $srt_nomor_surat = $dataUnit ->srt_nomor_surat;
                $srt_perihal = $dataUnit ->srt_perihal;
                $srt_asal = $dataUnit ->srt_asal;
                $srt_tgl_terima = $dataUnit ->srt_tgl_terima;
                $srt_tgl_surat = $dataUnit ->srt_tgl_surat;
                $srt_file = $dataUnit ->srt_file;
                $srt_catatan = $dataUnit ->srt_catatan;
                $srt_deleted = $dataUnit ->srt_deleted;     
			}
	else{		
		$srt_nomor_agenda = "";
                $srt_jenis = "";
                $srt_sifat = "";
                $srt_nomor_surat = "";
                $srt_perihal = "";
                $srt_asal = "";
                $srt_tgl_terima = "";
                $srt_tgl_surat = "";
                $srt_file = "";
                $srt_catatan = "";
                $srt_deleted="";
                $sutem="";
			}
?>
<div class="container-fluid">
    <div class="row-fluid">
    	<div class="panel panel-info">
            <div class="panel-heading">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
            <form method="post" action="<?php if($mode == 'edit'){echo base_url()."Surat/proses_edit_surat";}else{echo base_url()."Surat/proses_tambah_surat";}?>" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
            <?php if($mode == 'edit'){ ?> <input type="hidden" name="id" value="<?php echo $id; ?>"><?php }?>
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="srt_sifat" class="col-sm-2 control-label text-left">Sifat Surat</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="srt_sifat" name="srt_sifat"  required>
                            	<option value="">Select ...</option>
                                <option value="Sangat Segera" <?php if($srt_sifat=='Sangat Segera'){echo "selected";}?>>Sangat Segera</option>
                                <option value="Segera" <?php if($srt_sifat=='Segera'){echo "selected";}?>>Segera</option>
                                <option value="Biasa" <?php if($srt_sifat=='Biasa'){echo "selected";}?>>Biasa</option>
                            </select>
                        </div>
                    </div>

                  <div class="form-group">
                        <label for="srt_jenis" class="col-sm-2 control-label text-left">Jenis Surat</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="srt_jenis" name="srt_jenis" onchange="updateText('srt_jenis')" required>
                            	<option value="">Select ...</option>
                                <option value="<?php $x=$this->m_surat->getLastNoAgenda(0,$this->session->tahun)->row(); if($x){$a=$x->srt_nomor_agenda;}else{$a=0;} if($srt_jenis!='0'){$a++;}else {$a=$srt_nomor_agenda;} $b=0; echo $a." ".$b?>"<?php if($srt_jenis=='0'){echo "selected";}?>>INTERNAL  </option>
                                <option value="<?php $x=$this->m_surat->getLastNoAgenda(1,$this->session->tahun)->row(); if($x){$a=$x->srt_nomor_agenda;}else{$a=0;} if($srt_jenis!='1'){$a++;}else {$a=$srt_nomor_agenda;} $b=1; echo $a." ".$b?>"<?php if($srt_jenis=='1'){echo "selected";}?>>EKSTERNAL</option>
                                <option value="<?php $x=$this->m_surat->getLastNoAgenda(2,$this->session->tahun)->row(); if($x){$a=$x->srt_nomor_agenda;}else{$a=0;} if($srt_jenis!='2'){$a++;}else {$a=$srt_nomor_agenda;} $b=2; echo $a." ".$b?>"<?php if($srt_jenis=='2'){echo "selected";}?>>SESMEN</option>
                                <option value="<?php $x=$this->m_surat->getLastNoAgenda(3,$this->session->tahun)->row(); if($x){$a=$x->srt_nomor_agenda;}else{$a=0;} if($srt_jenis!='3'){$a++;}else {$a=$srt_nomor_agenda;} $b=3; echo $a." ".$b?>"<?php if($srt_jenis=='3'){echo "selected";}?>>UNDANGAN</option>
                                <option value="<?php $x=$this->m_surat->getLastNoAgenda(4,$this->session->tahun)->row(); if($x){$a=$x->srt_nomor_agenda;}else{$a=0;} if($srt_jenis!='4'){$a++;}else {$a=$srt_nomor_agenda;} $b=4; echo $a." ".$b?>"<?php if($srt_jenis=='4'){echo "selected";}?>>MENTERI</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="srt_nomor_agenda" class="col-sm-2 control-label text-left">Nomor Agenda</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="srt_nomor_agenda" name="srt_nomor_agenda" placeholder="Nomor Agenda" value="<?php echo $srt_nomor_agenda; ?>" required pattern='[0-9]*'>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
   
                    <div class="form-group">
                        <label for="srt_nomor_surat" class="col-sm-2 control-label text-left">Nomor Surat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="srt_nomor_surat" name="srt_nomor_surat" placeholder="Nomor Surat" value="<?php echo $srt_nomor_surat; ?>"  required data-error="Input tidak boleh kosong">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                     <?php if($mode == 'edit'){?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-2 control-label text-left">Upload File Surat</label>
                        <div class="col-sm-10" id="file-select-div">
                            <img src='<?php echo $base.'uploads/surat_masuk/'.$srt_file; ?>' class='img-preview-sm img-thumbnail'>
                            <?php if ($srt_file!=NULL) { echo $srt_file;} else { echo 'Tidak ada file yang diunggah';} ?><br><button type='button' class='btn btn-danger' id='remove-preview'><?php if ($srt_file!=NULL) { echo 'Hapus';} else { echo "Upload Baru";} ?></button>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="form-group">
                        <label for="file_upload" class="col-sm-2 control-label text-left">Upload File Surat</label>
                        <div class="col-sm-10" id="file-select-div">
                            <input type="file" class="" id="file_upload" name="srt_file" >
                            <p class="help-block"><i>Format: JPG, JPEG, PNG, GIF, PDF | Max file size: 10 MB.</i></p>
                        </div>
                    </div>
                    <?php } ?>
                    
                 </div>      
           <div class="col-md-6">         
                    <div class="form-group">
                        <label for="srt_asal" class="col-sm-2 control-label text-left">Asal Surat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="srt_asal" name="srt_asal" placeholder="Asal Surat" value="<?php echo $srt_asal; ?>"  required data-error="Input tidak boleh kosong">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="srt_perihal" class="col-sm-2 control-label text-left">Perihal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="srt_perihal" name="srt_perihal" placeholder="Perihal" value="<?php echo $srt_perihal; ?>"  required data-error="Input tidak boleh kosong">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="srt_tgl_terima" class="col-sm-4 control-label text-center">Tanggal Terima Surat</label>
                        <div class="col-sm-8">
                            <input  value ="<?php echo $srt_tgl_terima; ?>" readonly type="text" class="form-control tgl1" id="srt_tgl_terima" name="srt_tgl_terima" placeholder="Tgl Terima Surat" data-error="Input tidak boleh kosong" pattern="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$" required>
                            <div class="help-block with-errors"></div>
                        </div>
                     </div>
                    
                     <div class="form-group">
                        <label for="srt_tgl_surat" class="col-sm-4 control-label text-center">Tanggal Surat</label>
                        <div class="col-sm-8">
                            <input  value ="<?php echo $srt_tgl_surat; ?>" readonly type="text" class="form-control tgl1" id="srt_tgl_surat" name="srt_tgl_surat" placeholder="Tgl Surat" data-error="Input tidak boleh kosong" pattern="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$" required>
                            <div class="help-block with-errors"></div>
                        </div>
                     </div>
                    <div class="form-group">
                        <label for="srt_catatan" class="col-sm-2 control-label text-left">Catatan</label>
                        <div class="col-sm-10">
	                        <textarea class="form-control" id="srt_catatan" name="srt_catatan" placeholder="catatan" ><?php echo $srt_catatan; ?></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
           </div>
          
            
          <div class="col-md-9 text-left"><hr>       
             <div class="form-group">
                        <div class="col-sm-12" checkbox text-left">
                            <?php $st1=0;$st2=0;$st3=0;$st4=0; foreach($tembusan as $row){?><div class="col-sm-4">
                            <label class="checkbox">
                                <input type="checkbox" id="tembusan_<?php echo $row->tmb_id; ?>" name="tembusan[<?php echo $row->tmb_id; ?>]" value="<?php echo $row->tmb_id?>" 
                                <?php $st1=0;$st2=0;$st3=0;$st4=0; $check=0; if ($sutem != ''){ foreach($sutem as $s){?>                            
                                <?php if($row->tmb_id == $s->st_tembusan){$st1=$s->st_ins1;$st2=$s->st_ins2;$st3=$s->st_ins3;$st4=$s->st_ins4;echo "checked"; $check=1;}?>
                                <?php }}?>>
                                <?php echo $row->tmb_nama; ?>
                                 
                            </label>
                             </div>  
                             <div class="col-sm-2 text-center">
                                 <select class="form-control" id="ins1_<?php echo $row->tmb_id; ?>" name="ins1[<?php echo $row->tmb_id; ?>]"  required <?php if ($check==0) { echo"disabled"; }?>>
                                    
                                    <option value="0" <?php if($st1=='0'){echo "selected";}?>>Select ...</option>
                                    <option value="1"<?php if($st1=='1'){echo "selected";}?> >1</option>
                                    <option value="2" <?php if($st1=='2'){echo "selected";}?>>2</option>
                                    <option value="3" <?php if($st1=='3'){echo "selected";}?>>3</option>
                                    <option value="4" <?php if($st1=='4'){echo "selected";}?>>4</option>
                                    <option value="5" <?php if($st1=='5'){echo "selected";}?>>5</option>
                                    <option value="6" <?php if($st1=='6'){echo "selected";}?>>6</option>
                                    <option value="7" <?php if($st1=='7'){echo "selected";}?>>7</option>
                                    <option value="8" <?php if($st1=='8'){echo "selected";}?>>8</option>
                                    <option value="9" <?php if($st1=='9'){echo "selected";}?>>9</option>
                                    <option value="10" <?php if($st1=='10'){echo "selected";}?>>10</option>
                               
                                </select>
                                </div>
                                <div class="col-sm-2 text-center">
                                <select class="form-control" id="ins2_<?php echo $row->tmb_id; ?>" name="ins2[<?php echo $row->tmb_id; ?>]"  required <?php if ($check==0) { echo"disabled"; }?>>
                                
                                    <option value="0" <?php if($st2=='0'){echo "selected";}?>>Select ...</option>
                                    <option value="1"<?php if($st2=='1'){echo "selected";}?> >1</option>
                                    <option value="2" <?php if($st2=='2'){echo "selected";}?>>2</option>
                                    <option value="3" <?php if($st2=='3'){echo "selected";}?>>3</option>
                                    <option value="4" <?php if($st2=='4'){echo "selected";}?>>4</option>
                                    <option value="5" <?php if($st2=='5'){echo "selected";}?>>5</option>
                                    <option value="6" <?php if($st2=='6'){echo "selected";}?>>6</option>
                                    <option value="7" <?php if($st2=='7'){echo "selected";}?>>7</option>
                                    <option value="8" <?php if($st2=='8'){echo "selected";}?>>8</option>
                                    <option value="9" <?php if($st2=='9'){echo "selected";}?>>9</option>
                                    <option value="10" <?php if($st2=='10'){echo "selected";}?>>10</option>
                                </select>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <select class="form-control" id="ins3_<?php echo $row->tmb_id; ?>" name="ins3[<?php echo $row->tmb_id; ?>]"  required <?php if ($check==0) { echo"disabled"; }?>>
                                <option value="0" <?php if($st3=='0'){echo "selected";}?>>Select ...</option>
                                    <option value="1"<?php if($st3=='1'){echo "selected";}?> >1</option>
                                    <option value="2" <?php if($st3=='2'){echo "selected";}?>>2</option>
                                    <option value="3" <?php if($st3=='3'){echo "selected";}?>>3</option>
                                    <option value="4" <?php if($st3=='4'){echo "selected";}?>>4</option>
                                    <option value="5" <?php if($st3=='5'){echo "selected";}?>>5</option>
                                    <option value="6" <?php if($st3=='6'){echo "selected";}?>>6</option>
                                    <option value="7" <?php if($st3=='7'){echo "selected";}?>>7</option>
                                    <option value="8" <?php if($st3=='8'){echo "selected";}?>>8</option>
                                    <option value="9" <?php if($st3=='9'){echo "selected";}?>>9</option>
                                    <option value="10" <?php if($st3=='10'){echo "selected";}?>>10</option>
                                </select>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <select class="form-control" id="ins4_<?php echo $row->tmb_id; ?>" name="ins4[<?php echo $row->tmb_id; ?>]"  required <?php if ($check==0) { echo"disabled"; }?>>
                                    <option value="0" <?php if($st4=='0'){echo "selected";}?>>Select ...</option>
                                    <option value="1"<?php if($st4=='1'){echo "selected";}?> >1</option>
                                    <option value="2" <?php if($st4=='2'){echo "selected";}?>>2</option>
                                    <option value="3" <?php if($st4=='3'){echo "selected";}?>>3</option>
                                    <option value="4" <?php if($st4=='4'){echo "selected";}?>>4</option>
                                    <option value="5" <?php if($st4=='5'){echo "selected";}?>>5</option>
                                    <option value="6" <?php if($st4=='6'){echo "selected";}?>>6</option>
                                    <option value="7" <?php if($st4=='7'){echo "selected";}?>>7</option>
                                    <option value="8" <?php if($st4=='8'){echo "selected";}?>>8</option>
                                    <option value="9" <?php if($st4=='9'){echo "selected";}?>>9</option>
                                    <option value="10" <?php if($st4=='10'){echo "selected";}?>>10</option>
                                </select>
                                </div>
                             
                            <?php } ?>
                        </div>
                    </div>
          </div>
             <div class="col-md-3 text-left"><hr>
           <table class="table table-striped table-bordered table-hover">
                    <tbody>
                    	<tr><td>1.  Harap mewakili</td></tr>
                        <tr><td>2.  Hadir bersama saya</td></tr>
                        <tr><td>3.  Harap saran/masukan</td></tr>
                        <tr><td>4.  Siapkan bahan</td></tr>
                        <tr><td>5.  Untuk dibicarakan dengan saya</td></tr>
                        <tr><td>6.  Untuk diselesaikan</td></tr>
                        <tr><td>7.  Untuk dipelajari</td></tr>
                        <tr><td>8.  Untuk diketahui</td></tr>
                        <tr><td>9.  Untuk difile</td></tr>
                        <tr><td>10. Untuk dikoordinasikan/diskusikan dengan.........</td></tr>
                    </tbody>
                </table>
           </div>    
                <div class="col-md-12 text-center"><hr>
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-lg btn-danger" href="javascript:history.back()"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Kembali</a>
                            <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>        
            </div>
        </div>
    </div>
</div>

<script>
    $('[data-toggle="tooltip"]').tooltip({});
 var filename = "";
    function randomString(length, chars) {
        var result = '';
        for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
        return result;
    }
    $('#file_upload').bind('change', function() {
        if ( window.FileReader && window.File && window.FileList && window.Blob )
        {
            if(this.files[0].type == "image/jpeg" || this.files[0].type == "image/png" || this.files[0].type == "application/pdf" || this.files[0].type == "image/gif"){
                if(this.files[0].size > 10485760){
                    alert("Ukuran file yang anda pilih terlalu besar.\n File dengan ukuran terlalu besar tidak akan disimpan pada sistem.");
                }
            }
            else{
                alert(this.files[0].type+"Tipe file yang anda masukkan tidak sesuai.\n File dengan tipe yang tidak sesuai spesifikasi tidak akan disimpan pada sistem.");
            }
        }
    });

function updateText(type) {
 var a=document.getElementById(type).value;
 a=a.split(" ");
 var id = "srt_nomor_agenda"
 document.getElementById(id).value =a[0];  
}

function fileSelectSetup(){
        $('input[type=file]').bootstrapFileInput();
        
    }
    fileSelectSetup();
 
 function resultSetup(){
        $('#remove-preview').click(function(){
            
            document.getElementById('file-select-div').innerHTML = '<input type="file" class="" id="file_upload" name="srt_file" > <p class="help-block"><i>Format: JPG, JPEG, PNG, GIF, PDF <br>Max file size: 10 MB.</i></p>';
            fileSelectSetup();
        });
    }
    resultSetup();

<?php foreach($tembusan as $row){?>
 $(document).ready(function() {
 $("#tembusan_<?php echo $row->tmb_id; ?>").click(function() {
                       
   if ($(this).is(":checked")) {

      $("#ins1_<?php echo $row->tmb_id; ?>").prop("disabled", false);
     
      $("#ins2_<?php echo $row->tmb_id; ?>").prop("disabled", false);
    
      $("#ins3_<?php echo $row->tmb_id; ?>").prop("disabled", false);
     
      $("#ins4_<?php echo $row->tmb_id; ?>").prop("disabled", false);
      
   } else {
      $("#ins1_<?php echo $row->tmb_id; ?>").prop("disabled", true);
      $("#ins1_<?php echo $row->tmb_id; ?>").val(0);
      $("#ins2_<?php echo $row->tmb_id; ?>").prop("disabled", true);
      $("#ins2_<?php echo $row->tmb_id; ?>").val(0);
      $("#ins3_<?php echo $row->tmb_id; ?>").prop("disabled", true);
      $("#ins3_<?php echo $row->tmb_id; ?>").val(0);
      $("#ins4_<?php echo $row->tmb_id; ?>").prop("disabled", true);
      $("#ins4_<?php echo $row->tmb_id; ?>").val(0);
   }
 });
});
<?php } ?>
</script>