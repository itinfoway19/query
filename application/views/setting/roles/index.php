<link rel="stylesheet" href="<?= base_url("assert/css/jquery.dataTables.min.css") ?>">
<script src="<?= base_url("assert/js/datatables.min.js") ?>"></script>
<script src="<?= base_url("assert/js/datatable_function.js") ?>"></script>
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Department</h3>
                 <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url("setting/roles/add"); ?>" id="ins_base ?>">Add</a>
                            </li>
                        </ul>
                  </div>
           </div>
            <div class="card-body">
                <div class="row">
                       <div class="col-md-3 offset-9">
                            <input class="search sele ctable form-control" type="search" placeholder="Search" data-column="all">
                            <br>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12 table-responsive">
                         <table id="roles_table" class="table table-bordered table-striped table-sm">
                            <thead class="thead-dark">
                                    <tr>
                                        <th class="filter-select filter-onlyAvail">
                                            Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Action
                                        </th>
                                    </tr>
                            </thead>
                            <tfoot>
                                    <tr>
                                        <th colspan="18" class="ts-pager">
                                <div class="form-inline">
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary first" title="first">⇤</button>
                                        <button type="button" class="btn btn-secondary prev" title="previous">←</button>
                                    </div>
                                    <span class="pagedisplay"></span>
                                    <div class="btn-group btn-group-sm mx-1" role="group">
                                        <button type="button" class="btn btn-secondary next" title="next">→</button>
                                        <button type="button" class="btn btn-secondary last" title="last">⇥</button>
                                    </div>
                                    <select class="form-control-sm custom-select px-1 pagesize" title="Select page size">
                                        <option selected="selected" value="1">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="all">All Rows</option>
                                    </select>
                                    <select class="form-control-sm custom-select px-4 mx-1 pagenum" title="Select page number"></select>
                                </div>
                                </th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    <?php
                                    $sum = 0;
                                    foreach ($roles as $r) {
                                        
                                        ?>
                                        <tr>
                                            <td><?= $r->name; ?></td>
                                            
                                            <td>
                                                <a class="btn btn-success btn-sm " href="<?= base_url("setting/roles/edit/") . $r->id; ?>">edit</a>
                                                <a class="btn btn-danger btn-sm " href="<?= base_url("setting/roles/delete/") . $r->id; ?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                           
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(function () {
        var $table = $("#roles_table").tablesorter({
            theme: "bootstrap",
            widthFixed: false,
            widgets: ["zebra", "columns", "filter", 'resizable'],
            widgetOptions: {
                math_data: 'math',
                resizable_addLastColumn: true,
                resizable_widths: ['100px', '100px', '150px', '200px', '100px', '100px', '100px', '120px', '100px', '100px', '100px', '100px', '120px', '100px', '100px', '100px', '100px', '135px', ],
                zebra: ["even", "odd"],
                columns: ["primary", "secondary", "tertiary"],
                filter_searchFiltered: false,
                filter_cssFilter: "form-control custom-select",
            }
        }).tablesorterPager({
            container: $(".ts-pager"),
            cssGoto: ".pagenum",
            removeRows: false,
            output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

        });
        $.tablesorter.filter.bindSearch($table, $('.search'));
        $('.download').click(function () {
            $table = $('#roles_table');
            return false;
        });
    });

</script>