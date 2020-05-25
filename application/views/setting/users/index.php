<link rel="stylesheet" href="<?= base_url("assert/css/dataTables.bootstrap4.min.css") ?>">
<script src="<?= base_url("assert/js/dataTables.min.js") ?>"></script>
<script src="<?= base_url("assert/js/datatable_function.js") ?>"></script>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
       
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
                <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a href="<?= base_url("setting/users/add"); ?>" id="ins_base" class="btn btn-primary" class="nav-link active">ADD</a>
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
                            <table class="table table-bordered table-striped table-sm" id="users_table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="filter-select filter-onlyAvail">
                                            Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Role
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Status
                                        </th>
                                        <th class="filter-false">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="14" class="ts-pager">
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
                                   
                                </div>
                                </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    
                                    foreach ($users as $u) {
                                     
                                        ?>
                                        <tr>
                                            <td><?= $u->username; ?></td>
                                             <td><?= $u->id; ?></td> 
                                            <td><?= ($u->flag == 1) ? "Active" : "Dactive"; ?></td>
                                            
                                            <td>
                                                <a  href="<?= base_url("setting/users/edit/"). $u->id; ?>" class="btn btn-success btn-sm ">edit</a>
                                                <a  href="<?= base_url("setting/users/delete/"). $u->id; ?> "class="btn btn-danger btn-sm ">Delete</a>
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
        var $table = $("#users_table").tablesorter({
            theme: "bootstrap",
            widthFixed: false,
            widgets: ["zebra", "columns", "filter", 'resizable'],
            widgetOptions: {
                math_data: 'math',
                resizable_addLastColumn: true,
                resizable_widths: ['150px', '200px', '150px', '200px', '100px', '100px', '100px', '120px', '100px', '200px', '100px', '100px', '120px', '130px', ],
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
    });
</script>           