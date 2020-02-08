<?php defined('BASEPATH') OR die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
          $this->load->model('Master_model');
          $this->load->model('Usulan_model');
          $this->load->model('Dinas_model');
     }



     public function rekapitulasi_dinas(){

        $parameter=$this->input->get('parameter');
        $pilihan=$this->input->get('pilihan');
        if($pilihan){
          $pilihan=$pilihan;
        }else{
          $pilihan="udara";
        }

        $data['pilihan']=$pilihan;
        $data['parameter']=$parameter;
         /*
        $dinas=$this->Dinas_model->select_perjalanan_dinas($pilihan,$parameter);
        */
        

        $dinas=$this->Dinas_model->users_dinas($pilihan,$parameter);
                $spreadsheet = new Spreadsheet;
                $spreadsheet->getActiveSheet(0)->getColumnDimension('A')->setWidth(5);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setWidth(25);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('F')->setWidth(20);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('G')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('H')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('I')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('J')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('K')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('L')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('M')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('N')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('O')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('P')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('Q')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('R')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('S')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('T')->setWidth(15);


         $spreadsheet->getActiveSheet(0)->mergeCells('B1:AH1')->setCellValue('B1','DAFTAR NOMINATIF PERJALANAN DINAS');
         $spreadsheet->getActiveSheet(0)->mergeCells('B2:AH2')->setCellValue('B2','SEKRETARIAT DPRD PEMERINTAHAN DAERAH KOTA CIMAHI');

         
         
         $spreadsheet->getActiveSheet(0)->mergeCells('B5:D5');

         $spreadsheet->getActiveSheet(0)->mergeCells('E5:J5')->setCellValue('E5','KEBERANGKATAN');

         $spreadsheet->getActiveSheet(0)->mergeCells('K5:P5')->setCellValue('K5','KEPULANGAN');

         
         $spreadsheet->getActiveSheet(0)->mergeCells('Q5:S5')->setCellValue('Q5','UANG HARIAN');
         $spreadsheet->getActiveSheet(0)->mergeCells('T5:V5')->setCellValue('T5','UANG SAKU');

         $spreadsheet->getActiveSheet(0)->mergeCells('W5:AB5')->setCellValue('W5','AKOMODASI/KONTRIBUSI');


         

          $spreadsheet->getActiveSheet(0)->mergeCells('AC5:AC6')->setCellValue('AC5','UANG REPRESENTASI');

          $spreadsheet->getActiveSheet(0)->mergeCells('AD5:AD6')->setCellValue('AD5','TRANSPORT LOKAL 1');
          $spreadsheet->getActiveSheet(0)->mergeCells('AE5:AE6')->setCellValue('AE5','TRANSPORT LOKAL 2');
          $spreadsheet->getActiveSheet(0)->mergeCells('AF5:AF6')->setCellValue('AF5','TRANSPORT BANDARA 1');

          $spreadsheet->getActiveSheet(0)->mergeCells('AG5:AG6')->setCellValue('AG5','TRANSPORT BANDARA 2');
          

           $spreadsheet->getActiveSheet(0)->mergeCells('AH5:AH6')->setCellValue('AH5','TOTAL');
          

          /*
          $spreadsheet->getActiveSheet(0)->mergeCells('V5:V6')->setCellValue('V5','TRANSPORT BANDARA');
           $spreadsheet->getActiveSheet(0)->mergeCells('W5:W6')->setCellValue('W5','TOTAL');
           */

          $spreadsheet->setActiveSheetIndex(0)
                      
                      ->setCellValue('B5', 'SURAT TUGAS')
                      ->setCellValue('B6', 'URAIAN')
                      ->setCellValue('C6', 'NO. SURAT TUGAS')
                      ->setCellValue('D6', 'NAMA')
                      ->setCellValue('E6', 'NAMA MASKAPAI')
                      ->setCellValue('F6', 'NO. TIKET')
                      ->setCellValue('G6', 'ASAL')
                      ->setCellValue('H6', 'TUJUAN')
                      ->setCellValue('I6', 'TANGGAL BERANGKAT')
                      ->setCellValue('J6', 'HARGA TIKET')
                      ->setCellValue('K6', 'NAMA MASKAPAI')
                      ->setCellValue('L6', 'NO. TIKET')
                      ->setCellValue('M6', 'ASAL')
                      ->setCellValue('N6', 'TUJUAN')
                      ->setCellValue('O6', 'TANGGAL KEMBALI')
                      ->setCellValue('P6', 'HARGA TIKET')
                      
                      ->setCellValue('Q6', 'JMLH HARI')
                      ->setCellValue('R6', 'RATE')
                      ->setCellValue('S6', 'JUMLAH')

                      ->setCellValue('T6', 'JMLH HARI')
                      ->setCellValue('U6', 'RATE')
                      ->setCellValue('V6', 'JUMLAH')
                      ->setCellValue('W6', 'NAMA HOTEL')
                      ->setCellValue('X6', 'TGL MENGINAP')
                      ->setCellValue('Y6', 'TGL KELUAR')
                      ->setCellValue('Z6', 'JMLH HARI')
                       ->setCellValue('AA6', 'RATE')
                       ->setCellValue('AB6', 'JUMLAH')
                      ;
                      /*
                      ->setCellValue('R6', 'JUMLAH');
                      */
          

          $kolom = 7;
          $nomor = 1;
          foreach($dinas as $row) {

               $status_peserta_dinas=$row->status_peserta_dinas;

              

               if($status_peserta_dinas=="1"){
                       $id_user=$row->id_user;
                       $tampil_nama_lengkap=$this->Dinas_model->tampil_detail_dewan($id_user);

               }elseif($status_peserta_dinas=="2"){
                       $id_user=$row->id_user;
                       $tampil_nama_lengkap=$this->Dinas_model->tampil_detail_setwan($id_user);
               }

               $spreadsheet->setActiveSheetIndex(0)

                           
                           ->setCellValue('B' . $kolom, $row->perihal)
                           ->setCellValue('C' . $kolom, $row->surat_perintah)
                           ->setCellValue('D' . $kolom, $row->tampil_nama_lengkap)
                           ->setCellValue('E' . $kolom, $row->nama)
                           ->setCellValue('F' . $kolom, $row->notiket1)
                           ->setCellValue('G' . $kolom, $row->asal)
                           ->setCellValue('H' . $kolom, $row->tujuan)
                           ->setCellValue('I' . $kolom, $row->tgl_berangkat)
                           ->setCellValue('J' . $kolom, $row->hargatiket1)
                           ->setCellValue('K' . $kolom, $row->namarental2)
                           ->setCellValue('L' . $kolom, $row->notiket2)
                           ->setCellValue('M' . $kolom, $row->asal2)
                           ->setCellValue('N' . $kolom, $row->tujuan2)
                           ->setCellValue('O' . $kolom, $row->tgl_kembali)
                           ->setCellValue('P' . $kolom, $row->hargatiket2)
                           ;
       
               

                     $id_user_dinas=$row->id_user_dinas;
                     $tampil_uang_harian=$this->Dinas_model->tampil_biaya_lain('uang_harian',$id_user_dinas);

                     foreach($tampil_uang_harian as $uh){
                        $total_uang_harian=$uh->jumlah_hari * $uh->rate;


                       $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('Q' . $kolom, $uh->jumlah_hari)
                           ->setCellValue('R' . $kolom, $uh->rate)
                           ->setCellValue('S' . $kolom, $total_uang_harian);
                                 
                     }

                      $tampil_uang_saku=$this->Dinas_model->tampil_biaya_lain('uang_saku',$id_user_dinas);

                     foreach($tampil_uang_saku as $usa){
                         $total_uang_saku=$usa->jumlah_hari * $usa->rate;
                         $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('T' . $kolom, $usa->jumlah_hari)
                           ->setCellValue('U' . $kolom, $usa->rate)
                           ->setCellValue('V' . $kolom, $total_uang_saku);
                      }

                       $tampil_hotel=$this->Dinas_model->tampil_hotel($id_user_dinas);          
           
               
                      foreach($tampil_hotel as $ho){
                         $total_keseluruhan=$row->hargatiket1+$row->hargatiket2+$total_uang_harian+$total_uang_saku+$total_udara+$ho->uang_representasi+$ho->transport_lokal+$ho->transport_lokal2+$ho->transport_bandara+$ho->transport_bandara2;
                           $total_uang=$ho->lama * $ho->biaya;
                           $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('W' . $kolom, $ho->hotel)
                           ->setCellValue('X' . $kolom, $ho->tgl_mendaftar)
                           ->setCellValue('Y' . $kolom, $ho->tgl_keluar)
                           ->setCellValue('Z' . $kolom, $ho->lama)
                           ->setCellValue('AA' . $kolom, $ho->rate)
                           ->setCellValue('AB' . $kolom, $total_uang)
                           ->setCellValue('AC' . $kolom, $ho->uang_representasi)
                           ->setCellValue('AD' . $kolom, $ho->transport_lokal)
                           ->setCellValue('AE' . $kolom, $ho->transport_lokal2)
                           ->setCellValue('AF' . $kolom, $ho->transport_bandara)
                           ->setCellValue('AG' . $kolom, $ho->transport_bandara2)
                           ->setCellValue('AH' . $kolom, $total_keseluruhan)
                           ;

                      }



               $kolom++;
               $nomor++;

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];



          $styleArray2 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'rotation' => 90,
        'startColor' => [
            'argb' => 'FFA0A0A0',
        ],
        'endColor' => [
            'argb' => 'FFFFFFFF',
        ],
    ],
];


