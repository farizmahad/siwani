<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

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
	}
	

	public function index()
	{
        $group = array('operator','super admin');
        if (!$this->ion_auth->in_group($group)){ redirect('/');}
		    $data['dewan']=$this->Master_model->select_dewan();
        $data['dapil']=$this->Master_model->select_dapil();
        $data['fraksi']=$this->Master_model->select_fraksi();
        $data['pendamping']=$this->Master_model->select_pendamping();
        $data['setwan']=$this->Master_model->select_setwan();
        $data['jabatan']=$this->Master_model->select_jabatan();
		$this->load->view('layout/header_sidebar');
		$this->load->view('layout/header');
		$this->load->view('master_vw',$data);
		$this->load->view('layout/footer');
		
	}


	public function detail_master($param){

         if($param=="dapil"){
         	 $data['dapil']=$this->Master_model->select_dapil();
             $this->load->view('dapil_vw',$data);
         }elseif($param=="fraksi"){
         	$data['fraksi']=$this->Master_model->select_fraksi();
         	$this->load->view('fraksi_vw',$data);
         }elseif($param=="dewan"){
         	 $data['fraksi']=$this->Master_model->select_fraksi();
         	 $data['dapil']=$this->Master_model->select_dapil();
         	 $data['level']=$this->Master_model->select_level();
         	 $data['dewan']=$this->Master_model->select_dewan();
           $data['jabatan']=$this->Master_model->select_jabatan();
         	$this->load->view('dewan_vw',$data);
         }elseif($param=="pendamping"){
          $data['pendamping']=$this->Master_model->select_pendamping();
            $this->load->view('pendamping_vw',$data);
         }elseif($param=="setwan"){
           $data['jabatan']=$this->Master_model->select_jabatan();
			$data['setwan']=$this->Master_model->select_setwan();
            $this->load->view('setwan_vw', $data);
		    }elseif($param=="jabatan"){
          $data['jabatan']=$this->Master_model->select_jabatan();
            $this->load->view('jabatan_vw', $data);
        }
	}



	// save

	public function save_dapil(){

    	$dapil=$this->input->post('dapil');
    	$id=$this->input->post('id');
    	
    	
    	    $result['pesan']="";

    	    if($id){
            $this->Master_model->update_dapil($dapil,$id);
    	    }else{
    	    $this->Master_model->insert_dapil($dapil);
    	    }
        
    	echo json_encode($result);
    	
	}



    public function save_jabatan(){

      $jabatan=$this->input->post('jabatan');
      $urutan=$this->input->post('urutan');
      $id=$this->input->post('id');
      
      
          $result['pesan']="";

          if($id){
            $this->Master_model->update_jabatan($jabatan,$urutan,$id);
          }else{
          $this->Master_model->insert_jabatan($jabatan,$urutan);
          }
        
      echo json_encode($result);
      
  }



	 public function save_setwan(){

		$nama=$this->input->post('nama');
		$nip=$this->input->post('nip');
		$jaba=$this->input->post('jabatan');
		$golongan=$this->input->post('golongan');
		$id=$this->input->post('id');

        $pecah = explode("^", $jaba);
        $id_jabatan = $pecah[0];
        $jabatan = $pecah[1];



		  $result['pesan']="";

		  if($id){
			$this->Master_model->update_setwan($nama,$nip,$jabatan,$golongan,$id);
		  }else{
			$this->Master_model->insert_setwan($nama,$nip,$jabatan,$golongan,$id_jabatan);
		  }

		echo json_encode($result);
      
	}

  public function save_pendamping(){

      $nama=$this->input->post('nama');
      $nip=$this->input->post('nip');
      $jabatan=$this->input->post('jabatan');
      $id=$this->input->post('id');
      
      
          $result['pesan']="";

          if($id){
            $this->Master_model->update_pendamping($nama,$nip,$jabatan,$id);
          }else{
          $this->Master_model->insert_pendamping($nama,$nip,$jabatan);
          }
        
      echo json_encode($result);
      
  }


	public function save_fraksi(){

    	$fraksi=$this->input->post('fraksi');
    	$id=$this->input->post('id');
    	
    	
    	    $result['pesan']="";

    	    if($id){
            $this->Master_model->update_fraksi($fraksi,$id);
    	    }else{
    	    $this->Master_model->insert_fraksi($fraksi);
    	    }
        
    	echo json_encode($result);
    	
	}


	function delete_dapil(){
		$id=$this->input->post('id');
    	$this->Master_model->delete_dapil($id);
    	redirect('Master/detail_master/dapil');

	}


  function delete_pendamping(){
    $id=$this->input->post('id');
      $this->Master_model->delete_pendamping($id);
      redirect('Master/detail_master/dapil');

  }
  
  function delete_setwan(){
    $id=$this->input->post('id');
	$this->Master_model->delete_setwan($id);
	redirect('Master/detail_master/setwan');

  }

	function delete_fraksi(){
		$id=$this->input->post('id');
    	$this->Master_model->delete_fraksi($id);
    	redirect('Master/detail_master/fraksi');

	}

    function delete_dewan(){
        $id=$this->input->post('id');
        $id_user=$this->input->post('id_user');
        $this->Master_model->delete_dewan($id);
        $this->Master_model->delete_users($id_user);
        $this->Master_model->delete_users_groups($id_user);
        redirect('Master/detail_master/fraksi');

    }


    function delete_jabatan(){
    $id=$this->input->post('id');
      $this->Master_model->delete_jabatan($id);
      redirect('Master/detail_master/jabatan');

  }


