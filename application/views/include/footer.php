</section>  
</div>  
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; 2019-<?= date("Y") ?> <a href="http://itinfoway.com">itinfoway.com</a>.</strong> All rights
    reserved.
</footer>

</div>

<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assert/plugins/selectize/js/standalone/selectize.min.js"></script>
<script src="<?= base_url(); ?>assert/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assert/dist/js/adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assert/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assert/dist/js/demo.js"></script>

<script>
    $('.selectize').selectize({
        sortField: 'text'
    });
    $(document).on("keyup", "input", function () {
        $(this).val($(this).val().toUpperCase());
    });
</script>
<script>
    $.validate();
</script>
</body>
</html>