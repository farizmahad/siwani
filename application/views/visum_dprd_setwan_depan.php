<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Surat Tugas Setwan</title>
		
        <style>
			/*
			table, td, th {
			  border: 1px solid black;
			  text-align: center;
			}
			*/
			
			.table1.td1{
				border: 0px solid black;
				text-align: center;
			}
			
			.td2 {
				text-align: center;
			}
			
			.table2{
				width: 100%;
				font-size : 12px;
			}
			
			.table3{
				border-collapse: collapse;
				width: 100%;
			}
			
			.hr1{
				height: 4px;
				color: black;
			}
			
			table {
			  border-collapse: collapse;
			  width: 100%;
			}

			th {
			  height: 50px;
			}
			
			* {
			  box-sizing: border-box;
			}

			/* Create two equal columns that floats next to each other */
			.column {
			  float: left;
			  width: 45%;
			  padding: 10px;
			  border: 1px solid black;
			  height: 50px; /* Should be removed. Only for demonstration */
			}
			
			.column2 {
			  float: left;
			  width: 45%;
			  padding: 10px;
			  height: 100px; /* Should be removed. Only for demonstration */
			}
			
			.column4 {
			  float: left;
			  width: 93%;
			  padding: 10px;
			  border: 1px solid black;
			  height: 100px; /* Should be removed. Only for demonstration */
			}
			
			/* Clear floats after the columns */
			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}
        </style>
    </head>

    <body>
    	<?php
    	/*
    	if (!empty('/images/someimg.png')) {
    echo '<img ...';
} else {
    echo 'error in PHP 7';
}
*/
?>
<!--
<img width="30px" src="logo.jpg">'
-->

		<table class="table1 td1">
		  <tr>
			<td><img src="http://news.bursasajadah.com/wp-content/uploads/2019/01/Logo-Cimahi.png" align="center" width="50px"></td>
			<td class="table1 td1">

				<h3>PEMERINTAH KOTA CIMAHI</strong><br><strong>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</h3>
				<p style="font-size: 12px;">Jl. Dra. Hj. Djulaeha Karmita No. 5 Kota Cimahi Telp. / Fax. (022) 6633315 - 6641809<br></p>
			</td>
		  </tr>
		  
		  <tr>
			<td class="table1 td1"colspan="4"> <hr class="hr1"> </td>
		  </tr>
		</table>
		
		<h4 align="center"><strong><span style="text-decoration: underline;">SURAT PERJALANAN DINAS&nbsp;</span></strong><br><strong>Nomor: <?php echo $no_surat_tugas; ?></strong><br></h4>
		
		<table class="table2" border="1">
		  <!--
		  <tr>
			<th>No.</th>
			<th>Nama / NIP</th>
			<th>Pangkat/Gol/Jabatan</th>
		  </tr>
		  -->
		  
		  <tr>
			<td align="center">1</td>
			<td style="padding-left: 10px;">
				Pejabat Yang Berwenang Memberi Perintah
			</td>
			<td align="left" colspan="5">
				<?php if($status_peserta_dinas=="1"){?>
					Ketua DPRD Kota Cimahi
					<?php }elseif($status_peserta_dinas=="2"){ ?>
					Sekretaris DPRD Kota Cimahi
				<?php } ?>
			</td>
		  </tr>
		  <tr>
			<td align="center">2</td>
			<td style="padding-left: 10px;">
				Nama / NIP Pegawai Yang Diperintahkan
			</td>
			<td align="center">
				No.
			</td>
			<td align="center" colspan="3">
				Nama
			</td>
			<td align="center">
				NIP
			</td>
		  </tr>

		 <tr>
			<td align="center"></td>
			<td style="padding-left: 10px;">
				
			</td>
			<td align="center">
				 <?php 
                                    $no=1;
                                    foreach($user_dinas as $col):?>
				<?php echo $no++; ?>
				<br/>
				

			<?php endforeach; ?>
			</td>
			<td align="left" colspan="3">
				<?php 
                                  
                                    foreach($user_dinas as $col):?>
				<?php if($status_peserta_dinas=="1"){
                                                        echo $col->nama_lengkap;
                                                    }elseif($status_peserta_dinas=="2"){
                                                        echo $col->nama;
                                                    }
                                                    ?>
				<br/>
				

			<?php endforeach; ?>
			</td>
			<td align="center">
				<?php
				foreach($user_dinas as $col):?>
				 <?php echo $col->nip; ?>
				 <br>
				<?php endforeach; ?>
			</td>
		  </tr> 

		 
		  <tr>
			<td align="center">3</td>
			<td style="padding-left: 10px;">
				b. Pangkat dan Golongan ruang gaji
				<br/>
				c. Tingkat Biaya Perjalanan Dinas
			</td>
			<td align="center">
				No.
			</td>
			<td align="center" colspan="2">
				Pkt / Gol
			</td>
			
			<td align="center">
				Jabatan / Instansi
			</td>
			<td align="center">
				Tingkat Biaya Perjalanan Dinas
			</td>
		  </tr>
		  
		  <tr>
			<td align="center"></td>
			<td style="padding-left: 10px;">
				
			</td>
			<td align="center">
				<?php 
                                    $nos=1;
                                    foreach($user_dinas as $dow):
                                    $asal_dinas=$dow->asal;
                                    $tujuan_dinas=$dow->tujuan;
                                    $tgl_berangkat_dinas=$dow->tgl_berangkat;
                                    $tgl_kembali_dinas=$dow->tgl_kembali;
                                    $jumlah_hari_dinas=$dow->jumlah_hari;
                                        ?>

                                        <?php echo $nos++; ?>

                         <br>
                         <?php endforeach;?>
			</td>
			<td>
				<?php
           foreach($user_dinas as $dow): ?>
				
                   <?php  echo $dow->jabatan;?>
                   <br>
			<?php	endforeach;?>
			</td>
			<td align="center">
				<?php
           foreach($user_dinas as $dow): ?>
				   <?php if($dow->golongan){ ?>
                   <?php  echo $dow->golongan;?>
               <?php }else{
                   echo "-";     
               } ?>
                   <br>
               
			<?php	endforeach;?>
			</td>
			<td align="center">
