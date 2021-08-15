<?php
if ($statuspilih) {
?>
	<div class="alert alert-info alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>
			<i class="icon fas fa-info"></i>Info</h4>
		<h3>Anda sudah menggukan Hak Suara dengan baik, Terimakasih.</h3>
	</div>
<?php } else { ?>
	<div class="row">
		<tbody>

			<?php
			foreach ($row->result() as $key => $data) {  ?>
				<!-- Profile Image -->

				<div class="col-md-4">
					<div class="card card-primary card-outline">
						<div class="card-body">
							<h4 class="profile-username text-center">
								<?= $data->id_calon ?>
							</h4>
							<div class="text-center">
								<img src="foto/<?= $data->foto_calon ?>" width="235px" />
							</div>

							<h3 class="profile-username text-center">
								<?= $data->nama_calon ?>
							</h3>

							<center>
								<a href="<?= base_url() ?>bilik/view/<?php echo $data->id_calon; ?>" class="btn btn-success btn-sm">
									<i class="fa fa-file"></i> Detail
								</a>


								<a href="<?= base_url() ?>bilik/buka/<?= $data->id_calon; ?> " class=" btn btn-primary">
									<i class="fa fa-edit"></i> Pilih
								</a>
							</center>
						</div>
					</div>
				</div>


				<!-- /.card -->
			<?php
			}
			?>
		</tbody>
	</div>

	<!-- /.card-body -->
<?php } ?>