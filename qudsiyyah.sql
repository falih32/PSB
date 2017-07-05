/*
Navicat MySQL Data Transfer

Source Server         : koneksiku
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : qudsiyyah

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-07-05 20:57:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Pass` varchar(50) CHARACTER SET latin1 NOT NULL,
  `usr_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('2', 'admin', 'Sumantosasa', '21232f297a57a5a743894a0e4a801fc3', '1');
INSERT INTO `admin` VALUES ('3', 'jarwo', 'Sujarwo', '21232f297a57a5a743894a0e4a801fc3', '2');
INSERT INTO `admin` VALUES ('4', 'sumanto', 'Sumantosasasa', '21232f297a57a5a743894a0e4a801fc3', '2');

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `idBerita` int(4) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `Judul` varchar(50) CHARACTER SET latin1 NOT NULL,
  `isi` text CHARACTER SET latin1 NOT NULL,
  `author` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idBerita`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES ('8', '2012-02-11', 'Struktur Organisasi', '<p><strong>Struktur Organisasi</strong></p>\r\n<p>Salah satu ciri yang menonjol dari Internet adalah bahwa banyak dari layanan-layanan yang berjalan diatasnya diimplementasikan menggunakan&nbsp; arsitektur <em>client/server</em>. Pengertian dari <em>client</em> dan <em>server</em> itu sendiri adalah sebagai berikut :</p>\r\n<p><em>Client</em> merupakan&nbsp; pihak yang bertanggung jawab untuk berinteraksi dengan <em>user</em>; sebagai contoh, dengan menerima masukan dari <em>keyboard</em> dan menampilkan data ke <em>user</em>. Sedangkan <em>Server</em>, merupakan pihak yang bertanggung jawab untuk menangani tugas-tugas yang diminta <em>client</em>; sebagai contoh, mengakses data atas nama <em>client</em>, menangani perhitungan, menyediakan data atau tanggapan sederhana pada <em>client</em>, dan sebagainya.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p><strong>Pengenalan Layanan Informasi di Internet</strong></p>\r\n<p>Layanan informasi di Internet yang akan dikenalkan disini mencakup antara lain layanan e-mail, telnet, finger, FTP, WAIS, dan World Wide Web (WWW).</p>\r\n<p>E-mail atau electronic mail, sesuai dengan namanya adalah layanan Internet yang berupa pengiriman mail (surat) yang datanya diubah ke bentuk data elektronik dan dikirimkan melalui jaringan komputer. E-mail melalui internet dapat mencapai tidak hanya orang-orang yang terhubung langsung&nbsp; ke Internet tapi juga&nbsp; user&nbsp; dari jaringan komersil seperti CompuServe,&nbsp; America Online , dsb, serta jaringan komputer lain yang telah tersebar di seluruh dunia (Wide Area Network).</p>\r\n<p>Telnet dan Finger adalah&nbsp; dua layanan yang datang bersama kebanyakan&nbsp; sistem operasi, sehingga keduanya digunakan secara luas meskipun&nbsp; service tersebut&nbsp; sederhana. Telnet&nbsp;&nbsp; mengizinkan seseorang untuk login ke dalam sebuah sistem melalui jaringan seakan-akan orang tersebut&nbsp; login dari terminal pada sistem tersebut.&nbsp; Finger didesain untuk menyediakan informasi mengenai user dari lokal maupun remote sistem (seperti nama lengkap yang berhubungan dengan alamat e-mail user)</p>\r\n<p>FTP (File Transfer Protocol)&nbsp; merupakan layanan yang paling banyak digunakan oleh pemakai Internet untuk mengambil atau meletakkan file dari atau ke mesin lain di Internet. FTP sama seperti login ke suatu mesin, tapi disini user dibatasi pada sejumlah command tertentu, dan untuk anonymous FTP user, dibatasi hanya pada direktori tertentu. Arsip yang di-set agar dapat diakses oleh&nbsp; publik&nbsp; disebut arsip anonymous FTP, karena sebarang orang dapat&nbsp; login (hanya alamat e-mail orang tersebut diminta sebagai identifikasi). FTP client terdapat pada hampir semua jenis komputer, dari palmtop sampai supercomputer. Setelah e-mail, FTP adalah layanan Internet yang paling umum digunakan.</p>\r\n<p>Jika anda mempunyai sebuah database yang sangat besar dan anda sedang mencari cara&nbsp; untuk memberikan kemudahan pada user untuk melihat isi seluruh database maka WAIS adalah jawabannya. WAIS atau Wide Area Information Server, menyediakan layanan akses ke suatu database melalui&nbsp; jaringan TCP/IP . Software WAIS yang terbaru memungkinkan pembuatan indeks yang mudah untuk database yang sangat besar. Server mengizinkan user untuk meminta pencarian di database&nbsp; untuk keyword yang&nbsp; sederhana atau ekspresi boolean yang lebih kompleks.</p>\r\n<p>World Wide Web atau lebih sering dikenal&nbsp; sebagai&nbsp; Web adalah layanan Internet&nbsp; yang paling banyak memiliki tampilan grafis dan kemampuan <em>link </em>yang sangat bagus. Keistimewaan inilah yang telah menjadikan Web sebagai service yang paling cepat pertumbuhannya. Web mengizinkan&nbsp; pemberian <em>highlight</em>&nbsp; (penyorotan/penggaris bawahan) pada&nbsp; kata-kata atau gambar dalam sebuah dokumen untuk menghubungkan&nbsp; atau menunjuk&nbsp; ke media lain&nbsp; seperti dokumen, frase, <em>movie clip</em>, atau file suara. Web dapat menghubungkan dari sebarang tempat dalam sebuah dokumen&nbsp; atau gambar ke sebarang tempat di&nbsp; dokumen lain. Dengan sebuah browser yang memiliki&nbsp; Graphical User Interface (GUI), link-link dapat dihubungkan ke tujuannya dengan&nbsp; menunjuk link tersebut&nbsp; dengan mouse dan menekannya.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dibawah ini akan&nbsp; dibahas proses instalasi server dari dua layanan Internet yang umum digunakan yaitu server untuk layanan FTP dan WWW pada UNIX FreeBSD.</p>\r\n<p>&nbsp;</p>\r\n<h1>Instalasi FTP Server</h1>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ada dua tipe akses yang FTP server sediakan yaitu user FTP dan anonymous FTP. User FTP adalah adalah layanan FTP yang disediakan untuk&nbsp; orang yang mempunyai sebuah user account pada suatu host, sedangkan anonymous FTP disediakan untuk publik. Dengan layanan FTP anda dapat melakukan transfer file dari sistem anda atau ke sistem anda&nbsp; dari berbagai tempat di internet. Tapi anda tidak dapat mengeksekusi semua perintah yang ada karena FTP server memang hanya menyediakan&nbsp; perintah-perintah&nbsp; tertentu, seperti melihat daftar dan mengubah direktori, dan&nbsp; menerima serta mengirim file. Pada instalasi ini&nbsp; yang akan menjadi pokok bahasan kita adalah Anonymous FTP server yang merupakan inti dari sebuah FTP Server.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FTP server terdiri dari dua bagian, yaitu : <strong><em>server</em></strong>, yang menanggapi permintaan client seperti mengirim file, mendaftar direktori yang ada, dan lain-lain ; dan <strong><em>filesystem</em></strong> yang merupakan tempat FTP server membaca file dan direktori yang ada. Program implementasi standar UNIX untuk menjalankan FTP server adalah&nbsp; <strong><em>ftpd</em></strong>&nbsp; (ftp daemon).&nbsp; <em>ftpd<strong> </strong></em>berjalan dibawah <strong><em>inetd</em></strong>, UNIX superserver.&nbsp; <em>inetd</em>&nbsp; mendengarkan permintaan pada sejumlah port, termasuk&nbsp; port kontrol FTP, TCP port 21. Ketika sebuah FTP client pertama kali mencoba untuk berhubungan dengan sebuah FTP server, dia mengirimkan paket ke port 21 pada host tujuannya. Kemudian&nbsp; <em>inetd</em> menerima paket tersebut, menentukan dari nomor port tujuan bahwa layanan FTP perlu dijalankan, dengan melakukan proses forking dan executing pada <em>ftpd.</em> Jika pada saat yang bersamaan ada client lain yang ingin berhubungan dengan FTP server, maka inetd&nbsp; akan meminta kopi dari <em>ftpd</em> yang sudah berjalan untuk menanganinya. Baris pada file konfigurasi <em>inetd</em>, <em>inetd.conf</em> yang mengawasi bagaiman <em>ftpd</em> dijalankan dapat dilihat di bawah ini :</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ftp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; stream&nbsp; tcp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nowait&nbsp;&nbsp; root&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /etc/ftpd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ftpd -l</p>\r\n<p>Biasanya pada sistem UNIX konfigurasi&nbsp; untuk <em>ftpd</em> seperti contoh diatas sudah ada pada file <em>inetd.conf</em>, yang akan kita bahas sekarang&nbsp; adalah arti dari masing-masing <em>field</em> pada baris konfigurasi diatas.</p>\r\n<p>Field&nbsp; pertama (ftp) adalah field protokol, yang memberitahu <em>inetd</em> layanan apa yang disinggung oleh baris ini. Kemudian <em>inetd</em> akan melihat di file&nbsp; <em>/etc/services</em>&nbsp; untuk mencari padanan dari nomor port ftp yang ternyata adalah port 21. Ketika inetd menerima paket untuk port 21, maka inetd dengan menggunakan baris <em>inetd.conf</em> diatas sudah mengetahui server apa yang harus ia jalankan (FTP server).</p>\r\n<p>Field&nbsp; kedua dan ketiga (stream dan tcp) menerangkan tipe komunikasi yang digunakan FTP server. Dalam hal ini, komunikasi dilakukan melalui hubungan TCP,&nbsp; yang merupakan aliran data berurutan antar dua komputer. Perlu diingat bahwa File Transfer Protocol (FTP) hanya bekerja melalui hubungan TCP.</p>\r\n<p>Field keempat&nbsp; (nowait) memberitahukan inetd untuk menjalankan sebuah server baru setiap kali ada client yang akan berhubungan. Apabila menuliskan wait pada field ini, maka akan memberitahu inetd bahwa untuk menjalankan sebuah server baru haru menunggu sampai tidak ada lagi server yang sedang berjalan.</p>\r\n<p>Dua field terakhir (/etc/ftpd dan ftpd -l)&nbsp; memberitahu pathname lengkap dari ftpd dan argumennya (termasuk nama programnya,&nbsp; <em>ftpd</em>) untuk digunakan ketika menjalankan server.</p>\r\n<p>Setelah melakukan konfigurasi&nbsp; FTP server untuk berjalan dibawah inetd, anda perlu untuk menambahkan sebuah ftp user pada file <em>/etc/passwd</em> di komputer anda.&nbsp; <em>ftpd</em> akan memeriksa keberadaan dari ftp user sebelum mengizinkan seorang anonymous user untuk menggunakan layanan FTP. Entry <em>ftp user</em> di file <em>/etc/passwd</em> harus mempunyai user ID dan group ID yang unik dan user harus tidak diizinkan untuk masuk&nbsp; melalui layanan standar yang lain seperti <em>telnet</em> dan <em>rlogin.</em> Password&nbsp; user ftp pada /<em>etc/passwd</em> harus berisi *, yang berarti bahwa tidak ada password, dan login shell seharusnya di-set ke <em>/bin/false</em>, sehingga&nbsp; sistem tidak mengizinkan user ftp untuk login dari layanan lain. Setelah itu, direktori yang boleh diakses oleh ftp user juga harus diset yaitu di <em>/usr/ftp</em>. Contoh baris pada file <em>/etc/passwd</em> dapat dilihat dibawah ini.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ftp:*:500:25:Anonymous FTP user:/user/ftp:/bin/false</p>\r\n<p>Untuk melakukan instalasi sebuah FTP server di FreeBSD, dapat dilakukan pada saat instalasi sistem FreeBSD pertama kali atau setelah sistem sudah berjalan. Cara pertama, instalasi FTP server bersamaan dengan instalasi FreeBSD pertama kali, hampir sama dengan cara kedua, hanya saja cara&nbsp; pertama mulai dari pengkonfigurasian hardware, sedangkan cara kedua langsung ke menu-menu instalasi. Karena itu yang akan dibahas disini adalah cara yang kedua.</p>', 'Ka Mts.', '');
INSERT INTO `berita` VALUES ('2', '2012-01-24', 'Info Pendaftaran', '<p>Misi Memberikan pelayanan belajar yang efektif. Menumbuhkan minat belajar siswa. Menyediakan sarana dan prasarana yang memadai. Menyediakan wahana pembinaan dan pengembangan seni, olahraga, dan ketrampilan. Upaya yang sudah ditempuh untuk mencapai program tersebut dilakukan melalui kegiatan sebagai berikut : Memberi tambahan jam pelajaran yang di EBTANAS kan bagi kelas I, II dan kelas III. Mengadakan try out UMPTN bagi kelas III bekerja sama dengan lembaga bimbingan belajar dan hasilnya disampaikan kepada orang tua. Menekan adanya jam kosong dengan menukar jam pelajaran lain. Mengikutsertakan guru dalam kegiatan penataran, MGMP. Penambahan materi conversation kedalam pengajaran intra Bahasa Inggris. Mengitensifkan pengajaran ekstra Bahasa Inggris dan Komputer. Menetapkan hari wajib menggunakan Bahasa Inggris. Memberikan hadiah kepada siswa ranking pertama setiap catur wulan / Semester. Mengoptimalkan fasilitas Komputer dan Laboratorium</p>', 'Panitia', '');
INSERT INTO `berita` VALUES ('6', '2012-02-10', 'Pengumuman ku', '<p>Tujuan Secara Umum Sesuai dengan yang terkandung dalam pembukaan Undang-Undang Dasar 1945 dan program pemerintah seperti yang telah digariskan dalam GBHN, yakni untuk &ldquo;Meningkatkan Kwalitas Manusia Indonesia&rdquo; yaitu manusia yang bertaqwa dan iman kepada Tuhan Yang Maha Esa, berbudi luhur, berbudi pekerti atau berkepribadian, cerdas, terampil, kerja keras, disiplin, sehat jasmani dan rohani. Dengan demikian dapat menumbuhkan manusia pembangunan yang dapat membangun dirinya sendiri dan bersama-sama ikut bertanggung jawab atas pembangunan bangsa. Secara Khusus Membantu program pemerintah dalam usaha : Meningkatkan kesempatan memperoleh kesempatan belajar bagi putra-putri warga Negara Indonesia. Menampung anak-anak yang ingin melanjutkan sekolahnya karena tidak tertampung di sekolah negeri. Mempersiapkan anak didik dengan memberikan bekal pengetahuan, ketrampilan, kesegaran jiwa dan raga serta daya kreatifitas, patriotisme dan budi pekerti luhur agar kelak dapat meneruskan pendidikan ke jenjang yang lebih tinggi ataupun terjun ke masyarakat mengabdi pada nusa dan bangsa.</p>', 'Webmaster', '');
INSERT INTO `berita` VALUES ('10', '2012-02-14', 'Berita Penting', '<p>Banyak dari otoritas tua menggambarkan Pochteca sebagai mata-mata. Terkadang juga duta besar, dan bahkan tentara militer Negara Astec. Perhatian dating dari catatan sarjana abad XVI, Bernardo de Sahagun, berdasarkan benda-benda yang mampu dia kumpulkan di Meksiko, dimana dokumen Aztec dikenal sebagai <em>Kode Florentina </em>yang barang-barang berharga. Tekun. Jadi singkatnya, jumlah pedagang dan pengrajin. Interpretasi yang benar dari dokumen ini, bagaimanapun juga masih kabur. Hal ini ditunjukkan Pochteca sebagai pelopor patriotis kedalam territory diluar Aztec, tanpa mengklarifikasi hubungannya dengan tepat kepada Negara Aztec. Sejarawan dan Antropolog yang membacanya tanpa hipotesa kuil ekonomi orang Sumeria sebagai latar belakang nya pengetahuan perdagangan awal bisa melihatkan Pochteca sebagai padanan perantara kuil. Terhadap latar belakang diaspora perdagangan yang lain dan peran mereka dalam dunia sejarah, bagaimanapun juga, terbaca lebih seperti pujian untuk pria yang keluar sepanjang jalan melalui wilayah yang berbahaya, resiko nyawanya. Khususnya sejak dokumen tersebut jelas, bahwa mereka bertindak berdasarkan pada catatan mereka sebaik bahwa kebangsawanan atau terkadan g Negara. Jika Pochteca melakukan aksi militer untuk Negara Aztec. Itu mungkin merupakan fase pengecualian dalam beberapa abad &ldquo;aktivitas panjang diaspora perdagangan&rdquo;. Tidak dihindarkan membutuhkan proteksi, melewati bantuan diri oleh pedagang atu perdagangan dari lainnya. Dalam hal lain, hubungan mereka pada Negara mereka mengakui Pochteca sebagai tingkat otonomi yang jauh.&nbsp; Mereka tinggal dalam distrik kota, diperintah oleh hakim nya. Seperti Karum Ashur, beberapa orang Pochteca membantu untuk mengawasi pasar kecil, bertindak sebagai pegawai yang diangkat.</p>\r\n<p>Meskipun Pochteca terasimilasi banyak aspek dari budaya masyarakat aslinya, mereka menjaga dewa nya dalam kehadiran di Huitzilopochtli, dewa tertinggi Aztec, yang haus akan pengorbanan manusia telah menjaganya dalam reputasi buruk diantara orang non Aztec. Yiacatecutli, dewa Pochteca, juga meminta pengorbanan manusia, tapi pada skala yang kecil. Atribut lainnya mengesankan variasi Dewa Toltec, Quetzalcoatl, naga berbulu. Komunitas pedagang lain di dataran tinggi Meksiko juga memilki ciri-ciri Toltec dalam budaya mereka, tapi Pochteca memiliki persamaan pada teluk pantai. Nah itu mungkin, meskipun tidak cukup solid menunjukkan bukti sekarang. Bahwa Pochteca dapat dilacak kembali pada diaspora perdagangan Olmec di dataran tinggi, yang kemudian menjadi bagian kebudayaan Toltec pada salah satu fase dalam sejarahnya dan menjadi Aztec makin bertambah suatu disaat penaklukan Spanyol.</p>\r\n<p>Sekelompok grup perdagangan yang khusus tinggal tersebar melewati wilayah Mixtec. Mereka memiliki kota nya dalam beberapa contoh. Selain itu mereka juga memiliki distrik dalam kota Mixtec. Seperti Pochteca, status social mereka lebih tinggi daripada orang biasa tapi lebih rendah dari aristokrasi, yang meskipun bernilai kehadiran mereka untuk kepentingan perdagangan jarak jauh dan intelijen luar negeri. Pedagang ini jug memilki kebudayaan yang mengesankan keaslian Toltec, dan mereka dikenal kemiripannya dengan Pochteca.&nbsp;&nbsp;</p>', 'Ketua', 'gambar/gambarku.JPG');
INSERT INTO `berita` VALUES ('11', '2012-02-14', 'Pelaksanaan Ujian', '<p><strong><span style=\"text-decoration: underline;\">Pelaksanaan Ujian Gelombang I :</span></strong></p>\r\n<ul>\r\n<li>Peserta yang sudah mendaftar dapat melihat jadwal seminar di papan pengumuman atau SIADIN.</li>\r\n<li>Mengambil jadwal seminar ke Bpk. Rudi Harjana dan harus segera membagikan Laporan Kerja Praktek kepada penguji <em><span style=\"text-decoration: underline;\">paling lambat 1</span></em> hari sebelum pelaksanaan seminar.</li>\r\n<li>Peserta Seminar hadir 30 menit sebelum seminar dimulai.</li>\r\n<li>Peserta menyiapkan perlengkapan komputer/laptop sendiri untuk presentasi dan audience minimal 5 mahasiswa/i.</li>\r\n<li>Peserta memakai pakaian bebas, rapi dan jas Almamater.</li>\r\n<li>Peserta yang sudah selesai Seminar, menunggu pengumuman hasil ujian yang akan disampaikan oleh&nbsp; Penguji.</li>\r\n<li>Peserta yang dinyatakan lulus seminar, harus menyerahkan lembar persetujuan Laporan, Pengesahaan Penguji yang telah ditandatangani lengkap maksimal 5 hari ke TU (<strong><em>Bpk</em></strong>. <strong><em>Rudy Harjana atau Ibu. Trisyani</em></strong>) dan CD Kerja Praktek diserahkan ke TU.</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'adaD', '');

-- ----------------------------
-- Table structure for t_calon_siswa
-- ----------------------------
DROP TABLE IF EXISTS `t_calon_siswa`;
CREATE TABLE `t_calon_siswa` (
  `tmb_id` bigint(255) NOT NULL AUTO_INCREMENT,
  `tmb_no_daftar` varchar(255) NOT NULL,
  `tmb_nama` varchar(30) NOT NULL,
  `tmb_nisn` varchar(30) NOT NULL,
  `tmb_tempatL` varchar(20) NOT NULL,
  `tmb_ttl` date NOT NULL,
  `tmb_sdrk` int(2) NOT NULL,
  `tmb_sdrt` int(2) NOT NULL,
  `tmb_anakke` int(2) NOT NULL,
  `tmb_stsdkel` int(10) NOT NULL COMMENT '1;kandung 2;tiri 3;angkat',
  `tmb_alamat` varchar(255) NOT NULL,
  `tmb_kec` varchar(30) NOT NULL,
  `tmb_kota` varchar(30) NOT NULL,
  `tmb_ayah` varchar(30) NOT NULL,
  `tmb_pnd_ayah` varchar(30) NOT NULL,
  `tmb_pek_ayah` varchar(30) NOT NULL,
  `tmb_agm_ayah` varchar(30) NOT NULL,
  `tmb_peng_ayah` int(15) NOT NULL,
  `tmb_alamat_ortu` varchar(30) NOT NULL,
  `tmb_kec_ortu` varchar(30) NOT NULL,
  `tmb_kota_ortu` varchar(30) NOT NULL,
  `tmb_telp_ortu` varchar(30) NOT NULL,
  `tmb_ibu` varchar(30) NOT NULL,
  `tmb_pnd_ibu` varchar(30) NOT NULL,
  `tmb_pek_ibu` varchar(30) NOT NULL,
  `tmb_agm_ibu` varchar(30) NOT NULL,
  `tmb_peng_ibu` int(30) NOT NULL,
  `tmb_skl_asl` varchar(30) DEFAULT NULL,
  `tmb_alm_skl` varchar(30) DEFAULT NULL,
  `tmb_kelas` varchar(30) NOT NULL,
  `tmb_foto` varchar(255) DEFAULT NULL,
  `tmb_akte` varchar(255) DEFAULT NULL,
  `tmb_kk` varchar(255) DEFAULT NULL,
  `tmb_rapor` varchar(255) DEFAULT NULL,
  `tmb_nilai` float DEFAULT NULL,
  `tmb_diterimadi` varchar(20) DEFAULT NULL,
  `tmb_verify` int(2) NOT NULL DEFAULT '0',
  `tmb_kelompok` int(5) NOT NULL COMMENT '1. Lulus MI, Lulus SD dan MaDin min kelas  IV\r\n2. Lulus SMP, MTs. Kelas II naik kelas III, Lulus Kelompok I\r\n3. Lulus TK / RA (khusus yang minta kelas I ), MI / SD Kelas I – IV, MI Kelas V / Lulus SD dan Lulus SD MaDin belum kelas IV\r\n4. Lulus MTs.\r\n',
  `tmb_tanggal` date NOT NULL,
  `tmb_status` int(2) NOT NULL DEFAULT '0' COMMENT '0:blm verifikasi pedaftaran 1:blm tes 2:blm daftar ulang 3:siswa baru',
  `tmb_keterangan` varchar(255) DEFAULT NULL,
  `tmb_hobi` varchar(255) DEFAULT NULL,
  `tmb_cita` varchar(255) DEFAULT NULL,
  `tmb_transport` tinyint(255) DEFAULT NULL,
  `tmb_jarak` tinyint(255) DEFAULT NULL,
  PRIMARY KEY (`tmb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_calon_siswa
-- ----------------------------
INSERT INTO `t_calon_siswa` VALUES ('26', 'L17.0002', 'Mujiono', '3131133131', 'Kudus', '2009-10-14', '1', '1', '1', '1', 'Krandon 5/1 amnsanms ansa,nsman asna,sn,ans anskahsahs ahashahska ahskshkahskah sakskajskaj akshakshkah akjsahskahks', 'Kota', 'Kudus', 'Muji', 'Magister', 'Dosen', 'Islam', '23332111', 'Mampang 2451', 'klasklsk', 'DKI JAKART', '0217363728', 'Jaya', 'SMA', 'Buruh', 'Islam', '1212121', 'SD Bina Nusantara', 'Jakarta 54628', '4', 'Foto_L17.0002.jpeg', 'Akte_L17.0002.pdf', 'Ijasah_L17.0002.pdf', 'Rapor_L17.0002.pdf', '50', '2', '0', '3', '2016-03-01', '0', 'Belum mengumpulkan foto', null, null, null, null);
INSERT INTO `t_calon_siswa` VALUES ('25', 'L17.0001', 'Sugiantoro', '55555', 'Kudus', '2010-04-15', '1', '1', '1', '1', '1', '1', '11', '111', '111', '1111', '1111', '11111', '111', '11', '111', '1111', '111', '111', '111', '1111', '1111', null, null, '-1', 'Foto_L17.0001.jpg', 'Akte_L17.0001.jpg', 'Ijasah_L17.0001.jpg', 'Rapor_L17.0001.jpg', null, '1b', '0', '1', '2017-05-08', '3', 'dsda', null, null, null, null);
INSERT INTO `t_calon_siswa` VALUES ('27', 'L17.0003', 'Sasuke', '55555', 'Kudus', '2009-10-14', '1', '1', '1', '1', '1111', 'Kota', 'Kudus', 'Paijo', 'SMA', 'Dosen', 'Islam', '122121', 'Mampang 2451', 'klasklsk', 'DKI JAKARTA', '0217363728', 'Sulastri', 'SMA', 'Wiarausaha', 'Islam', '1221212', 'RA NU BANAT', 'Jakarta 54628', '3', 'Foto_L17.0003.jpg', 'Akte_L17.0003.jpg', 'KK_L17.0003.jpg', '', null, '', '0', '3', '2017-05-17', '1', 'Belom melengkapi Ijasah', null, null, null, null);
INSERT INTO `t_calon_siswa` VALUES ('28', 'L17.0004', 'Sumantoko', '222121', 'Demak', '2010-07-01', '1', '1', '1', '1', 'Desa Ngslor Ngidul Sutikno Husodo', 'Mijen', 'Demak', 'Sukijan', 'Sarjana', 'PNS', 'ISlam', '3000000', 'Desa Ngslor Ngidul Sutikno Hus', 'MIjen ', 'Demak', '085641723234', 'Sumonten', 'SD', 'Buruh', 'ISalam', '2000000', 'Banat Nu Kudus', 'Jl Kh Arwani No.5 5/1 Kudus', '0', 'Foto_L17.0004.jpg', 'Akte_L17.0004.jpg', 'KK_L17.0004.jpg', 'Rapor_L17.0004.jpg', null, '1b', '0', '2', '2017-07-05', '0', 'Testing', 'Main Bola', 'Presiden', '1', '3');
INSERT INTO `t_calon_siswa` VALUES ('29', 'L17.0005', 'Bambang Tri Harmoko', '1291020102010', 'Kudus', '2009-07-01', '1', '1', '1', '1', 'Krandon 5/1 ', 'Kota', '', 'Budi', 'SMP', 'Buruh', 'Islam', '2000000', 'Krandon 5/1 ', 'Kota ', 'Kudus', '0291435654', 'Bumisairi', 'SMA', 'Ibu Rumah Tangga', 'Islam', '1', 'MI MUAWANATUL HUDA', 'Beranjang mejobo kudus', '1', 'Foto_L17.0005.jpg', 'Akte_L17.0005.jpg', 'KK_L17.0005.jpg', 'Rapor_L17.0005.pdf', null, null, '0', '3', '2017-07-05', '0', null, 'ProGammers', 'Programmer', '0', '0');

-- ----------------------------
-- Table structure for t_infaq
-- ----------------------------
DROP TABLE IF EXISTS `t_infaq`;
CREATE TABLE `t_infaq` (
  `inf_id` int(255) NOT NULL AUTO_INCREMENT,
  `inf_blangko` int(255) DEFAULT NULL,
  `inf_daftar` int(255) DEFAULT NULL,
  `inf_tahun` date DEFAULT NULL,
  PRIMARY KEY (`inf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_infaq
-- ----------------------------
INSERT INTO `t_infaq` VALUES ('1', '100000', '1000000', '2013-02-15');
INSERT INTO `t_infaq` VALUES ('3', '500000', '2000000', '2017-05-18');
