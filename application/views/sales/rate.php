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
                    <h3 class="card-title">Rate</h3>
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
                        <div class="form-group col-lg-5">
                            <label for="exampleInputEmail1">From Date</label>
                            <input type="date" class="form-control" id="from_date" max="2020-05-17">
                        </div>
                        <div class="form-group col-lg-5">
                            <label for="exampleInputEmail1">To Date</label>
                            <input type="date" class="form-control" id="to_date">
                        </div>
                        <div class="form-group col-lg-2">
                            <label>&nbsp;</label>
                            <button type="button" class="btn btn-success btn-block" id="setDate">Get Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <!-- Default box -->
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-striped table-sm" id="myTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="filter-select filter-onlyAvail" data-id="chNo">
                                            Challan number
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="date">
                                            date
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="vehicleNumber">
                                            Vehicle Number
                                        </th>

                                        <th data-id="netWeight">
                                            Net Weight
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="material">
                                            Material
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="place" >
                                            Place
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="party">
                                            Party
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="royalty">
                                            Royalty
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="royaltyNumber">
                                            Royalty Number
                                        </th>
                                        <th  class="filter-false">
                                            rate
                                        </th>
                                        <th  class="filter-false">
                                            GST
                                        </th>
                                        <th class="filter-false">
                                            Amount
                                        </th>
                                        <th class="filter-select filter-onlyAvail" data-id="carting">
                                            Carting
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="13" class="ts-pager">
                                <div class="row justify-content-end">
                                    <div class="col-4">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label class="mx-2">Rate</label>
                                                <input class="form-control-sm pl-1"  type="number" placeholder="Rate">
                                            </div>
                                            <div class="form-group pl-2">
                                                <label class="mx-2">GST</label>
                                                <select class="form-control-sm">
                                                    <option>5%</option>
                                                    <option>5%</option>
                                                </select>
                                            </div>
                                            <div class="form-group pl-2">
                                                <button class="btn btn-danger btn-sm">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $sum = 0;
                                    $sum_roy = 0;
                                    foreach ($sales as $s) {
                                        $sum += $s->net_weight;
                                        $sum_roy += ($s->royalty_id != 0) ? $s->royalty_tone : 0;
                                        ?>
                                        <tr <?= ($s->status == 1) ? 'class="table-danger"' : "" ?>>
                                            <td><?= $s->id; ?></td>
                                            <td><?= $s->date; ?></td>
                                            <td><?= $s->v_name; ?></td>
                                            <td><?= $s->net_weight; ?></td>
                                            <td><?= $s->m_name; ?></td>
                                            <td><?= $s->p_name; ?></td>
                                            <td><?= $s->py_name; ?></td>
                                            <td><?= ($s->royalty_id != 0) ? $s->ry_name : "NO"; ?></td>
                                            <td><?= $s->royalty_number; ?></td>
                                            <td><?= $s->rate; ?></td>
                                            <td><?= $s->gst; ?></td>
                                            <td><?= ($s->net_weight * $s->rate) ?></td>
                                            <td><?= ($s->carting_id == 1) ? "SELF" : "CARTING"; ?></td>

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
    $(document).on("click", "#setDate", function () {
        var fromDate = $("#from_date").val();
        var toDate = $("#to_date").val();
        if (fromDate != "" && toDate != "")
            location.href = "<?= base_url("sales/rate") ?>?from=" + fromDate + "&to=" + toDate;
    });
    $(function () {
        var $table = $("#myTable").tablesorter({
            theme: "bootstrap",
            widthFixed: false,
            widgets: ["zebra", "columns", "filter", 'resizable'],
            widgetOptions: {
                math_data: 'math',
                resizable_addLastColumn: true,
                resizable_widths: ['100px', '100px', '150px', '200px', '100px', '100px', '100px', '120px'],
                zebra: ["even", "odd"],
                columns: ["primary", "secondary", "tertiary"],
                filter_searchFiltered: false,
                filter_cssFilter: "form-control custom-select",
            },
            initialized: function () {
                $('tr[class="tablesorter-headerRow"]').find("td").each(function(){
                   var data=$(this).attr("data-column"); 
                   var data=$('tr[role="search"]').find("td[data-column='"+data+"']"); 
                });
            }
        });

    });

</script>