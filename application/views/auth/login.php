<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php 
         $data = sitedata();
         $total_segments = $this->uri->total_segments(); 
         echo ucwords(str_replace('_', ' ', 'Login')).' '?></title>
        <link
            href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'
            rel='stylesheet'
            type='text/css'>
        <link
            rel="stylesheet"
            href="<?= base_url(); ?>assets/frontend/bootstrap.min.css">
        <link
            rel="stylesheet"
            href="<?= base_url(); ?>assets/frontend/font-awesome.min.css">
        <link href="<?= base_url(); ?>assets/frontend/custom.css" rel="stylesheet">
        <script src="<?= base_url(); ?>assets/plugins/jquery/jquery_frnt.js"></script>
        <link
            rel="stylesheet"
            href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
        <link
            rel="stylesheet"
            href="<?= base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.min.css">
             <link rel="stylesheet" href="<?= base_url()?>leaflet/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="<?= base_url()?>leaflet/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<link rel="stylesheet" href="<?= base_url()?>leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<script src="<?= base_url()?>leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

    </head>
    <body >
        <input type="hidden" id="base" value="<?php echo base_url(); ?>">

        <!--HEADER-BAR-->
        <div class="tb_header">
            <div class="container">
                <div class="col-md-6" style="padding:0;">
                    <div style="display: flex; align-items: center; padding: 0;">
                        <div style="margin-top: 20px; margin-right: 10px;">
                            <img
                                height="40"
                                width="20"
                                src="<?= base_url().'assets/uploads/OIP3.jpg' ?>"
                                alt="Bus Image">
                        </div>
                        <div style="text-align: center;">
                            <h2>Tracking Bus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding:0;"></div>
                <div class="col-md-4" style="padding:0;"></div>
                <div class="col-md-2" style="padding:0;">
                    <div class="signin_up">
                        <ul>
                            <li>
                                <a href="#myModals" data-toggle="modal" data-target="#myModals">Login</a>
                                <span style="color:#f0a2a3;"></span></li>
                            <!-- <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Sign
                            Up</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shadow">
                <hr class="border2"></hr>
            </div>
        </div>

        <!--HEADER-BAR-END-->
        <!-- Modal -->
        <div
            class="modal fade"
            id="myModals"
            role="dialog"
            data-backdrop="static"
            data-keyboard="false">
            <div class="modal-dialog">
                <!-- Modal content-->
                <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
                <form action="<?= base_url().'login/login_action'; ?>" method="post">
                    <div class="login-block">
                        <h1>Login</h1>
                        <input
                            type="text"
                            required=""
                            name="username"
                            placeholder="Username"
                            class="username"
                            id="username"/>
                        <input
                            type="password"
                            required=""
                            class="password"
                            name="password"
                            placeholder="Password"
                            id="password"/>
                        <button type="submit" value="Login" style="position: relative;">Login</button>
                        <br>

                        <div class="login_res" style="text-align:center;"></div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
                <form
                    id="signup"
                    method="post"
                    class="basicvalidation"
                    action="<?php echo base_url();?>frontendbooking/signup">
                    <div class="login-block">
                        <h1>Sign Up</h1>
                        <input
                            class="name"
                            required="required"
                            id="c_name"
                            name="c_name"
                            placeholder="Name">
                        <input
                            class="name"
                            required="required"
                            id="c_mobile"
                            name="c_mobile"
                            placeholder="Mobile">
                        <input
                            class="name"
                            required="required"
                            id="c_email"
                            name="c_email"
                            placeholder="Email(Username)">
                        <input
                            type="password"
                            required="required"
                            class="name"
                            id="c_pwd"
                            name="c_pwd"
                            placeholder="Password">
                        <input
                            class="name"
                            required="required"
                            id="c_address"
                            name="c_address"
                            placeholder="Address">
                        <br>
                        <span class="terms_tb">By signing up, you agree to our
                            <a class="cond_tb" href="#">Terms and Conditions.</a>
                        </span>
                        <br>
                        <br>
                        <button type="submit" value="Sign up" style="position: relative;">Sign UP</button>
                        <br>

                        <div class="signup_res" style="text-align:center;"></div>
                        <br>
                        <div class="account">
                            <a
                                data-dismiss="modal"
                                href="#myModals"
                                data-toggle="modal"
                                data-target="#myModals">Already have an account?</a>
                        </div>
                        <div class="sign_in">
                            <a
                                data-dismiss="modal"
                                href="#myModals"
                                data-toggle="modal"
                                data-target="#myModals">Sign In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="myModalf" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
                <form id="forgot" data-parsley-validate="">
                    <div class="login-block">
                        <h1>Forgot Password</h1>
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            class="username"
                            data-parsley-required="true"/>
                        <!-- <span class="terms_tb">By signing up, you agree to our <a class="cond_tb"
                        href="#">Terms and Conditions.</a></span> <br> <br> -->
                        <input
                            type="button"
                            value="RESET"
                            style="position: relative;"
                            onclick="Forgot()">
                        <br>
                        <div class="small_loader" style="text-align:center;display:none"></div>
                        <div class="forgot_res" style="text-align:center;"></div>
                        <br>
                        <div class="account">
                            <a href="#">Already have an account?</a>
                        </div>
                        <div class="sign_in">
                            <a
                                data-dismiss="modal"
                                href="#myModals"
                                data-toggle="modal"
                                data-target="#myModals">Sign In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--SEARCH-BAR-->
        <div class="container">

            <div class="row" style="min-height:400px;margin-top:120px;">
                <div class="row">
                    <div class="col-md-12">
                        <span id="ermsg"></span>
                        <?php $successMessage = $this->session->flashdata('successmessage');  
           $warningmessage = $this->session->flashdata('warningmessage');                    
            if (isset($successMessage)) { echo '<div id="alertmessage" class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><span style="margin-left: 40%;">
                         '. $successMessage.'
                        </span></div>
                </div>'; } 
            if (isset($warningmessage)) { echo '<div id="alertmessage" class="col-md-12">
                <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><span style="margin-left: 40%;">
                         '. $warningmessage.'
                        </span></div>
                </div>'; }    
            ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="track" method="post">
                        <div clas="row">
                            <div class="card-body">
                                <div class="row col-md-12">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <select
                                                id="t_vechicle"
                                                required="true"
                                                class="form-control selectized"
                                                name="t_vechicle">
                                                <option value="">Pilih Bus</option>
                                                <?php  foreach ($vechiclelist as $key => $vechiclelists) { ?>
                                                <option value="<?php echo output($vechiclelists['v_id']) ?>"><?php echo output($vechiclelists['v_name']).' - '. output($vechiclelists['v_registration_no']); ?></option>
                                                <?php  } ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Load</button>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="map" style="width: 750px; height: 400px;"></div>
                                            <script>
                                                const map = L
                                                    .map('map')
                                                    .setView([
                                                        -6.931268, 107.615322
                                                    ], 13);

                                                L
                                                    .tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                        
                                                        maxZoom: 20,
                                                        id: 'mapbox/streets-v11',
                                                        tileSize: 512,
                                                        zoomOffset: -1
                                                    })
                                                    .addTo(map);

                                                // Variabel untuk menyimpan marker
                                                var markers = [];
                                                // Inisialisasi objek routing
                                                var control = L
                                                    .Routing
                                                    .control({routeWhileDragging: true})
                                                    .addTo(map);

                                                // Variabel untuk menyimpan koordinat klik pertama dan kedua
                                                var firstClickLatLng = null;

                                                // Inisialisasi objek routing

                                                function onMapClick(e) {
                                                    if (markers.length < 2) {
                                                        var marker = L
                                                            .marker(e.latlng)
                                                            .addTo(map);
                                                        markers.push(marker);

                                                        if (markers.length === 1) {
                                                            // Jika ini klik pertama, simpan koordinatnya dan tambahkan sebagai titik awal
                                                            // pada routing
                                                            firstClickLatLng = e.latlng;

                                                            control.spliceWaypoints(0, 1, e.latlng);
                                                            marker
                                                                .bindPopup("Lokasi awal: " + e.latlng.toString())
                                                                .openPopup();
                                                            document
                                                                .getElementById('latlong_start')
                                                                .value = firstClickLatLng.lat + ', ' + firstClickLatLng.lng;

                                                        } else {
                                                            // Jika ini klik kedua, simpan koordinatnya dan tambahkan sebagai titik akhir
                                                            // pada routing
                                                            var secondClickLatLng = e.latlng;

                                                            control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
                                                            marker
                                                                .bindPopup("Lokasi akhir: " + e.latlng.toString())
                                                                .openPopup();
                                                            document
                                                                .getElementById('latlong_end')
                                                                .value = secondClickLatLng.lat + ', ' + secondClickLatLng.lng;

                                                        }
                                                    }
                                                }

                                                map.on('click', onMapClick);
                                            </script>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-6">
                    <div class="tb_bus">
                        <img width="400" height="300" src="<?= base_url(); ?>assets/uploads/OIP.jpg">
                    </div>
                </div>
            </div>
        </div>
        <hr class="border2"></hr>
        <script src="<?= base_url(); ?>assets/frontend/bootstrap.min.js"></script>
        <script
            src="<?= base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script
            type="text/javascript"
            src="https://maps.google.com/maps/api/js?key=<?php echo output($data['s_googel_api_key']); ?>&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing"></script>
        <script src="<?= base_url(); ?>assets/fronendbooking.js"></script>
        <script src="<?= base_url(); ?>assets/distance_calculator.js"></script>
    </body>
</html>