<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.1.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo $this->session->userdata('page_title'); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
    <link href="<?php echo base_url();?>metronic/assets/font-awesome/fontcss.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo base_url();?>metronic/assets/global/plugins/bootstrap-slider/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>metronic/assets/global/plugins/bootstrap-slider/css/full-slider.css" rel="stylesheet" type="text/css"/>
     <!--  <link href="<?php echo base_url();?>metronic/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
    -->  
<!--  END THEME STYLES -->
    <link href="<?php echo base_url();?>metronic/assets/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url();?>metronic/assets/css/style1.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>metronic/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>metronic/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    

    <link href="<?php echo base_url();?>metronic/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>metronic/assets/css/style-responsive.css" rel="stylesheet">
  
    <link href="<?php echo base_url();?>metronic/assets/css/style-responsive.css" rel="stylesheet">

    <link href="<?php echo base_url();?>metronic/assets/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>metronic/assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>metronic/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet">


    <link href="<?php echo base_url();?>metronic/assets/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>metronic/assets/css/qunit.css">

    <script src="<?php echo base_url();?>metronic/assets/js/jquery-2.1.3.js"></script>
    <script src="<?php echo base_url();?>metronic/assets/js/chart-master/Chart.js"></script>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->

<!--header start-->
      <header class="header black-bg" style="background-color:#FFF;">
            <!--logo start-->

            <a href="<?php echo base_url();?>dashboard/operator" class="logo"><b>RSUD</b></a>
            <!--logo end-->
            <div class="top-menu">
            <!--disini buat naruh menu -->
                <ul class="nav pull-right top-menu">
                    <li><div class="name"> Admin </a>
                    </li>
                    <li><a class="logout" href="<?php echo base_url();?>">Logout</a></li>
                </ul>
            </div>
        </header>

    <!-- END HEADER INNER -->
<!-- END HEADER -->
<div class="clearfix">
</div>

<div class="men-separator"></div>

