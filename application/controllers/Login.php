<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
       
	}

	public function index($id){
		
		$this->load->view('login_vw');
	}

	public function selamat_datang()
	{
		$this->load->view('selamat_datang_vw');
	}

	public function login_sistem($id){
		
		$this->load->view('login_vw');
	}

	public function lupa_password(){
		$this->load->view('lupa_password_vw');
	}


	public function aksi_lupa_password(){

		$email=$this->input->post('email');
		$cek_email=$this->Master_model->email_exist($email);
        $jumlah_cek_email=count($cek_email);
      

		if($jumlah_cek_email==1){
          
             $clean = $this->security->xss_clean($email);    
           

             $this->kirim_email_reset($email);     


           echo $this->session->set_flashdata('message', '<div class="alert alert-success">Tautan reset password sudah dikirim</div>');
		}elseif($jumlah_cek_email==0){
           echo $this->session->set_flashdata('message', '<div class="alert alert-success">Email tidak terdaftar</div>');
		}

       redirect('Login/lupa_password');

	}


	function kirim_email_reset($email){

    $data['tanggal']=date('Ymd');
     $data['email']=$email;
     $check_email_exists=$this->Master_model->email_exist($email);
     foreach($check_email_exists as $row){
     	$user_id=$row->id;
     }
     $data['user_id']=$user_id;
     $message = $this->load->view('email/reset_password',$data, TRUE);
     $this->email->from('no-reply@siwanicimahi.com', 'SIWANI - Pemerintah Kota Cimahi');
     $this->email->to($email);
     $this->email->subject('Reset Password');
     $this->email->message($message);
     $this->email->send();
     

  }


  public function confirm_new_password($id)
	{
		$var     = explode("_",$id);
	    $user_id = $var[0];
	    $tanggal = $var[1];
        $tanggal_sekarang=date('Ymd');
       
        if($tanggal_sekarang !=$tanggal){
             echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Tautan sudah kadaluarsa! Silakan masukkan kembali email anda untuk mengubah kata sandi</div>'); 
             redirect('forgot-password');
        }else{
		   $data['user_id']=$user_id;
           $this->load->view('confirm_password_baru_vw',$data);
        }
		
	}


	public function aksi_konfirmasi_password(){

       $id      = $this->input->post('user_id');
       $new_password = $this->input->post('new_password');
       $data = array(
					'password' => $new_password,
					 );

		$this->ion_auth->update($id, $data);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Kata sandi berhasil diubah! Silakan login menggunakan kata sandi baru!</div>'); 
		redirect ('/','refresh');


	}


}
