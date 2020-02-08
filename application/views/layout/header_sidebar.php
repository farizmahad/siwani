<?php
$rule=$this->session->userdata('rule');



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard </title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/Logo-Cimahi.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/css/sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/css/dataTables/datatables.min.css">
</head>
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark navbar-expand align-items-start visible sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-2" href="<?php echo base_url(); ?>dashboard">
                    <div class="sidebar-brand-icon"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/Logo-Cimahi.png"></div>
                    <div class="sidebar-brand-text ml-2"><span class="text-size">SISTEM informasi&nbsp;<br>dewan cimahi</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-tachometer-alt"></i><span class="text-size">Dashboard</span></a></li>
                    <?php
                    $group = array('operator','dewan');
                    $group2=array('operator');
                    ?>
                    <?php if($rule=="reses" and $this->ion_auth->in_group($group)){ ?>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>Proposal"><i class="fas fa-file-pdf"></i><span class="text-size">Proposal</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>Hasil_reses"><i class="fas fa-check-circle"></i><span class="text-size">Hasil Reses</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>Usulan/cetak_proposal_reses"><i class="fas fa-print"></i><span class="text-size">Cetak Proposal Reses</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>Usulan/cetak_proposal"><i class="fas fa-print"></i><span class="text-size">Cetak Hasil Reses</span></a></li>

                    

                <?php }elseif($rule=="perjalanandinas" and $this->ion_auth->in_group($group2)){ ?>

                    <!--<li class="nav-item" role="presentation"><a class="nav-link" style="padding-top: 0px;" href="<?php echo base_url(); ?>Usulan/kesimpulan"><i class="fas fa-check-circle"></i><span class="text-size">Kesimpulan Usulan</span></a></li>-->
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>Perjalanan_dinas"><i class="fas fa-plane-departure"></i><span class="text-size">Perjalanan Dinas</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>Perjalanan_dinas/daftar_cetak_perjalanan_dinas"><i class="fas fa-plane-departure"></i><span class="text-size">Cetak Rekap Perjalanan Dinas</span></a></li>
                    <?php 
				$group9=array('super admin','operator');
                ?>
              
                <?php }elseif($rule=="jadwalsidang"){ ?>
                      <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>Sidang"><i class="far fa-id-card"></i><span class="text-size">Jadwal Sidang / Rapat</span></a></li>
             
                <?php } ?>
				
				<?php if($this->ion_auth->in_group($group2)) { ?>
					
                <li class="nav-item" role="presentation"><a class="nav-link active" style="padding-top: 0px;" href="<?php echo base_url(); ?>master-data"><i class="fas fa-user-cog"></i><span class="text-size">Master Data</span></a></li>
               
				<?php } ?>

                 

                
                   
                 
                

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/js/dataTables/datatables.min.js"></script>



    <script src="<?php echo base_url(); ?>assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/reses.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>