$styleArray3 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];

 
  $kolom_bawah=$kolom-1;

 $spreadsheet->getActiveSheet(0)->getStyle('B5:AH'.$kolom_bawah)->applyFromArray($styleArray);
 $spreadsheet->getActiveSheet(0)->getStyle('B1')->applyFromArray($styleArray2);
 $spreadsheet->getActiveSheet(0)->getStyle('B2')->applyFromArray($styleArray2);
 $spreadsheet->getActiveSheet(0)->getStyle('B5:AH6')->applyFromArray($styleArray3);

          }

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="RekapitulasiDinas.xlsx"');
          header('Cache-Control: max-age=0');

    $writer->save('php://output');
        

     }

     public function export_bidang(){

     $bidang=$this->input->get('bidang');
     $pilihan=$this->input->get('pilihan');
     $parameter=$this->input->get('parameter');

     if($pilihan){
          $proposal=$this->Master_model->select_reses_pemerintahan_pilihan($bidang,$pilihan,$parameter);
     }else{
          $proposal=$this->Master_model->select_reses_pemerintahan($bidang);
     }
     
      
          $spreadsheet = new Spreadsheet;

          $spreadsheet->getActiveSheet(0)->getColumnDimension('A')->setWidth(5);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setWidth(20);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setWidth(18);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setWidth(35);

          $spreadsheet->getActiveSheet(0)->mergeCells('A1:E1')->setCellValue('A1',$bidang);

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A3', 'No')
                      ->setCellValue('B3', 'Nama')
                      ->setCellValue('C3', 'Jenis Kegiatan')
                      ->setCellValue('D3', 'Volume')
                      ->setCellValue('E3', 'Lokasi');

          $kolom = 4;
          $nomor = 1;

          $count_proposal=count($proposal);
          if($count_proposal > 0) {
          foreach($proposal as $pengguna) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $pengguna->nama_lengkap)
                           ->setCellValue('C' . $kolom, $pengguna->kesimpulan)
                           ->setCellValue('D' . $kolom, $pengguna->volume)
                           ->setCellValue('E' . $kolom, $pengguna->lokasi)
                           ;

               $kolom++;
               $nomor++;

            } 
          }else{
              $styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];


