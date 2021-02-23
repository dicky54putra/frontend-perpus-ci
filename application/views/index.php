        <div class="container" style="margin-top: 80px;">

            <?= $this->session->flashdata('message'); ?>

            <section id="hero">
                <div class="row">
                    <div class="col-md-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php
                                $counter = 1;
                                $foto = $this->db->get_where('foto', ['nama_tabel' => 'frontend_buku_tamu', 'id_tabel' => 1])->result();
                                foreach ($foto as $foto) {
                                ?>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $counter - 1 ?>" class="<?= ($counter <= 1) ? 'active' : '' ?>"></li>
                                    <?php $counter++ ?>
                                <?php } ?>
                            </ol>
                            <div class="carousel-inner rounded height-3">
                                <?php
                                $counter = 1;
                                $foto = $this->db->get_where('foto', ['nama_tabel' => 'frontend_buku_tamu', 'id_tabel' => 1])->result();
                                foreach ($foto as $foto) {
                                ?>
                                    <div class="carousel-item <?= ($counter <= 1) ? 'active' : '' ?>">
                                        <img src="<?= substr(base_url(), 0, -13) ?>backend/web/upload/<?= $foto->foto ?>" class="d-block w-100" alt="<?= $foto->foto ?>">
                                    </div>
                                    <?php $counter++ ?>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box box-primary height-3">
                            <div class="box-body">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="anggota-tab" data-bs-toggle="tab" href="#anggota" role="tab" aria-controls="anggota" aria-selected="true">Anggota</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="umum-tab" data-bs-toggle="tab" href="#umum" role="tab" aria-controls="umum" aria-selected="false">Umum</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="anggota" role="tabpanel" aria-labelledby="anggota-tab">

                                        <form action="<?= base_url('welcome/absen/anggota') ?>" method="post">

                                            <div class="form-group mt-4 mb-2">
                                                <select name="id_anggota" id="id_anggota" class="form-control form-control-solid js-example-basic-single" required>
                                                    <option value="">Pilih Anggota</option>
                                                    <?php
                                                    foreach ($data_anggota as $val) {
                                                    ?>
                                                        <option value="<?= $val->id_anggota ?>"><?= $val->nomor_anggota . ' - ' . $val->nama_anggota ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-save"></i> Simpan
                                            </button>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="umum" role="tabpanel" aria-labelledby="umum-tab">

                                        <form method="POST" action="<?= base_url('welcome/absen/umum') ?>">
                                            <div class="mb-3 mt-3">
                                                <input type="text" class="form-control rounded" name="nama" placeholder="Nama">
                                            </div>
                                            <div class="mb-3">
                                                <input type="number" class="form-control rounded" name="no_hp" placeholder="Nomor Hp">
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-save"></i> Simpan
                                            </button>
                                        </form>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <main id="main">
                <?php
                if (empty($_GET['q']) && empty($_GET['v'])) {
                ?>
                    <section id="buku-terbaru">
                        <div style="height: 80px;"></div>
                        <div class="row">
                            <div class="col">
                                <h2>Buku <strong>Terbaru</strong></h2>
                            </div>
                            <div class="col">
                                <a href="?v=semua-buku" class="nav-link float-end" style="font-weight: bold;">
                                    Lihat Semua Buku
                                </a>
                            </div>
                        </div>
                        <div class="row ">
                            <?php
                            foreach ($buku_terbaru as $val) {
                            ?>
                                <div class="col-md-2 mb-4" style="padding: 5px;margin: 5px;">
                                    <div class="card shadow card-product">
                                        <div class="card-height">
                                            <img src="<?= substr(base_url(), 0, -13) ?>backend/web/upload/<?= $val->cover ?? 'book.png' ?>" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $val->judul_buku ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </section>

                    <section id="buku-favorit">
                        <div style="height: 80px;"></div>
                        <div class="row">
                            <div class="col">
                                <h2>Buku <strong>Favorit</strong></h2>
                            </div>
                            <div class="col">
                                <a href="?v=semua-buku" class="nav-link float-end" style="font-weight: bold;">
                                    Lihat Semua Buku
                                </a>
                            </div>
                        </div>
                        <div class="row ">
                            <?php
                            foreach ($buku_favorit as $val) {
                            ?>
                                <div class="col-md-2 mb-4" style="padding: 5px;margin: 5px;">
                                    <div class="card shadow card-product">
                                        <div class="card-height">
                                            <img src="<?= substr(base_url(), 0, -13) ?>backend/web/upload/<?= $val->cover ?? 'book.png' ?>" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $val->judul_buku ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </section>

                <?php } ?>

                <section id="semua-buku">
                    <div style="height: 80px;"></div>
                    <div class="row">
                        <div class="col">
                            <h2>Semua <strong>Buku</strong></h2>
                        </div>
                    </div>
                    <div class="row ">
                        <?php
                        foreach ($semua_buku as $val) {
                        ?>
                            <div class="col-md-2 mb-4" style="padding: 5px;margin: 5px;">
                                <div class="card shadow card-product">
                                    <div class="card-height">
                                        <img src="<?= substr(base_url(), 0, -13) ?>backend/web/upload/<?= $val->cover ?? 'book.png' ?>" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $val->judul_buku ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>

            </main>

        </div>