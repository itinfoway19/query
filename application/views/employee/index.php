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
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-striped table-sm" id="myTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="filter-select filter-onlyAvail">
                                            Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Birth Date
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Gender
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Mobile Number
                                        </th>
                                        <th>
                                            Mobile Number 1
                                        </th>
                                        <th>
                                           Designation 
                                        </th>                                                                                </th>
                                        <th>
                                           Image
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Photo Id
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Address
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Address Proof
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Joing Date
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Leaving Date
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Insurance 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Insurance  Company Name
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Issue Date
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Valid Date
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Insurance policy copy 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Nominee 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Nominee Name 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Nominee Address 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Nominee Contact Number 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Nominee Brith Date
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Nominee Photo ID 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Nominee Address Proof 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Gender 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Insurance Note 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Bank Account
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Bank Name 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Account Number 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Account Holder Name 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Ifsc Code 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            Branch Name
                                        </th>

                                        <th class="filter-select filter-onlyAvail">
                                           Bank Proof
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Court Case 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Court Case Pending 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                           Note 
                                        </th>
                                        <th class="filter-select filter-onlyAvail">
                                            User id
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
                                                <select class="form-control-sm custom-select px-4 mx-1 pagenum" title="Select page number"></select>
                                            </div>
                                        </th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                   foreach ($employee as $e) {
                                       
                                    ?>
                                        <tr>
                                            <td><?= $e->name; ?></td>
                                            <td><?= $e->dob; ?></td>
                                            <td><?= ($e->gender == 1) ? "Male" : "Female"; ?></td>
                                            <td><?= $e->mobile_number; ?></td>
                                            <td><?= $e->alternate_number; ?></td>
                                            <td><?= $e->designation; ?></td>
                                            <td><?= $e->img; ?></td>
                                            <td><?= $e->photo_id; ?></td>
                                            <td><?= $e->address; ?></td>
                                            <td><?= $e->address_proof; ?></td>
                                            <td><?= $e->joining_date; ?></td>
                                           <td><?= $e->leaving_date; ?></td>
                                            <td><?= ($e->insurance == 1) ? "Yes" : "No"; ?></td>
                                            <td><?= $e->insurance_company_name; ?></td>
                                             <td><?= $e->issue_date; ?></td>
                                            <td><?= $e->valid_upto; ?></td>
                                            <td><?= $e->insurance_policy_copy; ?></td>
                                            <td><?= $e->nominee; ?></td>
                                            <td><?= $e->nominee_name; ?></td>
                                            <td><?= $e->nominee_address; ?></td>
                                            <td><?= $e->nominee_contact_number; ?></td>
                                            <td><?= $e->nominee_dob; ?></td>
                                            <td><?= $e->nominee_photo_id; ?></td>
                                            <td><?= $e->nominee_address_proof; ?></td>
                                            <td><?= ($e->nominee_gender == 1) ? "Male" : "Female"; ?></td>
                                            <td><?= $e->insurance_note; ?></td><td><?= ($e->insurance == 1) ? "Yes" : "No"; ?></td>
                                            <td><?= ($e->bank_details == 1) ? "Yes" : "No"; ?></td>
                                            <td><?= $e->bank_account_number; ?></td>
                                            <td><?= $e->bank_account_name; ?></td>
                                            <td><?= $e->bank_ifsc_code; ?></td>
                                            <td><?= $e->bank_branch; ?></td>
                                            <td><?= $e->bank_proof; ?></td>
                                            <td><?= ($e->court_case == 1) ? "Yes" : "No"; ?></td>
                                            <td><?= $e->court_case_pending; ?></td>
                                            <td><?= $e->note; ?></td>
                                            <td><?= $e->user_id; ?></td>
                                           <td>
                                                <a class="btn btn-success btn-sm " href="<?= base_url("employee/edit/") ?>">edit</a>
                                                <a class="btn btn-danger btn-sm "  href="<?= base_url("employee/delete/") ?>">Delete</a>
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