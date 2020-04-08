<?php
$formName = [
    "name" => "name",
    "id" => "name",
    "autofocus" => 1,
    "class" => "form-control",
    "data-validation" => "length,unique",
    "data-validation-length" => "1-55",
    "value" => isset($name) ? $name : "",
];
?>
<?= form_open("", ["data-plus-as-tab" => "true"]); ?>
<div class="row">
    <div class="col-lg-12">
        <br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Department</h3>
            </div>
            <div class="card-body row">
                <div class="form-group col-lg-6">
                    <?= form_label("Department", 'base'); ?>
                    <?= form_input($formName); ?>
                </div>
                <div class="col-lg-6 row">
                    <div class="col-lg-2">
                        <label><input type="radio" name="access_method" value="3">FULL</label>
                    </div>
                    <div class="col-lg-4">
                        <label><input type="radio" name="access_method" value="2">EDIT & ADD & VIEW</label>
                    </div>
                    <div class="col-lg-3">
                        <label><input type="radio" name="access_method" value="1">ADD & VIEW</label>
                    </div>
                    <div class="col-lg-3">
                        <label><input type="radio" name="access_method" value="0">VIEW</label>
                    </div>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-12">
                    <?php

                    function Menu($parent, $category) {
                        $html = "";
                        if (isset($category['parent_cats'][$parent])) {
                            if ($parent != 0) {
                                $html .= "<ul>\n";
                            }
                            $count = 1;
                            foreach ($category['parent_cats'][$parent] as $cat_id) {
                                if (!isset($category['parent_cats'][$cat_id])) {
                                    if ($parent != 0) {
                                        $html .= "<li><input type='checkbox' name='url[]' value='" . $cat_id . "'>" . $category['menus'][$cat_id]['menu_name'] . "</li> \n";
                                    }else{
                                        $html .= "<li><input type='checkbox' name='url[]' value='" . $cat_id . "'>" . $category['menus'][$cat_id]['menu_name'] . "</li> \n";
                                    }
                                }
                                if (isset($category['parent_cats'][$cat_id])) {
                                    if ($parent == 0) {
                                        $html .= "<li><input type='checkbox' name='url[]' value='" . $cat_id . "'>" . $category['menus'][$cat_id]['menu_name'] . "";
                                    } else {
                                        $html .= "<li><input type='checkbox' name='url[]' value='" . $cat_id . "'>" . $category['menus'][$cat_id]['menu_name'] . "";
                                    }
                                    $html .= Menu($cat_id, $category);
                                    $html .= "</li> \n";
                                }
                            }
                            if ($parent != 0) {
                                $html .= "</ul> \n";
                            }
                        }
                        return $html;
                    }

                    $menuData = $this->session->userdata("menu");
                    echo "<ul class='treeview'>";
                    echo Menu(0, unserialize($menuData));
                    echo "</ul>";
                    ?>
                </div>
            </div>
            <div class="card-footer">
                <?= form_submit('', 'SUBMIT', ["class" => "btn btn-primary", "data-plus-as-tab" => "false"]); ?>
                <a class="btn btn-default"  id="backbtn"  data-plus-as-tab="false" href="<?= base_url("setting/roles") ?>">EXIT</a>
            </div>
        </div>
    </div>
</div> 

<?= form_close(); ?>
<script>
    $(window).on("focus", function () {
        $('input[name="<?= $this->security->get_csrf_token_name(); ?>"]').val(getCookie('csrf_cookie_name'));
    });
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2)
            return parts.pop().split(";").shift();
    }

    $(document).on("change", "input[type='checkbox']", function () {
        if ($(this).is(':checked')) {
            $.each($(this).parents("li"), function (k, v) {
                $(this).children("input[type='checkbox']").prop('checked', true);
            });
            $(this).parent("li").children("ul").find("input[type='chec k box']").prop('checked', true);
        } else {
            $.each($(this).children("li"), function (k, v) {
                $(this).children("input[type='checkbox']").prop('checked', false);
            });
            $(this).parent("li").children("ul").find("input[type='checkbox']").prop('checked', false);
        }
    });
    var uniquename = "";
<?php if ($this->router->method == "edit") { ?>
        uniquename = $("input[name='name']").val();
<?php }
?>

    $.extend({
        xResponse: function (data) {
            var d = null;
            $.ajax({
                url: "<?= base_url("master/sub_tags/json/") ?>" + encodeURIComponent(btoa(data)),
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