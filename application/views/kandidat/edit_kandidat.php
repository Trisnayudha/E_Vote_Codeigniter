<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Urut</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_calon" name="id_calon" value="<?= $this->input->post('id_calon') ?? $row->id_calon ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Calon</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_calon" name="nama_calon" value="<?= $this->input->post('nama_calon') ?? $row->nama_calon ?>" />
				</div>
			</div>


			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Calon</label>
				<div class="col-sm-6">
					<input type="file" id="foto_calon" name="foto_calon">
					<p class="help-block">
						<font color="red">Format file Jpg"</font>
					</p>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-6">
					<textarea type="text" class="form-control" id="keterangan" name="keterangan">
					<?= $this->input->post('keterangan') ?? $row->keterangan ?>
				</textarea>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="<?= base_url('kandidat') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>