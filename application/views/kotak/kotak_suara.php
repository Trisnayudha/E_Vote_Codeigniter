<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Kotak Suara</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kandidat</th>
                        <th>pemilih</th>
                        <th>Waktu Memilih</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($row->result() as $d) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d->nama_calon; ?></td>
                            <td><?php echo $d->id_pemilih; ?></td>
                            <td><?php echo $d->date; ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- /.card-body -->