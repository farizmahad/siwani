<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perjalanan_dinas extends CI_Controller {

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
		if (!$this->ion_auth->logged_in()){ redirect('/');}
		$this->load->model('Master_model');
        $this->load->model('Usulan_model');
        $this->load->model('Dinas_model');
        $this->load->helper('tgl_indo_helper');
	}
	

	public function index($offset=0)
	{
        $this->load->library('pagination');
       
        $jumlah_data=$this->Dinas_model->jumlah_perjalanan_dinas();
        
        //paging

        $config['base_url'] = base_url().'Perjalanan_dinas/index'; 
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] =1; 
        $config['use_page_numbers'] = false;
        $config['page_query_string'] = false;
        $config['enable_query_strings'] = true;
        $config['num_links'] =7;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] ='First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


        $from = $this->uri->segment(3);
        $this->pagination->initialize($config); 

        //end paging


	    /*
	    $data['perjalanan_dinas']=$this->Dinas_model->tampil_perjalanan_dinas($config['per_page'],$offset,$from);
        */
        $data['perjalanan_dinas']=$this->Dinas_model->tampil_perjalanan_dinas();
        $data['pd_anggota_dprd']=$this->Dinas_model->tampil_perjalanan_dinas_status_user('1');
        $data['pd_anggota_setwan']=$this->Dinas_model->tampil_perjalanan_dinas_status_user('2');
        $data['link']= $this->pagination->create_links();
		$this->load->view('layout/header_sidebar');
		$this->load->view('layout/header');
		$this->load->view('daftar_dinas_vw',$data);
		$this->load->view('layout/footer');
		
	}
	
	public function detail_perjalanan_dinas($param){
        /*
		if($param=="anggota_dprd"){
			//$data['dapil']=$this->Master_model->select_dapil();
            */
        $data['parameter']=$param;
        
        if($param=="anggota_dprd"){
            
            $data['tambah'] ="Anggota DPRD";
            $data['perjalanan_dinas']=$this->Dinas_model->tampil_perjalanan_dinas_status_user('1');
        }elseif($param=="anggota_setwan"){
            $data['tambah'] ="Anggota Setwan";
            $data['perjalanan_dinas']=$this->Dinas_model->tampil_perjalanan_dinas_status_user('2');
        }
        
		$this->load->view('pd_anggota_dprd_vw',$data);
            /*
		}elseif($param=="anggota_setwan"){
			//$data['fraksi']=$this->Master_model->select_fraksi();
			$this->load->view('pd_anggota_setwan_vw');
		}
        */
	}

    public function tambah_perjalanan_dinas(){

        $parameter=$this->input->get('parameter');
        $data['parameter']=$parameter;
        if($parameter=="anggota_dprd"){
            $data['anggota']=$this->Master_model->select_dewan();
        }elseif($parameter=="anggota_setwan"){
            $data['anggota']=$this->Master_model->select_setwan();
        }
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        /*
        $this->load->view('tambah_dinas_vw');
        */
        $this->load->view('tambah_dinas_vw2',$data);

        $this->load->view('layout/footer');
    }


    public function simpan_perjalanan_dinas(){

        $id=$this->input->post('id');

        $tanda=$this->input->post('tanda');

        $namaAnggota=$this->input->post('namaAnggota');

        $barang_db         = explode("|",$namaAnggota);
        $nama_depan        = $barang_db[0];
        $nama_belakang     = $barang_db[1];
        $gelar             = $barang_db[2];
        $cek_id_user=$this->Usulan_model->cek_id_user($nama_depan,$nama_belakang,$gelar);
        

        if($cek_id_user){

        $perihal=$this->input->post('perihal');
        $asal=$this->input->post('asal');
        $tujuanLokasi=$this->input->post('tujuanLokasi');
        $lamaPerjalanan=$this->input->post('lamaPerjalanan');
        $suratPerintah=$this->input->post('suratPerintah');
        $tgl_kembali=$this->input->post('tgl_kembali');
        $tgl_berangkat=$this->input->post('tgl_berangkat');
        $config['upload_path']="./assets/perjalanan_dinas"; //path folder file upload

        $config['allowed_types']='gif|jpg|png|pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 
            $image= $data['upload_data']['file_name'];


            if($id){
            $this->Dinas_model->ubah_perjalanan_dinas($cek_id_user,$perihal,$asal,$tujuanLokasi,$lamaPerjalanan,$suratPerintah,$tgl_kembali,$tgl_berangkat,$image,$id);

            echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Perjalanan Dinas berhasil diperbaharui</b></div>');
                    if($tanda){
                        redirect('Perjalanan_dinas/daftar_transport');
                    }else{
                        redirect('Perjalanan_dinas');
                    }

            }else{
            $this->Dinas_model->tambah_perjalanan_dinas($cek_id_user,$perihal,$asal,$tujuanLokasi,$lamaPerjalanan,$suratPerintah,$tgl_kembali,$tgl_berangkat,$image);
                echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Perjalanan Dinas berhasil ditambah</b></div>');
                redirect('Perjalanan_dinas/daftar_transport');

            }

           
         }else{

                  if($id){
                        $this->Dinas_model->ubah_perjalanan_dinas($cek_id_user,$perihal,$asal,$tujuanLokasi,$lamaPerjalanan,$suratPerintah,$tgl_kembali,$tgl_berangkat,'',$id);
                    echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Perjalanan Dinas berhasil diperbaharui</b></div>');
                    if($tanda){
                        redirect('Perjalanan_dinas/daftar_transport');
                    }else{
                        redirect('Perjalanan_dinas');
                    }
                  }else{
         	           $this->Dinas_model->tambah_perjalanan_dinas($cek_id_user,$perihal,$asal,$tujuanLokasi,$lamaPerjalanan,$suratPerintah,$tgl_kembali,$tgl_berangkat,"");
                        echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Perjalanan Dinas berhasil ditambah</b></div>');
                redirect('Perjalanan_dinas/daftar_transport');

                }
         }

         
      
     }else{

         echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Nama Anggota Dewan tidak terdaftar</b></div>');
     	 redirect('Perjalanan_dinas/tambah_perjalanan_dinas');
     }


    }
	

    public  function detail_dinas(){
        $id_dinas= $this->input->post('ids');
        
        $data['detail_dinas']=$this->Dinas_model->detail_dinas($id_dinas);
        
        $this->load->view('detail_dinas_vw',$data);
    }
    


    public function hapus_dinas(){
        $id=$this->input->post('id');
        $tanda=$this->input->post('tanda');
        $this->Dinas_model->delete_dinas($id);
         echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Perjalanan Dinas berhasil dihapus</b></div>');

         if($tanda){
            redirect('Perjalanan_dinas/daftar_transport');
         }else{
            redirect('Perjalanan_dinas');
         }
    }


    public function daftar_transport(){
        $data['perjalanan_dinas']=$this->Dinas_model->tampil_perjalanan_dinas_transportasi();
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('daftar_transport_vw',$data);
             $this->load->view('layout/footer');
    }


    function isi_transport($dinas){
        
        $data['id']=$dinas;
        $transportasi=$this->Dinas_model->tampil_transportasi($dinas);
        


        $penginapan=$this->Dinas_model->tampil_penginapan($dinas);
        $biaya_lain=$this->Dinas_model->tampil_biaya_lain($dinas);
     
         if(count($transportasi) ==1){
            foreach($transportasi as $tran){
                $data['id_transport']=$tran->id;
                $data['jenis']=$tran->jenis;
                $data['jenis_kendaraan']=$tran->jenis_kendaraan;
                $data['plat_nomor']=$tran->plat_nomor;
                $data['nama_rental']=$tran->nama_rental;
                $data['alamat_rental']=$tran->alamat_rental;
                $data['asal']=$tran->asal;
                $data['tujuan']=$tran->tujuan;
                $data['tgl_berangkat']=$tran->tgl_berangkat;
                $data['tgl_kembali']=$tran->tgl_kembali;
                $data['tiket']=$tran->tiket;
                $data['tagihan']=$tran->tagihan;
                $data['id_perjalanan_dinas']=$tran->id_perjalanan_dinas;
                $data['lama_sewa']=$tran->lama_sewa;
                $data['biaya_sewa']=$tran->biaya_sewa;
                $data['nomor_tiket']=$tran->nomor_tiket;
            }

         }


         if(count($penginapan)==1){
            foreach($penginapan as $row){
                $data['id_penginapan']=$row->id;
                $data['hotel']=$row->hotel;
                $data['tgl_mendaftar']=$row->tgl_mendaftar;
                $data['tgl_keluar']=$row->tgl_keluar;
                $data['lama']=$row->lama;
                $data['biaya']=$row->biaya;
                $data['tagihan_penginapan']=$row->tagihan;

            }
         }


         if(count($biaya_lain)==1){
             foreach($biaya_lain as $bi){
                 $data['id_biaya_lain']=$bi->id;
                 $data['uang_representasi']=$bi->uang_representasi;
                 $data['transport_lokal']=$bi->transport_lokal;
                 $data['transport_bandara']=$bi->transport_bandara;
                 $data['tagihan_lain']=$bi->tagihan;
             }
         }


        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        if(count($transportasi) > 0){
           $this->load->view('edit_transport_vw',$data);
        }else{
            $this->load->view('isi_transport_vw',$data);
        }
        $this->load->view('layout/footer');
    }

