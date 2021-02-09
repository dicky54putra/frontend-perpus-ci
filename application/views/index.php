<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?= substr(base_url(), 0, -13) ?>backend/web/assets/3f74e06e/css/AdminLTE.min.css" rel="stylesheet">
    <link href="<?= substr(base_url(), 0, -13) ?>backend/web/assets/2e037b69/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= substr(base_url(), 0, -13) ?>backend/web/css/site.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary" id="navbar-example2">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">PERPUSTAKAAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- active -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#buku-terbaru">Buku Terbaru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buku-favorit">Buku Favorit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#semua-buku">Semua Buku</a>
                    </li>
                </ul>
                <form class="d-flex" method="get" action="<?= base_url() ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" style="border-radius: 5px 0 0 5px;" placeholder="Cari..." name="q" aria-label="Cari" aria-describedby="basic-addon1">
                        <button type="submit" class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 80px;">

        <?= $this->session->flashdata('message'); ?>

        <section id="hero">
            <div class="row">
                <div class="col-md-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner rounded height-3">
                            <div class="carousel-item active">
                                <img src="http://localhost/sman5semarang.klikgss.com/backend/web/images/aaa.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/sman5semarang.klikgss.com/backend/web/images/aaa.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/sman5semarang.klikgss.com/backend/web/images/aaa.jpg" class="d-block w-100" alt="...">
                            </div>
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

    <div style="height: 80px;"></div>
    <div class="footer bg-dark" style="height: 80px; color: white;">
        <div class="container ">
            <div class="copyright d-flex justify-content-center">
                © Copyright &nbsp;<strong><span>GSS</span></strong>. All Rights Reserved
            </div>
            <div class="credits d-flex justify-content-center">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/ -->
                Designed by &nbsp;<a href="https://github.com/dicky54putra">dicky54putra</a>
            </div>
        </div>
    </div>



















    <style>
        .height-3 {
            height: 300px;
        }

        .card-height {
            height: 200px;
        }

        .select2-container--default .select2-selection--single {
            padding-top: 5px;
            padding-left: 5px;
            height: 40px;
            height: calc(1.5em + 1rem + 2px);
            width: 100%;
            font-size: 1rem;
            /* background-color: #ecf0f6;
            border-color: #ecf0f6; */
            position: relative;
            font-weight: 400;
            line-height: 1.5;
        }

        .select2-selection__rendered {
            color: #687281 !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="<?= substr(base_url(), 0, -13) ?>backend/web/assets/3f74e06e/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>


</body>

</html>