<style>	
    .table-custom2 {
        font-size : 12px;
        border-collapse : collapse;
        width : 100%;
    }
</style>

<h4 align="center">DAFTAR NOMINATIF PERJALANAN DINAS <br/> SEKRETARIAT DPRD PEMERINTAHAN DAERAH KOTA CIMAHI</h4>
<h5 align="center"> JALUR UDARA</h5>
<a href="<?php echo base_url(); ?>Export/rekapitulasi_dinas?pilihan=<?php echo $pilihan; ?>&parameter=<?php echo $parameter; ?>" type="button" class="btn btn-primary btn-block btn-sm text-size"> Eksport Jadi Excel </a>
<br>
<br>

<table border="1"  class="table-custom2">
    <tbody>
    <tr> 
        <td rowspan="2" style="text-align:center;font-weight: bold;"> NO. </td>
        <td colspan="3" style="text-align:center;font-weight: bold;"> SURAT TUGAS </td>    
        <td colspan="6" style="text-align:center;font-weight: bold;"> KEBERANGKATAN </td> 
          <td colspan="6" style="text-align:center;font-weight: bold;"> KEPULANGAN </td>
        <td colspan="3" style="text-align:center;font-weight: bold;"> UANG HARIAN </td>    
        <td colspan="3" style="text-align:center;font-weight: bold;"> UANG SAKU </td>    
        <td colspan="5" style="text-align:center;font-weight: bold;"> AKOMODASI / KONTRIBUSI </td>    
        <td rowspan="2" style="text-align:center;font-weight: bold;"> UANG REPRESENTASI </td>    
        <td rowspan="2" style="text-align:center;font-weight: bold;"> TRANSPORT LOKAL </td>    
        <td rowspan="2" style="text-align:center;font-weight: bold;"> TRANSPORT BANDARA </td>    
        <td rowspan="2" style="text-align:center;font-weight: bold;"> TOTAL </td>    
    </tr>    
        
    <tr>
        <td style="text-align:center;font-weight: bold;">URAIAN</td>
        <td style="text-align:center;font-weight: bold;">NO. SURAT TUGAS</td>
        <td style="text-align:center;font-weight: bold;">NAMA</td>
        <td style="text-align:center;font-weight: bold;">NAMA MASKAPAI</td>
        <td style="text-align:center;font-weight: bold;">NO. TIKET</td>
        <td style="text-align:center;font-weight: bold;">ASAL</td>
        <td style="text-align:center;font-weight: bold;">TUJUAN</td>
        <td style="text-align:center;font-weight: bold;">TANGGAL BERANGKAT</td>
        
        <td style="text-align:center;font-weight: bold;">HARGA TIKET</td>
<td style="text-align:center;font-weight: bold;">NAMA MASKAPAI</td>
        <td style="text-align:center;font-weight: bold;">NO. TIKET</td>
        <td style="text-align:center;font-weight: bold;">ASAL</td>
        <td style="text-align:center;font-weight: bold;">TUJUAN</td>
        
        <td style="text-align:center;font-weight: bold;">TANGGAL KEMBALI</td>
        <td style="text-align:center;font-weight: bold;">HARGA TIKET</td>

        <td style="text-align:center;font-weight: bold;">JMLH HARI</td>
        <td style="text-align:center;font-weight: bold;">RATE</td>
        <td style="text-align:center;font-weight: bold;">JUMLAH</td>
        <td style="text-align:center;font-weight: bold;">JMLH HARI</td>
        <td style="text-align:center;font-weight: bold;">RATE</td>
        <td style="text-align:center;font-weight: bold;">JUMLAH</td>
        <td style="text-align:center;font-weight: bold;">NAMA HOTEL</td>
        <td style="text-align:center;font-weight: bold;">TANGGAL MENGINAP</td>
        <td style="text-align:center;font-weight: bold;">JMLH HARI / PAKET</td>
        <td style="text-align:center;font-weight: bold;">RATE</td>
        <td style="text-align:center;font-weight: bold;">JUMLAH</td>
     </tr>
     <!--
     <?php 
     $no=1;
     foreach($dinas as $row):?>

    <?php
          $status_peserta_dinas=$row->status_peserta_dinas;
          $id=$row->id_dinas;
          if($status_peserta_dinas==1){
            $users_dinas=$this->Dinas_model->tampil_users_dinas($id);
        }elseif($status_peserta_dinas==2){
            $users_dinas=$this->Dinas_model->tampil_users_dinas_setwan($id);
        }

        $jumlah_users_dinas=count($users_dinas);
     ?>
    <tr>
        <td align="center"> <?php echo $no++; ?></td>
        <td><?php echo $row->perihal; ?></td>
        <td><?php echo $row->surat_perintah; ?></td>
        <td>
            <table border>
            <?php foreach($users_dinas as $us):?>
            <tr>
                <td>
                    <?php if($status_peserta_dinas=="1"){ ?>
                    <?php echo $us->nama_lengkap; ?>
                        
                    <?php }elseif($status_peserta_dinas=="2"){
                        echo $us->nama;
                    } ?>
                </td>
                <td>
                    <?php echo $row->nama_rental; ?>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
