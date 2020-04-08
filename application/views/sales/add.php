<?php
$formId = array(
    'type' => 'text',
    'name' => 'id',
    'id' => "ids",
    'class' => 'form-control',
    "placeholder" => "Search for...",
    'value' => isset($id) ? $id : "",
);
$formDate = array(
    'type' => 'date',
    'name' => 'date',
    'id' => "date",
    'class' => 'form-control',
    "placeholder" => "Enter date",
    'value' => isset($date) ? $date : date("Y-m-d"),
);

$formTransporter_no = array(
    'type' => 'text',
    'name' => 'transporter_no',
    'id' => 'transporter_no',
    'class' => 'form-control',
    "placeholder" => "Enter Vehicle Name",
    'readonly' => 'readonly',
    'value' => isset($transporter_no) ? $transporter_no : "",
);
$formTareweight_no = array(
    'type' => 'text',
    'name' => 'tareweight_no',
    'id' => 'tareweight_no',
    'class' => 'form-control',
    "placeholder" => "Enter Vehicle Tare Weight",
    'readonly' => 'readonly',
    'value' => isset($formTareweight_no) ? $id : "",
);
$formNetweight_no = array(
    'type' => 'text',
    'name' => 'netweight_no',
    'id' => 'netweight_no',
    'class' => 'form-control',
    "placeholder" => "Enter net weight",
    'readonly' => 'readonly',
    'value' => isset($formNetweight_no) ? $id : "",
);
$formNote = array(
    'type' => 'text',
    'name' => 'note',
    'id' => 'note',
    'class' => 'form-control',
    "placeholder" => "Enter Note ",
    'value' => isset($formNote) ? $id : "",
);
$formRoyalty_no = array(
    'type' => 'text',
    'name' => 'royalty_no',
    'id' => 'royalty_no',
    'class' => 'form-control',
    "placeholder" => "Enter Royalty Number",
    'value' => isset($formRoyalty_no) ? $id : "",
);
$formRoyalty_tone = array(
    'type' => 'text',
    'name' => 'royalty_tone',
    'id' => 'royalty_tone',
    'class' => 'form-control',
    "placeholder" => "Enter Royalty Tone",
    'value' => isset($formRoyalty_tone) ? $id : "",
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
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Challan number</label>
                                <?= form_input($formId); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date</label>
                                <?= form_input($formDate); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Vehicle Number</label>
                                <?= form_dropdown("vehicle_id", null, isset($vehicle_id) ? $vehicle_id : null, [ "id" => "vehicle_id"]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Transporter Number</label>
                                <?= form_input($formTransporter_no); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Gross Weight</label>
                                <?= form_dropdown("gross_id", null, isset($gross_id) ? $gross_id : null, ["class" => "selectize"]); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tare Weight</label>
                                <?= form_input($formTareweight_no); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Net Weight</label>
                                <?= form_input($formNetweight_no); ?>
                            </div>
                        </div>
                    </div> <!--row over-->
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Material</label>
                                <?= form_dropdown("material_id", null, isset($material_id) ? $material_id : null, ["class" => "selectize"]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Loading</label>
                                <?= form_dropdown("loading_id", null, isset($loading_id) ? $loading_id : null, ["class" => "selectize"]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Place</label>
                                <?= form_dropdown("place_id", null, isset($place_id) ? $place_id : null, ["class" => "selectize"]); ?>
                            </div>
                        </div>

                    </div><!--row over-->
                    <div class="row ">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Party Name</label>
                                <?= form_dropdown("party_id", null, isset($party_id) ? $party_id : null, ["class" => "selectize"]); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Royalty  Name</label>
                                <?= form_dropdown("royalty_id", $null, isset($royalty_id) ? $royalty_id : null, ["class" => "selectize"]); ?>

                            </div>
                        </div>
                    </div><!--row over-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Royalty number</label>
                                <?= form_input($formRoyalty_no); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Royalty Tone</label>
                                <?= form_input($formRoyalty_tone); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Driver Name</label>
                                <?= form_dropdown("driver_id", null, isset($driver_id) ? $driver_id : null, ["class" => "selectize"]); ?>
                            </div>
                        </div>
                    </div><!--row over-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Carting</label>
                                <?= form_dropdown("carting_id", null, isset($carting_id) ? $carting_id : null, ["class" => "selectize"]); ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Note</label>
                                <?= form_input($formNote); ?>
                            </div>
                        </div>

                    </div><!--row over-->


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