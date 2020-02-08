<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Surat Tugas DPRD</title>
		
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
				border-collapse: collapse;
				width: 75%;
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
        </style>
    </head>

    <body>
		<table class="table1 td1">
		  <tr>
			<td><img src="http://news.bursasajadah.com/wp-content/uploads/2019/01/Logo-Cimahi.png" align="center" width="50px"></td>
			<td class="table1 td1">
				<h2>DEWAN PERWAKILAN RAKYAT DAERAH</strong><br><strong>KOTA CIMAHI</h2>
				<p>Jl. Dra. Hj. Djulaeha Karmita No. 5 Kota Cimahi Telp. / Fax. (022) 6633315 - 6641809<br></p>
			</td>
		  </tr>
		  
		  <tr>
			<td class="table1 td1"colspan="4"> <hr class="hr1"> </td>
		  </tr>
		</table>
		<?php foreach($dinas as $row):?>
		<h4 align="center"><strong><span style="text-decoration: bold;">SURAT TUGAS&nbsp;</span></strong><br><strong>Nomor: <?php echo $row->surat_perintah; ?></strong><br></h4>
		<p style="font-size: 14px; text-align:center;">Pimpinan Dewan Perwakilan Rakyat Daerah Kota Cimahi dengan ini:</p>
		<h4 align="center"><strong>MENUGASKAN:</strong></h4>
		
		<table>
			<tr>
				<td> Kepada: </td>
				<td> </td>
				<td> Pimpinan dan Anggota DPRD Kota Cimahi, yang terdiri dari: </td>
			</tr>
		</table>
		<br/>
		<div style="padding-left: 50px;">
		<table border="0" class="table2">
			<tr>
				<td colspan="3" align="center"> <strong>Pimpinan: </strong></td>
			</tr>

              <?php 
              $no=1;
			  $count_atasan=count($atasan);
			  if($count_atasan > 0){
              foreach($atasan as $at):

                $id_atasan[]=$at->id_userr;
              	?>
			<tr>
				<td align="center"> <div style="font-size: 14px;"> <strong><?php echo $no++; ?>.</strong> </div> </td>
				<td align="left">
					<div style="font-size: 14px;"> <strong><?php echo $at->nama_lengkap; ?>
					</strong> </div>
				</td>
				<td align="center"> <strong>:</strong></td>
				<td align="left">
					<div style="font-size: 14px;"> <strong><?php echo $at->jabatan; ?></strong></div>
				</td>
			</tr>
		<?php endforeach; ?>
	     <?php }else{ ?>
             <tr>
														      <td align="center">
															           Tidak ada pimpinan!
															  </td>
															</tr>
	     <?php } ?>
			
			<!--
			<tr>
				<td align="center">
					<div style="font-size: 14px;"> <strong>2.</strong> </div>
				</td>
					
				<td align="left">
					<div style="font-size: 14px;"> <strong>H. Bambang Purnomo</strong> </div>
				</td>
				<td align="center"> <strong>:</strong></td>
				<td align="left">
					<div style="font-size: 14px;"> <strong>Wakil Ketua</strong></div>
				</td>
				
			</tr>
			
			<tr>
				<td align="center">
					<div style="font-size: 14px;"> <strong>3.</strong> </div>
				</td>
					
				<td align="left">
					<div style="font-size: 14px;"> <strong>Wahyu Widiatmoko</strong> </div>
				</td>
				<td align="center"> <strong>:</strong></td>
				<td align="left">
					<div style="font-size: 14px;"> <strong>Wakil Ketua</strong></div>
				</td>
				
			</tr>
		-->
		</table>
		<br/> <br/>
		
		<table border="0" class="table3">
			<tr>
				<td colspan="3" align="center"> <strong>Anggota: </strong></td>
			</tr>
 <?php 
$users_dinas=$this->Dinas_model->tampil_users_dinas_spt($id,$id_atasan);
                                                            $count_users_dinas=count($users_dinas);                            


                                                         if($count_users_dinas > 0){


                                                            $nom=1;
                                                            foreach($users_dinas as $dow):?>
			<tr>
				<td align="center"> <div style="font-size: 14px;"> <strong><?php echo $nom++; ?>.</strong> </div> </td>
				<td align="left">
					<div style="font-size: 14px;"> <strong><?php echo $dow->nama_lengkap; ?></strong> </div>
				</td>
				<!--
				<td align="center"> <strong>4.</strong></td>
				<td align="left">
					<div style="font-size: 14px;"> <strong>H. Enang Sahri Lukmansyah, S.Sos. MM.</strong></div>
				</td>
			-->
			</tr>
		
		<?php endforeach; ?>
		<?php }else{ ?>

             <tr>
             	<td colspan="2" align="center">Tidak ada anggota</td>
             </tr>
		<?php } ?>
			<!--
			<tr>
				<td align="center">
					<div style="font-size: 14px;"> <strong>2.</strong> </div>
				</td>
					
				<td align="left">
					<div style="font-size: 14px;"> <strong>H. Enang Sahri Lukmansyah, S.Sos. MM.</strong> </div>
				</td>
				<td align="center"> <strong>5.</strong></td>
				<td align="left">
					<div style="font-size: 14px;"> <strong>(Nama Anggota DPRD)</strong></div>
				</td>
				
			</tr>
			
			<tr>
				<td align="center">
					<div style="font-size: 14px;"> <strong>3.</strong> </div>
				</td>
					
				<td align="left">
					<div style="font-size: 14px;"> <strong>Wahyu Widiatmoko</strong> </div>
				</td>
				<td align="center"> <strong>6.</strong></td>
				<td align="left">
					<div style="font-size: 14px;"> <strong>(Nama Anggota DPRD)</strong></div>
				</td>
				
			</tr>
		-->
		</table>
		</div>
		<br/> <br/>
		<table>
			<tr>
				<td> <p>Untuk: </p></td>
				<td> </td>
				<td> 
					<p align="justify">
						<?php echo $row->perihal; ?>
					</p>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
				<td> 
					<p align="justify">
						<br/>
						<br/>
						Demikian untuk dilaksanakan sebagaimana mestinya.
					</p>
				</td>
			</tr>
		</table>
		<br/>
		
		<?php
            $tgl=date('d-m-Y');
            $today=date('Y-m-d');
		 ?>
		<table border="1">
			<tr>
				<td class="table1 td1" width="30%" align="left" colspan="3">
					<div style="font-size: 14px;"></div>
				</td>

				<td class="table1 td1" width="50%">
					<div style="font-size: 14px;">
						<p align="left">Dikeluarkan di C I M A H I <br>Pada tanggal <?php echo date_indo($today);  ?></p> </br> <br/>
						<p align="center"><strong>PIMPINAN</strong><br><strong>DEWAN PERWAKILAN RAKYAT DAERAH</strong><br><strong>KOTA CIMAHI</strong><br><strong>KETUA,</strong><br><br><br><br><br><strong>
							<?php foreach($ketua_dprd as $oy){ ?>



							<?php echo strtoupper($oy->nama_lengkap); ?>
						<?php } ?>
						</strong></p>
					</div> 
				</td>
			</tr>
		</table>
    </body>
</html>
<?php endforeach; ?>