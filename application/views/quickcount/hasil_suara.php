<div class="realtime">
    <div class="card card-info autoload">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-chart-pie"></i> Perolehan Suara</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No Urut</th>
                            <th>Nama Kandidat</th>
                            <th>
                                <center>Foto Kandidat</center>
                            </th>
                            <th>Jumlah Suara</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $no = 1;
                        foreach ($row->result() as $key => $data) {  ?>

                            <tr>
                                <td>
                                    <?= $data->id_calon ?>
                                </td>
                                <td>
                                    <?= $data->nama_calon ?>
                                </td>
                                <td align="center">
                                    <img src="foto/<?= $data->foto_calon ?>" width="150px" />
                                </td>
                                <td>
                                    <h4>
                                        <?php
                                        // foreach ($hsl as $jumlahsuara) {
                                        echo $hsl[$key]['hasil'];
                                        // var_dump($hsl);
                                        // }
                                        // $sql_hitung = "SELECT COUNT(id_vote) from tb_vote  where id_calon='$id_calon'";
                                        // $q_hit = mysqli_query($koneksi, $sql_hitung);
                                        // while ($row = mysqli_fetch_array($q_hit)) {
                                        //     echo $row[0] . " Suara";
                                        //}
                                        ?>
                                    </h4>
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
</div>