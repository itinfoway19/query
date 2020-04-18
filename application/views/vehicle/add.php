<?php
$formName = array(
    'type' => 'text',
    'name' => 'name',
    'class' => 'form-control',
    "data-validation" => "length,unique",
    "data-validation-length" => "1-100",
    "data-inputmask" => "'mask': ['a{2}-9{2}-a{1,2}-9{4}']",
    "data-mask" => "",
    "value"=>  isset($name)?$name:"",
    "placeholder" => "Enter Vehicle Number",
);
$formVehicleName = array(
    'type' => 'text',
    'name' => 'vehicle_name',
    'class' => 'form-control',
    "value"=>  isset($vehicle_name)?$vehicle_name:"",
    "placeholder" => "Enter Vehicle Name",
);
$formWeight = array(
    'type' => 'text',
    'name' => 'vehicle_tare_weight',
    'data-validation' => 'number',
    'class' => 'form-control',
    "value"=>  isset($vehicle_tare_weight)?$vehicle_tare_weight:"",
    "placeholder" => "Enter Tare Weight",
);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <?= form_open(); ?>
                <div class="card-header">
                    <h3 class="card-title">vehicle</h3>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Vehicle Number</label>
                        <?= form_input($formName); ?>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <?= form_input($formVehicleName); ?>
                    </div>
                    <div class="form-group">
                        <label>Tare Weight</label>
                        <?= form_input($formWeight); ?>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- /.card-footer-->
                <?= form_close(); ?>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
<div class="antique-details-container"></div>
<script src="<?= base_url("assert/") ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url("assert/") ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script>
    $(function () {
        $('[data-mask]').inputmask();
    });
</script>
<script>
    $.extend({
        xResponse: function (data) {
            var d = null;
            $.ajax({
                url: "<?= base_url("vehicle/json/") ?>" + encodeURIComponent(btoa(data)),
                type: 'GET',
                data: {name: encodeURIComponent(btoa(uniquename))},
                dataType: "json",
                async: false,
                success: function (respText) {
                    if (respText) {
                        d = false;
                    } else {
                        d = true;
                    }
                    return d;
                }
            });
            return d;
        }
    });
    $.formUtils.addValidator({
        name: 'unique',
        validatorFunction: function (value, $el, config, language, $form) {
            return $.xResponse(value);
        },
        errorMessage: 'this value already inserted',
        errorMessageKey: 'badEvenNumber'
    });
</script>