<?php 
    $role = $this->session->userdata('id_role');
    $onpage= strtolower($this->uri->segment(1));
?>

<div class="navbar-default sidebar" role="navigation">
    <?php if($this->session->userdata('id_user') != '') {?>
                <div class="sidebar-nav navbar-collapse row-fluid">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url("dashboard"); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-archive fa-fw"></i> Verifikasi Pendaftaran<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url("VerPendaftaran/kelompok1"); ?>">Kelompok I</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("VerPendaftaran/kelompok2"); ?>">Kelompok II</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("VerPendaftaran/kelompok3"); ?>">Kelompok III</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("VerPendaftaran/kelompok4"); ?>">Kelompok IV</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("VerPendaftaran/kelompok5"); ?>">Kelompok V</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("VerPendaftaran/kelompok6"); ?>">Kelompok VI</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url("VerPendaftaran/kelompok7"); ?>">Kelompok VII</a>
                                </li>
                                <li role="separator"> </li>
                                <li>
                                    <a href="<?php echo site_url("VerPendaftaran/all"); ?>">SEMUA</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                        
                        <li>
                            <a href=""><i class="fa fa-archive fa-fw"></i> Tes Masuk<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url("TesMasuk/kelompok3"); ?>">Kelompok III</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("TesMasuk/kelompok4"); ?>">Kelompok IV</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("TesMasuk/kelompok5"); ?>">Kelompok V</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("TesMasuk/kelompok6"); ?>">Kelompok VI</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url("TesMasuk/kelompok7"); ?>">Kelompok VII</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                        
                        <li>
                            <a href=""><i class="fa fa-archive fa-fw"></i>Verifikasi Daftar Ulang<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url("DaftarUlang/kelompok1"); ?>">Kelompok I</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("DaftarUlang/kelompok2"); ?>">Kelompok II</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("DaftarUlang/kelompok3"); ?>">Kelompok III</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("DaftarUlang/kelompok4"); ?>">Kelompok IV</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("DaftarUlang/kelompok5"); ?>">Kelompok V</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("DaftarUlang/kelompok6"); ?>">Kelompok VI</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url("DaftarUlang/kelompok7"); ?>">Kelompok VII</a>
                                </li>
                                <li role="separator"> </li>
                                <li>
                                    <a href="<?php echo site_url("DaftarUlang/all"); ?>">SEMUA</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-archive fa-fw"></i> Siswa Baru<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas1a"); ?>">Kelas I A</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas1b"); ?>">Kelas I B</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas2"); ?>">Kelas II</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas3"); ?>">Kelas III</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas4"); ?>">Kelas IV</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas5"); ?>">Kelas V</a>
                                </li>
                                 <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas6"); ?>">Kelas VI</a>
                                </li>
                              <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas7"); ?>">Kelas VII</a>
                                </li>
                             <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas8"); ?>">Kelas VIII</a>
                                </li>
                             <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas9"); ?>">Kelas IX</a>
                                </li>
                             <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas10"); ?>">Kelas X</a>
                                </li>
                             <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas11"); ?>">Kelas XI</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/kelas12"); ?>">Kelas XII</a>
                                </li>
        
                                
                                <li role="separator"> </li>
                                <li>
                                    <a href="<?php echo site_url("SiswaBaru/all"); ?>">SEMUA</a>
                                </li>
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        
<!--                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Upload Laporan</a>
                 
                        </li>-->
                      
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Referensi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
               <?php if($role == "1"){ ?>                   <li>
                                    <a href="<?php echo site_url("User"); ?>">User</a>
                                </li>
                          
                              <?php }?>                                      <li>
                                    <a href="<?php echo site_url("Infaq"); ?>">Biaya Infaq</a>
                                </li>   
                                 <li>
<!--
                                    <a href="<?php echo site_url("Tembusan"); ?>">Diteruskan</a>
                                </li>             -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                        <li>
<!--                            <a href="<?php echo site_url("uploads/user-manual.pdf"); ?>"><i class="fa fa-files-o fa-fw"></i> User Manual</a>
                 -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
                <?php }?>
                
            </div>
