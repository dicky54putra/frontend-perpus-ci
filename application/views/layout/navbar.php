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
                    <a class="nav-link" href="<?= base_url() ?>#buku-terbaru">Buku Terbaru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#buku-favorit">Buku Favorit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#semua-buku">Semua Buku</a>
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