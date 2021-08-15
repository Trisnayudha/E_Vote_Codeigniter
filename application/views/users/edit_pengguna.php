<div class="card card-green">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">

            <div class="form-group">
                <label class="col-sm-2 col-form-label">Nama User</label>
                <div class="col-sm-6">
                    <input type="hidden" name="id_pengguna" value="<?= $row->id_pengguna ?>">
                    <input type="text" name="nama_pengguna" value="<?= $this->input->post('nama_pengguna') ?? $row->nama_pengguna ?>" class="form-control">

                </div>
            </div>

            <div class="form-group ">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" class="form-control" />
                </div>
            </div>

            <div class="form-group ">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" id="pass" name="password" value="<?= $this->input->post('password') ?? $row->password ?>" class="form-control">
                    <input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
                </div>
            </div>
            <div class="form-group ">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" value="<?= $this->input->post('email') ?? $row->email ?>" class="form-control">
                </div>
            </div>
            <div class="form-group ">
                <label class="col-sm-2 col-form-label">Nomor WA</label>
                <div class="col-sm-6">
                    <input type="tel" name="telepon" value="<?= $this->input->post('telepon') ?? $row->telepon ?>" class=" form-control">
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">

            <a href="<?= base_url('user') ?>" title="Kembali" class="btn btn-secondary">Batal</a>


        </div>
    </form>
</div>

<script type="text/javascript">
    function change() {
        var x = document.getElementById('pass').type;

        if (x == 'password') {
            document.getElementById('pass').type = 'text';
            document.getElementById('mybutton').innerHTML;
        } else {
            document.getElementById('pass').type = 'password';
            document.getElementById('mybutton').innerHTML;
        }
    }
</script>