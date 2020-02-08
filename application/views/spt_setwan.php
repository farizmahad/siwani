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
				<h3>PEMERINTAH KOTA CIMAHI</strong><br><strong>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</h3>
				<p style="font-size: 12px;">Jl. Dra. Hj. Djulaeha Karmita No. 5 Kota Cimahi Telp. / Fax. (022) 6633315 - 6641809<br></p>
			</td>
		  </tr>
		  
		  <tr>
			<td class="table1 td1"colspan="4"> <hr class="hr1"> </td>
		  </tr>
		</table>
		<?php foreach($dinas as $row):?>
		<h4 align="center"><strong><span style="text-decoration: bold;">SURAT PERINTAH TUGAS&nbsp;</span></strong><br><strong>Nomor: <?php echo $row->surat_perintah; ?></strong><br></h4>
		<p style="font-size: 14px; text-align:center;">Pimpinan Dewan Perwakilan Rakyat Daerah Kota Cimahi dengan ini:</p>
		
		
		<table>
			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> Tedi Setiadi, S.IP., M.Si </td>
			</tr>
			<tr>
				<td> Jabatan </td>
				<td> : </td>
				<td> Sekretaris DPRD Kota Cimahi</td>
			</tr>
		</table>
		<br/>
		
		<h4 align="center"><strong>MEMERINTAHKAN</strong></h4>
		
		<table>
			<tr>
				<td> Kepada: </td>
			</tr>
		</table>
		
		<table class="table2" border="1">
		  <tr>
			<th>No.</th>
			<th>Nama / NIP</th>
			<th>Pangkat/Gol/Jabatan</th>
		  </tr>
		   <?php 
                                                            $no=1;
                                                            foreach($users_dinas as $ow):?>
		  <tr>
			<td align="center"><?php echo $no++; ?></td>
			<td style="padding-left: 10px;">
				<strong><span style="text-decoration: underline;"><?php echo $ow->nama; ?></span></strong>
				<br/>
				NIP. <?php echo $ow->nip; ?>
			</td>
			<td align="center">
				<?php echo $ow->golongan; ?>
				<br/>
				<?php echo $ow->jabatan; ?>
			</td>
		  </tr>
		<?php endforeach; ?>
		  <!--
		  <tr>
			<td align="center">2</td>
			<td style="padding-left: 10px;">
				<strong><span style="text-decoration: underline;">Dian Sri Redjeki, MKM.</span></strong>
				<br/>
				NIP. 123456789123
			</td>
			<td align="center">
				Penata Tingkat 1/ESELON IV
				<br/>
				Kasubag Program
			</td>
		  </tr>
		  <tr>
			<td align="center">3</td>
			<td style="padding-left: 10px;">
				<strong><span style="text-decoration: underline;">Siddiq Zakarsih</span></strong>
				<br/>
				NIP. 123456789123
			</td>
			<td align="center">
				Penata Muda Tingkat 1/IIIb
				<br/>
				Fungsional Umum
			</td>
		  </tr>
		-->
		</table>
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
		<?php endforeach; ?>
		
		<table border="1">
			<?php $today=date('Y-m-d');?>
			<tr>
				<td class="table1 td1" width="30%" align="left" colspan="3">
					<div style="font-size: 14px;"></div>
				</td>

				<td class="table1 td1" width="50%">
					<div style="font-size: 14px;">
						<p align="left">Dikeluarkan di C I M A H I <br>Pada tanggal <?php echo date_indo($today);  ?></p> </br> <br/>
						<p align="center">
							<strong>SEKRETARIS DPRD KOTA CIMAHI</strong>
							<br>
							<strong>KETUA,</strong>
							<br><br><br><br><br>
							<?php foreach($sekretaris as $roj){?>
							<span style="text-decoration: underline;"> <strong> <?php echo strtoupper($roj->nama); ?></strong> </span> 
							<br> 
							<strong>Pembina Utama Muda</strong> 
							<br> 
							<strong>NIP: <?php echo $roj->nip; ?> </strong>
						     <?php } ?>
						</p>
					</div> 
				</td>
			</tr>
		</table>
		
		<h6 align="left">Tembusan:</h6>
		<h6 align="left">1. Badan Kepegawaian Daerah Kota Cimahi</h6>
    </body>

</html>