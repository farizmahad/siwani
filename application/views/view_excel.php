  <style>	
		.table-custom2 {
			font-size : 12px;
			border-collapse : collapse;
			width : 100%;
		}
   </style>

	<h3 align="center"><?php echo $bidang; ?> <?php echo $pilihan; ?> <?php echo $parameter; ?></h3>
	<a href="<?php echo base_url(); ?>Export/export_bidang?bidang=<?php echo $bidang; ?>&pilihan=<?php echo $pilihan; ?>&parameter=<?php echo $parameter; ?>" type="button" class="btn btn-primary btn-block btn-sm text-size"> Export to Excel </a>
	<br>
    <table border="1"  class="table-custom2">
	<thead>
		<th style="text-align: center;">No</th>
		<th>Nama</th>
		<th>Jenis Kegiatan</th>
		<th>Volume</th>
		<th>Lokasi</th>
	</thead>
	<tbody>
		<?php 
         $count_proposal=count($proposal);
         $no=1;
         if($count_proposal > 0) {
	foreach($proposal as $row):?>
	 <tr>
		<td align="center"><?php echo $no++; ?></td>
		<td><?php echo $row->nama_lengkap; ?></td>
		<td><?php echo $row->kesimpulan; ?></td>
		<td align="center"><?php echo $row->volume; ?></td>
		<td><?php echo $row->lokasi; ?></td>
	 </tr>
	<?php endforeach; ?>
<?php }else{ ?>
	<tr>
		<td colspan="5" align="center"> Tidak ada data!</td>
	</tr>

<?php } ?>
	</tbody>
</table>

