<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Masuk</title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/Logo-Cimahi.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">
</head>
<!--
<body class="bg-gradient-primary" style="background-image: url(&quot;<?php echo base_url(); ?>assets/img/IMG-20180209-WA0015.jpg&quot;);opacity: 1;">
    <div style="background-color: rgba(0,0,0,0.67);">
        <div class="container-fluid">
            <div style="height: 750px;">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-12 col-xl-3">
                        <div class="card shadow-lg o-hidden border-0 my-1" style="opacity: 1;filter: blur(0px) grayscale(0%);">
                            <div class="card-body p-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-xl-5 d-none d-lg-flex">
                                        <div class="flex-grow-1 bg-login-image pt-3">
                                            <div class="text-center"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/Logo-Cimahi.png" style="width: 215px;"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="p-4">
                                            <div class="text-center img-hide-login"><img class="img-fluid" src="assets/img/Logo-Cimahi.png" style="width: 125px;"></div>
                                            <div class="text-center">
                                                <h4 class="text-dark mb-1"><strong>E-RESES</strong></h4>
                                                <h6 class="text-dark mb-4"><strong>SISTEM INFORMASI&nbsp;</strong><br><strong>DEWAN KOTA CIMAHI</strong></h6>
                                            </div>
                                            <!--
                                            <form class="user" >
                                            -->
                                            <!--
                                             <?php echo $this->session->flashdata('message');?>

                                            <form method="POST" action="<?php echo base_url(); ?>Auth/login" id="myform" onSubmit="return validasi()">
                                           
                                                
                                                <div
                                                    class="form-group"><input class="form-control form-control-sm text-size" type="text" placeholder="Masukan Username Anda..." name="identity"
                                                    id="identity"></div>
                                        <div class="form-group"><input class="form-control form-control-sm text-size" type="password" placeholder="Masukan Password Anda..." name="password" id="password"></div>
                                        <div class="form-group">
                                            <!--
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label text-size" for="formCheck-1">Ingat Saya</label></div>
                                            </div>
                                        -->

                                        <!--
                                        </div><button class="btn btn-info btn-block btn-sm text-white btn-user text-size" type="submit">MASUK</button>
                                        <hr>
                                        </form>
                                        <div class="text-center"><a class="small text-size" href="<?php echo base_url(); ?>Login/lupa_password">Lupa Password?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
-->

   <body class="bg-gradient-primary" style="background-image: url(&quot;<?php echo base_url(); ?>assets/img/IMG-20180209-WA0015.jpg&quot;);opacity: 1;">
    <div style="background-color: rgba(0,0,0,0.67);">
        <div class="container-fluid">
            <div style="height: 883px;">
                <div class="row justify-content-center">
                    <div class="col-7 col-sm-5 col-md-4 col-lg-3 col-xl-3">
                        <div class="card shadow-lg o-hidden border-0 my-5" style="opacity: 1;filter: blur(0px) grayscale(0%);">
                            <div class="card-body p-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-xl-5 d-none d-lg-flex">
                                        <div class="flex-grow-1 bg-login-image pt-3">
                                            <div class="text-center"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/Logo-Cimahi.png" style="width: 215px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-10">
                                        <div class="p-3">
                                            <div class="text-center img-hide-login"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/Logo-Cimahi.png" style="width: 125px;"></div>
                                            <div class="text-center">
                                                <!--<h4 class="text-dark mb-1"><strong>E-RESES</strong></h4>-->
                                                <h6 class="text-dark mb-2"><strong>SISTEM INFORMASI&nbsp;</strong><br><strong>DEWAN CIMAHI</strong></h6>
                                            </div>
                                            <?php echo $this->session->flashdata('message');?>

                                            <form method="POST" action="<?php echo base_url(); ?>Auth/login" id="myform" onSubmit="return validasi()">
                                                <!--
                                                <div class="form-group invisible" style="height: 0px;"><select class="form-control text-size"><option value="undefined" selected="">Pilih Reses</option><option value="12">Reses 1</option><option value="13">Reses 2</option><option value="14">Reses3</option></select></div>
                                            -->
                                                <div
                                                    class="form-group text-nowrap input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text text-size"><i class="fas fa-user"></i></span></div><input class="form-control form-control-sm text-size" type="text" placeholder="Username..." name="identity"
                                                    id="identity"></div>
												<div
													class="form-group text-nowrap input-group">
													<div class="input-group-prepend"><span class="input-group-text text-size"><i class="fas fa-lock"></i></span></div><input class="form-control form-control-sm text-size" type="password" placeholder="Password..." name="password" id="password"></div>

                                                        <?php
                                                        $url=$this->uri->segment('2');

                                                          ?>
                                                    <input type="hidden" name="rule" value="<?php echo $url; ?>">
												<button class="btn btn-info btn-block btn-sm text-white btn-user text-size" type="submit">MASUK</button>
												<hr>
											</form>
                                        <div class="text-center"><a class="small text-size" href="#"><button class="btn btn-primary btn-sm text-size" type="button" data-toggle="modal" data-target="#contactPerson"><i class="fas fa-phone"></i>&nbsp; &nbsp;Kontak Person</button></a></div>
									</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="contactPerson">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-phone"></i>&nbsp;Kontak Person</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p><i class="fab fa-whatsapp"></i>&nbsp;Shidik - 0813 2061 5531.</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button></div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/reses.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>
    <script>
function validasi()
    {

        var identity=document.forms["myform"]["identity"].value;
        if (identity==null || identity=="")
          {
           swal({
                title: "Peringatan!",
                text: "Username tidak boleh kosong!"
            });
          return false;
          };
        var password=document.forms["myform"]["password"].value;
        if (password==null || password=="")
          {
           swal({
                title: "Peringatan!",
                text: "Password tidak boleh kosong!"
            });
          return false;
          };
     }
</script>
</body>

</html>