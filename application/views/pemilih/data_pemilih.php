<!-- Content Header (Page header) -->
<section class="content-header">
</section>

<!-- Main content -->
<section class="content">
    <!-- /. WEB DINAMIS DISINI ############################################################################### -->
    <div class="container-fluid">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-user-plus"></i> Data User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        <a href="<?= base_url('pemilih/add') ?>" class="btn btn-primary">
                            <i class="fa fa-edit"></i> Tambah Data</a>
                    </div>
                    <br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($pemilih->result() as $key => $data) {  ?>
                                <tr>
                                    <td>
                                        <?= $no++; ?>
                                    </td>
                                    <td>
                                        <?= $data->nama_pengguna ?>
                                    </td>
                                    <td>
                                        <?= $data->username ?>
                                    </td>
                                    <td>
                                        <?php echo $data->status == 1 ? "Belum Memilih" : "Sudah Memilih" ?>
                                    </td>

                                    <td>
                                        <form action="<?= site_url('pemilih/del') ?>" method="post">
                                            <a href="<?= base_url('pemilih/edit/' . $data->id_pengguna) ?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <input type="hidden" name="delete" value="<?= $data->id_pengguna ?>">
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


        </div>
</section>
<!-- /.content -->