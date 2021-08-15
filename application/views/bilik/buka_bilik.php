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
                                    <th>
                                        <center>Kandidat Pilihan Anda</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>



                                <tr>
                                    <td align="center">
                                        <h1>
                                            <?php echo $row->id_calon ?>
                                            <input type="hidden" name="" id="id_calon" value="<?php echo $row->id_calon ?>">
                                            <input type="hidden" name="" id="id_pemilih" value="<?php echo $this->session->userdata('idpengguna'); ?>">
                                        </h1>
                                        <br>
                                        <img src="<?= base_url() ?>foto/<?php echo $row->foto_calon ?>" width="400px" />
                                        <br>
                                        <h2>
                                            <?php echo $row->nama_calon ?>
                                        </h2>
                                        <br>
                                        <button type="" id="pilihcalon" class="btn btn-primary">
                                            <i class="fa fa-edit"></i> Tetapkan Pilihan
                                        </button>
                </a>
                </td>
                </tr>


                </tbody>
                </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script>
            $('#pilihcalon').click(function() {

                var id_calon = $('#id_calon').val();
                var id_pemilih = $('#id_pemilih').val();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url() ?>bilik/pilihcalon',
                    data: {
                        idcal: id_calon,
                        idpem: id_pemilih
                    },
                    dataType: 'json',
                    success: function(respon) {
                        if (respon.code == 1) {
                            alert('Terimakasih anda telah memberikan hak anda');
                            window.location.href = '<?= base_url() ?>bilik';
                        } else if (respon.code == 0) {
                            alert('Anda sudah memberikan Hak anda');
                            window.location.href = '<?= base_url() ?>bilik';
                        } else {
                            alert('Anda diperkenankan memilih 1 kali');
                            window.location.href = '<?= base_url() ?>bilik';
                        }
                    }
                });
            });
        </script>