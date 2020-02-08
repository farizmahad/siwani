
                       <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">
<link href="<?php echo base_url();?>assets/plugins/css/chosen/bootstrap-chosen.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>       
                               <div class="row">
                                        <div class="col-xl-12">
                                        	<!--
                                            <form method="POST" action="<?php echo base_url(); ?>Master/save_level">
                                            -->
                                            <form id="edit_level">
                                                <div class="form-group"><label>Level
                                                </label>

                                                  <input type="hidden" name="id_dewan" value="<?php echo $id_dewan; ?>">
                                                         <select class="form-control form-control-sm text-size chosen-select" name="levelAkses[]" multiple tabindex="4" id="level">

                                                       
                                                                         <?php foreach($group as $lev):
                                                                             $id_level[]=$lev->id;
                                                                         	?>
                                                                             <option selected value="<?php echo $lev->id; ?>"><?php echo $lev->name; ?></option>
                                                                         <?php endforeach; ?>
                                                                          <?php
                                                                              $option=$this->Master_model->get_option_level($id_level)
                                                                           ?>
                                                                         <?php foreach($option as $row):?>
                                                                         <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                                                     <?php endforeach; ?>
                                                         </select>
                                                </div>

                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit" id="submit_edit_level">Simpan</button></div>
            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <script src="<?php echo base_url(); ?>assets/plugins/js/chosen/chosen.jquery.js"></script>
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                              <script> $('.chosen-select').chosen({width: "100%"}); </script>
<script type="text/javascript">
    $(document).ready(function(){
 
        $('#edit_level').submit(function(e){
   
   var level=document.forms["edit_level"]["level"].value;

            if (level==null || level=="")
          {
           swal({
                title: "Peringatan!",
                text: "Level tidak boleh kosong!"
            });
          return false;
        }else{


        
           
          
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>Master/save_level',
                   
                     type:"post",
                     dataType:'json',
                     data:new FormData(this),

                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(hasil){

                           $("#pesan_edit").html(hasil.pesan);
                           if(hasil.pesan==""){
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil diubah');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/dewan");
                   }
               }
                 });
            }});
         
 
    });
     
</script>
