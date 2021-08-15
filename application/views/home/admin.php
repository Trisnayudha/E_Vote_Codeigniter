    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h5>
                        <?php
                        echo $calon->tot_calon;

                        ?>

                    </h5>

                    <p>Jumlah Kandidat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kandidat') ?>" class="small-box-footer">Selengkapnya
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h5>
                        <?php
                        echo $pemilih->tot_pemilih;

                        ?>
                    </h5>

                    <p>Jumlah Pemilih</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?=base_url('pemilih')?>" class="small-box-footer">Selengkapnya
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h5>
                        <?php
                        echo $memilih->sudah;

                        ?>
                    </h5>

                    <p>Sudah Memilih</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=base_url('kotaksuara')?>" class="small-box-footer">Selengkapnya
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h5>
                        <?php
                        echo $belum->belum;

                        ?>
                    </h5>

                    <p>Belum Memlih</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>