<section class="breadcrumb_area blog_banner_two">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle f_48">Pemesanan</h2>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('dashboard_tamu'); ?>">Home</a></li>
                <li class="active">Pemesanan</li>
            </ol>
        </div>
    </div>
</section>
<div style="margin-left: 150px" class="section-top-border">
    <div class="col-lg-8 col-md-8">
        <h3 class="mb-30 title_color">Pesan Hotel</h3>
        <form action="#">
            <div class="mt-10">
                <input type="date" name="last_name" placeholder="Masukan tgl check-in" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan tgl check-in'" required class="single-input-primary">
            </div>
            <div class="mt-10">
                <input type="date" name="last_name" placeholder="Masukan tgl check-out" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan tgl check-out'" required class="single-input-primary">
            </div>
            <div class="mt-10">
                <input type="text" name="last_name" placeholder="Masukan Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Nama Anda'" required class="single-input-primary">
            </div>
            <div class="mt-10">
                <input type="number" name="last_name" placeholder="Masukan no. HP Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan no. HP'" required class="single-input-primary">
            </div>
            <div class="mt-10">
                <input type="email" name="EMAIL" placeholder="Masukan Email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Email Anda'" required class="single-input-primary">
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                <input type="text" name="address" placeholder="     Masukan alamat Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = '       Masukan alamat Anda'" required class="single-input-primary">
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                <div class="form-select" id="default-select">
                    <select>
                        <option value="1">Masukan Kota Anda</option>
                        <option value="1">Dhaka</option>
                        <option value="1">Dilli</option>
                        <option value="1">Newyork</option>
                        <option value="1">Islamabad</option>
                    </select>
                </div>
            </div>
            <div class="mt-10">
                <textarea class="single-textarea" placeholder="Pesan Khusus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan Khusus'" required></textarea>
            </div>
            <div class="button text-right">
                    <button class="btn btn-warning" type="submit"><a href="<?php echo base_url('pemesanan/cetak'); ?>">Simpan</a></button>
                </div>
        </form>
    </div>
</div>