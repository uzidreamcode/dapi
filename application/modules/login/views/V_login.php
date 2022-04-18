<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo base_url(); ?>assets/loginn/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/loginn/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/loginn/css/style.css">

</head>
<body class=" " style="background-image: url(<?php echo base_url(); ?>assets/loginn/images/about_banner.jpg);">

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">D'Hotel</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="<?php echo base_url('login/proses_login' ) ?>" method="post" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                            </div>
                            <div class="form-group">
                              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                          </div>
                          <div class="row">
                            <button type="submit" class="form-control btn btn-primary submit px-3 col-md-6">Sign In</button>
                            <a href="dashboard_tamu" class="form-control btn btn-primary col-md-6">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>assets/loginn/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/loginn/js/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/loginn/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/loginn/js/main.js"></script>

</body>
</html>

