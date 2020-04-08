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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= ucfirst($title) ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open("", ["id" => "saveInput_tag"]) ?>
            <?= form_input($formModule); ?>
            <?= form_input($formTag_id); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label><?= ucfirst($title) ?></label>
                    <?= form_input($formName); ?>
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