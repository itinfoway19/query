<?php
$formId = array(
    'type' => 'text',
    'class' => 'form-control',
    'id' => "ids",
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
    'name' => 'transporter_name',
    'id' => 'transporter_name',
    'class' => 'form-control',
    "placeholder" => "Enter Transporter Name",
    'readonly' => 'readonly',
    'value' => isset($transporter_name) ? $transporter_name : "",
);
$formGross_no = array(
    'type' => 'text',
    'name' => 'gross_weight',
    'data-validation' => "number",
    "data-validation-allowing" => "range[999;99999]",
    "id" => 'gross_weight',
    'class' => 'form-control',
    "placeholder" => "Enter Gross weight",
    'value' => isset($gross_weight) ? $gross_weight : "",
);
$formTareweight_no = array(
    'type' => 'text',
    'name' => 'tare_weight',
    'id' => 'tare_weight',
    'class' => 'form-control',
    "placeholder" => "Enter Vehicle Tare Weight",
    'readonly' => 'readonly',
    'value' => isset($tare_weight) ? $tare_weight : "",
);
$formNetweight_no = array(
    'type' => 'text',
    'name' => 'net_weight',
    'id' => 'net_weight',
    'class' => 'form-control',
    "placeholder" => "Net Weight",
    'readonly' => 'readonly',
    'value' => isset($net_weight) ? $net_weight : "",
);