/*


	function do_upload(){
		
        $namaDepan= $this->input->post('namaDepan');
        $namaBelakang= $this->input->post('namaBelakang');
        $alamat= $this->input->post('alamat');
        $email= $this->input->post('email');
        /*
        $levelAkses= $this->input->post('levelAkses');
        */


        /*
        $password= $this->input->post('password');
        $konfirmPassword= $this->input->post('konfirmPassword');
        $fraksi= $this->input->post('fraksi');
        $dapil= $this->input->post('dapil');
        $jabatan= $this->input->post('jabatan');
        $gelar= $this->input->post('gelar');
        $file=$_FILES['file']['name'];
        $levelAkses   =$_POST['levelAkses'];
        

        $email_exist=$this->Master_model->email_exist($email);
    


        $gabung=strtolower($namaDepan).strtolower($namaBelakang);
        

        $username=$gabung;

        $result['pesan']="";
        $additional_data = array(
			'first_name' => $namaDepan,
			'last_name' => $namaBelakang,
      'gelar' => $gelar,
		);



        $config['upload_path']="./assets/images"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 /*
            $judul= $this->input->post('judul'); 
            *///get judul image


            /*
            $image= $data['upload_data']['file_name'];
             //set file name ke variable image
            $this->ion_auth->register($username, $password, $email, $additional_data);
            
            $last_insert_id=$this->Master_model->last_insert_id();
            
            /*
            
            $update_groups=$this->Master_model->update_groups($last_insert_id,$levelAkses);
            */

            /*

            $hapus_groups=$this->Master_model->delete_users_groups($last_insert_id);

            $updateArray = array();

           for($x = 0; $x < count($levelAkses); $x++){
            $updateArray[] = array(
             'user_id' =>$last_insert_id,
             'group_id' => $levelAkses[$x]
             );
           }
            $this->db->insert_batch('users_groups',$updateArray);
            
            $this->Master_model->simpan_upload($image,$alamat,$fraksi,$dapil,$jabatan,$last_insert_id); //kirim value ke model m_upload
           
        }else{
            $this->ion_auth->register($username, $password, $email, $additional_data);
            
            $last_insert_id=$this->Master_model->last_insert_id();
            
            /*
            $update_groups=$this->Master_model->update_groups($last_insert_id,$levelAkses);
            */

            /*

            $hapus_groups=$this->Master_model->delete_users_groups($last_insert_id);

            $updateArray = array();

          for($x = 0; $x < sizeof($levelAkses); $x++){
            $updateArray[] = array(
             'user_id' =>$last_insert_id,
             'group_id' => $levelAkses[$x]
             );
          }
            $this->db->insert_batch('users_groups',$updateArray);
            $this->Master_model->simpan_upload_no_image($alamat,$levelAkses,$fraksi,$dapil,$jabatan,$last_insert_id);
        }



       
        echo json_encode($result);
    }


*/

