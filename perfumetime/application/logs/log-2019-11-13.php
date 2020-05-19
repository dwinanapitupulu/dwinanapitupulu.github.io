<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-13 20:10:28 --> Query error: Duplicate entry '9223372036854775807' for key 'PRIMARY' - Invalid query: INSERT INTO `t_berita` (`id_berita`, `judul_berita`, `id_kategori_berita`, `slug_berita`, `aktif`, `tanggal_berita`, `isi_berita`, `penulis`, `foto_berita`, `created_by`, `created_date`) VALUES ('15736758281749000729', 'Bakamla Buat Website Baru', '1', 'bakamla-buat-website-baru.html', '1', '2019-11-13', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;a&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'Maulana Iqbal', '3394c0275f9f2fea4a02454a23b7a61d.jpg', '1', '2019-11-13 20:10:28')
ERROR - 2019-11-13 20:19:17 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `t_berita`
LEFT JOIN `m_kategori_berita` ON `t_berita`.`id_kategori_berita` = `m_kategori_berita`.`id_kategori_berita`
LEFT JOIN `m_aktif` ON `t_berita`.`aktif` = `m_aktif`.`aktif`
WHERE `id` = '4'
ERROR - 2019-11-13 20:22:07 --> Severity: error --> Exception: Cannot use object of type stdClass as array /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/berita/edit.php 26
ERROR - 2019-11-13 20:22:20 --> Severity: error --> Exception: Cannot use object of type stdClass as array /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/berita/edit.php 26
ERROR - 2019-11-13 20:35:21 --> Severity: error --> Exception: syntax error, unexpected 'Berhasil' (T_STRING), expecting ',' or ')' /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Slider.php 98
ERROR - 2019-11-13 20:37:08 --> Severity: Notice --> Undefined variable: foto_berita /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Slider.php 86
ERROR - 2019-11-13 20:37:08 --> Query error: Unknown column 'foto_berita' in 'field list' - Invalid query: INSERT INTO `t_slider` (`caption`, `gambar`, `aktif`, `foto_berita`, `created_by`, `created_date`) VALUES ('Tes', 'f2f9bbbdd80746d25d767cbf0cf8855f.jpg', '0', NULL, '1', '2019-11-13 20:37:08')
ERROR - 2019-11-13 20:47:28 --> Severity: error --> Exception: Unable to locate the model you have specified: Pejabat_model /Applications/AMPPS/www/comprobakamla/system/core/Loader.php 348
ERROR - 2019-11-13 20:52:41 --> Query error: Column 'jabatan' cannot be null - Invalid query: INSERT INTO `t_pejabat` (`nama_pejabat`, `jabatan`, `aktif`, `foto`, `created_by`, `created_date`) VALUES ('Maulana Iqbal', NULL, '1', 'd430fa698020b7fc18c9ddac702d0ba4.png', '1', '2019-11-13 20:52:41')
ERROR - 2019-11-13 20:53:25 --> Severity: Notice --> Undefined property: stdClass::$judul_pejabat /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 134
ERROR - 2019-11-13 20:53:25 --> Severity: Notice --> Undefined property: stdClass::$tanggal_pejabat /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 135
ERROR - 2019-11-13 20:53:25 --> Severity: Notice --> Undefined property: stdClass::$penulis /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 136
ERROR - 2019-11-13 20:53:25 --> Severity: Notice --> Undefined property: stdClass::$total_view /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 137
ERROR - 2019-11-13 20:53:27 --> Severity: Notice --> Undefined property: stdClass::$judul_pejabat /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 134
ERROR - 2019-11-13 20:53:27 --> Severity: Notice --> Undefined property: stdClass::$tanggal_pejabat /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 135
ERROR - 2019-11-13 20:53:27 --> Severity: Notice --> Undefined property: stdClass::$penulis /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 136
ERROR - 2019-11-13 20:53:27 --> Severity: Notice --> Undefined property: stdClass::$total_view /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 137
ERROR - 2019-11-13 20:53:52 --> Severity: Notice --> Undefined property: stdClass::$judul_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 17
ERROR - 2019-11-13 20:53:52 --> Severity: Notice --> Undefined property: stdClass::$id_kategori_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 27
ERROR - 2019-11-13 20:53:52 --> Severity: Notice --> Undefined property: stdClass::$id_kategori_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 27
ERROR - 2019-11-13 20:53:52 --> Severity: Notice --> Undefined property: stdClass::$penulis /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 48
ERROR - 2019-11-13 20:53:52 --> Severity: Notice --> Undefined property: stdClass::$tanggal_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 53
ERROR - 2019-11-13 20:53:52 --> Severity: Notice --> Undefined property: stdClass::$isi_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 78
ERROR - 2019-11-13 20:58:00 --> Unable to save the image. Please make sure the image and file directory are writable.
ERROR - 2019-11-13 21:04:58 --> Severity: Notice --> Undefined variable: created_by /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 149
ERROR - 2019-11-13 21:04:58 --> Severity: Notice --> Undefined variable: created_date /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 150
ERROR - 2019-11-13 21:04:59 --> Severity: error --> Exception: Too few arguments to function Pejabat::edit(), 0 passed in /Applications/AMPPS/www/comprobakamla/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 33
ERROR - 2019-11-13 21:05:47 --> Severity: Notice --> Undefined variable: created_by /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 149
ERROR - 2019-11-13 21:05:47 --> Severity: Notice --> Undefined variable: created_date /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 150
ERROR - 2019-11-13 21:05:47 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 17
ERROR - 2019-11-13 21:05:47 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 27
ERROR - 2019-11-13 21:05:47 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 38
ERROR - 2019-11-13 21:05:47 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 45
ERROR - 2019-11-13 21:05:47 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/pejabat/edit.php 45
ERROR - 2019-11-13 21:06:20 --> Severity: Notice --> Undefined variable: created_by /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 149
ERROR - 2019-11-13 21:06:20 --> Severity: Notice --> Undefined variable: created_date /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Pejabat.php 150
ERROR - 2019-11-13 21:24:23 --> Severity: Notice --> Undefined property: Kategori::$kategori /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Kategori.php 25
ERROR - 2019-11-13 21:24:23 --> Severity: error --> Exception: Call to a member function all() on null /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Kategori.php 25
ERROR - 2019-11-13 21:30:33 --> Query error: Unknown column 'id_berita' in 'order clause' - Invalid query: SELECT *
FROM `m_kategori_berita`
ORDER BY `id_berita` DESC
 LIMIT 10
