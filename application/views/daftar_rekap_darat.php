<style>	
    .table-custom2 {
        font-size : 12px;
        border-collapse : collapse;
        width : 100%;
    }
</style>

<h4 align="center">DAFTAR NOMINATIF PERJALANAN DINAS <br/> SEKRETARIAT DPRD PEMERINTAHAN DAERAH KOTA CIMAHI TAHUN  </h4>
<h5 align="center"> JALUR DARAT</h5>
<a href="<?php echo base_url(); ?>Export/rekapitulasi_dinas_darat?pilihan=<?php echo $pilihan; ?>&parameter=<?php echo $parameter; ?>" type="button" class="btn btn-primary btn-block btn-sm text-size"> Eksport Jadi Excel </a>
<br>
<br>

<table border="1"  class="table-custom2">
    <tbody>
    <tr> 
        <td rowspan="2" style="text-align:center;font-weight: bold;"> NO. </td>
        <td colspan="3" style="text-align:center;font-weight: bold;"> SURAT TUGAS </td>    
        <td colspan="10" style="text-align:center;font-weight: bold;"> TRANSPORTASI </td>    
        <td colspan="5" style="text-align:center;font-weight: bold;"> AKOMODASI </td>    
        <td rowspan="2" style="text-align:center;font-weight: bold;"> NAMA GU </td>  
    </tr>    
        
    <tr>
        <td style="text-align:center;font-weight: bold;">URAIAN</td>
        <td style="text-align:center;font-weight: bold;">NO. SURAT TUGAS</td>
        <td style="text-align:center;font-weight: bold;">NAMA</td>
        <td style="text-align:center;font-weight: bold;">NAMA RENTAL</td>
        <td style="text-align:center;font-weight: bold;">ALAMAT RENTAL</td>
        <td style="text-align:center;font-weight: bold;">KONTAK RENTAL</td>
        <td style="text-align:center;font-weight: bold;">ASAL</td>
        <td style="text-align:center;font-weight: bold;">TUJUAN</td>
        <td style="text-align:center;font-weight: bold;">TANGGAL BERANGKAT</td>
        <td style="text-align:center;font-weight: bold;">TANGGAL KEMBALI</td>
        <td style="text-align:center;font-weight: bold;">JMLH HARI</td>
        <td style="text-align:center;font-weight: bold;">RATE</td>
        <td style="text-align:center;font-weight: bold;">JUMLAH</td>
        <td style="text-align:center;font-weight: bold;">NAMA HOTEL</td>
        <td style="text-align:center;font-weight: bold;">TANGGAL MULAI</td>
        <td style="text-align:center;font-weight: bold;">TANGGAL SELESAI</td>
        <td style="text-align:center;font-weight: bold;">RATE</td>
        <td style="text-align:center;font-weight: bold;">JUMLAH</td>
     </tr>
     <?php 
     $no=0;
     foreach($dinas as $row):
     $no++;
  
          $status_peserta_dinas=$row->status_peserta_dinas;
          $id=$row->id_dinas;
          if($status_peserta_dinas==1){
            $users_dinas=$this->Dinas_model->tampil_users_dinas($id);
        }elseif($status_peserta_dinas==2){
            $users_dinas=$this->Dinas_model->tampil_users_dinas_setwan($id);
        }
        $surat_perintah=$row->surat_perintah;
        $perihal=$row->perihal;
        $nomor_tiket=$row->nomor_tiket;
        $jumlah_users_dinas=count($users_dinas);
     ?>
<?php if($jumlah_users_dinas > 0) { ?>


            <?php
             $dos=0;
             foreach($users_dinas as $us):
              $dos++;
                ?>
    <tr>
          <?php if($dos==1){?>
                <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?> align="center">
                    <?php echo $no; ?>
                </td>
            <?php } ?>
        
        <?php if($dos==1){?>
            <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?>>
            <?php echo $perihal; ?>
            </td>
            <?php } ?>

            <?php if($dos==1){?>
            <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?>>
            <?php echo $surat_perintah; ?>
            </td>
        <?php } ?>

        <td>
        <?php 
           $id_user_dinas=$us->id_user_dinas;
        ?>
        <?php if($status_peserta_dinas=="1"){ ?>
                    <?php echo $us->nama_lengkap; ?>
                        
                    <?php }elseif($status_peserta_dinas=="2"){
                        echo $us->nama;
        } ?>
        </td>
        <td>
                    <?php echo $us->namarental; ?>
        </td>
       
        <td>
             <?php echo $us->alamat; ?>
        </td>
        <td><?php echo $us->kontak; ?></td>

        <?php if($dos==1){?>
        <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?>> 
            <?php echo $us->asal; ?>
        </td>
        <?php } ?>
        
        <?php if($dos==1){?>
        <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?>> 
            <?php echo $us->tujuan; ?>
        </td>
        <?php } ?>

        <?php if($dos==1){?>
        <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?>> 
            <?php echo $us->tgl_berangkat; ?>
        </td>
        <?php } ?>
        
        <?php if($dos==1){?>
        <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?>> 
            <?php echo $us->tgl_kembali; ?>
        </td>
        <?php } ?>
      <?php if($dos==1){?>
        <td <?php if($dos==1) { ?> rowspan="<?php echo $jumlah_users_dinas; ?>" <?php } ?> align="center"> 
            <?php echo $us->jumlah_hari; ?>
        </td>
        <?php } ?>


        <td><?php echo $us->rate; ?></td>
        <td><?php echo $us->total; ?></td>
        <?php 
                  
                     $tampil_hotel=$this->Dinas_model->tampil_hotel($id_user_dinas);
                     foreach($tampil_hotel as $ho){
        ?>
        <td><?php echo $ho->hotel; ?></td>
        <td><?php echo $ho->tgl_mendaftar; ?></td>
        <td><?php echo $ho->tgl_keluar; ?></td>
        <td><?php echo $ho->biaya; ?></td>
        <td><?php echo $ho->jumlah_ako; ?></td>
        <td><?php echo $ho->gu; ?></td>
       <?php } ?>
    </tr>
<?php endforeach; ?>
   <?php } ?>
<?php endforeach; ?>
    </tbody>
</table>