$styleArray3 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];


            $spreadsheet->getActiveSheet(0)->mergeCells('A'.$kolom.':E'.$kolom)->setCellValue('A'.$kolom,'Tidak ada data!');

            $spreadsheet->getActiveSheet(0)->getStyle('A'.$kolom.':E'.$kolom)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet(0)->getStyle('A'.$kolom.':E'.$kolom)->applyFromArray($styleArray3);
          }

          $tes=$kolom-1;
          $styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];


          $styleArray2 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'rotation' => 90,
        'startColor' => [
            'argb' => 'FFA0A0A0',
        ],
        'endColor' => [
            'argb' => 'FFFFFFFF',
        ],
    ],
];

$styleArray3 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];

$styleArray4 = [
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];

           $spreadsheet->getActiveSheet(0)->getStyle('A3:E'.$tes)->applyFromArray($styleArray);
           $spreadsheet->getActiveSheet(0)->getStyle('A3:E3')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A4:A'.$tes)->applyFromArray($styleArray4);
           $spreadsheet->getActiveSheet(0)->getStyle('D4:D'.$tes)->applyFromArray($styleArray4);
           $spreadsheet->getActiveSheet(0)->getStyle('A1')->applyFromArray($styleArray2);
          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="HasilResesBidang.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');




     }
     
     public function export_proposal_reses()
     {
          $pilihan=$this->input->get('pilihan');
          $parameter=$this->input->get('parameter');
          $proposal=$this->Master_model->select_reses_belum_isi_bidang($pilihan,$parameter);
          $count_proposal =count($proposal);
           
          $pilihan_kapital=strtoupper($pilihan);
          $parameter_kapital=strtoupper($parameter);

          $spreadsheet = new Spreadsheet;
          $spreadsheet->getActiveSheet(0)->mergeCells('A1:N1');

          if($pilihan=="" && $parameter==""){
           $spreadsheet->getActiveSheet(0)->mergeCells('A2:N2')->setCellValue('A2', 'SEMUA DATA');
          }else{
            $spreadsheet->getActiveSheet(0)->mergeCells('A2:N2')->setCellValue('A2', 'DATA DENGAN FILTER '.$pilihan_kapital.' '.$parameter_kapital);
          }
          $spreadsheet->getActiveSheet(0)->getColumnDimension('A')->setWidth(5);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setWidth(25);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setWidth(18);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setWidth(28);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('F')->setWidth(10);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('G')->setWidth(25);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('H')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('I')->setWidth(25);
           $spreadsheet->getActiveSheet(0)->getColumnDimension('J')->setWidth(25);
           $spreadsheet->getActiveSheet(0)->getColumnDimension('K')->setWidth(25);
            $spreadsheet->getActiveSheet(0)->getColumnDimension('L')->setWidth(25);
             $spreadsheet->getActiveSheet(0)->getColumnDimension('M')->setWidth(25);
                   $spreadsheet->getActiveSheet(0)->getColumnDimension('N')->setWidth(30);

          $spreadsheet->getActiveSheet(0)->mergeCells('A3:A4')->setCellValue('A3', 'NO');
          $spreadsheet->getActiveSheet(0)->mergeCells('B3:B4');
          $spreadsheet->getActiveSheet(0)->mergeCells('C3:C4');
          $spreadsheet->getActiveSheet(0)->mergeCells('D3:D4');
          $spreadsheet->getActiveSheet(0)->mergeCells('E3:E4');
          $spreadsheet->getActiveSheet(0)->mergeCells('F3:F4');
          $spreadsheet->getActiveSheet(0)->mergeCells('G3:G4');
          $spreadsheet->getActiveSheet(0)->mergeCells('H3:H4');
           $spreadsheet->getActiveSheet(0)->mergeCells('I3:M3');
           $spreadsheet->getActiveSheet(0)->mergeCells('N3:N4');

          /*
          $spreadsheet->getActiveSheet(0)->mergeCells('H3:H4');
          $spreadsheet->getActiveSheet(0)->mergeCells('I3:L3');
          */
          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1','JADWAL KEGIATAN RESES  DPRD KOTA CIMAHI')
                      ->setCellValue('B3', 'Nama Anggota DPRD')
                      ->setCellValue('C3', 'Fraksi')
                      ->setCellValue('D3', 'Dapil / Kecamatan')
                      ->setCellValue('E3', 'Hari Tanggal')
                      ->setCellValue('F3', 'Tempat')
                      ->setCellValue('G3', 'Waktu (WIB)')
                      ->setCellValue('H3', 'Jumlah Konsituen')
                      ->setCellValue('I3', 'Kebutuhan Fasilitas')
                      ->setCellValue('I4', 'Snack')
                      ->setCellValue('J4', 'Kursi')
                      ->setCellValue('K4', 'Spanduk')
                      ->setCellValue('L4', 'Tenda')
                      ->setCellValue('M4', 'Sound')
                      ->setCellValue('N3', 'Pendamping')

                      ;
        
          $kolom = 5;
          $nomor = 1;

          if($count_proposal>0){
          foreach($proposal as $pengguna) {
               $tanggal=date('Y-m-d');
               $hari=$this->namahari($tanggal);
               $tgl=date('d F Y', strtotime($pengguna->tanggal));
                
               if($pengguna->tenda){
                   $tenda=$pengguna->tenda;
               }else{
                   $tenda="-";
               }

               if($pengguna->spanduk){
                   $spanduk=$pengguna->spanduk;
               }else{
                   $spanduk="-";
               }

               if($pengguna->sound_system){
                  $sound_system=$pengguna->sound_system;
               }else{
                   $sound_system="-";
               }
               
               
               $id_pendamping=$pengguna->id_pendamping;
               if($id_pendamping ==0){
                  $nama="-";
               }else{
                 $users=$this->Usulan_model->tampil_users($id_pendamping);
                                       foreach($users as $us){
                                           $nama=$us->nama;
                                           $nip=$us->nip;
                                           $jabatan=$us->jabatan;
                                           
                                       }
               }
               $namaAnggota=$pengguna->first_name.$pengguna->last_name.$pengguna->gelar;
               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $pengguna->nama_lengkap)
                           ->setCellValue('C' . $kolom, $pengguna->fraksi)
                           ->setCellValue('D' . $kolom, $pengguna->daerah_pemilihan)
                           ->setCellValue('E' . $kolom, $hari.'/'.$tgl)
                           ->setCellValue('F' . $kolom, $pengguna->tempat)
                           ->setCellValue('G' . $kolom, $pengguna->waktu)
                           ->setCellValue('H' . $kolom, $pengguna->jumlah_konsituen)
                            ->setCellValue('I' . $kolom, $pengguna->snack)
                             ->setCellValue('J' . $kolom, $pengguna->kursi)
                              ->setCellValue('K' . $kolom, $spanduk)
                              ->setCellValue('L' . $kolom, $tenda)
                               ->setCellValue('M' . $kolom, $sound_system)
                                ->setCellValue('N' . $kolom, $nama)
                               

                           

                           ;
                         

               $kolom++;
               $nomor++;

          }
        }else{
                        
                        $spreadsheet->getActiveSheet(0)->mergeCells('A5:L5')->setCellValue('A5', 'Tidak ada data!');

            $styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],

    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];
            $spreadsheet->getActiveSheet(0)->getStyle('A5:L5')->applyFromArray($styleArray);
         }
            
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];

