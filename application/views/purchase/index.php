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
                    <h3 class="card-title">ADD</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 offset-9">
                            <input class="search sele ctable form-control" type="search" placeholder="Search" data-column="all">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped" id="myTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="filter-select filter-onlyAvail">
                                            date
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Challan number
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Vehicle Number
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Transporter Name
                                        </th>
                                        <th >
                                            Gross Weight
                                        </th>
                                        <th>
                                            Tare Weight
                                        </th>
                                        <th>
                                            Net Weight
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Material
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Quarry Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Receiver Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Driver Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Carting
                                        </th>
                                        <th>
                                            Note
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="13" class="ts-pager">
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
                                    foreach ($purchase as $p) {
                                        ?>
                                        <tr>
                                            <td><?= $p->date; ?></td>
                                            <td><?= $p->id; ?></td>
                                            <td><?= $p->v_name; ?></td>
                                            <td><?= $p->transporter_name; ?></td>
                                            <td><?= $p->gross_weight; ?></td>
                                            <td><?= $p->tare_weight; ?></td>
                                            <td><?= $p->net_weight; ?></td>
                                            <td><?= $p->m_name; ?></td>
                                            <td><?= $p->q_name; ?></td>
                                            <td><?= $p->r_name; ?></td>
                                            <td><?= $p->d_name; ?></td>
                                            <td><?= ($p->carting_id == 1) ? "SELF" : "CARTING"; ?></td>
                                            <td><?= $p->note; ?></td>
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
        var $table = $("#myTable").tablesorter({
            theme: "bootstrap",
            widthFixed: false,
            widgets: ["zebra", "columns", "filter"],
            widgetOptions: {
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