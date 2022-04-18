<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Invoice | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>assets/css/demo/nifty-demo.min.css" rel="stylesheet">



    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<div id="page-content">

    <div class="panel col-lg-8 col-lg-offset-2">
        <div class="panel-body">
            <div class="invoice-masthead">
                <div class="invoice-logo">
                    <img style="width: 70px;" src="<?php echo base_url(); ?>assets/tamu/image/D.png" alt="">
                </div>
                <div class="invoice-brand" style="white-space:nowrap">
                    <div class="invoice-text text-center"><h2>Cetak Struk</h2></div>
                </div>
            </div>

            <div class="invoice-bill row">
                <div class="col-sm-9 text-xs-left">
                    <address>
                     <h3 style="margin-bottom: -1px"> <strong class="text-main">Somad</strong><br></h3>
                     somad@gmail.com<br>
                     084524788<br>
                 </address>
             </div>
             <div class="col-sm-3 text-xs-left" style="margin-top: 20px">
                <table class="invoice-details">
                    <tbody>
                        <tr>
                            <td class="text-main text-bold">Id #</td>
                            <td class="text-right text-info text-bold">INV-54968-17</td>
                        </tr>
                        <tr>
                            <td class="text-main text-bold">Cek - In</td>
                            <td class="text-right"><span>Jun 05, 2016</span></td>
                        </tr>
                        <tr>
                            <td class="text-main text-bold">Cek - Out</td>
                            <td class="text-right">Jun 11, 2016</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="new-section-sm bord-no">

        <div class="row">
            <div class="col-lg-12 table-responsive">
                <table class="table table-bordered invoice-summary">
                    <thead>
                        <tr class="bg-trans-dark">
                            <th class="text-uppercase">Deskripsi</th>
                            <th class="min-col text-center text-uppercase">Kasur</th>
                            <th class="min-col text-center text-uppercase">Tamu</th>
                            <th class="min-col text-center text-uppercase">Price</th>
                            <th class="min-col text-right text-uppercase">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Kamar</strong>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">$80.55</td>
                            <td class="text-right">$161.1</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Kamar</strong>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">$299.00</td>
                            <td class="text-right">$299.00</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Kamar</strong>
                            </td>
                            <td class="text-center">4</td>
                            <td class="text-center">1</td>
                            <td class="text-center">$10.99</td>
                            <td class="text-right">$43.96</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Kamar</strong>
                            </td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">$17.00</td>
                            <td class="text-right">$34.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="clearfix col-md-6">
            <!-- <table class="table invoice-total">
                <tbody>
                    <tr>
                        <td><strong>Sub Total :</strong></td>
                        <td>$538.06</td>
                    </tr>
                    <tr>
                        <td><strong>TAX :</strong></td>
                        <td>$73.98</td>
                    </tr>
                    <tr>
                        <td><strong>TOTAL :</strong></td>
                        <td class="text-bold h4">$612.04</td>
                    </tr>
                </tbody>
            </table> -->
        </div>
        <div class="clearfix col-md-3">
            <!-- <table class="table invoice-total">
                <tbody>
                    <tr>
                        <td><strong>Sub Total :</strong></td>
                        <td>$538.06</td>
                    </tr>
                    <tr>
                        <td><strong>TAX :</strong></td>
                        <td>$73.98</td>
                    </tr>
                    <tr>
                        <td><strong>TOTAL :</strong></td>
                        <td class="text-bold h4">$612.04</td>
                    </tr>
                </tbody>
            </table> -->
        </div>
        <div class="clearfix col-md-3">
            <table class="table invoice-total">
                <tbody>
                    <tr>
                        <td><strong>Sub Total :</strong></td>
                        <td>$538.06</td>
                    </tr>
                    <tr>
                        <td><strong>TAX :</strong></td>
                        <td>$73.98</td>
                    </tr>
                    <tr>
                        <td><strong>TOTAL :</strong></td>
                        <td class="text-bold h4">$612.04</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-right no-print">
            <a href="javascript:window.print()" class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></a>
            <a href="#" class="btn btn-primary">Confirm Payment</a>
        </div>

        <hr class="new-section-sm bord-no">

        <div class="well well-sm">
            <p class="text-bold text-main text-uppercase">Notes &amp; Information</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <p>If you have any questions concerning this invoice, please contact <strong class="text-main">billing[at]mycompany.com</strong></p>
        </div>
    </div>
</div>




</div>   



</html>

