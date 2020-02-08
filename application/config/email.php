<?php 
ob_start();
$config['protocol'] = 'smtp'; // kita menggunakan protocol SMTP (simple mail transfer protocol) untuk melakukan pengiriman email
//$config['smtp_host'] = 'mail.bursasajadah.com'; // hostname dari SMTP kita
//$config['smtp_port'] = '25';
// $config['smtp_host'] = 'ssl://smtp.googlemail.com'; // hostname dari SMTP kita
$config['smtp_host'] = 'ssl://smtp.gmail.com'; // hostname dari SMTP kita

$config['smtp_port'] = '465';  
$config['smtp_user'] = 'ani.kanayavisual@gmail.com';
$config['smtp_pass'] = 'kanaya88';
// $config['smtp_user'] = 'order@bursasajadah.com';
// $config['smtp_pass'] = 'S+&]p0cUW-JL';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
$config['crlf'] = "\r\n";
?>