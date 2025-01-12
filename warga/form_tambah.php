	<div class="row">
	    <div class="col-md-12">
	        <div class="alert alert-info" role="alert">
	            <i class="fas fa-edit"></i> Input Data Pegawai
	        </div>

	        <div class="card">
	            <div class="card-body">
	                <form class="needs-validation" action="proses_simpan.php" method="post" enctype="multipart/form-data"
	                    novalidate>
	                    <div class="row">
	                        <div class="col">
	                            <div class="form-group col-md-12">
	                                <label>NIP</label>

	                                <input type="text" class="form-control" name="nip" autocomplete="off" required>
	                                <div class="invalid-feedback">NIP tidak boleh kosong.</div>
	                            </div>

	                            <div class="form-group col-md-12">
	                                <label>Status Penghuni</label>
	                                <select class="form-control" name="tempat_lahir" autocomplete="off" required>


	                                    <option value="Warga Tetap">Warga Tetap</option>
	                                    <option value="Warga Sementara">Warga Sementara</option>
	                                    <option value="Singgah Pemilik">Singgah Pemilik</option>
	                                    <option value="Lainnya">Lainnya</option>

	                                </select>
	                                <div class="invalid-feedback">Agama tidak boleh kosong.</div>
	                            </div>

	                            <div class="form-group col-md-12">
	                                <label class="mb-3">Jenis Kelamin</label>
	                                <div class="custom-control custom-radio">
	                                    <input type="radio" class="custom-control-input" id="customControlValidation2"
	                                        name="jenis_kelamin" value="Laki-laki" required>
	                                    <label class="custom-control-label"
	                                        for="customControlValidation2">Laki-laki</label>
	                                </div>
	                                <div class="custom-control custom-radio mb-4">
	                                    <input type="radio" class="custom-control-input" id="customControlValidation3"
	                                        name="jenis_kelamin" value="Perempuan" required>
	                                    <label class="custom-control-label"
	                                        for="customControlValidation3">Perempuan</label>
	                                    <div class="invalid-feedback">Pilih salah satu jenis kelamin.</div>
	                                </div>
	                            </div>

	                            <div class="form-group col-md-12">
	                                <label>Agama</label>
	                                <select class="form-control" name="agama" autocomplete="off" required>
	                                    <option value=""></option>
	                                    <option value="Islam">Islam</option>
	                                    <option value="Kristen Protestan">Kristen Protestan</option>
	                                    <option value="Kristen Katolik">Kristen Katolik</option>
	                                    <option value="Hindu">Hindu</option>
	                                    <option value="Buddha">Buddha</option>
	                                </select>
	                                <div class="invalid-feedback">Agama tidak boleh kosong.</div>
	                            </div>
	                        </div>

	                        <div class="col">
	                            <div class="form-group col-md-12">
	                                <label>Nama Warga</label>
	                                <input type="text" class="form-control" name="nama_pegawai" autocomplete="off"
	                                    required>
	                                <div class="invalid-feedback">Nama Warga tidak boleh kosong.</div>
	                            </div>

	                            <div class="form-group col-md-12">
	                                <label>Tanggal Lahir</label>
	                                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy"
	                                    name="tanggal_lahir" autocomplete="off" required>
	                                <div class="invalid-feedback">Tanggal Lahir tidak boleh kosong.</div>
	                            </div>

	                            <div class="form-group col-md-12">
	                                <label>Sebagai</label>
	                                <select class="form-control" name="alamat" autocomplete="off" required>


	                                    <option value="Suami">Suami</option>
	                                    <option value="Istri">Istri</option>
	                                    <option value="Ayah">Ayah</option>
	                                    <option value="Ibu">Ibu</option>
	                                    <option value="Anak">Anak</option>
	                                    <option value="Pembantu RT">Pembantu RT</option>
	                                    <option value="Saudaranya">Saudaranya</option>

	                                </select>
	                                <div class="invalid-feedback">Sebagai tidak boleh kosong.</div>
	                            </div>

	                            <div class="form-group col-md-12">
	                                <label>No. HP</label>
	                                <input type="text" class="form-control" name="no_hp" maxlength="13"
	                                    onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" required>
	                                <div class="invalid-feedback">No. HP tidak boleh kosong.</div>
	                            </div>
	                        </div>

	                        <div class="col">
	                            <div class="form-group col-md-12">
	                                <label>Foto Warga</label>
	                                <input type="file" class="form-control-file mb-3" id="foto" name="foto"
	                                    onchange="return validasiFile()" autocomplete="off" required>
	                                <div id="imagePreview"><img class="foto-preview" src="foto/default_user.png" /></div>
	                                <div class="invalid-feedback">Foto Warga tidak boleh kosong.</div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="my-md-4 pt-md-1 border-top"> </div>

	                    <div class="form-group col-md-5">
	                        <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>