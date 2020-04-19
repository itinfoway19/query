<?php
$formName = array(
    'type' => 'text',
    'name' => 'name',
    'class' => 'form-control',
    'id' => "name",
    "placeholder" => "Enter Name",
    'value' => isset($name) ? $name : "",
);
$formDate = array(
    'type' => 'date',
    'name' => 'dob',
    'id' => "dob",
    'class' => 'form-control',
    "placeholder" => "Enter date",
    'value' => isset($dob) ? $dob : date("Y-m-d"),
);
$formMobile_no = array(
    'type' => 'text',
    'name' => 'mobile_number',
    'data-validation' => "number",
    "data-validation-allowing" => "range[9999999999]",
    'id' => 'mobile_number',
    'class' => 'form-control',
    "placeholder" => "Enter mobile number",
    'value' => isset($mobile_number) ? $mobile_number : "",
);
$formAlternate_no = array(
    'type' => 'text',
    'name' => 'alternate_number',
    'data-validation' => "number",
    "data-validation-allowing" => "range[9999999999]",
    "id" => 'alternate_number',
    'class' => 'form-control',
    "placeholder" => "Enter mobile number",
    'value' => isset($alternate_number) ? $alternate_number : "",
);
$formDesignation = array(
    'type' => 'text',
    'name' => 'designation',
    'id' => 'designation',
    'class' => 'form-control',
    "placeholder" => "Enter designation Name",
    'value' => isset($designation) ? $designation : "",
);
$formPhoto_id = array(
    'type' => 'text',
    'name' => 'photo_id',
    'id' => 'photo_id',
    'class' => 'form-control',
    "placeholder" => "enter photo id number",
    'value' => isset($photo_id) ? $photo_id : "",
);
$formPhoto_id = array(
    'type' => 'text',
    'name' => 'photo_id',
    'id' => 'photo_id',
    'class' => 'form-control',
    "placeholder" => "enter photo id number",
    'value' => isset($photo_id) ? $photo_id : "",
);
$formAddress = array(
    'name' => 'address',
    'id' => 'address',
    'class' => 'form-control',
    "placeholder" => "Enter Address",
    'value' => isset($address) ? $address : "",
    "rows" => 3
);
$formAddress_proof = array(
    'type' => 'text',
    'name' => 'address_proof',
    'id' => 'address_proof',
    'class' => 'form-control',
    "placeholder" => "Enter address proof",
    'value' => isset($address_proof) ? $address_proof : "",
);
$formJoing_date = array(
    'type' => 'date',
    'name' => 'joining_date',
    'id' => "joining_date",
    'class' => 'form-control',
    "placeholder" => "Enter joining_date",
    'value' => isset($joining_date) ? $joining_date : date("Y-m-d"),
);
$formLeaving_date = array(
    'type' => 'date',
    'name' => 'leaving_date',
    'id' => "leaving_date",
    'class' => 'form-control',
    "placeholder" => "Enter leaving_date",
    'value' => isset($leaving_date) ? $leaving_date : date("Y-m-d"),
);
$formInsurance_name = array(
    'type' => 'text',
    'name' => 'insurance_company_name',
    'id' => 'insurance_company_name',
    'class' => 'form-control',
    "placeholder" => "Enter Company Name",
    'value' => isset($insurance_company_name) ? $insurance_company_name : "",
);
$formIssue_date = array(
    'type' => 'date',
    'name' => 'issue_date',
    'id' => "issue_date",
    'class' => 'form-control',
    "placeholder" => "Enter issue_date",
    'value' => isset($issue_date) ? $issue_date : date("Y-m-d"),
);
$formValid = array(
    'type' => 'date',
    'name' => 'valid_upto',
    'id' => "valid_upto",
    'class' => 'form-control',
    "placeholder" => "Enter valid_upto",
    'value' => isset($valid_upto) ? $valid_upto : date("Y-m-d"),
);
$formInsurance_policy = array(
    'type' => 'text',
    'name' => 'insurance_policy_copy',
    'id' => 'insurance_policy_copy',
    'class' => 'form-control',
    "placeholder" => "Enter insurance policy",
    'value' => isset($insurance_policy_copy) ? $insurance_policy_copy : "",
);
$formNominee_name = array(
    'type' => 'text',
    'name' => 'nominee_name',
    'id' => 'nominee_name',
    'class' => 'form-control',
    "placeholder" => "Enter Nominee Name",
    'value' => isset($nominee_name) ? $nominee_name : "",
);
$formNominee_add = array(
    'type' => 'text',
    'name' => 'nominee_address',
    'id' => 'nominee_address',
    'class' => 'form-control',
    "placeholder" => "Enter Address",
    'value' => isset($nominee_address) ? $nominee_address : "",
);
$formNominee_con = array(
    'type' => 'text',
    'name' => 'nominee_contact_number',
    'id' => "nominee_contact_number",
    'class' => 'form-control',
    "placeholder" => "Enter Mobile number",
    'value' => isset($nominee_contact_number) ? $nominee_contact_number : "",
);
$formNominee_date = array(
    'type' => 'date',
    'name' => 'nominee_dob',
    'id' => "nominee_dob",
    'class' => 'form-control',
    "placeholder" => "Enter Birth date",
    'value' => isset($nominee_dob) ? $nominee_dob : date("Y-m-d"),
);
$formNominee_Photo = array(
    'type' => 'text',
    'name' => 'nominee_photo_id',
    'id' => "nominee_photo_id",
    'class' => 'form-control',
    "placeholder" => "Enter photo id number",
    'value' => isset($nominee_photo_id) ? $nominee_photo_id : "",
);
$formNominee_add_proof = array(
    'type' => 'text',
    'name' => 'nominee_address_proof',
    'id' => "nominee_address_proof",
    'class' => 'form-control',
    "placeholder" => "Enter Address ",
    'value' => isset($nominee_address_proof) ? $nominee_address_proof : "",
);
$formInsurance_note = array(
    'type' => 'text',
    'name' => 'insurance_note',
    'id' => 'insurance_note',
    'class' => 'form-control',
    "placeholder" => "Enter Note ",
    'value' => isset($insurance_note) ? $insurance_note : "",
);
$formBank_name = array(
    'type' => 'text',
    'name' => 'bank_name',
    'id' => 'bank_name',
    'class' => 'form-control',
    "placeholder" => "Enter Bank Name",
    'value' => isset($bank_name) ? $bank_name : "",
);
$formBank_acc_no = array(
    'type' => 'text',
    'name' => 'bank_account_number',
    'id' => 'bank_account_number',
    'class' => 'form-control',
    "placeholder" => "Enter Account number",
    'value' => isset($bank_account_number) ? $bank_account_number : "",
);
$formBank_acc_hol_name = array(
    'type' => 'text',
    'name' => 'bank_account_name',
    'id' => 'bank_account_name',
    'class' => 'form-control',
    "placeholder" => "Enter name",
    'value' => isset($bank_account_name) ? $bank_account_name : "",
);
$formBank_acc_ifsc_code = array(
    'type' => 'text',
    'name' => 'bank_ifsc_code',
    'id' => 'bank_ifsc_code',
    'class' => 'form-control',
    "placeholder" => "Enter code",
    'value' => isset($bank_ifsc_code) ? $bank_ifsc_code : "",
);
$formBank_branch_name = array(
    'type' => 'text',
    'name' => 'bank_branch',
    'id' => 'bank_branch',
    'class' => 'form-control',
    "placeholder" => "Enter Branch name",
    'value' => isset($bank_branch) ? $bank_branch : "",
);
$formBank_proof = array(
    'type' => 'text',
    'name' => 'bank_proof',
    'id' => 'bank_proof',
    'class' => 'form-control',
    "placeholder" => "Enter Bank Proof No",
    'value' => isset($bank_proof) ? $bank_proof : "",
);
$formCourt_case_pending = array(
    'type' => 'text',
    'name' => 'court_case_pending',
    'id' => 'court_case_pending',
    'class' => 'form-control',
    "placeholder" => "Enter case detail",
    'value' => isset($court_case_pending) ? $court_case_pending : "",
);
$formCourt_note = array(
    'type' => 'text',
    'name' => 'note',
    'id' => 'note',
    'class' => 'form-control',
    "placeholder" => "Enter Note ",
    'value' => isset($note) ? $note : "",
);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <?= form_open(); ?>
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
                        <div class="col-md-12">
                            <h2>Personal Detail</h2>
                        </div>
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
                                            if (isset($gender) && $gender == '1') {
                                                echo "checked='checked'";
                                            } else {
                                                echo "checked='checked'";
                                            }
                                            ?>  />Male</label>                
                                        <label > <input id="gender" name="gender" type="radio" value="2" <?php if (isset($gender) && $gender == '2') echo "checked='checked'"; ?>  />Female</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Joing Date</label></br>
                                        <?= form_input($formJoing_date); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Leaving Date </label>
                                        <?= form_input($formLeaving_date); ?>
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
                                        <label>Photo Id</label>
                                        <?= form_input($formPhoto_id); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address Proof</label>
                                        <?= form_input($formAddress_proof); ?>
                                    </div>
                                </div>
                            </div> 
                        </div>


                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <h2>Investment Detail</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Insurance</label></br>
                                    <label >  <input id="insurance" name="insurance" type="radio" class="" value="1"<?php
                                        if (isset($insurance) && $insurance == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />Yes</label>                
                                    <label > <input id="insurance" name="insurance" type="radio" value="2" <?php if (isset($insurance) && $insurance == '2') echo "checked='checked'"; ?>  />No</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Insurance Name</label>
                                    <?= form_input($formInsurance_name); ?>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Insurance policy copy</label>
                                    <?= form_input($formInsurance_policy); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nominee</label></br>
                                    <label >  <input id="nominee" name="nominee" type="radio" class="" value="1"<?php
                                        if (isset($nominee) && $nominee == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />Yes</label>                
                                    <label > <input id="nominee" name="nominee" type="radio" value="2" <?php if (isset($nominee) && $nominee == '2') echo "checked='checked'"; ?>  />No</label>                               
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nominee Name</label>
                                    <?= form_input($formNominee_name); ?>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nominee Address</label>
                                    <?= form_input($formNominee_add); ?>                                
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
                                    <label>Nominee Brith Date</label>
                                    <?= form_input($formNominee_date); ?>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nominee Photo ID</label>
                                    <?= form_input($formNominee_Photo); ?>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nominee Address Proof</label>
                                    <?= form_input($formNominee_add_proof); ?>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender</label><br/>
                                    <label >  <input id="nominee_gender" name="nominee_gender" type="radio" class="" value="1"<?php
                                        if (isset($nominee_gender) && $nominee_gender == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />Male</label>                
                                    <label > <input id="nominee_gender" name="nominee_gender" type="radio" value="2" <?php if (isset($nominee_gender) && $nominee_gender == '2') echo "checked='checked'"; ?>  />Female</label>                                
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Insurance Note</label>
                                    <?= form_input($formInsurance_note); ?>                                                                 
                                </div>
                            </div>
                        </div><!--row over-->


                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <h2>Bank Detail</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bank Accoun</label></br>
                                    <label >  <input id="bank_details" name="bank_details" type="radio" class="" value="1"<?php
                                        if (isset($bank_details) && $bank_details == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />Yes</label>                
                                    <label > <input id="bank_details" name="bank_details" type="radio" value="2" <?php if (isset($bank_details) && $bank_details == '2') echo "checked='checked'"; ?>  />No</label>
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
                                    <label>Account Number</label>
                                    <?= form_input($formBank_acc_no); ?>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Account Holder Name</label>
                                    <?= form_input($formBank_acc_hol_name); ?>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ifsc Code</label>
                                    <?= form_input($formBank_acc_ifsc_code); ?>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <?= form_input($formBank_branch_name); ?>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bank Proof</label>
                                    <?= form_input($formBank_proof); ?>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Court Case</label></br>
                                    <label >  <input id="court_case" name="court_case" type="radio" class="" value="1"<?php
                                        if (isset($court_case) && $court_case == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />Yes</label>                
                                    <label > <input id="court_case" name="court_case" type="radio" value="2" <?php if (isset($court_case) && $court_case == '2') echo "checked='checked'"; ?>  />No</label>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Court Case Pending</label>
                                    <?= form_input($formCourt_case_pending); ?>                                
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
                                    <?= form_dropdown("user_id", $user, isset($data->user_id) ? $data->user_id : null, ["class" => "select2", "style" => "width: 100%;", "data-placeholder" => $this->lang->line("blog_cat_plac")]); ?>                                
                                </div>
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
