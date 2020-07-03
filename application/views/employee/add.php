<?php
$formName = array(
    'type' => 'text',
    'name' => 'name',
    'class' => 'form-control',
    'id' => "name",
    "placeholder" => "Enter Name",
    'value' => isset($employee->name) ? $employee->name : "",
);
$formDate = array(
    'type' => 'date',
    'name' => 'dob',
    'id' => "dob",
    'class' => 'form-control',
    "placeholder" => "Enter date",
    'value' => isset($employee->dob) ? $employee->dob : date("Y-m-d"),
);
$formMobile_no = array(
    'type' => 'text',
    'name' => 'mobile_number',
    'data-validation' => "number length",
    'data-validation-length' => "max12",
    'id' => 'mobile_number',
    'class' => 'form-control',
    "placeholder" => "Enter mobile number",
    'value' => isset($employee->mobile_number) ? $employee->mobile_number : "",
);
$formAlternate_no = array(
    'type' => 'text',
    'name' => 'alternate_number',
    'data-validation' => "number length",
    'data-validation-length' => "max12",
    "id" => 'alternate_number',
    'class' => 'form-control',
    "placeholder" => "Enter mobile number",
    'value' => isset($employee->alternate_number) ? $employee->alternate_number : "",
);
$formDesignation = array(
    'type' => 'text',
    'name' => 'designation',
    'id' => 'designation',
    'class' => 'form-control',
    "placeholder" => "Enter designation Name",
    'value' => isset($employee->designation) ? $employee->designation : "",
);

$formAddress = array(
    'name' => 'address',
    'id' => 'address',
    'class' => 'form-control',
    "placeholder" => "Enter Address",
    'value' => isset($employee->address) ? $employee->address : "",
    "rows" => 3
);

$formJoing_date = array(
    'type' => 'date',
    'name' => 'joining_date',
    'id' => "joining_date",
    'class' => 'form-control',
    "placeholder" => "Enter joining_date",
    'value' => isset($employee->joining_date) ? $employee->joining_date : date("Y-m-d"),
);
$formLeaving_date = array(
    'type' => 'date',
    'name' => 'leaving_date',
    'id' => "leaving_date",
    'class' => 'form-control',
    "placeholder" => "Enter leaving_date",
    'value' => isset($employee->leaving_date) ? $employee->leaving_date : date("Y-m-d"),
);
$formInsurance_name = array(
    'type' => 'text',
    'name' => 'insurance_company_name',
    'id' => 'insurance_company_name',
    'class' => 'form-control',
    "placeholder" => "Enter Company Name",
    'value' => isset($employee->insurance_company_name) ? $employee->insurance_company_name : "",
);
$formIssue_date = array(
    'type' => 'date',
    'name' => 'issue_date',
    'id' => "issue_date",
    'class' => 'form-control',
    "placeholder" => "Enter issue_date",
    'value' => isset($employee->issue_date) ? $employee->issue_date : date("Y-m-d"),
);
$formValid = array(
    'type' => 'date',
    'name' => 'valid_upto',
    'id' => "valid_upto",
    'class' => 'form-control',
    "placeholder" => "Enter valid_upto",
    'value' => isset($employee->valid_upto) ? $employee->valid_upto : date("Y-m-d"),
);

$formNominee_name = array(
    'type' => 'text',
    'name' => 'nominee_name',
    'id' => 'nominee_name',
    'class' => 'form-control',
    "placeholder" => "Enter Nominee Name",
    'value' => isset($employee->nominee_name) ? $employee->nominee_name : "",
);
$formNominee_add = array(
    "rows" => 4,
    'name' => 'nominee_address',
    'id' => 'nominee_address',
    'class' => 'form-control',
    "placeholder" => "Enter Address",
    'value' => isset($employee->nominee_address) ? $employee->nominee_address : "",
);
$formNominee_con = array(
    'type' => 'text',
    'name' => 'nominee_contact_number',
    'id' => "nominee_contact_number",
    'class' => 'form-control',
    "placeholder" => "Enter Mobile number",
    'value' => isset($employee->nominee_contact_number) ? $employee->nominee_contact_number : "",
);
$formNominee_date = array(
    'type' => 'date',
    'name' => 'nominee_dob',
    'id' => "nominee_dob",
    'class' => 'form-control',
    "placeholder" => "Enter Birth date",
    'value' => isset($employee->nominee_dob) ? $employee->nominee_dob : date("Y-m-d"),
);
$formInsurance_note = array(
    'type' => 'text',
    'name' => 'insurance_note',
    'id' => 'insurance_note',
    'class' => 'form-control',
    "placeholder" => "Enter Note ",
    'value' => isset($employee->insurance_note) ? $employee->insurance_note : "",
);
$formBank_name = array(
    'type' => 'text',
    'name' => 'bank_name',
    'id' => 'bank_name',
    'class' => 'form-control',
    "placeholder" => "Enter Bank Name",
    'value' => isset($employee->bank_name) ? $employee->bank_name : "",
);
$formBank_acc_no = array(
    'type' => 'text',
    'name' => 'bank_account_number',
    'id' => 'bank_account_number',
    'class' => 'form-control',
    "placeholder" => "Enter Account number",
    'value' => isset($employee->bank_account_number) ? $employee->bank_account_number : "",
);
$formBank_acc_hol_name = array(
    'type' => 'text',
    'name' => 'bank_account_name',
    'id' => 'bank_account_name',
    'class' => 'form-control',
    "placeholder" => "Enter name",
    'value' => isset($employee->bank_account_name) ? $employee->bank_account_name : "",
);
$formBank_acc_ifsc_code = array(
    'type' => 'text',
    'name' => 'bank_ifsc_code',
    'id' => 'bank_ifsc_code',
    'class' => 'form-control',
    "placeholder" => "Enter code",
    'value' => isset($employee->bank_ifsc_code) ? $employee->bank_ifsc_code : "",
);
$formBank_branch_name = array(
    'type' => 'text',
    'name' => 'bank_branch',
    'id' => 'bank_branch',
    'class' => 'form-control',
    "placeholder" => "Enter Branch name",
    'value' => isset($employee->bank_branch) ? $employee->bank_branch : "",
);

