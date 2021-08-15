<!-- Content Header (Page header) -->
<section class="content-header">
</section>

<!-- Main content -->
<section class="content">
    <!-- /. WEB DINAMIS DISINI ############################################################################### -->
    <div class="container-fluid">

        <!-- beri level untuk Halaman -->
        <?php
        if ($this->session->userdata('level') == 'Administrator') {
            // Auto Halaman Home Pengguna
            $this->load->view('home/admin')
        ?>
        <?php
        } else if ($this->session->userdata('level') == 'Petugas') {
            $this->load->view('home/admin')
        ?>
        <?php
        } else {
            $this->load->view('home/pemilih')
        ?>
        <?php
        }
        ?>


    </div>
</section>
<!-- /.content -->