<?php
$formName = [
    "name" => "username",
    "id" => "username",
    "autofocus" => 1,
    "class" => "form-control",
    "data-validation" => "length,unique",
    "data-validation-length" => "1-255",
    "value" => isset($username) ? $username : "",
];
$formPassword = [
    "name" => "password",
    "type" => "password",
    "class" => "form-control",
    "data-validation" => "length",
    "data-validation-length" => "1-55",
    "value" => isset($password) ? $password : "",
];
$formPasswordc = [
    "type" => "password",
    "class" => "form-control",
    "value" => isset($password) ? $password : "",
    "data-validation" => "confirmation",
    "data-validation-confirm" => "password",
];

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <?= form_open("", ["data-plus-as-tab" => "true"]); ?>
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
                    <div class="form-group">
                        <label>username</label>
                        <?= form_input($formName); ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <?= form_input($formPassword); ?>
                    </div>
                    <div class="form-group">
                        <label>Re Password</label>
                        <?= form_input($formPasswordc); ?>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <?= form_dropdown("role", null, isset($role) ? $role : null, [ "id" => "role"]); ?>
                       
                    </div>
                </div>
                <div class="card-footer">
                    <?= form_submit('', 'SUBMIT', ["class" => "btn btn-primary", "data-plus-as-tab" => "false"]); ?>
                    <a class="btn btn-default"  id="backbtn"  data-plus-as-tab="false" href="<?= base_url("setting/users") ?>">EXIT</a>
                </div>
                <?= form_close(); ?>
            </div>

        </div>
        <script>

            var uniquename = "";
<?php if ($this->router->method == "edit") { ?>
                uniquename = $("input[name='username']").val();
    <?php }
?>

            function getCookie(name) {
                var value = "; " + document.cookie;
                var parts = value.split("; " + name + "=");
                if (parts.length == 2)
                    return parts.pop().split(";").shift();
            }

            $(window).on("focus", function () {
                $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
            });

            $(document).ready(function () {
                $.ajax({
                    url: '<?= base_url("setting/roles/json?select=name,id"); ?>',
                    type: 'POST',
                    data: {'<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
                    dataType: 'json',
                    success: function (res) {
                        res = res.data;
                        if (res.length != 0) {
                            var role = <?= isset($role) ? $role : "''"; ?>;
                            for (var i = 0; i < res.length; i++) {
                                $("#role").append("<option value='" + res[i]["id"] + "' " + ((res[i]["id"] == role) ? "selected" : "") + ">" + res[i]["name"] + "</option>")
                            }
                            $('#role').selectize();
                        } else {
                            window.location = "<?= base_url("setting/roles/add") ?>";
                        }
                        $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
                    }
                });
            });

            $.extend({
                xResponse: function (data) {
                    var d = null;
                    $.ajax({
                        url: "<?= base_url("setting/users/json/") ?>" + encodeURIComponent(btoa(data)),
                        type: 'GET',
                        data: {username: encodeURIComponent(btoa(uniquename))},
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

            var focused = "";
            var fLocation = "";

            $(document).on("keyup", "input[type='select-one']", function (eve) {
                if (eve.which == 45) {
                    focused = $(':focus').attr('id');
                    fLocation = focused.slice(0, -14);
                    $("#insCommand").attr('href', "<?= base_url("setting/roles/add"); ?>");
                    $('#insCommand').get(0).click();
                }
            });

            $(document).on('keydown', function (event) {
                if (event.which == 116) {
                    event.preventDefault();
                    if (fLocation != "") {
                        $('#role').removeClass("form-control");
                        $('#role').selectize()[0].selectize.destroy();
                        $('#role').empty();

                        var allSelAjaxKey = $.ajax({
                            url: "<?= base_url("setting/roles/json?select=name,id"); ?>",
                            type: 'POST',
                            data: {'<?= $this->security->get_csrf_token_name(); ?>': getCookie('csrf_cookie_name')},
                            dataType: 'json',
                            success: function (res) {
                                res = res.data;
                                if (res.length != 0) {
                                    for (var i = 0; i < res.length; i++) {
                                        $('#role').append("<option value='" + res[i]["id"] + "' " + ("") + ">" + res[i]["name"] + "</option>");
                                    }
                                    $('#role').selectize();
                                }
                                $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
                            }
                        });
                        $.when(allSelAjaxKey).done(function () {
                            $('#role').selectize()[0].selectize.focus();
                        });
                    }
                }
            });
        </script>