<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Kandidat</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="<?= base_url('kandidat/add') ?>" class="btn btn-primary">
                    <i class="fa fa-edit"></i> Tambah Data</a>
            </div>
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No Urut</th>
                        <th>Nama Kandidat</th>
                        <th>Foto Kandidat</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($row->result() as $key => $data) {  ?>

                        <tr>
                            <td>
                                <?= $data->id_calon ?>
                            </td>
                            <td>
                                <?= $data->nama_calon ?>
                            </td>
                            <td align="center">
                                <img src="<?php echo base_url(); ?>foto/<?= $data->foto_calon ?>" width="150px" />
                            </td>
                            <td>
                                <?= $data->keterangan ?>
                            </td>
                            <td>
                                <form action="<?= site_url('kandidat/del') ?>" method="post">
                                    <a href="<?= base_url('kandidat/edit/' . $data->id_calon) ?>" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <input type="hidden" name="delete" value="<?= $data->id_calon ?>">
                                    <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>Hapus
                                        </buttton>
                                </form>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card-body -->