<?php
           foreach($user_dinas as $dow): ?>
				 DPRD Kota Cimahi
                   <br>
               
			<?php	endforeach;?>
				
			</td>
			<td align="center">
				<?php
				foreach($user_dinas as $dow): ?>
				<?php echo $tingkat_biaya; ?>
				<br>

			<?php endforeach;?>
			</td>
		  </tr>
		  <tr>
			<td align="center">4</td>
			<td style="padding-left: 10px;">
				Maksud Perjalanan Dinas
			</td>
			<td>
			</td>
			<td colspan="4">
				<p align="justify">
					<?php echo $perihal; ?>
				</p>
			</td>
		  </tr>
		  
		  <tr>
			<td align="center">5</td>
			<td style="padding-left: 10px;">
				Alat Angkutan Yang Digunakan
			</td>
			<td>
			</td>
			<td colspan="4">
				<?php if($jenis_kendaraan=="1"){
                                                    echo "Darat";
                                                }elseif($jenis_kendaraan=="2"){
                                                    echo "Udara";
                                                }

                                                 ?>

			</td>
		  </tr>
		  
		  <tr>
			<td align="center">6</td>
			<td style="padding-left: 10px;">
				<ol>
				  <li>Tempat Berangkat Dari</li>
				  <li>Tempat Tujuan</li>
				</ol>
			</td>
			<td>
				
			</td>
			<td colspan="4">
				<ul>
				  <li><?php echo $asal_dinas; ?></li>
				  <li><?php echo $tujuan_dinas; ?></li>
				</ul>
			</td>
		  </tr>
		  
		  <tr>
			<td align="center">7</td>
			<td style="padding-left: 10px;">
				<ol>
				  <li>Lamanya Perjalanan Dinas</li>
				  <li>Tanggal Berangkat</li>
				  <li>Tanggal Harus Kembali</li>
				</ol>
			</td>
			<td>
				
			</td>
			<td colspan="4">
				<?php echo $jumlah_hari_dinas; ?> Hari
				<br/>
				<?php echo date_indo($tgl_berangkat_dinas); ?>
				<br/>
				<?php echo date_indo($tgl_kembali_dinas); ?>
			</td>
		  </tr>
		  
		  <tr>
			<td align="center">8</td>
			<td align="center">Pengikut Nama</td>
			<td> </td>
			<td align="center" colspan="2">Tanggal Lahir</td>
			<td align="center" colspan="2">Keterangan</td>
		  </tr>
		  
		  <tr>
			<td align="center"></td>
			<td>
				<ol>
					<?php
					 $nom=1;
                                    foreach($pengikut_dinas as $pe):?>
				  <li> <?php echo $pe->nama_pengikut; ?></li>

				<?php endforeach; ?>
				  
				</ol>
			</td>
			<td> 
				
			</td>
			<td colspan="2"> 
				<ol>
					<?php 
					  foreach($pengikut_dinas as $pe):?>
				  <li><?php echo date_indo($pe->tgl_lahir); ?></li>
				  <?php endforeach; ?>
				  
				</ol>
			</td>
			<td colspan="2">
				<ol>
				  <?php 
					  foreach($pengikut_dinas as $pe):?>
				  <li><?php echo $pe->keterangan; ?></li>
				  <?php endforeach; ?>
				</ol>
			</td>
		  </tr>
		  
		  <tr>
			<td align="center">9</td>
			<td>
				Pembebanan Anggaran <br/>
				<ol>
				  <li>Instansi</li>
				  <li>Akun</li>
				</ol>
			</td>
			<td> </td>
			<td colspan="4">
				SEKRETARIAT DPRD KOTA CIMAHI
				<br/>
				-
			</td>
		  </tr>
		  
		  <tr>
			<td align="center">10</td>
			<td>
				Keterangan Lain-lain
			</td>
			<td> </td>
			<td colspan="4">
				
			</td>
		  </tr>
		</table>
		<br/> <br/>
		
		
		<table border="1">
			<tr>
				<td class="table1 td1" width="30%" align="left" colspan="3">
					<div style="font-size: 14px;"></div>
				</td>
                <?php
                     $today=date('Y-m-d');
                ?>
				<td class="table1 td1" width="50%">
					<div style="font-size: 14px;">
						<p align="left">Dikeluarkan di C I M A H I <br>Pada tanggal <?php echo date_indo($today);  ?></p> </br> <hr> <br/>
						<?php foreach($pimpinan as $pi){ ?>
						<p align="center">
							<strong>
                            <?php
                              if($parameter=="anggota_dprd"){?>

                              	KETUA
							  <?php }elseif($parameter=="anggota_setwan"){ ?>
                               SEKRETARIS
                              <?php } ?>
							  DPRD KOTA CIMAHI</strong>
							<br><br><br><br><br>
							<span style="text-decoration: underline;"> <strong> 
                           <?php if($parameter=="anggota_dprd"){?>

                              <?php echo strtoupper($pi->nama_lengkap); ?>
							  <?php }elseif($parameter=="anggota_setwan"){ ?>
                               <?php echo strtoupper($pi->nama); ?>
                              <?php } ?>
                             
							 </strong> </span> 
							<br>
							<strong>NIP: 123456789123 </strong>
						</p>
					<?php } ?>
					</div> 
				</td>
			</tr>
		</table>


		<pagebreak/>
		<div class="row">
		  <div class="column2" style="background-color:white;">
			
		  </div>
		  <div class="column2" style="background-color:white;">
			<table class="table2" border="0">
			<tr>
					<td> I </td>
					<td colspan="3"> SPPD No. </td>
				</tr>
				<tr>
					<td>  </td>
					<td> Berangkat Dari </td>
					<td> : </td>
					<td> <?php echo $asal_dinas; ?></td>
				</tr>

				<tr>
					<td>  </td>
					<td> Tujuan </td>
					<td>  :</td>
					<td>  <?php echo $tujuan_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> <?php echo date_indo($tgl_berangkat_dinas); ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Ke </td>
					<td> : </td>
					<td> <?php echo $tujuan_dinas; ?></td>
				</tr>
			</table>
		  </div>
		</div>
		
		<div class="row">
		  <div class="column">
			<table class="table2" border="0">
				<tr>
					<td> II </td>
					<td> Tiba di </td>
					<td> : </td>
					<td> <?php echo $tujuan_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> <?php echo date_indo($tgl_kembali_dinas);?> </td>
				</tr>
				<tr>
					<td>  </td>
					<td> Kepala </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
			</table>
			
			<br/>
			<h4 align="center"> 
		
			<hr>
			<br/>
			NIP: ......................................
			</h4>
			
		  </div>
		  <div class="column">
			<table class="table2" border="0">
				<tr>
					<td> </td>
					<td> Berangkat Dari </td>
					<td> : </td>
					<td> <?php echo $asal_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Ke </td>
					<td> : </td>
					<td><?php echo $tujuan_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> <?php echo date_indo($tgl_berangkat_dinas);?></td>
				</tr>
			</table>
			
			<br/>
			<h4 align="center"> 

			<hr>
			<br/>
			NIP: ......................................
			</h4>
			
		  </div>
		</div>
		
		<div class="row">
		  <div class="column">
			<table class="table2" border="0">
				<tr>
					<td> III </td>
					<td> Tiba di </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Kepala </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