<?php endforeach; ?>
-->
<?php
$no=0;
foreach($dinas as $row):?>
<?php 

 $no++;
?>
    <?php
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
                    <?php echo $us->notiket1; ?>
                </td>
                <td>
                    <?php echo $us->asal; ?>
                </td>
                <td>
                    <?php echo $us->tujuan; ?>
                </td>
                 <td>
                    <?php echo $us->tgl_berangkat; ?>
                </td>
                 
                
                 <td>
                     <?php echo $us->hargatiket1; ?>
                 </td>
                  <td>
                     <?php echo $us->namarental2; ?>
                 </td>
                  <td>
                     <?php echo $us->notiket2; ?>
                 </td>
                  <td>
                     <?php echo $us->asal2; ?>
                 </td>
                 <td>
                     <?php echo $us->tujuan2; ?>
                 </td>
                 <td>
                    <?php echo $us->tgl_kembali; ?>
                </td>
                <td>
                    <?php echo $us->hargatiket2; ?>
                </td>
                <?php 
                     $id_user_dinas=$us->id_user_dinas;
                     $tampil_uang_harian=$this->Dinas_model->tampil_biaya_lain('uang_harian',$id_user_dinas);

                     foreach($tampil_uang_harian as $uh){
                        $total_uang_harian=$uh->jumlah_hari * $uh->rate;
                ?>
                <td>
                    <?php echo $uh->jumlah_hari; ?>
                </td>
                <td>
                    <?php echo $uh->rate; ?>
                </td>
                <td>
                    <?php echo $uh->total; ?>
                </td>
            <?php } ?>
                <?php 
                     $id_user_dinas=$us->id_user_dinas;
                     $tampil_uang_saku=$this->Dinas_model->tampil_biaya_lain('uang_saku',$id_user_dinas);

                     foreach($tampil_uang_saku as $usa){
                         $total_uang_saku=$usa->jumlah_hari * $usa->rate;
                ?>
                <td>
                    <?php echo $usa->jumlah_hari; ?>
                </td>
                <td>
                    <?php echo $usa->rate; ?>
                </td>
                <td>
                    <?php echo $usa->total; ?>
                </td>


                 <?php } ?>

                 <?php 
                  
                     $tampil_hotel=$this->Dinas_model->tampil_hotel($id_user_dinas);

                     foreach($tampil_hotel as $ho){
                ?>
                <td><?php echo $ho->hotel; ?></td>
                <td><?php echo $ho->tgl_mendaftar; ?></td>
                  <td><?php echo $ho->lama; ?></td>
                   <td><?php echo $ho->biaya; ?></td>
                <td>
                    <?php
                    echo $total_udara=$ho->lama * $ho->biaya;
                    ?>
                </td>
              

            

            <td>
                <?php echo $ho->uang_representasi; ?>
            </td>
            <td>
                <ul align="center">
                <li><?php echo $ho->transport_lokal; ?></li>
                 <li><?php echo $ho->transport_lokal2; ?></li>
             </ul>
               <td>
                <ul align="center">
                <li><?php echo $ho->transport_bandara; ?></li>
                 <li><?php echo $ho->transport_bandara2; ?></li>
             </ul>
            </td>
            <td>
                <?php
               echo $total_keseluruhan=$us->hargattiket1+$us->hargatiket2+$total_uang_harian+$total_uang_saku+$total_udara+$ho->uang_representasi+$ho->transport_lokal+$ho->transport_lokal2+$ho->transport_bandara+$ho->transport_bandara2;
                ?>
            </td>
<?php } ?>
            </tr>
        <?php endforeach;?>
    <?php } ?>
  
<?php endforeach;?>

    </tbody>
</table>

