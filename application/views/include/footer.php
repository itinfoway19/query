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
<!-- SweetAlert2 -->
<script src="<?= base_url(); ?>assert/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url(); ?>assert/plugins/toastr/toastr.min.js"></script>
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
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 3000
        });
<?php
if ($this->session->has_userdata("success")) {
    ?>
            Toast.fire({
                type: 'success',
                title: ' <?= $this->session->userdata("success") ?>'
            });
    <?php
    $this->session->unset_userdata("success");
}
?>
<?php
if ($this->session->has_userdata("erorr")) {
    ?>
            Toast.fire({
                type: 'erorr',
                title: ' <?= $this->session->userdata("erorr") ?>'
            });
    <?php
    $this->session->unset_userdata("erorr");
}
?>

    });
</script>
<script>
    $.validate();
</script>
</body>
</html>