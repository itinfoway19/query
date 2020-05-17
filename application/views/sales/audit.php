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
                    <h3 class="card-title">VIEW</h3>
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
                        <div class="col-md-3 offset-7">
                            <input class="search sele ctable form-control" type="search" placeholder="Search" data-column="all">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-striped table-sm" id="myTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="filter-select filter-onlyAvail">
                                            date
                                        </th>
                                        <th>
                                            Challan number
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Party
                                        </th>
                                        <th>
                                            Net Weight
                                        </th>
                                        <th>
                                            Party Weight
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Material
                                        </th>
                                        <th class="filter-false">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="7" class="ts-pager">
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
                                    foreach ($sales as $s) {
                                        ?>
                                        <tr id="row<?= $s->id; ?>">
                                            <td><?= $s->date; ?></td>
                                            <td><a href="#" class="get-model"><?= $s->id; ?></a></td>
                                            <td><?= $s->py_name; ?></td>
                                            <td><?= $s->net_weight; ?></td>
                                            <td>
                                                <span class="d-none"><?= $s->party_weight; ?></span>
                                                <input type="text" value="<?= $s->party_weight; ?>" class="form-control" id="party_wight<?= $s->id ?>" data-validation="number" data-validation-allowing="range[999;99999]"></td>
                                            <td><?= $s->m_name; ?></td>
                                            <td>
                                                <button value="<?= $s->id; ?>" class="btn btn-danger btn-sm okset ">ok</button>
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
<div class="antique-details-container"></div>
<script>
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2)
            return parts.pop().split(";").shift();
    }
    $(function () {
        var $table = $("#myTable").tablesorter({
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
            $table = $('#myTable');
            return false;
        });
    });
    $(document).on("click", ".okset", function () {
        var id = $(this).val();
        var party_wight = parseInt($("#party_wight" + id).val());
       
        if (party_wight > 999 || party_wight == 0) {
            if (confirm("This Record party Wight is " + party_wight + "...!!!"))
            {
                $.ajax({
                    url: '<?= base_url("sales/model/"); ?>' + id,
                    type: 'POST',
                    data: {'party_weight': party_wight, 'status': 1, '<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
                    success: function (res) {
                        if (res=="TRUE") {
                            $("#row" + id).remove();
                        }
                    }
                });
            }
        }
    });
    $(document).on("click", ".get-model", function () {
        var fLocation = $(this).text();
        $('.antique-details-container').load("<?= base_url("sales/model/"); ?>" + fLocation, null,
                function () {
                    $('#myModal').modal().show()
                            .one('hidden.bs.modal', function () {
                                displayingPopup = false
                            })
                    setupValidation();
                }
        );
    });

</script>