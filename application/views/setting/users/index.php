<link rel="stylesheet" href="<?= base_url("assert/css/dataTables.bootstrap4.min.css") ?>">
<script src="<?= base_url("assert/js/dataTables.min.js") ?>"></script>
<script src="<?= base_url("assert/js/datatable_function.js") ?>"></script>
<div class="row">
    <div class="col-lg-12">
        <br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
            </div>
            <div class="card-body">
                <table id="users_table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="card-footer">
                <a href="<?= base_url("setting/users/add"); ?>" id="ins_base" class="btn btn-primary">ADD</a>
                <button class="btn btn-success edit-row">MODIFY</button>
                <button class="btn btn-danger delete-row">DELETE</button>
                <a class="btn btn-default" id="backbtn" href="<?= base_url() ?>">EXIT</a>
            </div>
        </div>
    </div>
</div> 
<script>
    $(document).ready(function () {
        data_table("#users_table", "<?= base_url('setting/users/delete') ?>", "<?= base_url('setting/users/edit') ?>", '<?= base_url('setting/users/json?select=username as name, id') ?>');
        $('input[type="search"]').addClass("mousetrap");
    });
</script>