<!--
				<tr>
					<td> III </td>
					<td> Tiba di </td>
					<td> : </td>
					<td> <?php echo $tujuan_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : <?php echo date('d F Y', strtotime($tgl_kembali_dinas));?></td>
					<td> </td>
				</tr>
				<tr>
					<td>  </td>
					<td> Kepala </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
			-->

			</table>
			
			<br/>
			<h4 align="center"> 
			
			<hr>
			<br/>
			NIP: ......................................
			</h4>
			
		  </div>
		  <div class="column">
			<table class="table2" border="0">
				<!--
				<tr>
					<td> </td>
					<td> Berangkat Dari </td>
					<td> : </td>
					<td> <?php echo $asal_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Ke </td>
					<td> : </td>
					<td><?php echo $tujuan_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> <?php echo date('d F Y', strtotime($tgl_berangkat_dinas));?></td>
				</tr>
			-->
			<tr>
					<td> </td>
					<td> Berangkat Dari </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Ke </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
			</table>
			
			<br/>
			<h4 align="center"> 
			
			<hr>
			<br/>
			NIP: ......................................
			</h4>
			
		  </div>
		</div>
		
		<div class="row">
		  <div class="column">
			<table class="table2" border="0">
				<tr>
					<td> IV </td>
					<td> Tiba di </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Kepala </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
			</table>
			
			<br/>
			<h4 align="center"> 
			
			<hr>
			<br/>
			NIP: ......................................
			</h4>
			
		  </div>
		  <div class="column">
			<table class="table2" border="0">
				<tr>
					<td> </td>
					<td> Berangkat Dari </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Ke </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> ......................................</td>
				</tr>
			</table>
			
			<br/>
			<h4 align="center"> 
			
			<hr>
			<br/>
			NIP: ......................................
			</h4>
			
		  </div>
		</div>
		
		<div class="row">
		  <div class="column">
			<table class="table2" border="0">
				<tr>
					<td> V </td>
					<td> Tiba di </td>
					<td> : </td>
					<td> <?php echo $tujuan_dinas; ?></td>
				</tr>
				<tr>
					<td>  </td>
					<td> Berangkat dari</td>
					<td> : </td>
					<td> <?php echo $asal_dinas; ?> </td>
				</tr>
				<tr>
					<td>  </td>
					<td> Pada Tanggal </td>
					<td> : </td>
					<td> <?php echo date_indo($tgl_kembali_dinas); ?></td>
				</tr>
			</table>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
		  </div>
		  <div class="column">
			<p style="font-size: 12px;">
				Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya dan semata-mata
				untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.
			</p>
			
			<p align="center" style="font-size: 12px;">
				Pejabat yang berwenang / <br>
				Pejabat lainnya yang ditunjuk<br>
			</p>
			<?php foreach($pimpinan as $of){ ?>
			<h6 align="center"> 
			<?php
                              if($parameter=="anggota_dprd"){?>

                              	KETUA
							  <?php }elseif($parameter=="anggota_setwan"){ ?>
                               SEKRETARIS
                              <?php } ?>


			 DPRD <br/>
			KOTA CIMAHI <br/> <br/> <br/> <br/>
			<span style="text-decoration: underline;"> <strong> 

<?php if($parameter=="anggota_dprd"){?>

                              <?php echo strtoupper($of->nama_lengkap); ?>
							  <?php }elseif($parameter=="anggota_setwan"){ ?>
                               <?php echo strtoupper($of->nama); ?>
                              <?php } ?>
			</strong> </span> 
			<br>
			<strong>NIP: <?php echo $of->nip; ?> </strong>
			</h6>
		<?php } ?>
		 </div>
		</div>
		
		<div class="row">
		  <div class="column">
			<h5> VI. CATATAN LAIN-LAIN</h5>
		  </div>
		  <div class="column">
		  </div>
		</div>
		<div class="row">
		  <div class="column4">
			<h5> VII. PERHATIAN</h5>
			<p style="font-size: 12px;">
				Pejabat yang berwenang menerbitkan SPPD, Pegawai Sekretariat DPRD yang melakukan perjalanan dinas,
				para Pejabat yang mengesahkan tanggal berangkat/tiba serta bendaharawan bertanggungjawab berdasarkan
				peraturan-peraturan Keuangan Negara apabila Negara menerima rugi akibat kesalahan, kelalaian dan
				kealpaannya.
			</p>
		  </div>
		</div>
    </body>
</html>
	