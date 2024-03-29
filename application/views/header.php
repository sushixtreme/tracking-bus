<?php  
   function activate_menu($controller) {
     $CI = get_instance();
     $last = $CI->uri->total_segments();
     $seg = $CI->uri->segment($last);
     if(is_numeric($seg)) {
       $seg = $CI->uri->segment($last-1);
     }
     if (in_array($controller, array($seg))) {
         return 'active';
     } else {
         return '';   
     } 
   } 
   if(!isset($this->session->userdata['session_data'])) {
     $url=base_url().'login';
     header("location: $url");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php 
         $data = sitedata();
         $total_segments = $this->uri->total_segments(); 
         echo ucwords(str_replace('_', ' ', $this->uri->segment(1))).' | '.output($data['s_companyname']) ?></title>
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/toast/toast.min.css" />
      <script src="<?= base_url(); ?>assets/plugins/toast/toast.min.js"></script>
      <link rel="stylesheet" href="<?= base_url()?>leaflet/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="<?= base_url()?>leaflet/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<link rel="stylesheet" href="<?= base_url()?>leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<script src="<?= base_url()?>leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>



    <!-- leaflet css  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark theme-navbar-primary">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <input type="hidden" id="base" value="<?php echo base_url(); ?>">
         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item">
               <a class="nav-link"  href="<?= base_url(); ?>login/logout">
               <i class="fas fa-sign-out-alt"></i></a>
            </li>
         </ul>
      </nav>
      <!-- /.navbar -->