$formCourt_case_pending = array(
    'type' => 'text',
    'name' => 'court_case_pending',
    'id' => 'court_case_pending',
    'class' => 'form-control',
    "placeholder" => "Enter case detail",
    'value' => isset($employee->court_case_pending) ? $employee->court_case_pending : "",
);
$formCourt_note = array(
    'type' => 'text',
    'name' => 'note',
    'id' => 'note',
    'class' => 'form-control',
    "placeholder" => "Enter Note ",
    'value' => isset($employee->note) ? $employee->note : "",
);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <?= form_open_multipart(); ?>
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
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <?= form_input($formName); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        <?= form_input($formDate); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <?= form_input($formMobile_no); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile Number1</label>
                                        <?= form_input($formAlternate_no); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <?= form_input($formDesignation); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label></br>
                                        <?= form_textarea($formAddress); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Gender</label></br>
                                        <label >  <input id="gender" name="gender" type="radio" class="" value="1"<?php
                                            if (isset($employee->gender) && $employee->gender == '1') {
                                                echo "checked='checked'";
                                            } else {
                                                echo "checked='checked'";
                                            }
                                            ?>  />Male</label>                
                                        <label > <input id="gender" name="gender" type="radio" value="2" <?php if (isset($employee->gender) && $employee->gender == '2') echo "checked='checked'"; ?>  />Female</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <?= form_upload("img", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>photo id</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <?= form_upload("photo_id", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address Proof</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <?= form_upload("address_proof", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Joing Date</label></br>
                                        <?= form_input($formJoing_date); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Leaving Date </label>
                                        <?= form_input($formLeaving_date); ?>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>INSURANCE Detail</label></br>
                                    <label >  <input name="insurance" type="radio" class="" value="1"<?php
                                        if (isset($employee->insurance) && $employee->insurance == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />NO</label>                
                                    <label > <input name="insurance" type="radio" value="2" <?php if (isset($employee->insurance) && $employee->insurance == '2') echo "checked='checked'"; ?>  />Yes</label>
                                </div>
                            </div>
                            <div class="col-md-12 insurance" >
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Insurance Name</label>
                                            <?= form_input($formInsurance_name); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Insurance policy copy</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <?= form_upload("insurance_policy_copy", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Issue Date</label>
                                            <?= form_input($formIssue_date); ?>                                
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Valid Date</label>
                                            <?= form_input($formValid); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="callout callout-warning">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nominee</label></br>
                                                <label >  <input id="nominee" name="nominee" type="radio" class="" value="1"<?php
                                                    if (isset($employee->nominee) && $employee->nominee == '1') {
                                                        echo "checked='checked'";
                                                    } else {
                                                        echo "checked='checked'";
                                                    }
                                                    ?>  />No</label>                
                                                <label > <input id="nominee" name="nominee" type="radio" value="2" <?php if (isset($employee->nominee) && $employee->nominee == '2') echo "checked='checked'"; ?>  />Yes</label>                               
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nominee row" >
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nominee Name</label>
                                                        <?= form_input($formNominee_name); ?>                                
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nominee Mobile number</label>
                                                        <?= form_input($formNominee_con); ?>                                
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nominee Photo ID</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <?= form_upload("nominee_photo_id", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nominee Address</label>
                                                        <?= form_textarea($formNominee_add); ?>                                
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nominee Brith Date</label>
                                                        <?= form_input($formNominee_date); ?>                                
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label><br/>
                                                        <label >  <input id="nominee_gender" name="nominee_gender" type="radio" class="" value="1"<?php
                                                            if (isset($employee->nominee_gender) && $employee->nominee_gender == '1') {
                                                                echo "checked='checked'";
                                                            } else {
                                                                echo "checked='checked'";
                                                            }
                                                            ?>  />Male</label>                
                                                        <label > <input id="nominee_gender" name="nominee_gender" type="radio" value="2" <?php if (isset($employee->nominee_gender) && $employee->nominee_gender == '2') echo "checked='checked'"; ?>  />Female</label>                                
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nominee Address Proof</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <?= form_upload("nominee_address_proof", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Insurance Note</label>
                                                        <?= form_input($formInsurance_note); ?>                                                                 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--row over-->
                        </div>
                    </div>
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bank Accoun</label></br>
                                    <label >  <input  name="bank_details" type="radio" class="" value="1"<?php
                                        if (isset($employee->bank_details) && $employee->bank_details == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />NO</label>                 
                                    <label > <input  name="bank_details" type="radio" value="2" <?php if (isset($employee->bank_details) && $employee->bank_details == '2') echo "checked='checked'"; ?>  />Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="row bank_details">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <?= form_input($formBank_acc_no); ?>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ifsc Code</label>
                                    <?= form_input($formBank_acc_ifsc_code); ?>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Account Holder Name</label>
                                    <?= form_input($formBank_acc_hol_name); ?>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <?= form_input($formBank_branch_name); ?>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <?= form_input($formBank_name); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bank Proof</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <?= form_upload("bank_proof", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Court Case</label></br>
                                    <label >  <input name="court_case" type="radio" class="" value="1"<?php
                                        if (isset($employee->court_case) && $employee->court_case == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />No</label>                
                                    <label > <input name="court_case" type="radio" value="2" <?php if (isset($employee->court_case) && $employee->court_case == '2') echo "checked='checked'"; ?>  />Yes</label>                                
                                </div>
                            </div>
                        </div>
                        <div class="row court_case">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Court Case Pending</label>
                                    <?= form_input($formCourt_case_pending); ?>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Note</label>
                            <?= form_input($formCourt_note); ?>                                
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> User id</label>
                            <?= form_dropdown("user_id", $user, isset($data->user_id) ? $data->user_id : null, ["id" => "user_id", "class" => "select2", "style" => "width: 100%;", "data-placeholder" => $this->lang->line("blog_cat_plac")]); ?>                                
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- /.card-footer-->
                <?= form_close(); ?>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
<div class="antique-details-container"></div>
<script src="<?= base_url("assert/") ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    setupValidation();

    function setupValidation() {
        $.validate({
            lang: 'en',
            modules: 'file',
            onSuccess: function ($form) {
                $('input[type="submit"]').prop('disabled', true);
            },
        });
    }
    $(document).ready(function () {
        bsCustomFileInput.init();
        var $select = $('#user_id').selectize({
            placeholder: 'Select User',
        });
        var ins = $("input[name='insurance']:checked").val();
        if (ins == 2) {
            $(".insurance").show();
        } else {
            $(".insurance").hide();
        }
        var bank_details = $("input[name='bank_details']:checked").val();
        console.log(bank_details);
        if (bank_details == 2) {
            $(".bank_details").show();
        } else {
            $(".bank_details").hide();
        }
        var nominee = $("input[name='nominee']:checked").val();
        if (nominee == 2) {
            $(".nominee").show();
        } else {
            $(".nominee").hide();
        }
        var court_case = $("input[name='court_case']:checked").val();
        if (court_case == 2) {
            $(".court_case").show();
        } else {
            $(".court_case").hide();
        }
    });
    $(document).on("click", "input[name='insurance']", function () {
        var t = $(this).val();
        if (t == 2) {
            $(".insurance").show();
        } else {
            $(".insurance").hide();
        }
    });
    $(".nominee").hide();
    $(document).on("click", "input[name='nominee']", function () {
        var t = $(this).val();
        if (t == 2) {
            $(".nominee").show();
        } else {
            $(".nominee").hide();
        }
    });
    $(".bank_details").hide();
    $(document).on("click", "input[name='bank_details']", function () {
        var t = $(this).val();
        if (t == 2) {
            $(".bank_details").show();
        } else {
            $(".bank_details").hide();
        }
    });
    $(".court_case").hide();
    $(document).on("click", "input[name='court_case']", function () {
        var t = $(this).val();
        if (t == 2) {
            $(".court_case").show();
        } else {
            $(".court_case").hide();
        }
    });
</script>
