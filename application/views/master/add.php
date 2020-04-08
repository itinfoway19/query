<?php
$formName = array(
    'type' => 'text',
    'name' => 'name',
    'class' => 'form-control',
    "data-validation" => "length,unique",
    "data-validation-length"=>"1-100",
    "placeholder" => "Enter $title",
);
$formModule = array(
    'type' => 'hidden',
    'name' => 'module',
    "value" => $module
);
$formTag_id = array(
    'type' => 'hidden',
    'name' => 'tag_id',
    "value" => $title,
);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <?= form_open(); ?>
                <div class="card-header">
                    <h3 class="card-title"><?= ucfirst($title) ?></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_input($formModule); ?>
                    <?= form_input($formTag_id); ?>
                    <div class="form-group">
                        <label><?= ucfirst($title) ?></label>
                        <?= form_input($formName); ?>
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
<script>
    $.extend({
        xResponse: function (data) {
            var d = null;
            $.ajax({
                url: "<?= base_url("master/json/$title/$module/") ?>" + encodeURIComponent(btoa(data)),
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