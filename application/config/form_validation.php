<?php
$config = array(
                 'Disposisi' => array(
                                    array(
                                            'field' => '$fds_id_surat',
                                            'label' => 'ID Surat',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'fds_id_parent',
                                            'label' => 'ID Parent',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'fds_kasubbag',
                                            'label' => 'Kasubbag',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'ins_instruksi',
                                            'label' => 'Instruksi',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'fds_tgl_disposisi',
                                            'label' => 'Tgl. Disposisi',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'tr_disposisi_user',
                                            'label' => 'User Tujuan',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'utr_unitTerusan',
                                            'label' => 'Unit Terusan',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'fds_catatan',
                                            'label' => 'Catatan',
                                            'rules' => 'required'
                                         )
                                    ),
                 'SuratMasuk' => array(
                                    array(
                                            'field' => 'sms_nomor_surat',
                                            'label' => 'No. Surat',
                                            'rules' => 'required|numeric'
                                         ),
                                    array(
                                            'field' => 'sms_pengirim',
                                            'label' => 'Pengirim',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sms_tgl_srt',
                                            'label' => 'Tgl. Surat',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sms_tgl_srt_diterima',
                                            'label' => 'Tgl. Surat Diterima',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sms_tgl_srt_dtlanjut',
                                            'label' => 'Tgl. Surat Ditindaklanjuti',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sms_perihal',
                                            'label' => 'Perihal',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sms_no_agenda',
                                            'label' => 'No. Agenda',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sms_unit_tujuan',
                                            'label' => 'Unit Tujuan',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sms_keterangan',
                                            'label' => 'Keterangan',
                                            'rules' => 'required'
                                         )
                                    )                          
               );
?>