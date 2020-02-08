<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lupa Password</title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/Logo-Cimahi.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <form method="POST" action="<?php echo base_url(); ?>Login/aksi_konfirmasi_password" id="myform" onSubmit="return validasi()">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-password-image" style="background-image: url(&quot;<?php echo base_url(); ?>assets/img/dogs/image1.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-2">Konfirmasi Password Baru</h4>
                                        <p class="mb-4">Silakan masukkan password baru!</p>
                                    </div>
                                        <div>
                                           <?php echo $this->session->flashdata('message');?>
                                       </div>

                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="new_password" aria-describedby="emailHelp" placeholder="Password" name="new_password"></div>
                                         <div class="form-group"><input class="form-control form-control-user" type="password" id="new_password_confirm" aria-describedby="emailHelp" placeholder="Konfirmasi Password" name="new_password_confirm"></div>
                                         <input type="hidden" class="form-control" placeholder="Konfrimasi Kata Sandi baru"  name="user_id" value="<?php echo $user_id; ?>">
                                        <button class="btn btn-primary btn-block text-white btn-user"
                                            type="submit">Reset Password</button></form>
                                    <div class="text-center">
                                        <!--
                                        <hr><a class="small" href="register.html">Create an Account!</a></div>

                                    <div class="text-center"><a class="small" href="login.html">Already have an account?
                                     Login!</a></div>
                                 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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

        var new_password=document.forms["myform"]["new_password"].value;

//       validasi Identity tidak boleh kosong (required) 
        
        if (new_password==null || new_password=="")
          {
           swal({
                title: "Peringatan!",
                text: "Kata sandi baru harus diisi"
            });
          return false;
          }


        var new_password_confirm=document.forms["myform"]["new_password_confirm"].value;

//       validasi Identity tidak boleh kosong (required) 
        
        if (new_password_confirm==null || new_password_confirm=="")
          {
           swal({
                title: "Peringatan!",
                text: "Konfirmasi kata sandi baru harus diisi"
            });
          return false;
          }
                               
            if (new_password != new_password_confirm) {                
                swal({
                title: "Peringatan!",
                text: "Kata Sandi baru dan Konfirmasi kata sandi baru harus sama"
            });
                 return false;
            }
//       
     }


    </script>

</body>

</html>