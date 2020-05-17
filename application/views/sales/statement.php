<link href="<?= base_url("assert/dist/css/theme.bootstrap_4.css") ?>" rel="stylesheet" />
<script type="text/javascript" src="<?= base_url("/assert/dist/js/jquery.tablesorter.js") ?>"></script>
<script type="text/javascript" src="<?= base_url("/assert/dist/js/jquery.tablesorter.widgets.js") ?>"></script>
<script type="text/javascript" src="<?= base_url("/assert/dist/js/jquery.tablesorter.pager.js") ?>"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sales Statement</h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url("sales/add") ?>">Add</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">To Date</label>
                            <input type="date" class="form-control" id="to_date">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">From Date</label>
                            <input type="date" class="form-control" id="from_date" max="2020-05-17">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>