$carting = array(
    '1' => 'SELF',
    '2' => 'CARTING',
);
$formNote = array(
    'type' => 'text',
    'name' => 'note',
    'id' => 'note',
    'class' => 'form-control',
    "placeholder" => "Enter note ",
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
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?=base_url("purchase")?>">View</a>
                            </li>
                        </ul>
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
                                <label>Transporter Name</label>
                                <?= form_input($formTransporter_no); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Gross Weight</label>
                                <?= form_input($formGross_no); ?>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Material</label>
                                <?= form_dropdown("material_id", null, isset($material_id) ? $material_id : null, [ "id" => "material_id"]); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quarry Name</label>
                                <?= form_dropdown("quarryname_id", null, isset($quarryname_id) ? $quarryname_id : null, [ "id" => "quarryname_id"]); ?>
                            </div>
                        </div>
                    </div><!--row over-->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Receiver Name</label>
                                <?= form_dropdown("receiver_id", null, isset($receiver_id) ? $receiver_id : null, [ "id" => "receiver_id"]); ?>
                            </div>
                        </div>
                    </div><!--row over-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Driver Name</label>
                                <?= form_dropdown("driver_id", null, isset($driver_id) ? $driver_id : null, [ "id" => "driver_id"]); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Carting</label>
                                <?= form_dropdown("carting_id", $carting, isset($carting_id) ? $carting_id : null, ["class" => "selectize", "id" => "carting_id"]); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Note</label>
                                <?= form_input($formNote); ?>
                            </div>
                        </div>

                    </div> <!--row over-->

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

<script>
    var fLocation = "";
    var uniquename = "";
    var vehicleArray = [];
    var vehicleSelectize;
    var materialSelectize;
    var quarrynameSelectize;
    var receiverSelectize;
    var driverSelectize;
    function setupValidation() {
        $.validate({
            lang: 'en',
            modules: 'file',
            onSuccess: function ($form) {
                $('input[type="submit"]').prop('disabled', true);
            },
        });
    }
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2)
            return parts.pop().split(";").shift();
    }
    function vehicle() {
        return $.ajax({
            url: '<?= base_url("vehicle/json"); ?>',
            type: 'POST',
            data: {'group_type': '0', '<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
            dataType: 'json',
            success: function (res) {
                res = res.data;
                if (res.length != 0) {
                    var material_id = <?= isset($material_id) ? $material_id : "''"; ?>;
                    $("#vehicle_id").html("");
                    $("#vehicle_id").append("<option></option>");
                    for (var i = 0; i < res.length; i++) {
                        vehicleArray[res[i]["id"]] = {vehicle_name: res[i]["vehicle_name"], vehicle_tare_weight: res[i]["vehicle_tare_weight"]};
                        $("#vehicle_id").append("<option value='" + res[i]["id"] + "' " + ((res[i]["id"] == material_id) ? "selected" : "") + ">" + res[i]["name"] + "</option>")
                    }
                    var $select = $('#vehicle_id').selectize({
                        placeholder: 'Select vehicle',
                    });
                    var vehicleSelectize = $select[0].selectize;
                } else {
                    window.location = "<?= base_url("vehicle/add") ?>";
                }
                $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));

            }
        });

    }
    function material() {
        return $.ajax({
            url: '<?= base_url("master/json/material/1/?select=name,id"); ?>',
            type: 'POST',
            data: {'group_type': '0', '<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
            dataType: 'json',
            success: function (res) {
                res = res.data;
                if (res.length != 0) {
                    var material_id = <?= isset($material_id) ? $material_id : "''"; ?>;
                    $("#material_id").html("");
                    for (var i = 0; i < res.length; i++) {
                        $("#material_id").append("<option value='" + res[i]["id"] + "' " + ((res[i]["id"] == material_id) ? "selected" : "") + ">" + res[i]["name"] + "</option>")
                    }
                    var $select = $('#material_id').selectize();
                    var materialSelectize = $select[0].selectize;
                } else {
                    window.location = "<?= base_url("master/add/material/1") ?>";
                }
                $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
            }
        });
    }
    function quarryname() {
        return $.ajax({
            url: '<?= base_url("master/json/quarryname/1/?select=name,id"); ?>',
            type: 'POST',
            data: {'group_type': '0', '<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
            dataType: 'json',
            success: function (res) {
                res = res.data;
                if (res.length != 0) {
                    var quarryname_id = <?= isset($quarryname_id) ? $quarryname_id : "''"; ?>;
                    $("#quarryname_id").html("");
                    for (var i = 0; i < res.length; i++) {
                        $("#quarryname_id").append("<option value='" + res[i]["id"] + "' " + ((res[i]["id"] == quarryname_id) ? "selected" : "") + ">" + res[i]["name"] + "</option>")
                    }
                    var $select = $('#quarryname_id').selectize();
                    var quarrynameSelectize = $select[0].selectize;
                } else {
                    window.location = "<?= base_url("master/add/quarryname/1") ?>";
                }
                $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
            }
        });
    }
    function receiver() {
        return $.ajax({
            url: '<?= base_url("master/json/receiver/1/?select=name,id"); ?>',
            type: 'POST',
            data: {'group_type': '0', '<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
            dataType: 'json',
            success: function (res) {
                res = res.data;
                if (res.length != 0) {
                    var receiver_id = <?= isset($receiver_id) ? $receiver_id : "''"; ?>;
                    $("#receiver_id").html("");
                    for (var i = 0; i < res.length; i++) {
                        $("#receiver_id").append("<option value='" + res[i]["id"] + "' " + ((res[i]["id"] == receiver_id) ? "selected" : "") + ">" + res[i]["name"] + "</option>")
                    }
                    var $select = $('#receiver_id').selectize();
                    var receiverSelectize = $select[0].selectize;
                } else {
                    window.location = "<?= base_url("master/add/receiver/1") ?>";
                }
                $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
            }
        });
    }
    function driver() {
        return  $.ajax({
            url: '<?= base_url("master/json/driver/1/?select=name,id"); ?>',
            type: 'POST',
            data: {'group_type': '0', '<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
            dataType: 'json',
            success: function (res) {
                res = res.data;
                if (res.length != 0) {
                    var driver_id = <?= isset($driver_id) ? $driver_id : "''"; ?>;
                    $("#driver_id").html("");
                    for (var i = 0; i < res.length; i++) {
                        $("#driver_id").append("<option value='" + res[i]["id"] + "' " + ((res[i]["id"] == driver_id) ? "selected" : "") + ">" + res[i]["name"] + "</option>")
                    }
                    var $select = $('#driver_id').selectize();
                    var driverSelectize = $select[0].selectize;
                } else {
                    window.location = "<?= base_url("master/add/driver/1") ?>";
                }
                $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
            }
        });
    }
    function sum() {
        var gross_weight = parseInt($("#gross_weight").val());
        var tare_weight = parseInt($("#tare_weight").val());
        if (!isNaN(gross_weight) && !isNaN(tare_weight)) {
            $("#net_weight").val(gross_weight - tare_weight);
        }
    }
    $(document).on("keyup", "#gross_weight", function () {
        sum();
    });
    $(document).on("change", "#vehicle_id", function () {
        var id = $(this).val();
        $("#transporter_name").val(vehicleArray[id].vehicle_name);
        $("#tare_weight").val(vehicleArray[id].vehicle_tare_weight);
        sum();
    });
    $(document).ready(function () {
        vehicle();
        material();
        quarryname();
        receiver();
        driver();
    });

    var displayingPopup = false;
    $(document).on("keyup", "input[type='select-one']", function (eve) {
        if (eve.which == 45) {
            if (displayingPopup)
                return;
            displayingPopup = true;
            focused = $(':focus').attr('id');
            fLocation = focused.slice(0, -14);
            if (fLocation == "material" || fLocation == "quarryname" || fLocation == "receiver" || fLocation == "driver") {
                $('.antique-details-container').load("<?= base_url("master/model/"); ?>" + fLocation + "/" + 1, null,
                        function () {
                            $('#myModal').modal().show()
                                    .one('hidden.bs.modal', function () {
                                        displayingPopup = false
                                    })
                            setupValidation();
                        }
                );
            }
            if (fLocation == "vehicle") {
                $('.antique-details-container').load("<?= base_url("vehicle/model"); ?>", null,
                        function () {
                            $('#myModal').modal().show()
                                    .one('hidden.bs.modal', function () {
                                        displayingPopup = false
                                    })
                            setupValidation();
                        }
                );
            }
        }
    });

    $(document).on("change", "#ids", function (e) {

    });
    $(document).on("submit", "#saveInput_tag", function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var url = $(this).attr("action");
        var allSelAjaxKey;
        $.ajax({
            type: 'POST',
            data: formData,
            url: url,
            success: function (data) {
                if (data["data"]) {
                    $('#myModal').modal('hide');
                } else {
                    $('#myModal').modal('hide');
                }
                var refreshSelID = fLocation + "_id";
                $('#' + refreshSelID).removeClass("form-control");
                $('#' + refreshSelID).selectize()[0].selectize.destroy();
                $('#' + refreshSelID).empty();
                if (fLocation == "material") {
                    allSelAjaxKey = material();
                } else if (fLocation == "quarryname") {
                    allSelAjaxKey = quarryname();
                } else if (fLocation == "receiver") {
                    allSelAjaxKey = receiver();
                } else if (fLocation == "driver") {
                    allSelAjaxKey = driver();
                } else if (fLocation == "vehicle") {
                    allSelAjaxKey = vehicle();
                }
                $.when(allSelAjaxKey).done(function () {
                    $('#' + refreshSelID).selectize()[0].selectize.focus();
                });
            }
        });
    });
</script>