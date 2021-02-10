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