  <div class="modal-header">
                    <h5 class="modal-title text-primary"><strong>Edit Proposal Masa Reses</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">

  <form autocomplete="off" id="edit_proposal">
                        <div class="form-row">
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Reses Ke- ...</strong></label><select class="form-control form-control-sm text-size reses" id="reses" name="reses"><option value="">Pilih Reses...</option><option value="1">Reses 1</option><option value="2">Reses 2</option><option value="3">Reses 3</option></select></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Nama Anggota Dewan</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size nama_anggotaa" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..." onmouseover="autofill();" autofocus="on"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Fraksi</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size fraksi" type="text" id="myInput2" name="fraksi" placeholder="Fraksi..." readonly=""></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Dapil</strong></label>
                                    <div>
                                        <div class="form-row justify-content-center">
                                            <div class="col-xl-12"><input class="form-control form-control-sm text-size daerah_pemilihan" type="text" placeholder="Daerah Pemilihan..." name="dapil" readonly="" id="dapil"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Tanggal Pelaksanaan</strong></label><input class="form-control form-control-sm text-size tanggal" type="date" name="tgl" id="tgl"></div>
                            </div>

                            <div class="col-xl-2">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Hari </strong></label><input class="form-control form-control-sm text-size hari" type="text" name="hari" id="hari" readonly=""></div>
                            </div>
							
							<!-- Input Tambahan: TEMPAT, format: VARCHAR-->
							<div class="col-xl-12">
								<div class="form-group"><label class="text-primary text-size" for="username"><strong>Tempat</strong></label><input class="form-control form-control-sm text-size tempat" type="text" name="tempat" placeholder="Isi Tempat..." id="tempat"></div>
							</div>
							
							<!-- Input Tambahan: waktu, format: VARCHAR-->
							<div class="col-xl-12">
								<div class="form-group"><label class="text-primary text-size" for="username"><strong>Waktu (WIB)</strong></label><input class="form-control form-control-sm text-size waktu" type="time" name="waktu" placeholder="Isi Waktu..." id="waktu"></div>
							</div>
												
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Jumlah Konstituen</strong></label><input class="form-control form-control-sm text-size jumlah_konsituen" type="text" name="jumlah_konsituen" placeholder="Isi Jumlah Konstituen..." id="jumlah_konsituen"></div>
                            </div>
                            <div class="col-xl-12 mt-2">
                                <div class="form-group">
                                    <h5 class="text-primary"><strong>Fasilitas yang Dibutuhkan</strong></h5>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="id">
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Snack Box</strong></label><textarea class="form-control form-control-sm text-size snack" placeholder="Isi Jumlah Snack..." rows="2" name="snack"></textarea></div>
                            </div>
							<div class="col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Nasi Box</strong></label><textarea class="form-control form-control-sm text-size makanan" placeholder="Isi Jumlah Porsi Makanan..." rows="2" name="makanan"></textarea></div>
                            </div>
							
							<!--Input Tambahan: Kursi-->
							<div class="col-xl-6">
								<div class="form-group"><label class="text-primary text-size" for="username"><strong>Kursi</strong></label><textarea class="form-control form-control-sm text-size kursi" placeholder="Isi Jumlah Kursi..." rows="2" name="kursi" id="kursi"></textarea></div>
							</div>
							
							<!--Perubahan Tampilan Input-->
							<div class="col-xl-6">
								<div class="form-group"><label class="text-primary" for="username"><strong></strong></label>
									<div class="form-check"><input class="form-check-input spanduk" type="checkbox" id="formCheck-1" name="spanduk" value="Ya"><label class="form-check-label text-primary text-size" for="formCheck-1"><strong>Spanduk</strong></label></div>
									<div class="form-check"><input class="form-check-input tenda" type="checkbox" id="formCheck-1" name="tenda" value="Ya"><label class="form-check-label text-primary text-size" for="formCheck-1"><strong>Tenda</strong></label></div>
									<div class="form-check"><input class="form-check-input sound_system" type="checkbox" id="formCheck-1" name="sound" value="Ya"><label class="form-check-label text-primary text-size" for="formCheck-1"><strong>Sound</strong></label></div>
								</div>
							</div>
							
							<!--Input Tambahan: Pendamping-->
							<div class="col-xl-12">
								<div class="form-group"><label class="text-primary text-size" for="username"><strong>Pendamping</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Pendamping..." rows="1" name="pendamping"></textarea></div>
							</div>
							
							<!--
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Tenda</strong></label><textarea class="form-control form-control-sm text-size tenda" placeholder="Isi Ukuran Tenda..." rows="2" name="tenda"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Spanduk</strong></label><textarea class="form-control form-control-sm text-size spanduk" placeholder="Isi Ukuran Spanduk..." rows="2" name="spanduk"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Sound System</strong></label><textarea class="form-control form-control-sm text-size sound_system" placeholder="Isi Jumlah Sound System..." rows="2" name="sound_system"></textarea></div>
                            </div>
                            
							
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Minuman</strong></label><textarea class="form-control form-control-sm text-size minuman" placeholder="Isi Jumlah Kemasan Minuman..." rows="2" name="minuman"></textarea></div>
                            </div>
							-->
                        </div>
                    </form>
                    </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit" id="submit_edit_proposal">Edit Proposal</button></div>