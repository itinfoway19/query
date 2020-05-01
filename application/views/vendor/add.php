<?php

$formV_code = array(
    'type' => 'text',
    'name' => 'vendor_code',
    'class' => 'form-control',
    'id' => "vendor_code",
    "placeholder" => "Enter code",
    'value' => isset($vendor->vendor_code) ? $vendor->vendor_code : "",
);
$formV_name = array(
    'type' => 'text',
    'name' => 'vendor_name',
    'class' => 'form-control',
    'id' => "vendor_names",
    "placeholder" => "Enter vendor names",
    'value' => isset($vendor->vendor_names) ? $vendor->vendor_names : "",
);
$formPerson = array(
    'type' => 'text',
    'name' => 'contact_person',
    'id' => "contact_person",
    'class' => 'form-control',
    "placeholder" => "Enter name",
    'value' => isset($vendor->contact_person) ? $vendor->contact_person : "",
);
$formMobile_no = array(
    'type' => 'text',
    'name' => 'moblie',
    'data-validation' => "number length",
    'data-validation-length' => "max12",
    'id' => 'moblie',
    'class' => 'form-control',
    "placeholder" => "Enter mobile number",
    'value' => isset($vendor->moblie) ? $vendor->moblie : "",
);
$formTelephone = array(
    'type' => 'text',
    'name' => 'telephone',
    'data-validation' => "number length",
    'data-validation-length' => "max12",
    "id" => 'telephone',
    'class' => 'form-control',
    "placeholder" => "Enter mobile number",
    'value' => isset($vendor->telephone) ? $vendor->telephone : "",
);
$formEmail = array(
    'type' => 'text',
    'name' => 'email_id',
    'id' => 'email_id',
    'class' => 'form-control',
    "placeholder" => "Enter email ",
    'value' => isset($vendor->email_id) ? $vendor->email_id : "",
);
$formWebsite = array(
    'type' => 'text',
    'name' => 'website',
    'id' => 'website',
    'class' => 'form-control',
    "placeholder" => "Enter website Name",
    'value' => isset($vendor->website) ? $vendor->website : "",
);
$formCountry = array(
    'type' => 'text',
    'name' => 'country',
    'id' => 'country',
    'class' => 'form-control',
    "placeholder" => "Enter country Name",
    'value' => isset($vendor->country) ? $vendor->country : "",
);
$formState = array(
    'type' => 'text',
    'name' => 'state',
    'id' => 'state',
    'class' => 'form-control',
    "placeholder" => "Enter state Name",
    'value' => isset($vendor->state) ? $vendor->state : "",
);
$formCity = array(
    'type' => 'text',
    'name' => 'city',
    'id' => 'city',
    'class' => 'form-control',
    "placeholder" => "Enter city Name",
    'value' => isset($vendor->city) ? $vendor->city : "",
);
$formPincode = array(
    'type' => 'text',
    'name' => 'pincode',
    'id' => 'pincode',
    'class' => 'form-control',
    "placeholder" => "Enter pincode Name",
    'value' => isset($vendor->pincode) ? $vendor->pincode : "",
);
$formAddress = array(
    'name' => 'address',
    'id' => 'address',
    'class' => 'form-control',
    "placeholder" => "Enter address",
    'value' => isset($vendor->address) ? $vendor->address : "",
    "rows" => 3
);
$formBank_name = array(
    'type' => 'text',
    'name' => 'bank_name',
    'id' => 'bank_name',
    'class' => 'form-control',
    "placeholder" => "Enter Bank Name",
    'value' => isset($vendor->bank_name) ? $vendor->bank_name : "",
);

