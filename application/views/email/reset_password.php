
<html>

<head>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reset Password</title>
        <link rel="icon" href="<?php echo base_url();?>assets/img/logo.png" type="image/png" sizes="16x16">
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/dropzone/dropzone.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/dropzone/basic.css" rel="stylesheet">
        <link href="<?php echo base_url();?>aseets/admin/css/plugins/codemirror/codemirror.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
        <link  href="<?php echo base_url();?>assets/admin/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/admin/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/slick/slick.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/slick/slick-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/chartist/chartist.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/summernote/summernote.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">






        <style type="text/css">
    /* -------------------------------------
    GLOBAL
    A very basic CSS reset
------------------------------------- */
* {
    margin: 0;
    padding: 0;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    font-size: 14px;
}

img {
    max-width: 100%;
}

body {
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    height: 100%;
    line-height: 1.6;
}

/* Let's make sure all tables have defaults */
table td {
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
body {
    background-color: #f6f6f6;
}

.body-wrap {
    background-color: #f6f6f6;
    width: 100%;
}

.container {
    display: block !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    /* makes it centered */
    clear: both !important;
}

.content {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    padding: 20px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
    background: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
}

.content-wrap {
    padding: 20px;
}

.content-block {
    padding: 0 0 20px;
}

.header {
    width: 100%;
    margin-bottom: 20px;
}

.footer {
    width: 100%;
    clear: both;
    color: #999;
    padding: 20px;
}
.footer a {
    color: #999;
}
.footer p, .footer a, .footer unsubscribe, .footer td {
    font-size: 12px;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #000;
    margin: 40px 0 0;
    line-height: 1.2;
    font-weight: 400;
}

h1 {
    font-size: 32px;
    font-weight: 500;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 18px;
}

h4 {
    font-size: 14px;
    font-weight: 600;
}

p, ul, ol {
    margin-bottom: 10px;
    font-weight: normal;
}
p li, ul li, ol li {
    margin-left: 5px;
    list-style-position: inside;
}

/* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
a {
    color: #1ab394;
    text-decoration: underline;
}

.btn-primary {
    text-decoration: none;
    color: #FFF;
    background-color: #1ab394;
    border: solid #1ab394;
    border-width: 5px 10px;
    line-height: 2;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    border-radius: 5px;
    text-transform: capitalize;
}

/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.aligncenter {
    text-align: center;
}

.alignright {
    text-align: right;
}

.alignleft {
    text-align: left;
}

.clear {
    clear: both;
}

/* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */
.alert {
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    padding: 20px;
    text-align: center;
    border-radius: 3px 3px 0 0;
}
.alert a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    font-size: 16px;
}
.alert.alert-warning {
    background: #f8ac59;
}
.alert.alert-bad {
    background: #ed5565;
}
.alert.alert-good {
    background: #1ab394;
}

/* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
.invoice {
    margin: 40px auto;
    text-align: left;
    width: 80%;
}
.invoice td {
    padding: 5px 0;
}
.invoice .invoice-items {
    width: 100%;
}
.invoice .invoice-items td {
    border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
    border-top: 2px solid #333;
    border-bottom: 2px solid #333;
    font-weight: 700;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 640px) {
    h1, h2, h3, h4 {
        font-weight: 600 !important;
        margin: 20px 0 5px !important;
    }

    h1 {
        font-size: 22px !important;
    }

    h2 {
        font-size: 18px !important;
    }

    h3 {
        font-size: 16px !important;
    }

    .container {
        width: 100% !important;
    }

    .content, .content-wrap {
        padding: 10px !important;
    }

    .invoice {
        width: 100% !important;
    }
}


</style>

</head>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Reset Password</title>
    <link href="styles.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="content-wrap">
                       
                            <table  cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center">
                                        <img class="img-responsive" src="http://www.galamedianews.com/media/original/190728184555-uji-c.png" width="70px" height="70px">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    

                                    <td class="content-block" align="center">
                                        <h1>SIWANI - Pemerintah Kota Cimahi</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                       
                                    </td>
                                </tr>
                                

                                <tr>
                                    <td class="content-block">
                                        
                                    </td>
                                </tr>
                                <tr>
                                     Reset kata sandi email <?php echo $email; ?>. Silakan klik tautan ini untuk reset kata sandi anda <a href="<?php echo base_url(); ?>Login/confirm_new_password/<?php echo $user_id."_".$tanggal;?>">Reset kata sandi</a>
                                </tr>
                              </table>
                        </td>
                    </tr>
                </table>

   
                <div class="footer">
                    <!--
                    <table width="100%">
                        <tr>
                            <td class="aligncenter content-block">Follow <a href="https://www.youtube.com/channel/UCJNjnSC9ItubUI0iA3h6blw">Kanaya Visual Company</a> on Youtube, <a href="https://www.instagram.com/kanayavisual/">@kanayavisual</a> on Instagram. </td>
                        </tr>
                         
                    </table>
                -->
                </div></div>
        </td>
        <td></td>
    </tr>
</table>

</body>
</html>