$styleArray2 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'rotation' => 90,
        'startColor' => [
            'argb' => 'FFA0A0A0',
        ],
        'endColor' => [
            'argb' => 'FFFFFFFF',
        ],
    ],
];

$styleArray3 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];

$styleArray4 = [
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];



           $tes=$kolom-1;
           $spreadsheet->getActiveSheet(0)->getStyle('A3:N'.$tes)->applyFromArray($styleArray);
           $spreadsheet->getActiveSheet(0)->getStyle('A1')->applyFromArray($styleArray2);
           $spreadsheet->getActiveSheet(0)->getStyle('A2')->applyFromArray($styleArray2);
           $spreadsheet->getActiveSheet(0)->getStyle('A4:N4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A3:A4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('B3:B4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('C3:C4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('D3:D4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('E3:E4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('F3:F4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('G3:G4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('H3:H4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('I3:I4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('J3:J4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('K3:K4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('N3:N4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A3:A'.$tes)->applyFromArray($styleArray4);

           $spreadsheet->getDefaultStyle()->getFont()->setName('Times New Roman');
           $spreadsheet->getDefaultStyle()->getFont()->setSize(12);

           $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="RekapitulasiProposal.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
     }



     public function export_reses()
     {
          $pilihan=$this->input->get('pilihan');
          $parameter=$this->input->get('parameter');
          $proposal=$this->Master_model->select_reses_sudah($pilihan,$parameter);
          $count_proposal =count($proposal);
           
          $pilihan_kapital=strtoupper($pilihan);
          $parameter_kapital=strtoupper($parameter);

          $spreadsheet = new Spreadsheet;
          $spreadsheet->getActiveSheet(0)->mergeCells('A1:L1');

          if($pilihan=="" && $parameter==""){
           $spreadsheet->getActiveSheet(0)->mergeCells('A2:L2')->setCellValue('A2', 'SEMUA DATA');
          }else{
            $spreadsheet->getActiveSheet(0)->mergeCells('A2:L2')->setCellValue('A2', 'DATA DENGAN FILTER '.$pilihan_kapital.' '.$parameter_kapital);
          }
          $spreadsheet->getActiveSheet(0)->getColumnDimension('A')->setWidth(5);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setWidth(25);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setWidth(18);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setWidth(28);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('F')->setWidth(10);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('G')->setWidth(25);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('H')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('I')->setWidth(25);
           $spreadsheet->getActiveSheet(0)->getColumnDimension('J')->setWidth(25);
           $spreadsheet->getActiveSheet(0)->getColumnDimension('K')->setWidth(25);
            $spreadsheet->getActiveSheet(0)->getColumnDimension('L')->setWidth(25);
          $spreadsheet->getActiveSheet(0)->mergeCells('A3:A4')->setCellValue('A3', 'NO');
          $spreadsheet->getActiveSheet(0)->mergeCells('B3:B4');
          $spreadsheet->getActiveSheet(0)->mergeCells('C3:C4');
          $spreadsheet->getActiveSheet(0)->mergeCells('D3:D4');
          $spreadsheet->getActiveSheet(0)->mergeCells('E3:E4');
          $spreadsheet->getActiveSheet(0)->mergeCells('F3:F4');
          $spreadsheet->getActiveSheet(0)->mergeCells('G3:G4');
          $spreadsheet->getActiveSheet(0)->mergeCells('H3:H4');
          $spreadsheet->getActiveSheet(0)->mergeCells('I3:L3');
          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1','HASIL RESES ANGGOTA DPRD')
                      ->setCellValue('B3', 'NAMA ANGGOTA DPR')
                      ->setCellValue('C3', 'FRAKSI')
                      ->setCellValue('D3', 'DAPIL')
                      ->setCellValue('E3', 'HARI/TGL')
                      ->setCellValue('F3', 'TEMPAT')
                      ->setCellValue('G3', 'NAMA')
                      ->setCellValue('H3', 'ALAMAT')
                      ->setCellValue('I3', 'ASPIRASI')
                      ->setCellValue('I4', 'BIDANG PEMERINTAHAN')
                      ->setCellValue('J4', 'BIDANG EKONOMI KEUANGAN')
                      ->setCellValue('K4', 'BIDANG PEMBANGUNAN')
                      ->setCellValue('L4', 'BIDANG KESEJAHTERAAN RAKYAT')
                      ;
        
          $kolom = 5;
          $nomor = 1;

          if($count_proposal>0){
          foreach($proposal as $pengguna) {
               $tanggal=date('Y-m-d');
               $hari=$this->namahari($tanggal);
               $tgl=date('d F Y', strtotime($pengguna->tanggal));
               
               if($pengguna->bidang=="Bidang Pemerintahan"){
                   $cell="I";
               }elseif($pengguna->bidang=="Bidang Ekonomi Keuangan"){
                   $cell="J";
               }elseif($pengguna->bidang=="Bidang Pembangunan"){
                   $cell="K";
               }elseif($pengguna->bidang=="Bidang Kesejahteraan Rakyat"){
                   $cell="L";
               }
                
               $namaAnggota=$pengguna->first_name.$pengguna->last_name.$pengguna->gelar;
               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $pengguna->nama_lengkap)
                           ->setCellValue('C' . $kolom, $pengguna->fraksi)
                           ->setCellValue('D' . $kolom, $pengguna->daerah_pemilihan)
                           ->setCellValue('E' . $kolom, $hari.'/'.$tgl)
                           ->setCellValue('F' . $kolom, $pengguna->tempat)
                           ->setCellValue('G' . $kolom, $pengguna->nama)
                           ->setCellValue('H' . $kolom, $pengguna->alamat)
                          
                           ->setCellValue($cell . $kolom, $pengguna->kesimpulan)

                           ;
                         

               $kolom++;
               $nomor++;

          }
        }else{
                        
                        $spreadsheet->getActiveSheet(0)->mergeCells('A5:L5')->setCellValue('A5', 'Tidak ada data!');

            $styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],

    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];
            $spreadsheet->getActiveSheet(0)->getStyle('A5:L5')->applyFromArray($styleArray);
         }
            
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];

$styleArray2 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'rotation' => 90,
        'startColor' => [
            'argb' => 'FFA0A0A0',
        ],
        'endColor' => [
            'argb' => 'FFFFFFFF',
        ],
    ],
];

