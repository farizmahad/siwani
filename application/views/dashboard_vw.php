            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h4 class="text-dark mb-0"><strong>Dashboard</strong></h4><a class="btn btn-primary btn-sm d-none d-sm-inline-block invisible text-size" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
                <ol class="breadcrumb text-size">
                    <li class="breadcrumb-item"><a href="#"><span>Reses</span></a></li>
                    <li class="breadcrumb-item"><a href="#"><span><strong>Dashboard</strong></span></a></li>
                </ol>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <h5><strong>MASA reses 1</strong></h5>
                                        </div>
                                        <div class="text-primary font-weight-bold h5 mb-0"><span><strong><?php echo count($reses1); ?>  Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-primary"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <h5><strong>MASA reses 2</strong></h5>
                                        </div>
                                        <div class="text-success font-weight-bold h5 mb-0"><span><strong><?php echo count($reses2); ?> Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-success"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-danger py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <h5><strong>MASA reses 3</strong></h5>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-danger font-weight-bold h5 mb-0 mr-3"><span><strong><?php echo count($reses3); ?> Usulan</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-danger"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                            <h6><strong>total proposal reses</strong></h6>
                                        </div>
                                        <div class="text-warning font-weight-bold h5 mb-0"><span><strong><?php echo count($total_belum); ?> Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-warning"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<!-- Hasil Reses -->
				<div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <h5><strong>Hasil MASA reses 1</strong></h5>
                                        </div>
                                        <div class="text-primary font-weight-bold h5 mb-0"><span><strong><?php echo count($reses1_sudah); ?>  Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-primary"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <h5><strong> Hasil MASA reses 2</strong></h5>
                                        </div>
                                        <div class="text-success font-weight-bold h5 mb-0"><span><strong><?php echo count($reses2_sudah); ?> Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-success"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-danger py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <h5><strong> Hasil MASA reses 3</strong></h5>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-danger font-weight-bold h5 mb-0 mr-3"><span><strong><?php echo count($reses3_sudah); ?> Usulan</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-danger"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                            <h6 style="font-size: 20px;"><strong>total hasil reses</strong></h6>
                                        </div>
                                        <div class="text-warning font-weight-bold h5 mb-0"><span><strong><?php echo count($total_sudah); ?> Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-warning"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<!-- Pembidangan -->
				<div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <h5><strong>BIDANG PEMERINTAHAN</strong></h5>
                                        </div>
                                        <div class="text-primary font-weight-bold h5 mb-0"><span><strong><?php echo count($reses_pemerintahan); ?> Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-university fa-2x text-primary"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <h5><strong>BIDANG EKONOMI KEUANGAN</strong></h5>
                                        </div>
                                        <div class="text-success font-weight-bold h5 mb-0"><span><strong><?php echo count($reses_ekonomi); ?> Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-money-bill-alt fa-2x text-success"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
                        <div class="card shadow border-left-danger py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <h5><strong>BIDANG PEMBANGUNAN</strong></h5>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-danger font-weight-bold h5 mb-0 mr-3"><span><strong><?php echo count($reses_pembangunan); ?> Usulan</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-hammer fa-2x text-danger"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                            <h5><strong>BIDANG KESEJAHTERAAN RAKYAT</strong></h5>
                                        </div>
                                        <div class="text-warning font-weight-bold h5 mb-0"><span><strong><?php echo count($reses_kesejahteraan_rakyat); ?> Usulan</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-certificate fa-2x text-warning"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="row invisible">
                    <div class="col-lg-7 col-xl-8">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                        role="menu">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Reses 1&quot;,&quot;Reses 2&quot;,&quot;Reses 3&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;<?php echo count($reses1); ?>&quot;,&quot;<?php echo count($reses2); ?>&quot;,&quot;<?php echo count($reses3); ?>&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                        role="menu">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Reses 1&quot;,&quot;Reses 2&quot;,&quot;Reses 3&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;<?php echo count($reses1); ?>&quot;,&quot;<?php echo count($reses2); ?>&quot;,&quot;<?php echo count($reses3); ?>&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
                                <div
                                    class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;Reses 1</span><span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;Reses 2</span><span class="mr-2"><i class="fas fa-circle text-info"></i>&nbsp;Reses 3</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row collapse">
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Progres Breakdown Usulan</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                            </div>
                            <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <p class="m-0">Primary</p>
                                    <p class="text-white-50 small m-0">#4e73df</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <p class="m-0">Success</p>
                                    <p class="text-white-50 small m-0">#1cc88a</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-info shadow">
                                <div class="card-body">
                                    <p class="m-0">Info</p>
                                    <p class="text-white-50 small m-0">#36b9cc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-warning shadow">
                                <div class="card-body">
                                    <p class="m-0">Warning</p>
                                    <p class="text-white-50 small m-0">#f6c23e</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-danger shadow">
                                <div class="card-body">
                                    <p class="m-0">Danger</p>
                                    <p class="text-white-50 small m-0">#e74a3b</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card text-white bg-secondary shadow">
                                <div class="card-body">
                                    <p class="m-0">Secondary</p>
                                    <p class="text-white-50 small m-0">#858796</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    