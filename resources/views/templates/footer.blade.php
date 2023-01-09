<!-- Footer -->
<footer class="footer-admin mt-auto footer-light">
    <div class="container-xl px-4">
        <div class="row">
            <div class="col-md-6 small">Copyright &copy; <?= "Karyawan NF" . " " . Date('Y') ?></div>
            <div class="col-md-6 text-md-end small">
                <p>Page rendered in <strong>{{ (microtime(true) - LARAVEL_START) }}</strong> seconds. <?= 'Laravel Version <strong>' . app()->version() . '</strong>' ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->