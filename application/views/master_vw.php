<div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Master Data</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Reses</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>master-data"><span><strong>Master Data</strong><br></span></a></li>
                </ol>
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <h6><strong>Anggota Dewan</strong></h6>
                                        </div>
                                        <div class="text-primary font-weight-bold h5 mb-0"><span><strong><?php echo count($dewan); ?> Orang</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-tie fa-2x text-primary"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-primary btn-sm text-size" type="button"  data-target="#result" id="dewan" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <h6><strong>fraksi</strong></h6>
                                        </div>
                                        <div class="text-success font-weight-bold h5 mb-0"><span><strong><?php echo count($fraksi); ?> Fraksi</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-success"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-success btn-sm text-size" type="button" id="fraksi"  data-target="#result" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card shadow border-left-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-info font-weight-bold text-xs mb-1">
                                            <h6><strong>Dapil</strong></h6>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-info font-weight-bold h5 mb-0 mr-3"><span><strong><?php echo count($dapil); ?> dapil</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-location-arrow fa-2x text-info"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-info btn-sm text-size" type="button" id="dapil" data-target="#result" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card shadow border-left-danger py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <h6><strong>Pendamping</strong></h6>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-danger font-weight-bold h5 mb-0 mr-3"><span><strong><?php echo count($pendamping); ?> pendamping</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-danger"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-danger btn-sm text-size" type="button" id="pendamping" data-target="#result" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		
					<div class="col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                            <h6><strong>Anggota Setwan</strong></h6>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-warning font-weight-bold h5 mb-0 mr-3"><span><strong><?php echo count($setwan); ?> anggota</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-users fa-2x text-warning"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-warning btn-sm text-size" type="button" id="setwan" data-target="#result" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card shadow border-left-secondary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-secondary font-weight-bold text-xs mb-1">
                                            <h6><strong>Jabatan</strong></h6>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-secondary font-weight-bold h5 mb-0 mr-3"><span><strong><?php echo count($jabatan); ?> jabatan</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-certificate fa-2x text-secondary"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-secondary font-weight-bold h5 mb-0 p-1"><button class="btn btn-secondary btn-sm text-size" type="button" id="jabatan" data-target="#result" onClick="reply_click(this.id)">Lihat Daftar</button></div>
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
                $('#result').load("<?php echo base_url() ?>Master/detail_master/"+id);
            }  
</script>