<div id="navigation">
    <ul id="nav">
        <li class="head-nav"><a href="#">Master Data</a>
            <ul>
                <li><a href="<?php echo base_url();?>master/homedatakaryawan">Data Karyawan</a></li>
                <li><a href="#">Data Tarif</a></li>
                <li><a href="#">Data Tarif Penunjang</a></li>
                <li><a href="#">Data Diagnosis</a></li>
                <li><a href="#">Data Kamar</a></li>
                <li><a href="#">Data Paket Penyakit BPJS</a></li>
                <li><a href="#">Data Satuan</a></li>
                <li><a href="#">Data Instansi Rujukan</a></li>
                <li><a href="#">Data Penyedia</a></li> 
                
            </ul>
        </li>

        <li class="head-nav"><a href="#">Admisi</a>
             <ul>
                <li><a href="<?php echo base_url();?>pasien/daftarpasien">Admisi Rawat Jalan</a></li>
                <li><a href="<?php echo base_url();?>pasien/rawatinap">Admisi Rawat Inap</a></li>
                <li><a href="<?php echo base_url();?>pilihkamar/pilih">Pilih Kamar</a></li>
            </ul>
        </li>

         <li class="head-nav"><a href="#">Unit Utama</a>
            <ul>
                <li><a href="<?php echo base_url();?>igd/homeigd">IGD</a></li>
                <li><a href="<?php echo base_url();?>kasirtindakan/homekasirtindakan">Kasir</a></li>
                <li><a href="<?php echo base_url();?>kamaroperasi/homeoperasi">Kamar Operasi</a></li>
            </ul>
        </li>

        <li class="head-nav khusus"><a href="#">Rawat Jalan</a>
            <ul style="top:0px;">
                <li><a href="<?php echo base_url();?>rawatjalan/homerawatjalan">Poli Umum</a></li>
                <li><a href="#">Poli THT</a></li>
                <li><a href="#">Poli Kulit Kelamin</a></li>
                <li><a href="#">Poli Kandungan</a></li>
                <li><a href="#">Poli KIA</a></li>
                <li><a href="#">Poli Mata</a></li>
                <li><a href="#">Poli Anak</a></li>
                <li><a href="#">Poli Penyakit Dalam</a></li>
                <li><a href="#">Poli Bedah</a></li>
                <li><a href="#">Poli Gigi dan mulut</a></li>
                <li><a href="#">Poli Bedah Tulang</a></li>
                <li><a href="#">Poli PPT</a></li>
                <li><a href="#">Poli Tumbuh Kembang</a></li>
                <li><a href="#">Poli Laktasi</a></li>
                <li><a href="#">Poli Paru</a></li>
                <li><a href="#">Poli Kardiologi</a></li>
                <li><a href="#">Poli Saraf</a></li>
                <li><a href="#">Poli Bedah Otrhopedi</a></li>
                <li><a href="#">Poli Psikiatri/Jiwa</a></li>
                <li><a href="#">Poli Urologi</a></li>
                <li><a href="#">Poli Obstetri dan Ginekologi</a></li>
                <li><a href="#">Poli Gizi</a></li>
            </ul>
        </li>

        <li class="head-nav khusus"><a href="#">Rawat Inap</a>
            <ul style="top:0px;">
                <li><a href="<?php echo base_url();?>bersalin/homebersalin">Bersalin</a></li>
                <li><a href="<?php echo base_url();?>ICU/homeicu">ICU</a></li>
                <li><a href="#">ICCU</a></li>
                <li><a href="<?php echo base_url();?>NICU/homenicu">NICU / PICU</a></li>
                <li><a href="#">Isolasi</a></li>
                <li><a href="#">Penyakit Dalam</a></li>
                <li><a href="#">Kesehatan Anak</a></li>
                <li><a href="#">Obstetri</a></li>
                <li><a href="#">Bedah</a></li>
                <li><a href="#">Bedah Orthopedi</a></li>
                <li><a href="#">Bedah Saraf</a></li>
                <li><a href="#">Luka Bakar</a></li>
                <li><a href="#">Saraf</a></li>
                <li><a href="#">Jiwa</a></li>
                <li><a href="#">Psikologi</a></li>
                <li><a href="#">Penatalaksana Pnyguna. NAPZA</a></li>
                <li><a href="#">THT</a></li>
                <li><a href="#">Mata</a></li>
                <li><a href="#">Kulit & Kelamin</a></li>
                <li><a href="#">Kardiologi</a></li>
                <li><a href="#">Paru-Paru</a></li>
                <li><a href="#">Geriatri</a></li>
                <li><a href="#">Kusta</a></li>
                <li><a href="#">Umum</a></li>
                <li><a href="#">Rawat Inap Kelas I</a></li>
                <li><a href="#">Rawat Inap Kelas II</a></li>
                <li><a href="#">Rawat Inap Kelas III</a></li>
                <li><a href="#">Rawat Inap Kelas Utama</a></li>
                <li><a href="#">Rawat Inap Kelas VIP</a></li>
                <li><a href="#">Perinatologi</a></li>
                <li><a href="">Pelayanan Rawat Darurat</a></li>
                
            </ul>
        </li>

        <li class="head-nav"><a href="#">Unit Penunjang</a>
            <ul>
                <li><a href="<?php echo base_url();?>laboratorium/homelab">Laboratorium</a></li>
                <li><a href="#">Fisioterapi</a></li>
                <li><a href="<?php echo base_url();?>radiologi/homeradio">Radiologi</a></li>
                <li><a href="#">EKG</a></li>
                <li><a href="#">USG</a></li>
                <li><a href="#">CT Scan</a></li>
                <li><a href="#">MRI</a></li>
                <li><a href="#">Endoscopy</a></li>
                <li><a href="#">Hemodialisa</a></li>
            </ul>
        </li>        

        <li class="head-nav"><a href="#">Unit Pendukung</a>
            <ul>
                <li><a href="<?php echo base_url();?>logistik/homegudangbarang">Logistik</a></li>
                <li><a href="<?php echo base_url();?>instalasigizi/homeinstalasigizi">Instalasi Gizi</a></li>
                <li><a href="<?php echo base_url();?>ipsrs/homeipsrs">IPS-RS</a></li>
                <li><a href="<?php echo base_url();?>transfusidarah/hometransfusidarah">UTD</a></li>
                <li><a href="<?php echo base_url();?>perawatanjenazah/homeperawatanjenazah">Perawatan Jenazah</a></li>
                <li><a href="<?php echo base_url();?>medikolegal/homemedikolegal">Mediko Legal</a></li>
            </ul>  
        </li>

        <li class="head-nav"><a href="#">Farmasi</a>
            <ul>
                <li><a href="<?php echo base_url();?>farmasi/homegudangobat">Gudang Obat</a></li>
                <li><a href="<?php echo base_url();?>farmasi/homeapotikumum">Apotik Umum</a></li>
                <li><a href="#">Apotik Depo</a></li>
                <li><a href="<?php echo base_url();?>farmasi/homekasirobat">Penjualan Obat</a></li>
                <li><a href="<?php echo base_url();?>farmasi/homereturobat">Retur Obat</a></li>
            </ul>
        </li>

        <li class="head-nav"><a href="#">Rekam Medis</a>
            <ul>
                <li><a href="<?php echo base_url();?>rekammedis/homeolahdatapasien">Olah Data Pasien</a></li>
                <li><a href="<?php echo base_url();?>rekammedis/homeolahdataparamedis">Olah Data Paramedis</a></li>
                <li><a href="<?php echo base_url();?>rekammedis/homeolahdatapenyakit">Olah Data Penyakit</a></li>
                <li><a href="<?php echo base_url();?>rekammedis/homeolahdatakamar">Olah Data Kamar</a></li>
                <li><a href="<?php echo base_url();?>rekammedis/homelaporanrekammedis">Laporan Rekam Medis</a></li>

            </ul>
        </li>        

        <li class="head-nav"><a href="#">Keuangan</a>
            <ul>
                <li><a href="<?php echo base_url();?>keuangan/homeunitpendapatan">Unit Pendapatan</a></li>
                <li><a href="<?php echo base_url();?>keuangan/homeunitperencanaan">Unit Perencanaan</a></li>
                <li><a href="<?php echo base_url();?>keuangan/homeunitbedahara">Unit Realisasi</a></li>
            </ul>
        </li>
    </ul>
</div>


<div class="clearfix">
</div>

<div class="page-container" style="background: #EFEFEF">

    <div class="page-content-wrapper">
        <div class="page-content">
