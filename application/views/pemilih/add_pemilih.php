<div class="card card-lightblue">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Tambah Data</h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama User</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="<?= set_value('nama_pengguna') ?>" id="nama_pengguna" name="nama_pengguna" placeholder="Nama user">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="<?= set_value('username') ?>" id="username" name="username" placeholder="Username">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" value="<?= set_value('password') ?>" id="password" name="password" placeholder="Password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-4">
                    <select name="level" id="level" class="form-control">
                        <option value="Pemilih" <?= set_value('level') == "Pemilih" ? "selected" : null ?>>Pemilih</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-4">
                    <select name="status" id="status" class="form-control">
                        <option value="1" <?= set_value('status') == 1 ?>>Memilih</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-4">
                    <select name="jenis" id="level" class="form-control">
                        <option value="PST" <?= set_value('jenis') == "PST" ?>>Peserta</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="xxxxx@gmail.com">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor WA</label>
                <div class="col-sm-6">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+628xxxxxxxx"><br><br>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <input type="reset" name="Reset" value="Reset" class="btn btn-info">
            <a href="<?= base_url('pemilih') ?>" title="Kembali" class="btn btn-secondary">Batal</a>


        </div>
    </form>
</div>