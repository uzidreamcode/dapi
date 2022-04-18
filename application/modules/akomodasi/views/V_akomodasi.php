<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Kamar</h2>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('dashboard_tamu'); ?>">Home</a></li>
                <li class="active">Kamar</li>
            </ol>
        </div>
    </div>
</section>
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Daftar Kamar</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
        </div>
        <div class="row accomodation_two">
            <?php
            foreach ($tampil as $pecah) 
                {?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img style="max-height: 300px" src="<?php echo base_url(); ?>assets/img/<?php echo $pecah->foto_kamar?> " alt="">
                                <a href="<?php echo base_url('pemesanan/index/'.$pecah->id_kamar ) ?>" class="btn theme_btn button_hover">Pesan</a>
                            </div>
                            <a href="#"><h4 class="sec_h4"><?php echo $pecah->nama_jenis?></h4></a>
                            <h5>Rp <?php echo $pecah->harga?><small>/Malam</small></h5>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
        <!--================ Accomodation Area  =================-->