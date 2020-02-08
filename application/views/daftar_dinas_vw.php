<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


 <div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Daftar Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb text-size">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span><strong>Daftar Perjalanan Dinas</strong></span></a></li>
                </ol>
				<div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6 mb-3">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <h5 class="text-size-heading"><strong>Perjalanan Dinas Anggota DPRD</strong></h5>
                                        </div>
                                        <div class="text-primary font-weight-bold h5 mb-0"><span><strong><?php echo count($pd_anggota_dprd); ?> Surat Tugas</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-tie fa-2x text-primary"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-primary btn-sm text-size" type="button"  data-target="#result" id="anggota_dprd" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6 mb-3">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <h5 class="text-size-heading"><strong>Perjalanan Dinas Anggota Setwan</strong></h5>
                                        </div>
                                        <div class="text-success font-weight-bold h5 mb-0"><span><strong><?php echo count($pd_anggota_setwan); ?> Surat Tugas</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-users fa-2x text-success"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-success btn-sm text-size" type="button" id="anggota_setwan"  data-target="#result" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
				
				<div class="card shadow" id="result">
                   
                </div>
			</div>
			
			<script>
				function reply_click(clicked_id)
					{
						var id=clicked_id;                
						$('#result').load("<?php echo base_url() ?>Perjalanan_dinas/detail_perjalanan_dinas/"+id);
					}  
			</script>

                

    <script>
        
		<?php

		  $dewan=$this->Master_model->select_dewann();
		  
		?>

    /*
var namaDewan = ["Acep Jamaludin, M.Hum","Agung Yudaswara,ST","Agus Solihin","Ahmad Dahlan","Ayi Khusnayaddi","Rani"];
*/

var namaDewan = [<?php foreach($dewan as $row){
                echo"'";echo $row->first_name;echo"|";echo $row->last_name;echo"|";echo $row->gelar;echo"'";echo",";
                
              }?>];
/*
var namaFraksi = ["HANURA","PDI PERJUANGAN","PPP","GERINDRA-PAN","GOLKAR", "PKS"];

var namaDapil = ["Dapil 1","Dapil 2","Dapil 3"];
*/

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}

autocomplete(document.getElementById("myInput"), namaDewan);

autocomplete(document.getElementById("myInput2"), namaFraksi);

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$(document).ready(function(){
  $("#myInput2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

    </script>
    <script>
         $(document).on( "click", '.edit_button',function(e) {
    var id        = $(this).data('id');
    var namaAnggota      = $(this).data('nama_anggota');
    
    var perihal          = $(this).data('perihal');
    var asal               = $(this).data('asal');
    var tujuan_lokasi      = $(this).data('tujuan_lokasi');
    var lama_perjalanan      = $(this).data('lama_perjalanan');
    var surat_perintah      = $(this).data('surat_perintah');
    var tgl_berangkat     = $(this).data('tgl_berangkat');
    var tgl_kembali     = $(this).data('tgl_kembali');
   

    $(".id").val(id);
    $(".namaAnggota").val(namaAnggota);
    $(".perihal").val(perihal);
    $(".asal").val(asal);
    $(".tujuan_lokasi").val(tujuan_lokasi);
    $(".lama_perjalanan").val(lama_perjalanan);
    $(".surat_perintah").val(surat_perintah);
    $(".tgl_berangkat").val(tgl_berangkat);
    $(".tgl_kembali").val(tgl_kembali);

    });
    </script>
    <script>
  
    function validasi()
    {
       var namaAnggota=document.forms["myform"]["myInput"].value;
       

        if (namaAnggota==null || namaAnggota=="")
          {
           swal({
                title: "Peringatan!",
                text: "Anggota Dewan tidak boleh kosong!"
            });
          return false;
          };

       var perihal=document.forms["myform"]["perihal"].value;
        if (perihal==null || perihal=="")
          {
           swal({
                title: "Peringatan!",
                text: "Perihal tidak boleh kosong!"
            });
          return false;
          };


        var asal=document.forms["myform"]["asal"].value;
        if (asal==null || asal=="")
          {
           swal({
                title: "Peringatan!",
                text: "Asal tidak boleh kosong!"
            });
          return false;
          };

         var tujuan_lokasi=document.forms["myform"]["tujuan_lokasi"].value;
        if (tujuan_lokasi==null || tujuan_lokasi=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tujuan Lokasi tidak boleh kosong!"
            });
          return false;
          };


         var lamaPerjalanan=document.forms["myform"]["lamaPerjalanan"].value;
        if (lamaPerjalanan==null || lamaPerjalanan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Lama Perjalanan tidak boleh kosong!"
            });
          return false;
          };

           var suratPerintah=document.forms["myform"]["suratPerintah"].value;
        if (suratPerintah==null || suratPerintah=="")
          {
           swal({
                title: "Peringatan!",
                text: "No. Surat Perintah tidak boleh kosong!"
            });
          return false;
          };


           var tgl_berangkat=document.forms["myform"]["tgl_berangkat"].value;
        if (tgl_berangkat==null || tgl_berangkat=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal berangkat tidak boleh kosong!"
            });
          return false;
          };

          var tgl_kembali=document.forms["myform"]["tgl_kembali"].value;
        if (tgl_kembali==null || tgl_kembali=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal kembali tidak boleh kosong!"
            });
          return false;
          };
     }


$(document).on("click", ".lihat_button", function () {
        var myId = $(this).data('id');
    

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Perjalanan_dinas/detail_dinas',
            data: { ids: myId},
            success: function(response) {
                $('#resultt').html(response);
            }
        });
    });  


$(document).on( "click", '.hapusbutton',function(e) {
    var id= $(this).data('id');
  
     
    $(".id").val(id);
   
  
  
});

</script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );
} );
</script>