/*
    function save_transport(){


        //UPDATE

        $id_transport=$this->input->post('id_transport');
        $id_penginapan=$this->input->post('id_penginapan');
        $id_biaya_lain=$this->input->post('id_biaya_lain');
 
 
        // Jenis Transport Umum/Sewa
        $jenisTransport=$this->input->post('jenisTransport');
        $id_perjalanan_dinas=$this->input->post('id_perjalanan_dinas');

        // SEWA / RENTAL
       if($jenisTransport=="1")
       {

       $jenisKendaraan_rental=$this->input->post('jenisKendaraan_rental');
       $platNomor_rental=$this->input->post('platNomor_rental');
       $namaRental=$this->input->post('namaRental');
       $alamatRental=$this->input->post('alamatRental');
       $asal_rental=$this->input->post('asal_rental');
       $tujuan_rental=$this->input->post('tujuan_rental');
       $tglBerangkat_rental=$this->input->post('tglBerangkat_rental');
       $tglKembali_rental=$this->input->post('tglKembali_rental');
       $lamaSewa_rental=$this->input->post('lamaSewa_rental');
       $biayaSewa_rental=$this->input->post('biayaSewa_rental');
       
       //file
       $tiket_rental=$this->input->post('tiket_rental');
       $tagihan_rental=$this->input->post('tagihan_rental');



      }elseif($jenisTransport=="2"){
       // UMUM

        $jenisKendaraan=$this->input->post('jenisKendaraan');
        $platNomor     =$this->input->post('platNomor');
        $nomorTiket    =$this->input->post('nomorTiket');
        $asal =$this->input->post('asal');
        $tujuan=$this->input->post('tujuan');
        $tglBerangkat=$this->input->post('tglBerangkat');
        $tglKembali=$this->input->post('tglKembali');
        $lamaSewa =$this->input->post('lamaSewa');
        $biayaSewa=$this->input->post('biayaSewa');

       //file
       $tiket=$this->input->post('tiket');
       $tagihan=$this->input->post('tagihan');
      }



        $config['upload_path']="./assets/tiket"; //path folder file upload
        $config['allowed_types']='pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
        $this->load->library('upload',$config,'tiketupload');
        $this->tiketupload->initialize($config);




        $config['upload_path']="./assets/tagihan"; //path folder file upload
        $config['allowed_types']='pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
        $this->load->library('upload',$config,'tagihanupload');
        $this->tagihanupload->initialize($config);




       // UPLOAD TIKET DAN TAGIHAN

           if($jenisTransport=="1"){

                $upload_tiket=$this->tiketupload->do_upload("tiket_rental");
                $upload_tagihan=$this->tagihanupload->do_upload("tagihan_rental");

           }elseif($jenisTransport=="2"){
               $upload_tiket=$this->tiketupload->do_upload("tiket");
               $upload_tagihan=$this->tagihanupload->do_upload("tagihan");
           }

           $data = array('upload_data' => $this->tiketupload->data()); 
           $nama_tiket= $data['upload_data']['file_name'];

           $data_tagihan=array('upload_data' => $this->tagihanupload->data());


           $nama_tagihan= $data_tagihan['upload_data']['file_name'];
           $upload_tagihan=$this->tagihanupload->do_upload("tagihan_rental");

        //

        if($jenisTransport=="1"){


           
           
           if($id_transport){

           $this->Dinas_model->ubah_transport_dinas($jenisTransport,$jenisKendaraan_rental,$platNomor_rental,$namaRental,$alamatRental,$asal_rental,$tujuan_rental,$tglBerangkat_rental,$tglKembali_rental,$lamaSewa_rental,$biayaSewa_rental,$nama_tiket,$nama_tagihan,$id_perjalanan_dinas,'',$id_transport);
              
           }else{
           $this->Dinas_model->tambah_transport_dinas($jenisTransport,$jenisKendaraan_rental,$platNomor_rental,$namaRental,$alamatRental,$asal_rental,$tujuan_rental,$tglBerangkat_rental,$tglKembali_rental,$lamaSewa_rental,$biayaSewa_rental,$nama_tiket,$nama_tagihan,$id_perjalanan_dinas,'');
           }

        }elseif($jenisTransport=="2"){
            
           if($id_transport){
                $this->Dinas_model->tambah_transport_dinas($jenisTransport,$jenisKendaraan,$platNomor,'','',$asal,$tujuan,$tglBerangkat,$tglKembali,$lamaSewa,$biayaSewa,$nama_tiket,$nama_tagihan,$id_perjalanan_dinas,$nomorTiket,$id_transport);
           }else{
              $this->Dinas_model->tambah_transport_dinas($jenisTransport,$jenisKendaraan,$platNomor,'','',$asal,$tujuan,$tglBerangkat,$tglKembali,$lamaSewa,$biayaSewa,$nama_tiket,$nama_tagihan,$id_perjalanan_dinas,$nomorTiket);
           }
           
          
        }


       if($id_transport){
            $cek_id_transport_terakhir=$id_transport;
       }else{
            $cek_id_transport_terakhir=$this->Dinas_model->cek_id_transport_terakhir();

       }

       $datas=array(
       'id_transportasi'=>$cek_id_transport_terakhir
       );
       $where = array('id' => $id_perjalanan_dinas);
       $this->db->update('perjalanan_dinas',$datas,$where);

       


       //PENGINAPAN

        
        $config['upload_path']="./assets/penginapan"; //path folder file upload
        $config['allowed_types']='pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
        $this->load->library('upload',$config,'penginapanupload');
        $this->tagihanupload->initialize($config);


        $hotel=$this->input->post('hotel');
        $checkIn=$this->input->post('checkIn');
        $checkOut=$this->input->post('checkOut');
        $lamaMenginap=$this->input->post('lamaMenginap');
        $biayaMenginap=$this->input->post('biayaMenginap');

        //file
        $upload_penginapan=$this->penginapanupload->do_upload("billMenginap");
        $data_penginapan = array('upload_data' => $this->penginapanupload->data()); 
        $nama_tagihan_penginapan= $data_penginapan['upload_data']['file_name'];
        
        if($id_penginapan){
        $this->Dinas_model->ubah_penginapan($id_perjalanan_dinas,$hotel,$checkIn,$checkOut,$lamaMenginap,$biayaMenginap,$nama_tagihan_penginapan,$id_penginapan);
        }else{
        $this->Dinas_model->tambah_penginapan($id_perjalanan_dinas,$hotel,$checkIn,$checkOut,$lamaMenginap,$biayaMenginap,$nama_tagihan_penginapan);
        }


      //BIAYA LAINNYA

        $config['upload_path']="./assets/biaya_lain"; //path folder file upload
        $config['allowed_types']='pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
        $this->load->library('upload',$config,'lainnyaupload');
        $this->tagihanupload->initialize($config);

        $uangRepresentasi=$this->input->post('uangRepresentasi');
        $transportLokal=$this->input->post('transportLokal');
        $transportBandara=$this->input->post('transportBandara');
        //file

        $upload_tagihan_lain=$this->lainnyaupload->do_upload("billLainnya");
        $data_lain = array('upload_data' => $this->lainnyaupload->data()); 
        $nama_tagihan_lain= $data_lain['upload_data']['file_name'];

        if($id_biaya_lain){
        $this->Dinas_model->ubah_biaya_lainnya($id_perjalanan_dinas,$uangRepresentasi,$transportLokal,$transportBandara,$nama_tagihan_lain,$id_biaya_lain);
        }else{
        $this->Dinas_model->tambah_biaya_lainnya($id_perjalanan_dinas,$uangRepresentasi,$transportLokal,$transportBandara,$nama_tagihan_lain);
       }



        if($id_transport){
           echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Transportasi berhasil diubah</b></div>');
        }else{
          echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Transportasi berhasil ditambah</b></div>');
        }
        redirect('Perjalanan_dinas');

    }
*/

    function simpan_nomor_surat(){

        $ID = $this->ion_auth->get_user_id();
        $id=$this->input->post('id');
        $nomorSuratTugas=$this->input->post('noSuratTugas');
        $maksudPerjalanan=$this->input->post('maksudPerjalanan');
        $peserta_dinas=$this->input->post('peserta_dinas');
        $pejabat=$this->input->post('pejabat');
        $tingkatBiaya=$this->input->post('tingkatBiaya');
        $tgl_input=date('Y-m-d');
        $jumlahPesertaDinas=$this->input->post('jumlahPesertaDinas');
        $jenisKendaraan=$this->input->post('jenisKendaraan');


        if($id){
        $cek_jumlah_peserta_dinas=$this->Dinas_model->cek_jumlah_peserta_dinas($id);
       


           if($cek_jumlah_peserta_dinas > $jumlahPesertaDinas){
             echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Jumlah Peserta harus sama dengan atau lebih dari '.$cek_jumlah_peserta_dinas.'</b></div>');

            
             redirect('Perjalanan_dinas/ubah_perjalanan_dinas?id='.$id);

           }else{

            $this->Dinas_model->ubah_surat_tugas($nomorSuratTugas,$maksudPerjalanan,$id,$peserta_dinas,$pejabat,$tingkatBiaya,$jumlahPesertaDinas);

            $selisih=$jumlahPesertaDinas - $cek_jumlah_peserta_dinas;
            if($selisih > 0){
              
                    for($x = 0; $x < sizeof($selisih); $x++){ 
                        $usersDinas = array(
                          'id_dinas' =>$id
                        );

                        $this->Dinas_model->input_data($usersDinas,'users_dinas');
                         $id_user_dinas=$this->Dinas_model->cek_id_terakhir_user_dinas();


                         $usersPenginapan = array(
                           'id_perjalanan_dinas' =>$id,
                           'id_user_dinas' =>$id_user_dinas
                         );

                          $this->Dinas_model->input_data($usersPenginapan,'penginapan');


                         $uangHarian = array(
                           'id_perjalanan_dinas' =>$id,
                           'nama' => "uang_harian",
                           'id_user_dinas' =>$id_user_dinas
                         );

                         if($jenisKendaraan=="2"){
                              $this->Dinas_model->input_data($uangHarian,'biaya_lainya');
                         }

                        $uangSaku = array(
                           'id_perjalanan_dinas' =>$id,
                            'nama' => "uang_saku",
                            'id_user_dinas' =>$id_user_dinas
                        );

                        if($jenisKendaraan=="2"){
                              $this->Dinas_model->input_data($uangSaku,'biaya_lainya');
                         }

                    }
/*
           $this->db->insert_batch('users_dinas',$usersDinas);
           $this->db->insert_batch('penginapan',$usersPenginapan);

           if($jenisKendaraan=="2"){
            $this->db->insert_batch('biaya_lainya',$uangHarian);
            $this->db->insert_batch('biaya_lainya',$uangSaku);
           }
           */

            }





           }
             redirect('Perjalanan_dinas/edit_transportasi/'.$id);
           
        }else{
        $this->Dinas_model->tambah_surat_tugas($nomorSuratTugas,$maksudPerjalanan,$peserta_dinas,$pejabat,$tgl_input,$tingkatBiaya,$jumlahPesertaDinas,$jenisKendaraan,$ID);

            $id_terakhir=$this->Dinas_model->cek_id_terakhir();
            redirect('Perjalanan_dinas/tambah_transportasi/'.$id_terakhir);
        }
        

    }


    function tambah_transportasi($id_terakhir){

        $data['id_terakhir']=$id_terakhir;
        $perjalanan=$this->Dinas_model->select_perjalanan_dinas_id($id_terakhir);

        foreach($perjalanan as $dow){
            $status_peserta_dinas=$dow->status_peserta_dinas;
            $jenis_kendaraan=$dow->jenis_kendaraan;
            $data['jumlah_peserta']=$dow->jumlah_peserta;
        }
        $data['status_peserta_dinas']=$status_peserta_dinas;
        if($status_peserta_dinas=="1"){
           $data['users']=$this->Master_model->select_dewan();
        }elseif($status_peserta_dinas=="2"){
            $data['users']=$this->Master_model->select_setwan();
        }
        $data['jenis_kendaraan']=$jenis_kendaraan;
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        if($jenis_kendaraan=="1"){

             $this->load->view('tambah_dinas_vw_transport_darat',$data);
        }elseif($jenis_kendaraan=="2"){
             $this->load->view('tambah_dinas_vw_transport_udara',$data);
        }
        
        $this->load->view('layout/footer');

    }


    function save_transportasi(){ 

        // UPDATE
        $id_transportasi=$this->input->post('id_transportasi');
        $id_penginapan=$this->input->post('id_penginapan');
        $id_biaya_harian=$this->input->post('id_biaya_harian');
        

        $id_biaya_saku=$this->input->post('id_biaya_saku');


        $anggaran=$this->input->post('anggaran');
        $akun=$this->input->post('akun');
        $keterangan_rental=$this->input->post('keterangan_rental');
       

        //

        $id_dinas=$this->input->post('id_dinas');
        $id_user   =$_POST['id_user'];

        


        if($id_transportasi){
             $this->Dinas_model->hapus_users_dinas($id_dinas);
        }


         $updateArray = array();

           for($x = 0; $x < count($id_user); $x++){
            $updateArray[] = array(
             'id_dinas' =>$id_dinas,
             'id_user' => $id_user[$x]
             );
           }
            $this->db->insert_batch('users_dinas',$updateArray);
    

    // Transportasi //

    //udara
    $jenisTransport=$this->input->post('jenisTransport');
   

    $namaMaskapai=$this->input->post('namaMaskapai');
    $noTiketMaskapai=$this->input->post('noTiketMaskapai');
    $asalUdara=$this->input->post('asalUdara');
    $tujuanUdara=$this->input->post('tujuanUdara');
    $tglBerangkatUdara=$this->input->post('tglBerangkatUdara');
    $tglkembaliUdara=$this->input->post('tglkembaliUdara');
    $hargaTiketUdara=$this->input->post('hargaTiketUdara');

    // uang harian
     $jumlahHariUangHarian=$this->input->post('jumlahHariUangHarian');
     $rateUangHarian=$this->input->post('rateUangHarian');
     $totalUangHarian=$jumlahHariUangHarian * $rateUangHariand;

   // uang saku
      $jumlahHariUangSaku=$this->input->post('jumlahHariUangSaku');
      $rateUangSaku=$this->input->post('rateUangSaku');
      $totalUangSaku=$jumlahHariUangSaku * $rateUangSaku;

    // hotel

      $hotelUdara=$this->input->post('hotelUdara');
      $checkInUdara=$this->input->post('checkInUdara');
      $checkOutUdara=$this->input->post('checkOutUdara');
      $hariUdara=$this->input->post('hariUdara');
      $rateHotelUdara=$this->input->post('rateHotelUdara');
      $totalHotelUdara=$rateHotelUdara * $hariUdara;
      $uangRepresentasiUdara=$this->input->post('uangRepresentasiUdara');
      $uangTransportLokal=$this->input->post('uangTransportLokal');
      $uangTransportBandara=$this->input->post('uangTransportBandara');
      /*
      $totalRepresentasiUdara=$this->input->post('totalRepresentasiUdara');
      */
        $totalRepresentasiUdara=$uangRepresentasiUdara+$uangTransportLokal+$uangTransportBandara;

      // DARAT
      $namaRental=$this->input->post('namaRental');
      $alamatRental=$this->input->post('alamatRental');
      $kontakRental=$this->input->post('kontakRental');
      $asalRental=$this->input->post('asalRental');
      $tujuanRental=$this->input->post('tujuanRental');
      

       $tglBerangkatRental=$this->input->post('tglBerangkatRental');
       $tglKembaliRental=$this->input->post('tglKembaliRental');
       $jumlahHariRental=$this->input->post('jumlahHariRental');
      
        $rateRental=$this->input->post('rateRental');
        $totalRental=$this->input->post('totalRental');


         $hotelDarat=$this->input->post('hotelDarat');
         $checkInDarat=$this->input->post('checkInDarat');
         $checkOutDarat=$this->input->post('checkOutDarat');
         $jumlahAkoDarat=$this->input->post('jumlahAkoDarat');
         $gudarat=$this->input->post('gudarat');
         $rateAkoDarat=$this->input->post('rateAkoDarat');



        if($jenisTransport=="2"){

                  if($id_transportasi){

                  $this->Dinas_model->ubah_transport($namaRental,$alamatRental,$kontakRental,$asalRental,$tujuanRental,$tglBerangkatRental,$tglKembaliRental,$jumlahHariRental,$rateRental,$totalRental,$jenisTransport,$id_dinas,'','',$id_transportasi,$anggaran,$akun,$keterangan_rental);

                  $this->Dinas_model->ubah_penginapan($id_dinas,$hotelDarat,$checkInDarat,$checkOutDarat,$jumlahAkoDarat,$gudarat,'',$rateAkoDarat,'','','','','',$id_penginapan);


                  }else{
                  $this->Dinas_model->tambah_transport($namaRental,$alamatRental,$kontakRental,$asalRental,$tujuanRental,$tglBerangkatRental,$tglKembaliRental,$jumlahHariRental,$rateRental,$totalRental,$jenisTransport,$id_dinas,'','',$anggaran,$akun,$keterangan_rental);

                    /*
                     $cek_terakhir=$this->Dinas_model->cek_id_terakhir();
                     */
                     $this->Dinas_model->tambah_penginapan($id_dinas,$hotelDarat,$checkInDarat,$checkOutDarat,$jumlahAkoDarat,$gudarat,'',$rateAkoDarat,'','','','','');

                  }
        }elseif($jenisTransport=="1"){

            if($id_transportasi){
                  $this->Dinas_model->ubah_transport($namaMaskapai,'','',$asalUdara,$tujuanUdara,$tglBerangkatUdara,$tglkembaliUdara,'','','',$jenisTransport,$id_dinas,$hargaTiketUdara,$noTiketMaskapai,$id_transportasi,$anggaran,$akun);

                  $this->Dinas_model->ubah_penginapan($id_dinas,$hotelUdara,$checkInUdara,$checkOutUdara,'','',$hariUdara,$rateHotelUdara,$totalHotelUdara,$uangRepresentasiUdara,$uangTransportLokal,$uangTransportBandara,$totalRepresentasiUdara,$id_penginapan);


                $this->Dinas_model->ubah_uang_harian($id_dinas,$jumlahHariUangHarian,$rateUangHarian,$totalUangHarian,'uang_harian',$id_biaya_harian);
                
                 $this->Dinas_model->ubah_uang_harian($id_dinas,$jumlahHariUangSaku,$rateUangSaku,$totalUangSaku,'uang_saku',$id_biaya_saku);
                 
/*
                $datas=array(
   
                         'nama'=>$uang_saku,
                         'nama'=>$uang_saku

                );
                $where = array('id' => $id_biaya_saku);
                $this->db->update('biaya_lainnya',$datas,$where);
*/


            }else{
            $this->Dinas_model->tambah_transport($namaMaskapai,'','',$asalUdara,$tujuanUdara,$tglBerangkatUdara,$tglkembaliUdara,'','','',$jenisTransport,$id_dinas,$hargaTiketUdara,$noTiketMaskapai,$anggaran,$akun,'');



            $this->Dinas_model->tambah_penginapan($id_dinas,$hotelUdara,$checkInUdara,$checkOutUdara,'','',$hariUdara,$rateHotelUdara,$totalHotelUdara,$uangRepresentasiUdara,$uangTransportLokal,$uangTransportBandara,$totalRepresentasiUdara);
            $this->Dinas_model->tambah_uang_harian($id_dinas,$jumlahHariUangHarian,$rateUangHarian,$totalUangHarian,'uang_harian');
            $this->Dinas_model->tambah_uang_harian($id_dinas,$jumlahHariUangSaku,$rateUangSaku,$totalUangSaku,'uang_saku');
           }
        }

             echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Data berhasil disimpan</b></div>');

           redirect('Perjalanan_dinas/tambah_pengikut/'.$id_dinas);

    }

    function selesai(){

    }


    function ubah_perjalanan_dinas(){
        $id=$this->input->get('id');
        $dinas=$this->Dinas_model->tampil_perjalanan_dinas_id($id);
        foreach($dinas as $row){
            $data['id_dinas']=$row->id;
            $data['pejabat']=$row->pejabat;
            $data['status_peserta_dinas']=$row->status_peserta_dinas;
            $data['surat_perintah']=$row->surat_perintah;
            $data['perihal']=$row->perihal;
            $data['tingkat_biaya']=$row->tingkat_biaya;
            $data['jumlah_peserta']=$row->jumlah_peserta;
            $data['jenis_kendaraan']=$row->jenis_kendaraan;
        }

        $data['id_dinas']=$id;
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        /*
        $this->load->view('tambah_dinas_vw');
        */
        $this->load->view('edit_dinas_vw2',$data);

        $this->load->view('layout/footer');

    }


    function edit_transportasi($id){
        $data['status']="edit";
        $dinas=$this->Dinas_model->tampil_perjalanan_dinas_id($id);
        foreach($dinas as $row){
            $data['id_dinas']=$row->id;
            $data['pejabat']=$row->pejabat;
            $data['status_peserta_dinas']=$row->status_peserta_dinas;
            $data['surat_perintah']=$row->surat_perintah;
            $data['perihal']=$row->perihal;
            $status_peserta_dinas=$row->status_peserta_dinas;
            $jenis_kendaraan=$row->jenis_kendaraan;
            $data['jumlah_peserta']=$row->jumlah_peserta;

            $jumlah_peserta=$row->jumlah_peserta;

            $data['jenis_kendaraan']=$row->jenis_kendaraan;

        }

       


        if($status_peserta_dinas=="1"){
           $data['users']=$this->Master_model->select_dewan();
        }elseif($status_peserta_dinas=="2"){
            $data['users']=$this->Master_model->select_setwan();
        }

        if($status_peserta_dinas=="1"){
           $data['user_dinas']=$this->Dinas_model->tampil_users_dinas($id);
           $users_detail=$this->Dinas_model->tampil_users_dinas_limit_1($id);

           foreach($users_detail as $rok){
               $data['asal_dinas']=$rok->asal;
               $data['tujuan_dinas']=$rok->tujuan;
               $data['tgl_berangkat_dinas']=$rok->tgl_berangkat;
               $data['tgl_kembali_dinas']=$rok->tgl_kembali;
               $data['jumlah_hari_dinas']=$rok->jumlah_hari;

           }

        }elseif($status_peserta_dinas=="2"){
           $data['user_dinas']=$this->Dinas_model->tampil_users_dinas_setwan($id);
           $users_detail=$this->Dinas_model->tampil_users_dinas_setwan_limit_1($id);

           foreach($users_detail as $rok){
               $data['asal_dinas']=$rok->asal;
               $data['tujuan_dinas']=$rok->tujuan;
               $data['tgl_berangkat_dinas']=$rok->tgl_berangkat;
               $data['tgl_kembali_dinas']=$rok->tgl_kembali;
               $data['jumlah_hari_dinas']=$rok->jumlah_hari;

           }
        }
        $data['id_terakhir']=$id;

        if($status_peserta_dinas=="1"){
           $data['users']=$this->Master_model->select_dewan();
        }elseif($status_peserta_dinas=="2"){
           $data['users']=$this->Master_model->select_setwan();
        }
        



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

        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');

        if($jenis_kendaraan=="1"){
             $this->load->view('edit_dinas_vw_transport_darat',$data);
        }elseif($jenis_kendaraan=="2"){
             $this->load->view('edit_dinas_vw_transport_udara',$data);
        }


        $this->load->view('layout/footer');
    }


    function detail_surat_dinas($id){

        $data['id']=$id;
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
        }elseif($status_peserta_dinas=="2"){
             $data['parameter']="anggota_setwan";
           $data['user_dinas']=$this->Dinas_model->tampil_users_dinas_setwan($id);
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

        
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('detail_dinas_vw_transport',$data);
        $this->load->view('layout/footer');


    }


    function detail_surat_perintah(){

    $parameter=$this->input->get('parameter');
    $data['parameter']=$parameter;
   
    $id=$this->input->get('id');
     $data['id']=$id;
    $data['dinas']=$this->Dinas_model->tampil_perjalanan_dinas_id($id);
/*
    if($parameter=="anggota_dprd"){
        $data['users_dinas']=$this->Dinas_model->tampil_users_dinas($id);
    }elseif($parameter=="anggota_setwan"){
       $data['users_dinas']=$this->Dinas_model->tampil_users_dinas_setwan($id);
    }
    */

    
    if($parameter=="anggota_dprd"){
       $data['atasan']=$this->Dinas_model->select_ketua_dprd($id);
    


       $this->load->view('layout/header_sidebar');
       $this->load->view('layout/header');
       $this->load->view('detail_surat_perintah_dprd',$data);
       $this->load->view('layout/footer');


    }elseif($parameter=="anggota_setwan"){
        $atasan=$this->Dinas_model->select_atasan_setwan($id);
        foreach($atasan as $dow){
            $data['anggota_ketua']=$dow->nama;
        }
         $data['users_dinas']=$this->Dinas_model->tampil_users_dinas_setwan($id);
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('detail_surat_perintah_setwan',$data);
        $this->load->view('layout/footer');
    }

        
    }

    function tambah_pengikut($id_dinas){

        $data['id_dinas']=$id_dinas;
        $data['pengikut']=$this->Dinas_model->tampil_pengikut($id_dinas);
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('form_add_pengikut',$data);
        $this->load->view('layout/footer');

    }


    function save_pengikut(){

        $id_dinas=$this->input->post('id_dinas');
        $namaPengikut=$this->input->post('namaPengikut');
        $tglPengikut=$this->input->post('tglPengikut');
        $keteranganPengikut=$this->input->post('keteranganPengikut');
        $this->Dinas_model->tambah_pengikut($id_dinas,$namaPengikut,$tglPengikut,$keteranganPengikut);
        

        redirect('Perjalanan_dinas/tambah_pengikut/'.$id_dinas);
    }

    function hapus_pengikut(){

        $id=$this->input->post('id');
        $id_dinas=$this->input->post('id_dinas');


        $this->Dinas_model->hapus_pengikut($id);
        redirect('Perjalanan_dinas/tambah_pengikut/'.$id_dinas);


    }

	//------------------ BARU ------------------//
	
	function daftar_cetak_perjalanan_dinas(){
		

        $data['dinas']=$this->Dinas_model->select_perjalanan_dinas();
		$this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('cetak_perjalanan_dinas',$data);
        $this->load->view('layout/footer');
	}

    function filter_dinas(){

        $pilihan=$this->input->get('pilihan');
        $parameter=$this->input->get('parameter');

        $data['pilihan']=$pilihan;
        $data['parameter']=$parameter;
        $data['dinas']=$this->Dinas_model->select_perjalanan_dinas($pilihan,$parameter);
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('cetak_perjalanan_dinas',$data);
        $this->load->view('layout/footer');



    }


    function rekapitulasi_dinas(){
        $pilihan=$this->input->get('pilihan');
        $parameter=$this->input->get('parameter');

        if($pilihan){
            $pilihan=$pilihan;
        }else{
            $pilihan="udara";
        }

        

       

        $data['pilihan']=$pilihan;
        $data['parameter']=$parameter;
         
        $data['dinas']=$this->Dinas_model->select_perjalanan_dinas($pilihan,$parameter);
        
        if($pilihan=="udara"){
              
              $this->load->view('daftar_rekap_udara',$data);
        }elseif($pilihan=="darat"){

            $this->load->view('daftar_rekap_darat',$data);
        }else{
            $this->load->view('daftar_rekap_udara',$data); 
        }

    }


    function simpan_transportasi_users(){
       

         //edit

             $id_user_dinas=$this->input->post('id_user_dinas');
             $id_penginapan=$this->input->post('id_penginapan');


             $count_id_user_dinas=count($id_user_dinas);
             $count_id_penginapan=count($id_penginapan);

         //

        $id_user=$this->input->post('id_user');
        $id_dinas=$this->input->post('id_dinas');

        $jenis_kendaraan=$this->input->post('jenisKendaraan');

        if($jenis_kendaraan=="1"){

        $namaRental=$this->input->post('namaRental');
        
        $alamatRental=$this->input->post('alamatRental');
        $kontakRental=$this->input->post('kontakRental');


        //// new
        $asalRental=$this->input->post('asalRental');
        $tujuanRental=$this->input->post('tujuanRental');
        $tglBerangkatRental=$this->input->post('tglBerangkatRental');
        $tglKembaliRental=$this->input->post('tglKembaliRental');
        $jumlahHariRental=$this->input->post('jumlahHariRental');

      
        $rateRental=$this->input->post('rateRental');
        /*
        $totalRental=$jumlahHariRental * $rateRental;
        */


        $hotelDarat=$this->input->post('hotelDarat');
        $checkInDarat=$this->input->post('checkInDarat');

        $checkOutDarat=$this->input->post('checkOutDarat');
        
        $jumlahAkoDarat=$this->input->post('jumlahAkoDarat');
        $gudarat=$this->input->post('gudarat');
        $rateAkoDarat=$this->input->post('rateAkoDarat');


       
         /*
          $usersDinas= array();
          $usersPenginapan= array();
          */

          for($x = 0; $x < sizeof($id_user); $x++){


             $user=$id_user;
             $total_rate=$jumlahHariRental[$x] * $rateRental[$x];
             $usersDinas= array(
                    'id_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'nama' => $namaRental[$x],
                    'alamat' => $alamatRental[$x],
                    'kontak' => $kontakRental[$x],
                    'asal' => $asalRental,
                    'tujuan' => $tujuanRental,
                    'tgl_berangkat' => $tglBerangkatRental,
                    'tgl_kembali' => $tglKembaliRental,
                    'jumlah_hari' => $jumlahHariRental,
                    'rate' => $rateRental[$x],
                    'total' => $total_rate

            );
            

             $this->Dinas_model->input_data($usersDinas,'users_dinas');
             

             $id_user_dinas=$this->Dinas_model->cek_id_terakhir_user_dinas();

              $start_date =new DateTime($checkInDarat[$x]) ;
              $end_date   =new DateTime($checkOutDarat[$x]);


              $interval = $start_date->diff($end_date);
              $selisih=$interval->days;
            
            $usersPenginapan = array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'hotel' => $hotelDarat[$x],
                    'tgl_mendaftar' => $checkInDarat[$x],
                    'tgl_keluar' => $checkOutDarat[$x],
                    'biaya' => $rateAkoDarat[$x],
                    'gu' => $gudarat[$x],
                    'lama' => $selisih,
                    'jumlah_ako' => $jumlahAkoDarat[$x],
                    'id_user_dinas' => $id_user_dinas


            );

           $this->Dinas_model->input_data($usersPenginapan,'penginapan');
            

          }



         

          /*

          for($x = 0; $x < sizeof($id_user); $x++){


             $user=$id_user[$x];
             $total_rate=$jumlahHariRental[$x] * $rateRental[$x];
             $usersDinas[] = array(
                    'id_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'nama' => $namaRental[$x],
                    'alamat' => $alamatRental[$x],
                    'kontak' => $kontakRental[$x],
                    'asal' => $asalRental[$x],
                    'tujuan' => $tujuanRental[$x],
                    'tgl_berangkat' => $tglBerangkatRental[$x],
                    'tgl_kembali' => $tglKembaliRental[$x],
                    'jumlah_hari' => $jumlahHariRental[$x],
                    'rate' => $rateRental[$x],
                    'total' => $total_rate

            );


              $start_date =new DateTime($checkInDarat[$x]) ;
              $end_date   =new DateTime($checkOutDarat[$x]);


              $interval = $start_date->diff($end_date);
              $selisih=$interval->days;
            
            $usersPenginapan[] = array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'hotel' => $hotelDarat[$x],
                    'tgl_mendaftar' => $checkInDarat[$x],
                    'tgl_keluar' => $checkOutDarat[$x],
                    'biaya' => $rateAkoDarat[$x],
                    'gu' => $gudarat[$x],
                    'lama' => $selisih,
                    'jumlah_ako' => $jumlahAkoDarat[$x]

            );


            

          }


         $this->db->insert_batch('users_dinas',$usersDinas);
         $this->db->insert_batch('penginapan',$usersPenginapan);
         */


          }elseif($jenis_kendaraan=="2"){
            //berangkat
            $namaMaskapai=$this->input->post('namaMaskapai');
            $noTiketMaskapai=$this->input->post('noTiketMaskapai');
            $asalUdara=$this->input->post('asalUdara');
            $tujuanUdara=$this->input->post('tujuanUdara');
            $tglBerangkatUdara=$this->input->post('tglBerangkatUdara');
            $hargaTiketUdara=$this->input->post('hargaTiketUdara');


            //pulang

            $namaMaskapai2=$this->input->post('namaMaskapai2');
            $noTiketMaskapai2=$this->input->post('noTiketMaskapai2');
            $asalUdara2=$this->input->post('asalUdara2');
            $tujuanUdara2=$this->input->post('tujuanUdara2');
            $tglKembaliUdara=$this->input->post('tglKembaliUdara');
            $hargaTiketUdara2=$this->input->post('hargaTiketUdara2');



            $hotelUdara=$this->input->post('hotelUdara');
            $checkInUdara =$this->input->post('checkInUdara');
            $checkOutUdara=$this->input->post('checkOutUdara');
            $hariUdara=$this->input->post('hariUdara');
            $rateHotelUdara=$this->input->post('rateHotelUdara');
            $uangRepresentasiUdara=$this->input->post('uangRepresentasiUdara');
            $uangTransportLokal1=$this->input->post('uangTransportLokal1');
            $uangTransportLokal2=$this->input->post('uangTransportLokal2');
            $uangTransportBandara1=$this->input->post('uangTransportBandara1');
            $uangTransportBandara2=$this->input->post('uangTransportBandara2');

             $jumlahHariUangHarian=$this->input->post('jumlahHariUangHarian');
             $rateUangHarian=$this->input->post('rateUangHarian');
             $rateUangSaku=$this->input->post('rateUangSaku');
             $jumlahHariUangSaku=$this->input->post('jumlahHariUangSaku');

           for($x = 0; $x < sizeof($id_user); $x++){

            $total_rate=$hariUdara[$x] * $rateHotelUdara[$x];

               $usersDinas = array(
                    'id_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'nama' => $namaMaskapai[$x],
                    'asal' => $asalUdara[$x],
                    'tujuan' => $tujuanUdara[$x],
                    'tgl_berangkat' => $tglBerangkatUdara[$x],
                    'tgl_kembali' => $tglKembaliUdara[$x],
                    'namarental2' => $namaMaskapai2[$x],
                    'notiket1' => $noTiketMaskapai[$x],
                    'notiket2' => $noTiketMaskapai2[$x],
                    'asal2' => $asalUdara2[$x],
                    'tujuan2' => $tujuanUdara2[$x],
                    'hargatiket1' => $hargaTiketUdara[$x],
                    'hargatiket2' => $hargaTiketUdara2[$x]
                    
                    
                    

            );

             $this->Dinas_model->input_data($usersDinas,'users_dinas');
             $id_user_dinas=$this->Dinas_model->cek_id_terakhir_user_dinas();

                $usersPenginapan = array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'hotel' => $hotelUdara[$x],
                    'tgl_mendaftar' => $checkInUdara[$x],
                    'tgl_keluar' => $checkOutUdara[$x],
                    'biaya' => $rateHotelUdara[$x],
                    'lama' => $hariUdara[$x],
                    'uang_representasi' => $uangRepresentasiUdara[$x],
                    'transport_lokal' => $uangTransportLokal1[$x],
                    'transport_lokal2' => $uangTransportLokal2[$x],
                    'transport_bandara' =>   $uangTransportBandara1[$x],
                    'transport_bandara2' =>  $uangTransportBandara2[$x],
                    'total_rate' => $total_rate,
                    'id_user_dinas' => $id_user_dinas


            );
             

             $this->Dinas_model->input_data($usersPenginapan,'penginapan');

                $totalUangHarian=$jumlahHariUangHarian[$x] * $rateUangHarian[$x];
                $uangHarian= array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'jumlah_hari' => $jumlahHariUangHarian[$x],
                    'rate' => $rateUangHarian[$x],
                    'total' => $totalUangHarian,
                    'nama' => "uang_harian",
                    'id_user_dinas' => $id_user_dinas



            );

                $this->Dinas_model->input_data($uangHarian,'biaya_lainya');

                $uangSaku = array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'jumlah_hari' => $jumlahHariUangHarian[$x],
                    'rate' => $rateUangHarian[$x],
                    'total' => $totalUangHarian,
                    'nama' => "uang_saku",
                    'id_user_dinas' => $id_user_dinas


            );

              $this->Dinas_model->input_data($uangSaku,'biaya_lainya');






            
            





           }
            
            /*
           $this->db->insert_batch('users_dinas',$usersDinas);
           $this->db->insert_batch('penginapan',$usersPenginapan);
           $this->db->insert_batch('biaya_lainya',$uangHarian);
           $this->db->insert_batch('biaya_lainya',$uangSaku);
           */
        }
         echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Transportasi dan Akomodasi berhasil disimpan</b></div>');

           redirect('Perjalanan_dinas/tambah_pengikut/'.$id_dinas);

    }


    function aksi_ubah_transportasi_users(){
       

         //edit

             $id_user_dinas=$this->input->post('id_user_dinas');
             $id_penginapan=$this->input->post('id_penginapan');

             $id_uang_harian=$this->input->post('id_uang_harian');
             $id_uang_saku=$this->input->post('id_uang_saku');


             $count_id_user_dinas=count($id_user_dinas);
             $count_id_penginapan=count($id_penginapan);

         //

        $id_user=$this->input->post('id_user');
        $id_dinas=$this->input->post('id_dinas');

        $jenis_kendaraan=$this->input->post('jenisKendaraan');

        if($jenis_kendaraan=="1"){

        $namaRental=$this->input->post('namaRental');
        
        $alamatRental=$this->input->post('alamatRental');
        $kontakRental=$this->input->post('kontakRental');


        ///new
        $asalRental=$this->input->post('asalRental');
        $tujuanRental=$this->input->post('tujuanRental');
      

       $tglBerangkatRental=$this->input->post('tglBerangkatRental');
       $tglKembaliRental=$this->input->post('tglKembaliRental');
       $jumlahHariRental=$this->input->post('jumlahHariRental');
      
        $rateRental=$this->input->post('rateRental');
        /*
        $totalRental=$jumlahHariRental * $rateRental;
        */


        $hotelDarat=$this->input->post('hotelDarat');
        $checkInDarat=$this->input->post('checkInDarat');

        $checkOutDarat=$this->input->post('checkOutDarat');
        
        $jumlahAkoDarat=$this->input->post('jumlahAkoDarat');
        $gudarat=$this->input->post('gudarat');
        $rateAkoDarat=$this->input->post('rateAkoDarat');


       
         /*
          $usersDinas= array();
          $usersPenginapan= array();
          */

          for($x = 0; $x < sizeof($id_user_dinas); $x++){


             $user=$id_user;
             $total_rate=$jumlahHariRental * $rateRental[$x];
             $usersDinas= array(
                    'id_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'nama' => $namaRental[$x],
                    'alamat' => $alamatRental[$x],
                    'kontak' => $kontakRental[$x],
                    'asal' => $asalRental,
                    'tujuan' => $tujuanRental,
                    'tgl_berangkat' => $tglBerangkatRental,
                    'tgl_kembali' => $tglKembaliRental,
                    'jumlah_hari' => $jumlahHariRental,
                    'rate' => $rateRental[$x],
                    'total' => $total_rate

            );
            
             $where_user_dinas = array('id' => $id_user_dinas[$x]);
             /*

             $where_user_dinas='id',$id_user_dinas[$x];
             */
             $this->Dinas_model->ubah_data($usersDinas,'users_dinas',$where_user_dinas);
             /*
             $id_user_dinas=$this->Dinas_model->cek_id_terakhir_user_dinas();
             */

              $start_date =new DateTime($checkInDarat[$x]) ;
              $end_date   =new DateTime($checkOutDarat[$x]);


              $interval = $start_date->diff($end_date);
              $selisih=$interval->days;
            
            $usersPenginapan = array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'hotel' => $hotelDarat[$x],
                    'tgl_mendaftar' => $checkInDarat[$x],
                    'tgl_keluar' => $checkOutDarat[$x],
                    'biaya' => $rateAkoDarat[$x],
                    'gu' => $gudarat[$x],
                    'lama' => $selisih,
                    'jumlah_ako' => $jumlahAkoDarat[$x],
                    'id_user_dinas' => $id_user_dinas[$x]


            );

             $where_user_penginapan = array('id' => $id_penginapan[$x]);;
             $this->Dinas_model->ubah_data($usersPenginapan,'penginapan',$where_user_penginapan);

           
            

          }



         

        

          }elseif($jenis_kendaraan=="2"){
            //berangkat
            $namaMaskapai=$this->input->post('namaMaskapai');
            $noTiketMaskapai=$this->input->post('noTiketMaskapai');
            $asalUdara=$this->input->post('asalUdara');
            $tujuanUdara=$this->input->post('tujuanUdara');
            $tglBerangkatUdara=$this->input->post('tglBerangkatUdara');
            $hargaTiketUdara=$this->input->post('hargaTiketUdara');


            //pulang

            $namaMaskapai2=$this->input->post('namaMaskapai2');
            $noTiketMaskapai2=$this->input->post('noTiketMaskapai2');
            $asalUdara2=$this->input->post('asalUdara2');
            $tujuanUdara2=$this->input->post('tujuanUdara2');
            $tglKembaliUdara=$this->input->post('tglKembaliUdara');
            $hargaTiketUdara2=$this->input->post('hargaTiketUdara2');



            $hotelUdara=$this->input->post('hotelUdara');
            $checkInUdara =$this->input->post('checkInUdara');
            $checkOutUdara=$this->input->post('checkOutUdara');
            $hariUdara=$this->input->post('hariUdara');
            $rateHotelUdara=$this->input->post('rateHotelUdara');
            $uangRepresentasiUdara=$this->input->post('uangRepresentasiUdara');
            $uangTransportLokal1=$this->input->post('uangTransportLokal1');
            $uangTransportLokal2=$this->input->post('uangTransportLokal2');
            $uangTransportBandara1=$this->input->post('uangTransportBandara1');
            $uangTransportBandara2=$this->input->post('uangTransportBandara2');

             $jumlahHariUangHarian=$this->input->post('jumlahHariUangHarian');
             $rateUangHarian=$this->input->post('rateUangHarian');
             $rateUangSaku=$this->input->post('rateUangSaku');
             $jumlahHariUangSaku=$this->input->post('jumlahHariUangSaku');

           for($x = 0; $x < sizeof($id_user_dinas); $x++){

            $total_rate=$hariUdara[$x] * $rateHotelUdara[$x];

               $usersDinas = array(
                    'id_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'nama' => $namaMaskapai[$x],
                    'asal' => $asalUdara[$x],
                    'tujuan' => $tujuanUdara[$x],
                    'tgl_berangkat' => $tglBerangkatUdara[$x],
                    'tgl_kembali' => $tglKembaliUdara[$x],
                    'namarental2' => $namaMaskapai2[$x],
                    'notiket1' => $noTiketMaskapai[$x],
                    'notiket2' => $noTiketMaskapai2[$x],
                    'asal2' => $asalUdara2[$x],
                    'tujuan2' => $tujuanUdara2[$x],
                    'hargatiket1' => $hargaTiketUdara[$x],
                    'hargatiket2' => $hargaTiketUdara2[$x]
                    
                    
                    

            );
              
              /*
             $this->Dinas_model->input_data($usersDinas,'users_dinas');
             $id_user_dinas=$this->Dinas_model->cek_id_terakhir_user_dinas();
             */

              $where_user_dinas = array('id' => $id_user_dinas[$x]);
             /*

             $where_user_dinas='id',$id_user_dinas[$x];
             */
             $this->Dinas_model->ubah_data($usersDinas,'users_dinas',$where_user_dinas);

                $usersPenginapan = array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'hotel' => $hotelUdara[$x],
                    'tgl_mendaftar' => $checkInUdara[$x],
                    'tgl_keluar' => $checkOutUdara[$x],
                    'biaya' => $rateHotelUdara[$x],
                    'lama' => $hariUdara[$x],
                    'uang_representasi' => $uangRepresentasiUdara[$x],
                    'transport_lokal' => $uangTransportLokal1[$x],
                    'transport_lokal2' => $uangTransportLokal2[$x],
                    'transport_bandara' =>   $uangTransportBandara1[$x],
                    'transport_bandara2' =>  $uangTransportBandara2[$x],
                    'total_rate' => $total_rate,
                    'id_user_dinas' => $id_user_dinas[$x]


            );

             $where_user_penginapan = array('id' => $id_penginapan[$x]);;
             $this->Dinas_model->ubah_data($usersPenginapan,'penginapan',$where_user_penginapan);
             
/*
             $this->Dinas_model->input_data($usersPenginapan,'penginapan');
*/

                $totalUangHarian=$jumlahHariUangHarian[$x] * $rateUangHarian[$x];
                $uangHarian= array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'jumlah_hari' => $jumlahHariUangHarian[$x],
                    'rate' => $rateUangHarian[$x],
                    'total' => $totalUangHarian,
                    'nama' => "uang_harian",
                    'id_user_dinas' => $id_user_dinas[$x]



            );

             $where_uang_harian = array('id' => $id_uang_harian);
             $this->Dinas_model->ubah_data($uangHarian,'biaya_lainya',$where_uang_harian);
/*
                $this->Dinas_model->input_data($uangHarian,'biaya_lainya');
                */


                $uangSaku = array(
                    'id_perjalanan_dinas' =>$id_dinas,
                    'id_user' => $id_user[$x],
                    'jumlah_hari' => $jumlahHariUangHarian[$x],
                    'rate' => $rateUangHarian[$x],
                    'total' => $totalUangHarian,
                    'nama' => "uang_saku",
                    'id_user_dinas' => $id_user_dinas[$x]


            );
/*
              $this->Dinas_model->input_data($uangSaku,'biaya_lainya');
              */
              $where_uang_saku = array('id' => $id_uang_saku);;
              $this->Dinas_model->ubah_data($uangSaku,'biaya_lainya',$where_uang_saku);


           }
            
            /*
           $this->db->insert_batch('users_dinas',$usersDinas);
           $this->db->insert_batch('penginapan',$usersPenginapan);
           $this->db->insert_batch('biaya_lainya',$uangHarian);
           $this->db->insert_batch('biaya_lainya',$uangSaku);
           */
        }
         echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Transportasi dan Akomodasi berhasil disimpan</b></div>');

           redirect('Perjalanan_dinas/tambah_pengikut/'.$id_dinas);

    }

}
