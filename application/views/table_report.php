<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
    <div id="outtable">
      <table>
        <thead>
            <tr>
                <th class="short">#</th>
                <th class="normal">First Name</th>
                <th class="normal">Last Name</th>
                <th class="normal">Username</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach($users as $user): ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['email']; ?></td>
              </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
      </table>
     </div>
</body>
</html>

<!--



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>surat setwan</title>
  
  <style>
        table{
            border-collapse: collapse;
        }
        
        th, td {
          padding: 5px;
        }
  </style>
</head>

<body style="margin: 80px";>    
    <table align="center" border="0" width="100%">
        <tr>
            <td><div style="text-align: center;"><img class="img-fluid" src="Logo-Cimahi.png" style="width: 100px;"></div></td>
            <td>
                <div>
                    <h2 align="center"><strong>PEMERINTAH KOTA CIMAHI</strong><br><strong>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</strong><br></h2>
                </div>
                
                <div style="text-align: center;" style="font-size: 14px;">
                    <p>Jl. Dra. Hj. Djulaeha Karmita No. 5 Kota Cimahi Telp. / Fax. (022) 6633315 - 6641809<br></p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"> <hr> </td>
        </tr>
    </table>
    <div>
        <h3 align="center"><strong><span style="text-decoration: underline;">SURAT PERJALANAN DINAS&nbsp;</span></strong><br><strong>Nomor: 170/0094-ST/DPRD/III/2019</strong><br></h3>
    </div>
    <table align="center" border="1">
        <tbody>
            <tr>
                <td colspan="3">Pejabat yang Berwenang Memberi Perintah</td>
                <td colspan="5">Ketua DPRD Kota Cimahi<br></td>
            </tr>
            <tr>
                <td colspan="3" rowspan="4">Nama / NIP Pegawai yang Diperintahkan</td>
                <td align="center" colspan=""><strong>No.&nbsp;</strong><br></td>
                <td align="center" colspan="2"><strong>Nama</strong></td>
                <td align="center" colspan="2"><strong>NIP</strong></td>
            </tr>
            <tr>
                <td align="center" colspan="">
                    1.<br> 2.<br> 3.<br>
                </td>
                <td colspan="2">
                    H. Achmad Gunawan, S.H., M.H. <br/>
                    Nama <br/>
                    Nama <br/>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
                <td colspan="3" rowspan="4">a. Pangkat dan Golongan Ruang Gaji<br>b. Tingkat Biaya Perjalanan Dinas</td>
                <td align="center" colspan=""><strong>No.&nbsp;</strong><br></td>
                <td align="center"><strong>Pkt. / Gol.</strong></td>
                <td align="center"><strong>Jabatan / Instansi</strong></td>
                <td align="center" colspan="2"><strong>Tingkat Biaya Pejalanan Dinas</strong></td>
            </tr>
            <tr>
                <td align="center" colspan="">
                    1.<br>
                    2.<br>
                    3.<br>
                </td>
                <td>
                    Ketua DPRD / <br/>
                    Anggota DPRD / <br/>
                    Anggota DPRD / <br/>
                </td>
                <td>
                    DPRD Kota Cimahi <br/>
                    DPRD Kota Cimahi <br/>
                    DPRD Kota Cimahi <br/>
                </td>
                <td colspan="2">
                </td>
            </tr>
            <tr>
                
            </tr>
            <tr>
                
            </tr>
            <tr>
                <td colspan="3">Maksud Perjalanan Dinas<br></td>
                <td colspan="5" style="max-width: 400px;">Isi Kegiatan...</td>
            </tr>
            <tr>
                <td colspan="3">Alat Angkutan yang Dipergunakan<br></td>
                <td colspan="5">Kendaraan Roda Empat</td>
            </tr>
            <tr>
                <td colspan="3">a. Tempat Berangkat dari<br>b. Tempat Tujuan</td>
                <td colspan="5">Sekretariat DPRD Kota Cimahi<br>Hotel Mercure Hayam Wuruk Jakarta</td>
            </tr>
            <tr>
                <td colspan="3">a. Lamanya Perjalanan Dinas<br>b. Tanggal Berangkat<br>c. Tanggal Harus Kembali</td>
                <td colspan="4">04 Hari<br>25 Maret 2019<br>28 Maret 2019</td>
            </tr>
            <tr>
                <td align="center" colspan="3"><strong>Pengikut Nama</strong></td>
                <td align="center" colspan="3"><strong>Tanggal Lahir</strong></td>
                <td align="center" colspan="3"><strong>Keterangan</strong></td>
            </tr>
            <tr>
                <td colspan="3">1.<br>2.</td>
                <td colspan="3">1.<br>2.</td>
                <td class="text-left" colspan="3">1.<br>2.</td>
            </tr>
            <tr>
                <td colspan="3">Pembebanan Anggaran<br>a. Instansi<br>b. Akun</td>
                <td colspan="5"><br>1.<br>2.</td>
            </tr>
            <tr>
                <td colspan="3">Keterangan Lain-lain</td>
                <td colspan="5"></td>
            </tr>
        </tbody>
    </table>
    
    <div style="margin-left: 600px; padding-top: 20px;">
        <table align="center" border="0">
            <tbody>
                <tr>
                    <td>Dikeluarkan</td>
                    <td>:</td>
                    <td>Cimahi</td>
                </tr>
                <tr>
                    <td>Pada</td>
                    <td>:</td>
                    <td>Maret 2019</td>
                </tr>
            </tbody>
        </table>

        <table align="center" border="0">
            <tbody>
                <tr>
                    <td colspan="3">
                        <hr>
                        <p align="center"><strong>SEKRETARIS DPRD KOTA CIMAHI,</strong><br><br><br><br><br><strong><span style="text-decoration: underline;">TEDI SETIADI, S.IP., M.SI.</span></strong><br><strong>NIP: 1234567890</strong></p>
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
</body> 

</html>
-->