/*

    function edit_dewan(){

    	$id= $this->input->post('id');
    	$id_user= $this->input->post('id_user');
        $namaDepan= $this->input->post('namaDepan');
        $namaBelakang= $this->input->post('namaBelakang');
        $alamat= $this->input->post('alamat');
    
        $email= $this->input->post('email');
        /*
        $levelAkses= $this->input->post('levelAkses');
        */

        /*
        $password= $this->input->post('password');
        $konfirmPassword= $this->input->post('konfirmPassword');
        $fraksi= $this->input->post('fraksi');
        $dapil= $this->input->post('dapil');
        $jabatan= $this->input->post('jabatan');
        $gelar= $this->input->post('gelar');
        $files=$_FILES['file']['name'];
  
    


        if($namaDepan==""){
            $result['pesan']="Nama depan harus diisi";
        }elseif($namaBelakang==""){
            $result['pesan']="Nama belakang harus diisi";
        }elseif($email==""){
            $result['pesan']="Email harus diisi";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $result['pesan']="Format email salah";
        }elseif($password !=$konfirmPassword){
            $result['pesan']="Password dan Konfirmasi Password tidak sama";
        }elseif($fraksi==""){
             $result['pesan']="Fraksi harus diisi";
        }elseif($jabatan==""){
                 $result['pesan']="Jabatan harus diisi";
        }else{

        $result['pesan']="";
        
        
        $config['upload_path']="./assets/images"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
          if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name'];
            $this->Master_model->update_dewan($image,$alamat,$fraksi,$dapil,$jabatan,$id_user,$id);
          }else{
            $this->Master_model->update_dewan("",$alamat,$fraksi,$dapil,$jabatan,$id_user,$id);
          }
           /*
           $datas=array(
             'group_id'=>$levelAkses
            );
           $where = array('user_id' => $id_user);
           $this->db->update('users_groups',$datas,$where);

           */

           /*
           if($password){

             $data = array(
                    'password'   => $password,
                    'first_name' => $namaDepan,
                    'last_name'  => $namaBelakang,
                    'email'  => $email,
                    'gelar'  => $gelar,
              );
             $this->ion_auth->update($id_user, $data);
           }else{
             $data = array(
                    'first_name' => $namaDepan,
                    'last_name'  => $namaBelakang,
                    'email'  => $email,
                    'gelar'  => $gelar,
              );
             $this->ion_auth->update($id_user, $data);

           }
          
      }
        echo json_encode($result);
    }


*/
    public function edit_level(){

      $id_dewan= $this->input->post('ids');
      $data['id_dewan']=$id_dewan;
      $data['group']=$this->Master_model->get_group($id_dewan);
      $data['level']=$this->Master_model->select_level();

      $this->load->view('edit_level_dewan_vw',$data);
      

    }


    public function save_level(){
    $id_dewan= $this->input->post('id_dewan');
    


    $levelAkses   =$_POST['levelAkses'];

    
    $data['pesan']="";
    $hapus_groups=$this->Master_model->delete_users_groups($id_dewan);

            $updateArray = array();

           for($x = 0; $x < count($levelAkses); $x++){
            $updateArray[] = array(
             'user_id' =>$id_dewan,
             'group_id' => $levelAkses[$x]
             );
           }
            $this->db->insert_batch('users_groups',$updateArray);

    


             echo json_encode($data);
    }
        
    