ERROR - 2019-11-13 21:30:39 --> Query error: Unknown column 'id_berita' in 'order clause' - Invalid query: SELECT *
FROM `m_kategori_berita`
ORDER BY `id_berita` DESC
 LIMIT 10
ERROR - 2019-11-13 21:31:05 --> Query error: Unknown column 'id_berita' in 'order clause' - Invalid query: SELECT *
FROM `m_kategori_berita`
ORDER BY `id_berita` DESC
 LIMIT 10
ERROR - 2019-11-13 21:31:20 --> Query error: Unknown column 'id_berita' in 'order clause' - Invalid query: SELECT *
FROM `m_kategori_berita`
ORDER BY `id_berita` DESC
 LIMIT 10
ERROR - 2019-11-13 21:31:26 --> Query error: Unknown column 'id_berita' in 'order clause' - Invalid query: SELECT *
FROM `m_kategori_berita`
ORDER BY `id_berita` DESC
 LIMIT 10
ERROR - 2019-11-13 21:32:01 --> Severity: Notice --> Undefined property: Kategori::$kategori /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Kategori.php 34
ERROR - 2019-11-13 21:32:01 --> Severity: error --> Exception: Call to a member function all() on null /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Kategori.php 34
ERROR - 2019-11-13 21:32:24 --> Severity: Notice --> Undefined property: Kategori::$upload /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Kategori.php 88
ERROR - 2019-11-13 21:32:24 --> Severity: error --> Exception: Call to a member function initialize() on null /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Kategori.php 88
ERROR - 2019-11-13 21:44:20 --> Severity: error --> Exception: /Applications/AMPPS/www/comprobakamla/application/models/Gallery_model.php exists, but doesn't declare class Gallery_model /Applications/AMPPS/www/comprobakamla/system/core/Loader.php 340
ERROR - 2019-11-13 21:44:27 --> Severity: Notice --> Undefined property: Gallery::$kategori /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 25
ERROR - 2019-11-13 21:44:27 --> Severity: error --> Exception: Call to a member function get_aktif() on null /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 25
ERROR - 2019-11-13 21:44:45 --> Severity: Notice --> Undefined property: stdClass::$gambar /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 104
ERROR - 2019-11-13 21:44:45 --> Severity: Notice --> Undefined property: stdClass::$caption /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 105
ERROR - 2019-11-13 21:44:45 --> Severity: Notice --> Undefined property: stdClass::$id_slider /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 110
ERROR - 2019-11-13 21:44:45 --> Severity: Notice --> Undefined property: stdClass::$id_slider /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 111
ERROR - 2019-11-13 21:45:27 --> Severity: Notice --> Undefined property: stdClass::$judul_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 17
ERROR - 2019-11-13 21:45:27 --> Severity: Notice --> Undefined variable: kategori /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 26
ERROR - 2019-11-13 21:45:27 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 26
ERROR - 2019-11-13 21:45:27 --> Severity: Notice --> Undefined property: stdClass::$penulis /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 48
ERROR - 2019-11-13 21:45:27 --> Severity: Notice --> Undefined property: stdClass::$tanggal_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 53
ERROR - 2019-11-13 21:45:27 --> Severity: Notice --> Undefined property: stdClass::$isi_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 78
ERROR - 2019-11-13 21:49:10 --> Severity: Notice --> Undefined variable: id /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 96
ERROR - 2019-11-13 21:49:10 --> Severity: Notice --> Undefined variable: title /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/js_upload.php 6
ERROR - 2019-11-13 21:49:44 --> Severity: Notice --> Undefined variable: id /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 96
ERROR - 2019-11-13 21:49:44 --> Severity: Notice --> Undefined variable: title /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 6
ERROR - 2019-11-13 21:49:44 --> Severity: Notice --> Undefined variable: aktif /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 28
ERROR - 2019-11-13 21:49:44 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 28
ERROR - 2019-11-13 21:49:44 --> Severity: Notice --> Undefined variable: title /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/js_upload.php 6
ERROR - 2019-11-13 21:49:52 --> Severity: Notice --> Undefined variable: title /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 6
ERROR - 2019-11-13 21:49:52 --> Severity: Notice --> Undefined variable: aktif /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 28
ERROR - 2019-11-13 21:49:52 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 28
ERROR - 2019-11-13 21:49:52 --> Severity: Notice --> Undefined variable: title /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/js_upload.php 6
ERROR - 2019-11-13 21:50:07 --> Severity: Notice --> Undefined variable: aktif /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 28
ERROR - 2019-11-13 21:50:07 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 28
ERROR - 2019-11-13 21:56:06 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 112
ERROR - 2019-11-13 21:56:26 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 21:56:26 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 21:57:12 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 21:57:45 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 21:58:26 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 21:58:45 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 21:59:04 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 22:00:02 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 22:00:10 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 22:00:20 --> The upload path does not appear to be valid.
ERROR - 2019-11-13 22:02:13 --> Severity: error --> Exception: syntax error, unexpected '}' /Applications/AMPPS/www/comprobakamla/application/controllers/gendis/Gallery.php 128
ERROR - 2019-11-13 22:06:28 --> Query error: Unknown column 'creatred_date' in 'field list' - Invalid query: INSERT INTO `t_galeri_foto` (`aktif`, `created_by`, `creatred_date`, `foto`, `id_galeri`) VALUES (1,'1','2019-11-13 22:06:28','1573682788-andin.jpeg','1')
ERROR - 2019-11-13 22:06:28 --> Query error: Unknown column 'creatred_date' in 'field list' - Invalid query: INSERT INTO `t_galeri_foto` (`aktif`, `created_by`, `creatred_date`, `foto`, `id_galeri`) VALUES (1,'1','2019-11-13 22:06:28','1573682788-african-honey-bee.jpg','1')
ERROR - 2019-11-13 22:19:12 --> Query error: Unknown column 't_galeri.aktif' in 'on clause' - Invalid query: SELECT *
FROM `t_galeri_foto`
LEFT JOIN `m_aktif` ON `t_galeri`.`aktif` = `m_aktif`.`aktif`
WHERE `id_galeri` = '1'
ERROR - 2019-11-13 22:19:26 --> Severity: Notice --> Undefined variable: foto_galeri /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 18
ERROR - 2019-11-13 22:19:26 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 18
ERROR - 2019-11-13 22:19:34 --> Severity: Notice --> Undefined variable: foto_galeri /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 18
ERROR - 2019-11-13 22:19:34 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 18
ERROR - 2019-11-13 22:19:36 --> Severity: Notice --> Undefined variable: foto_galeri /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 18
ERROR - 2019-11-13 22:19:36 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 18
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:20:20 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:21:01 --> Severity: Notice --> Trying to get property of non-object /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/upload.php 20
ERROR - 2019-11-13 22:36:34 --> Query error: Table 'bakamlacompro.t_galer_foto' doesn't exist - Invalid query: DELETE FROM `t_galer_foto`
WHERE `id_galeri_foto` = '3'
ERROR - 2019-11-13 22:41:53 --> Severity: Notice --> Undefined property: stdClass::$judul_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 17
ERROR - 2019-11-13 22:41:53 --> Severity: Notice --> Undefined variable: kategori /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 26
ERROR - 2019-11-13 22:41:53 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 26
ERROR - 2019-11-13 22:41:53 --> Severity: Notice --> Undefined property: stdClass::$penulis /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 48
ERROR - 2019-11-13 22:41:53 --> Severity: Notice --> Undefined property: stdClass::$tanggal_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 53
ERROR - 2019-11-13 22:41:53 --> Severity: Notice --> Undefined property: stdClass::$isi_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/slider/edit.php 78
ERROR - 2019-11-13 22:42:39 --> Severity: Notice --> Undefined property: stdClass::$judul_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/edit.php 17
ERROR - 2019-11-13 22:42:39 --> Severity: Notice --> Undefined variable: kategori /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/edit.php 26
ERROR - 2019-11-13 22:42:39 --> Severity: Warning --> Invalid argument supplied for foreach() /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/edit.php 26
ERROR - 2019-11-13 22:42:39 --> Severity: Notice --> Undefined property: stdClass::$penulis /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/edit.php 48
ERROR - 2019-11-13 22:42:39 --> Severity: Notice --> Undefined property: stdClass::$tanggal_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/edit.php 53
ERROR - 2019-11-13 22:42:39 --> Severity: Notice --> Undefined property: stdClass::$isi_berita /Applications/AMPPS/www/comprobakamla/application/views/gendis/pages/gallery/edit.php 78
