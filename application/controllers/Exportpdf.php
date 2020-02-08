<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Exportpdf extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()){ redirect('/');}
		$this->load->model('Master_model');
        $this->load->model('Usulan_model');
        $this->load->model('Dinas_model');
         $this->load->helper('tgl_indo_helper');
	}
	

	public function index()
	{
		$data = $this->load->view('mpdf_v');
	}

	

	public function printPDF()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('hasilPrint', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}


	public function laporan_spt(){
      
      $parameter=$this->input->get('parameter');
      $id=$this->input->get('id');

      $data['dinas']=$this->Dinas_model->tampil_perjalanan_dinas_id($id);

     
      $data['id']=$id;
	  
	  if($parameter=="anggota_dprd"){
	  $data['atasan']=$this->Dinas_model->select_ketua_dprd($id);
	  /*
	  $data['users_dinas']=$this->Dinas_model->tampil_users_dinas_spt($id);
	  $dinas=$this->Dinas_model->tampil_users_dinas_spt($id);
	  */ 

      $data['ketua_dprd']=$this->Dinas_model->tampil_ketua_dprd();

      

      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210, 330]]);
		$data = $this->load->view('spt_dprd', $data, TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	  }elseif($parameter=="anggota_setwan"){

        $data['sekretaris']=$this->Dinas_model->tampil_sekretaris_setwan();
        

	  	$data['users_dinas']=$this->Dinas_model->tampil_users_dinas_setwan($id);
	  	$atasan=$this->Dinas_model->select_atasan_setwan();
        foreach($atasan as $dow){
            $data['anggota_ketua']=$dow->nama;
        }
	    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210, 330]]);
		$data = $this->load->view('spt_setwan',$data, TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	  
	  }


	}


	
   public function laporan_visum(){
    
    $id=$this->input->get('id');
$dinas=$this->Dinas_model->tampil_perjalanan_dinas_id($id);
        foreach($dinas as $din){
            $data['status_peserta_dinas']=$din->status_peserta_dinas;
            $data['pejabat']=$din->pejabat;
            $data['no_surat_tugas']=$din->surat_perintah;
            $data['perihal']=$din->perihal;
            $data['tingkat_biaya']=$din->tingkat_biaya;
            $status_peserta_dinas=$din->status_peserta_dinas;
            $data['jenis_kendaraan']=$din->jenis_kendaraan;
        }

        if($status_peserta_dinas=="1"){
           $data['parameter']="anggota_dprd";
           $data['user_dinas']=$this->Dinas_model->tampil_users_dinas($id);
           $data['pimpinan']=$this->Dinas_model->tampil_ketua_dprd();
        }elseif($status_peserta_dinas=="2"){
           $data['parameter']="anggota_setwan";
           $data['user_dinas']=$this->Dinas_model->tampil_users_dinas_setwan($id);
           $data['pimpinan']=$this->Dinas_model->tampil_sekretaris_setwan();
        
        }

        $data['pengikut_dinas']=$this->Dinas_model->tampil_pengikut($id);
        $data['id_terakhir']=$id_terakhir;
        $data['users']=$this->Dinas_model->tampil_users_dewan();
        $transportasi=$this->Dinas_model->tampil_transportasi($id);
        foreach($transportasi as $row){
            $data['id_transportasi']=$row->id;
            $data['jenis']=$row->jenis;


            $data['namaMaskapai']=$row->nama_rental;
            //darat
            $data['alamat_rental']=$row->alamat_rental;
            $data['kontak_rental']=$row->kontak_rental;
            //

            $data['asal']=$row->asal;
            $data['tujuan']=$row->tujuan;
            $data['tgl_berangkat']=$row->tgl_berangkat;
            $data['tgl_kembali']=$row->tgl_kembali;

            //darat
            $data['lama_sewa']=$row->lama_sewa;
            $data['biaya_sewa']=$row->biaya_sewa;
            $data['total_biaya_rental']=$row->total_biaya_rental;

             //


            //udara 
            $data['nomor_tiket']=$row->nomor_tiket;
            $data['harga_tiket']=$row->harga_tiket;


             $data['anggaran']=$row->anggaran;
             $data['akun']=$row->akun;
             $data['keterangan_rental']=$row->keterangan_rental;
        }

        $penginapan=$this->Dinas_model->tampil_penginapan($id);
        foreach($penginapan as $pe){
              $data['id_penginapan']=$pe->id;
             $data['hotel']=$pe->hotel;
             $data['tgl_mendaftar']=$pe->tgl_mendaftar;
             $data['tgl_keluar']=$pe->tgl_keluar;
             $data['biaya']=$pe->biaya;

             //dart
             $data['jumlah_ako']=$pe->jumlah_ako;
             $data['gu']=$pe->gu;

             //udara
             $data['lama_hotel']=$pe->lama;
             $data['total_rate_hotel']=$pe->total_rate;
             $data['uang_representasi']=$pe->uang_representasi;
             $data['transport_lokal']=$pe->transport_lokal;
             $data['transport_bandara']=$pe->transport_bandara;
             $data['total_representasi']=$pe->total_representasi;



        }

        $biaya_uang_harian=$this->Dinas_model->tampil_uang_harian($id,'uang_harian');
        foreach($biaya_uang_harian as $ha){
             $data['id_biaya_harian']=$ha->id;
             $data['rate_harian']=$ha->rate;
             $data['total_harian']=$ha->total;
             $data['jumlah_hari_harian']=$ha->jumlah_hari;
        }

         $biaya_uang_saku=$this->Dinas_model->tampil_uang_harian($id,'uang_saku');
        foreach($biaya_uang_saku as $sa){
             $data['id_biaya_saku']=$sa->id;
             $data['rate_saku']=$sa->rate;
             $data['total_saku']=$sa->total;
             $data['jumlah_hari_saku']=$sa->jumlah_hari;
        }


     $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210, 330]]);
     
  $mpdf->showImageErrors = true;

    $mpdf->debug=true;
		$data = $this->load->view('visum_dprd_setwan_depan', $data, TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();


        
    
   }

   

   
 
}