$styleArray3 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];

$styleArray4 = [
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];



           $tes=$kolom-1;
           $spreadsheet->getActiveSheet(0)->getStyle('A3:L'.$tes)->applyFromArray($styleArray);
           $spreadsheet->getActiveSheet(0)->getStyle('A1')->applyFromArray($styleArray2);
           $spreadsheet->getActiveSheet(0)->getStyle('A2')->applyFromArray($styleArray2);
           $spreadsheet->getActiveSheet(0)->getStyle('A4:L4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A3:A4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('B3:B4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('C3:C4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('D3:D4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('E3:E4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('F3:F4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('G3:G4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('H3:H4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('I3:I4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('J3:J4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('K3:K4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('L3:L4')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A3:A'.$tes)->applyFromArray($styleArray4);

           $spreadsheet->getDefaultStyle()->getFont()->setName('Times New Roman');
           $spreadsheet->getDefaultStyle()->getFont()->setSize(12);

           $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="RekapitulasiReses.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }


     
     function view_excel(){

       $bidang=$this->input->get('bidang');
       $pilihan=$this->input->get('pilihan');
       $parameter=$this->input->get('parameter');

       $data['bidang']=$bidang;
       $data['pilihan']=$pilihan;
       $data['parameter']=$parameter;


       if($pilihan){
          $data['proposal']=$this->Master_model->select_reses_pemerintahan_pilihan($bidang,$pilihan,$parameter);
       }else{
          $data['proposal']=$this->Master_model->select_reses_pemerintahan($bidang);
       }
        $this->load->view('view_excel',$data);
     }



      public function rekapitulasi_dinas_darat(){

        $parameter=$this->input->get('parameter');
        $pilihan=$this->input->get('pilihan');
        if($pilihan){
          $pilihan=$pilihan;
        }else{
          $pilihan="udara";
        }

        $data['pilihan']=$pilihan;
        $data['parameter']=$parameter;
         /*
        $dinas=$this->Dinas_model->select_perjalanan_dinas($pilihan,$parameter);
        */
        
         
        $dinas=$this->Dinas_model->users_dinas($pilihan,$parameter);
        
                $spreadsheet = new Spreadsheet;
                $spreadsheet->getActiveSheet(0)->getColumnDimension('A')->setWidth(5);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setWidth(30);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setWidth(25);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('F')->setWidth(20);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('G')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('H')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('I')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('J')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('K')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('L')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('M')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('N')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('O')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('P')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('Q')->setWidth(15);

          $spreadsheet->getActiveSheet(0)->getColumnDimension('R')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('S')->setWidth(15);
          $spreadsheet->getActiveSheet(0)->getColumnDimension('T')->setWidth(15);


        $spreadsheet->getActiveSheet(0)->mergeCells('A1:T1')->setCellValue('A1','DAFTAR NOMINATIF PERJALANAN DINAS');
         $spreadsheet->getActiveSheet(0)->mergeCells('A2:T2')->setCellValue('A2','SEKRETARIAT DPRD PEMERINTAHAN DAERAH KOTA CIMAHI');
         $spreadsheet->getActiveSheet(0)->mergeCells('A3:T3')->setCellValue('A3','JALUR DARAT');

         
         

         
         
         $spreadsheet->getActiveSheet(0)->mergeCells('B5:D5');

         $spreadsheet->getActiveSheet(0)->mergeCells('E5:N5')->setCellValue('E5','TRANSPORTASI');

       

         
         $spreadsheet->getActiveSheet(0)->mergeCells('O5:S5')->setCellValue('Q5','AKOMODASI');
         $spreadsheet->getActiveSheet(0)->mergeCells('T5:T6')->setCellValue('T5','NAMA GU');

         $spreadsheet->getActiveSheet(0)->mergeCells('A5:A6')->setCellValue('A5','NO');

          /*
          $spreadsheet->getActiveSheet(0)->mergeCells('V5:V6')->setCellValue('V5','TRANSPORT BANDARA');
           $spreadsheet->getActiveSheet(0)->mergeCells('W5:W6')->setCellValue('W5','TOTAL');
           */

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('B5', 'SURAT TUGAS')
                      ->setCellValue('B6', 'URAIAN')
                      ->setCellValue('C6', 'NO. SURAT TUGAS')
                      ->setCellValue('D6', 'NAMA')
                      ->setCellValue('E6', 'NAMA RENTAL')
                      ->setCellValue('F6', 'ALAMAT RENTAL')
                      ->setCellValue('G6', 'KONTAK RENTAL')
                      ->setCellValue('H6', 'ASAL')
                      ->setCellValue('I6', 'TUJUAN')
                      ->setCellValue('J6', 'TGL. BERANGKAT')
                      ->setCellValue('K6', 'TGL. KEMBALI')
                      ->setCellValue('L6', 'JMLH. HARI')
                      ->setCellValue('M6', 'RATE')
                      ->setCellValue('N6', 'JUMLAH')
                      ->setCellValue('O6', 'NAMA HOTEL')
                      ->setCellValue('P6', 'TGL. MULAI')
                      ->setCellValue('Q6', 'TGL. SELESAI')
                      ->setCellValue('R6', 'RATE')
                      ->setCellValue('S6', 'JUMLAH');
                     
          


          $kolom = 7;
          $nomor = 1;
          $no=0;
          foreach($dinas as $row) {
          $no++;
           $id=$row->id_dinas;
           $id_user=$row->id_people;
           $id_user_dinas=$row->id_user_dinas;
           $status_peserta_dinas=$row->status_peserta_dinas;
          

           
           if($status_peserta_dinas==1){
               $users_dinas=$this->Dinas_model->tampil_users_dinas($id);
               $count_users_dinas=count($users_dinas);
               $tampil_nama_lengkap=$this->Dinas_model->tampil_detail_dewan($id_user);
              


           }elseif($status_peserta_dinas==2){
                $users_dinas=$this->Dinas_model->tampil_users_dinas_setwan($id);
               $count_users_dinas=count($users_dinas);
               $tampil_nama_lengkap=$this->Dinas_model->tampil_detail_setwan($id_user);
           }


                       $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $no);


                        //
                           $akhir=$kolom+$count_users_dinas;
                       
                        
                           $spreadsheet->setActiveSheetIndex(0)->setCellValue('B' . $kolom, $row->perihal);

                      

                           $spreadsheet->setActiveSheetIndex(0)->setCellValue('C' . $kolom, $row->surat_perintah)
                           ->setCellValue('D' . $kolom, $tampil_nama_lengkap)
                           ->setCellValue('E' . $kolom, $row->nama)
                           ->setCellValue('F' . $kolom, $row->alamat)
                           ->setCellValue('G' . $kolom, $row->kontak)
                           ->setCellValue('H' . $kolom, $row->asal)
                           ->setCellValue('I' . $kolom, $row->tujuan)
                           ->setCellValue('J' . $kolom, $row->tgl_berangkat)
                           ->setCellValue('K' . $kolom, $row->tgl_kembali)
                           ->setCellValue('L' . $kolom, $row->jumlah_hari)
                           ->setCellValue('M' . $kolom, $row->rate)
                           ->setCellValue('N' . $kolom, $row->total)

                           ;


                              $tampil_hotel=$this->Dinas_model->tampil_hotel($id_user_dinas);          
          
                              foreach($tampil_hotel as $ho){

                                 $spreadsheet->setActiveSheetIndex(0)
                                       ->setCellValue('O' . $kolom, $ho->hotel)
                                       ->setCellValue('P' . $kolom, $ho->tgl_mendaftar)
                                       ->setCellValue('Q' . $kolom, $ho->tgl_keluar)
                                       ->setCellValue('R' . $kolom, $ho->biaya)
                                       ->setCellValue('S' . $kolom, $ho->jumlah_ako)
                                       ->setCellValue('T' . $kolom, $ho->gu)
                                       ;
                              }
                         
          
                           
          $kolom++;
          $nomor++;

             }

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];


$styleArray3 = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];


$styleArray4 = [
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
];



           $tes=$kolom-1;
           $spreadsheet->getActiveSheet(0)->getStyle('A5:T'.$tes)->applyFromArray($styleArray);
           $spreadsheet->getActiveSheet(0)->getStyle('A1:T1')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A2:T2')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A3:T3')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A5:T6')->applyFromArray($styleArray3);
           $spreadsheet->getActiveSheet(0)->getStyle('A5:A'.$tes)->applyFromArray($styleArray4);

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="RekapitulasiDinasDarat.xlsx"');
          header('Cache-Control: max-age=0');

    $writer->save('php://output');
        

     }
  
       function namahari($tanggal){
    //fungsi mencari namahari
    //format $tgl YYYY-MM-DD
    //harviacode.com
    $tgl=substr($tanggal,8,2);
    $bln=substr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
    $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
    switch($info){
        case '0': return "Minggu"; break;
        case '1': return "Senin"; break;
        case '2': return "Selasa"; break;
        case '3': return "Rabu"; break;
        case '4': return "Kamis"; break;
        case '5': return "Jumat"; break;
        case '6': return "Sabtu"; break;
    };
    }




   

    
}