$formBank_acc_hol_name = array(
    'type' => 'text',
    'name' => 'account_name',
    'id' => 'account_name',
    'class' => 'form-control',
    "placeholder" => "Enter name",
    'value' => isset($vendor->account_name) ? $vendor->account_name : "",
);
$formBank_acc_no = array(
    'type' => 'text',
    'name' => 'account_number',
    'id' => 'account_number',
    'class' => 'form-control',
    "placeholder" => "Enter Account number",
    'value' => isset($vendor->account_number) ? $vendor->account_number : "",
);
$formBank_acc_ifsc_code = array(
    'type' => 'text',
    'name' => 'ifsc_code',
    'id' => 'ifsc_code',
    'class' => 'form-control',
    "placeholder" => "Enter code",
    'value' => isset($vendor->ifsc_code) ? $vendor->ifsc_code : "",
);
$formBank_branch_name = array(
    'type' => 'text',
    'name' => 'Branch',
    'id' => 'Branch',
    'class' => 'form-control',
    "placeholder" => "Enter Branch name",
    'value' => isset($vendor->Branch) ? $vendor->Branch : "",
);
$formPayment_conditions= array(
    'type' => 'text',
    'name' => 'payment_conditions',
    'id' => 'payment_conditions',
    'class' => 'form-control',
    "placeholder" => "Enter payment",
    'value' => isset($vendor->payment_conditions) ? $vendor->payment_conditions : "",
);	
$formVisiting_card= array(
    'type' => 'text',
    'name' => 'visiting_card',
    'id' => 'visiting_card',
    'class' => 'form-control',
    "placeholder" => "Enter Card number",
    'value' => isset($vendor->visiting_card) ? $vendor->visiting_card : "",
);	

$formCourt_note = array(
    'type' => 'text',
    'name' => 'note',
    'id' => 'note',
    'class' => 'form-control',
    "placeholder" => "Enter Note ",
    'value' => isset($vendor->note) ? $vendor->note : "",
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
                        <div class="col-md-12">
                            <div class="row">
                            	<div class="col-md-4">
                                    <div class="form-group">
                                        <label>Vendor Code</label>
                                        <?= form_input($formV_code); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Vendor Name</label>
                                        <?= form_input($formV_name); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact Person</label>
                                        <?= form_input($formPerson); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <?= form_input($formMobile_no); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <?= form_input($formTelephone); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <?= form_input($formEmail); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Website</label>
                                        <?= form_input($formWebsite); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <?= form_input($formCountry); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <?= form_input($formState); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <?= form_input($formCity); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <?= form_input($formPincode); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label></br>
                                        <?= form_textarea($formAddress); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bank Account</label></br>
                                    <label >  <input  name="bank_details" type="radio" class="" value="1"<?php
                                        if (isset($vendor->bank_details) && $vendor->bank_details == '1') {
                                            echo "checked='checked'";
                                        } else {
                                            echo "checked='checked'";
                                        }
                                        ?>  />NO</label>                 
                                    <label > <input  name="bank_details" type="radio" value="2" <?php if (isset($vendor->bank_details) && $vendor->bank_details == '2') echo "checked='checked'"; ?>  />Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="row bank_details">
                        	<div class="col-md-6">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <?= form_input($formBank_name); ?>                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Holder Name</label>
                                    <?= form_input($formBank_acc_hol_name); ?>                                
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
                                    <label>Ifsc Code</label>
                                    <?= form_input($formBank_acc_ifsc_code); ?>                                
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
                                    <label>Bank Proof</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <?= form_upload("bank_proof", null, ['class' => 'custom-file-input', "data-validation" => "mime size", "data-validation-allowing" => "jpg, png", "data-validation-max-size" => "500kb", "accept" => "image/x-png,image/jpg,image/jpeg", "id" => "upload"]); ?>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Payment Conditions</label>
                                    <?= form_input($formPayment_conditions); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visiting Card</label>
                                    <?= form_input($formVisiting_card); ?>
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
        var bank_details = $("input[name='bank_details']:checked").val();
        console.log(bank_details);
        if (bank_details == 2) {
            $(".bank_details").show();
        } else {
            $(".bank_details").hide();
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
   
</script>
