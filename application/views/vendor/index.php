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
                    <h3 class="card-title">Index</h3>

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
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-striped table-sm" id="myTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="filter-select filter-onlyAvail">
                                            Vendor Code
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Vendor Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Contact Person
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Mobile Number
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Telephone
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Email 
                                        </th>                                                                                </th>
                                        <th class="filter-false">
                                           Website
                                        </th>
                                        <th class="filter-false">
                                           Country
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            State
                                        </th>
                                        <th class="filter-false">
                                            City
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Pincode
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Address
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Bank Account 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Bank Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Holder Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Account Number
                                        </th>
                                        <th class="filter-false">
                                            Ifsc Code 
                                        </th>
                                        <th class="filter-false">
                                            Branch Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Bank Proof
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Payment Conditions
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Visiting Card 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Note 
                                        </th>  
                                        <th class="filter-false">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="38" class="ts-pager">
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
                                   foreach ($vendor as $v) {
                                       
                                    ?>
                                        <tr>
                                            <td><?= $v->vendor_code; ?></td>
                                            <td><?= $v->vendor_name; ?></td>
                                            <td><?= $v->contact_person; ?></td>
                                            <td><?= $v->moblie; ?></td>
                                            <td><?= $v->telephone; ?></td>
                                            <td><?= $v->email_id; ?></td>
                                            <td><?= $v->website; ?></td>
                                           <td><?= $v->country; ?></td>
                                            <td><?= $v->state; ?></td>
                                             <td><?= $v->city; ?></td>
                                            <td><?= $v->pincode; ?></td>
                                            <td><?= $v->address; ?></td>
                                           <td><?= ($v->bank_details == 2) ? "Yes" : "No"; ?></td>
                                            <td><?= $v->bank_name; ?></td>
                                            <td><?= $v->account_name; ?></td>
                                            <td><?= $v->account_number; ?></td>                                            
                                            <td><?= $v->ifsc_code; ?></td>
                                            <td><?= $v->branch; ?></td>
                                            <td>
                                            <?=!empty($v->bank_proof)?'<a href="'.  base_url("assert/image/".$v->bank_proof).'" target="_blank" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>':""; ?>
                                            </td>
                                            <td><?= $v->payment_conditions; ?></td>
                                             <td><?= $v->visiting_card; ?></td>
                                            <td><?= $v->note; ?></td>
                                           
                                           <td>
                                                <a class="btn btn-success btn-sm " href="<?= base_url("vendor/edit/".$v->id) ?>">edit</a>
                                                <!--<a class="btn btn-danger btn-sm "  href="<?= base_url("vendor/delete/") ?>">Delete</a>-->
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
    $(function() {
        var $table = $("#myTable").tablesorter({
            theme: "bootstrap",
            widthFixed: false,
            widgets: ["zebra", "columns", "filter", 'resizable'],
            widgetOptions: {
                math_data: 'math',
                resizable_addLastColumn: true,
                resizable_widths: ['100px', '100px', '150px', '200px','100px','100px','100px','120px','100px','200px','100px','100px','120px','130px',],
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