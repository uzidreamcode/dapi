<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url(); ?>assets/tamu/image/favicon.png" type="image/png">
    <title>D'Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/vendors/linericon/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tamu/css/responsive.css">
</head>
<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href=""><img style="width: 50px;" src="<?php echo base_url(); ?>assets/tamu/image/D.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">

                        <?php if($this->uri->segment('1') == 'dashboard_tamu'){ ?>
                            <li>
                                <a class="nav-link active" href="<?php echo base_url('dashboard_tamu'); ?>"> Home</a>
                                <!--Submenu-->
                            </li>
                        <?php } else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('dashboard_tamu'); ?>">
                                    Home
                                </a>
                                <!--Submenu-->
                            </li>
                        <?php } ?>

                        <?php if($this->uri->segment('1') == 'akomodasi'){ ?>
                            <li>
                                <a class="nav-link active" href="<?php echo base_url('akomodasi'); ?>">
                                    Kamar
                                </a>
                                <!--Submenu-->
                            </li>
                        <?php } else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('akomodasi'); ?>">
                                    Kamar
                                </a>
                                <!--Submenu-->
                            </li>
                        <?php } ?>
                        
                        <?php if($this->uri->segment('1') == 'login'){ ?>
                            <li>
                                <a class="nav-link" href="<?php echo base_url('login'); ?>">
                                    Sign in
                                </a>
                                <!--Submenu-->
                            </li>
                        <?php } else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('login'); ?>">
                                    Sign in
                                </a>
                                <!--Submenu-->
                            </li>
                        <?php } ?>
                    </ul>
                </div> 
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section>
     <?php
     $this->load->view($namamodule .'/'.$namafileview);
     ?>
 </section>

 <!--================ start footer Area  =================-->    
 <footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Tentang</h6>
                    <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Link Navigasi</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Home</a></li>
                                <li><a href="akomodasi">Akomodasi</a></li>
                                <li><a href="pemesanan">Pemesanan</a></li>
                                <!-- <li><a href="#">Portfolio</a></li> -->
                            </ul>
                        </div>
                            <!-- <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div> -->                                      
                        </div>                          
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Hubungi</h6>
                        <div class="col-lg-12 col-sm-12 footer-social"><!-- 
                            <a href="#"><i class="fa fa-facebook"></i>:  Muhammad Khadafi H<br></a>
                            <a href="#"><i class="fa fa-twitter"></i><br></a>
                            <a href="#"><i class="fa fa-dribbble"></i><br></a>
                            <a href="#"><i class="fa fa-behance"></i><br></a>
                        --></div>
                    </div>
                </div>                      
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/tamu/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/<?php echo base_url(); ?>assets/tamu/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/js/mail-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/js/mail-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/js/stellar.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/tamu/js/custom.js"></script>
</body>
</html>