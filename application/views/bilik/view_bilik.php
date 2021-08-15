<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Kandidat</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="<?= base_url('bilik') ?>" class="btn btn-secondary btn-sm">
                    < Kembali</a> </div> <br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No Urut</th>
                                    <th>Nama Kandidat</th>
                                    <th>Foto Kandidat</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($row->result() as $key => $d) {  ?>

                                    <tr>
                                        <td>
                                            <?= $d->id_calon ?>
                                        </td>
                                        <td>
                                            <?= $d->nama_calon ?>
                                        </td>
                                        <td align="center">
                                            <img src="<?php echo base_url(); ?>foto/<?= $d->foto_calon ?>" width="150px" />
                                        </td>
                                        <td>
                                            <?= $d->keterangan ?>
                                        </td>
                                    </tr>
                                <?php
                                } ?>

                            </tbody>

                            </tfoot>

                        </table>

            </div>
        </div>
    </div>
    <!-- /.card-body -->