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
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>metronic/assets/global/plugins/bootstrap-slider/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>metronic/assets/global/plugins/bootstrap-slider/css/full-slider.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>metronic/assets/global/plugins/typeahead/typeahead.css" rel="stylesheet" type="text/css"/>
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
                <li><a href="#">Data Rekam Medis</a></li>
                <li><a href="#">Data Karyawan</a></li>
                <li><a href="#">Data Tarif</a></li>
                <li><a href="#">Data Tarif Penunjang</a></li>
                <li><a href="#">Data Diagnosis</a></li>
                <li><a href="#">Data Kamar</a></li>        
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
                <li><a href="#">Kasir</a></li>
                <li><a href="<?php echo base_url();?>logistik/homegudangbarang">Logistik</a></li>
                <li><a href="#">Instalasi Gizi</a></li>
                <li><a href="#">UTD</a></li>
                <li><a href="#">Perawatan Jenazah</a></li>
                <li><a href="#">Medika Legal</a></li>
                <li><a href="#">Ambulance</a></li>
            </ul>
        </li>

        <li class="head-nav"><a href="#">Rawat Jalan</a>
            <ul>
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
                <li><a href="#">Poli PPT</a></li>
                <li><a href="#">Poli Tumbuh Kembang</a></li>
                <li><a href="#">Poli Laktasi</a></li>
                <li><a href="#">Poli Paru</a></li>
                <li><a href="#">Poli Kardiologi</a></li>
                <li><a href="#">Poli Sarag</a></li>
                <li><a href="#">Poli Bedah Otrhopedi</a></li>
                <li><a href="#">Poli Psikiatri/Jiwa</a></li>
                <li><a href="#">Poli Urologi</a></li>
                <li><a href="#">Poli Obstetri dan Ginekologi</a></li>
                <li><a href="#">Poli Gizi</a></li>
            </ul>
        </li>

        <li class="head-nav"><a href="#">Rawat Inap</a>
            <ul>
                <li><a href="<?php echo base_url();?>bersalin/homebersalin">Bersalin</a></li>
                <li><a href="<?php echo base_url();?>ICU/homeicu">ICU</a></li>
                <li><a href="<?php echo base_url();?>NICU/homenicu">NICU</a></li>
                <li><a href="#">Rawat Dewasa</a></li>
                <li><a href="#">Rawat Anak</a></li>
                <li><a href="#">Penyakit Dalam</a></li>
                <li><a href="#">Deposit</a></li>
            </ul>
        </li>

        <li class="head-nav"><a href="#">Unit Penunjang</a>
            <ul>
                <li><a href="<?php echo base_url();?>laboratorium/homelab">Labolatorium</a></li>
                <li><a href="#">Fisioterapi</a></li>
                <li><a href="<?php echo base_url();?>radiologi/homeradio">Radiologi</a></li>
                <li><a href="#">EKG</a></li>
                <li><a href="#">USG</a></li>
                <li><a href="#">CT Scan</a></li>
                <li><a href="#">MRI</a></li>
                <li><a href="#">Endoscopy</a></li>
                <li><a href="<?php echo base_url();?>kamaroperasi/homeoperasi">Kamar Operasi</a></li>
                <li><a href="#">Hemodialisa</a></li>
            </ul>
        </li>        

        <li class="head-nav"><a href="#">Farmasi</a>
            <ul>
                <li><a href="<?php echo base_url();?>farmasi/homegudangobat">Gudang Obat</a></li>
                <li><a href="#">Apotik Utama</a></li>
                <li><a href="#">Apotik Depo</a></li>
                <li><a href="<?php echo base_url();?>farmasi/homepenjualanobat">Penjualan Obat</a></li>
                <li><a href="#">Retur Obat</a></li>
            </ul>
        </li>

        <li class="head-nav"><a href="#">Rekam Medik</a>
        </li>        

        <li class="head-nav"><a href="#">Keuangan</a>
            <ul>
                <li><a href="#">Unit Pendapatan</a></li>
                <li><a href="#">Unit Realisasi</a></li>
            </ul>
        </li>
    </ul>
</div>


<div class="clearfix">
</div>

<div class="page-container" style="background: #EFEFEF">

    <div class="page-content-wrapper">
        <div class="page-content">