public function loadData($record=0) {
        $recordPerPage = 2;
        if($record != 0){
            $record = ($record-1) * $recordPerPage;
        }       
        $recordCount = $this->Master_model->getRecordCount();
        $empRecord = $this->Master_model->getRecord($record,$recordPerPage);
        $config['base_url'] = base_url().'Master/detail_master/dapil/loadData';
        $config['use_page_numbers'] = TRUE;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['total_rows'] = $recordCount;
        $config['per_page'] = $recordPerPage;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['empData'] = $empRecord;
        echo json_encode($data);        
    }




    function do_upload(){

        $namaLengkap= $this->input->post('namaLengkap');
        $nip= $this->input->post('nip');
    
        $namaDepan= $this->input->post('namaDepan');

        $namaBelakang= $this->input->post('namaBelakang');
        if($namaBelakang){
          $namaBelakang=$namaBelakang;
        }else{
          $namaBelakang=$nip;
        }
        $alamat= $this->input->post('alamat');
        $email= $this->input->post('email');
        $password= $this->input->post('password');
        $konfirmPassword= $this->input->post('konfirmPassword');
        $fraksi= $this->input->post('fraksi');
        $dapil= $this->input->post('dapil');
        // jabatan
        $jaba= $this->input->post('jabatan');

        $pecah = explode("^", $jaba);
        $id_jabatan = $pecah[0];
        $jabatan = $pecah[1];



        //
        $gelar= $this->input->post('gelar');
        $file=$_FILES['file']['name'];
        $levelAkses   =$_POST['levelAkses'];
        $gabung=strtolower($namaDepan).strtolower($namaBelakang);
        $username=$gabung;

        $result['pesan']="";
        $additional_data = array(
          'first_name' => $namaDepan,
          'last_name' => $namaBelakang,
          'gelar' => $gelar,
          );



        $config['upload_path']="./assets/images"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 

        $this->upload->do_upload("file");//upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 /*
            $judul= $this->input->post('judul'); 
            *///get judul image
            $image= $data['upload_data']['file_name'];
            if($image)
            {

               $image_upload=$image;
            }else{
             //set file name ke variable image
               $image_upload="";
            }
            $this->ion_auth->register($username, $password, $email, $additional_data);
            
            $last_insert_id=$this->Master_model->last_insert_id();
            
            /*
            
            $update_groups=$this->Master_model->update_groups($last_insert_id,$levelAkses);
            */

            $hapus_groups=$this->Master_model->delete_users_groups($last_insert_id);

            $updateArray = array();

           for($x = 0; $x < count($levelAkses); $x++){
            $updateArray[] = array(
             'user_id' =>$last_insert_id,
             'group_id' => $levelAkses[$x]
             );
           }
            $this->db->insert_batch('users_groups',$updateArray);
            
            $this->Master_model->simpan_upload($image_upload,$alamat,$fraksi,$dapil,$jabatan,$last_insert_id,$namaLengkap,$nip,$id_jabatan); //kirim value ke model m_upload
                  
        echo json_encode($result);
    }



    function edit_dewan(){

      $id= $this->input->post('id');
      $id_user= $this->input->post('id_user');
        

        $namaLengkap= $this->input->post('namaLengkap');
        $nip= $this->input->post('nip');

        $namaDepan= $this->input->post('namaDepan');
        $namaBelakang= $this->input->post('namaBelakang');
        $alamat= $this->input->post('alamat');
    
        $email= $this->input->post('email');
        /*
        $levelAkses= $this->input->post('levelAkses');
        */
        $password= $this->input->post('password');
        $konfirmPassword= $this->input->post('konfirmPassword');
        $fraksi= $this->input->post('fraksi');
        $dapil= $this->input->post('dapil');


        $jaba= $this->input->post('jabatan');
        $pecah = explode("^", $jaba);
        $id_jabatan = $pecah[0];
        $jabatan = $pecah[1];



        $gelar= $this->input->post('gelar');
        $files=$_FILES['file']['name'];
  
    

        $gabung=strtolower($namaDepan).strtolower($namaBelakang);
        $username=$gabung;
      

        $result['pesan']="";
        
        
        $config['upload_path']="./assets/images"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
          $this->upload->do_upload("file");
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name'];

            if($image){
              $image_upload=$image;
            }else{
              $image_upload="";
            }
            $this->Master_model->update_dewan($image_upload,$alamat,$fraksi,$dapil,$jabatan,$id_user,$id,$username,$namaLengkap,$nip,$id_jabatan);
        
           if($password){

             $data = array(
                    'password'   => $password,
                    'first_name' => $namaDepan,
                    'last_name'  => $namaBelakang,
                    'email'  => $email,
                    'gelar'  => $gelar,
                    'username'  => $username,
              );
             $this->ion_auth->update($id_user, $data);
           }else{
             $data = array(
                    'first_name' => $namaDepan,
                    'last_name'  => $namaBelakang,
                    'email'  => $email,
                    'gelar'  => $gelar,
                     'username'  => $username,
              );
             $this->ion_auth->update($id_user, $data);

           }
          
      
        echo json_encode($result);
    }

}
