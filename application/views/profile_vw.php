

<style type="text/css">
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

</style>
<?php foreach($users as $row):?>
<div class="container-fluid">
               <form method="POST"  action="<?php echo base_url(); ?>Profile/simpan_profile" id="myform" onSubmit="return validasi()" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-lg-4">

                        <div class="card mb-3">
                            <div class="card-body text-center shadow">
                                 <?php if($row->foto) {?>
                                <img class="rounded-circle mb-3 mt-4" src="<?php echo base_url(); ?>assets/images/<?php echo $row->foto; ?>" width="160" height="160">
                            <?php }else{ ?>
                                              Tidak ada foto
                            <?php } ?>
                                <div class="mb-3">

                                     <input id="uploadFile" placeholder="Pilih File..." disabled="disabled" />
                                 
<div class="fileUpload btn btn-primary">
    <span>Ganti Foto</span>
    <input name="file" id="uploadBtn" type="file" class="upload">
</div>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Pengaturan User</p>
                                    </div>
                                    <div class="card-body">
                                      
                                            
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" placeholder="John" name="first_name" value="<?php echo $row->first_name; ?>" id="first_name"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" placeholder="Doe" name="last_name" value="<?php echo $row->last_name; ?>"></div>
                                                </div> 
                                            </div>
                                            <input type="hidden" name="id" value="<?php  echo $row->id_user;?>">
                                            <input type="hidden" name="id_dewan" value="<?php  echo $row->id_dewan;?>">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Email</strong></label><input class="form-control" type="email" placeholder="user@example.com" name="email" value="<?php echo $row->email; ?>" id="email"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Password</strong></label><input class="form-control" type="password" name="password" placeholder="Silakan isi jika ingin ganti password"></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Simpan</button></div>
                                     
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               </form>
<?php endforeach; ?>
<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
var inputFile = document.getElementById('uploadBtn');

    var pathFile = inputFile.value;
    var ekstensiOk = /(\.png|\.jpg|\.jpeg)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Silakan upload file yang memiliki ekstensi .png/.jpg/.jpeg');
        inputFile.value = '';
        return false;
    }else{

    var isi=document.getElementById("uploadFile").value = this.value;


}
};
</script>
<!--
<script>
 function validasiFile(){
    alert('su');
    var inputFile = document.getElementById('uploadBtn');

    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf');
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}
</script>
-->

<script>
function validasi()
    {

        var first_name=document.forms["myform"]["first_name"].value;
        if (first_name==null || first_name=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama Depan tidak boleh kosong!"
            });
          return false;
          };
        var email=document.forms["myform"]["email"].value;
        if (email==null || email=="")
          {
           swal({
                title: "Peringatan!",
                text: "Email tidak boleh kosong!"
            });
          return false;
          };
     }
</script>


            