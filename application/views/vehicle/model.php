<?php
$formName = array(
    'type' => 'text',
    'name' => 'name',
    'class' => 'form-control',
    "data-validation" => "length,unique",
    "data-validation-length" => "1-100",
    "data-inputmask" => "'mask': ['a{2}-9{2}-a{1,2}-9{4}']",
    "data-mask" => "",
    "placeholder" => "Enter Vehicle Number",
);
$formVehicleName = array(
    'type' => 'text',
    'name' => 'vehicle_name',
    'class' => 'form-control',
    "placeholder" => "Enter Vehicle Name",
);
$formWeight = array(
    'type' => 'text',
    'name' => 'vehicle_tare_weight',
    'data-validation' => 'number',
    'class' => 'form-control',
    "placeholder" => "Enter Tare Weight",
);
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vehicle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open("", ["id" => "saveInput_tag"]) ?>
            <div class="modal-body">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
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