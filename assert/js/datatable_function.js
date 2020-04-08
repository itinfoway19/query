function data_table(id, deleteurl, editurl, url) {
    var table = $(id).DataTable({
        deferRender: true,
        scrollY: 370,
        paging: false,
        bInfo: false,
        ajax: url,
        select: {
            style: 'single'
        },
        /*keys: {
            keys: [13, 38, 40, 46]
        },*/
        "columns": [
            {"data": "name"},
        ],
        language: {search: ""},
    });
    $(id).on('key-focus.dt', function (e, datatable, cell) {
        table.row(cell.index().row).select();
    });

    $("input[type='search']").focus();
    var count = 0;

    $(document).on("keydown", function (e) {
        if ($('.btn-red').length === 0 && e.keyCode === 40 || e.keyCode === 38 || e.keyCode === 13 || e.keyCode === 39) {
            if (e.keyCode === 40) {
                table.row(':eq(' + count + ')', {page: 'current'}).select();

                if (table.row(':eq(' + (count + 1) + ')', {page: 'current'}).data() != undefined) {
                    count = count + 1;
                }
            } else if (e.keyCode === 38) {
                if (count == 0) {
                    table.row(':eq(0)', {page: 'current'}).select();
                } else {
                    count--;
                    table.row(':eq(' + count + ')', {page: 'current'}).select();
                }
            } else {
                count = 0;
                if ($('.btn-red').length === 0 && e.keyCode === 13) {
                    var txtNameInsCopy = $('input[type="search"]').val();
                    var urlTogo = $("#ins_base").attr("href") + "/" + encodeURIComponent(btoa(txtNameInsCopy));
                    window.location = urlTogo;
                }
            }
        } else {
            count = 0;
        }
        if ($('.btn-red').length !== 0 && e.keyCode === 37 || e.keyCode === 39) {
            if (e.keyCode === 37) {
                $('.btn-red').focus();
            } else {
                $('button:contains("CLOSE")').focus();
            }
        }
    });
    $(id).on('click', 'tbody td', function (e) {
        e.stopPropagation();
        var rowIdx = table.cell(this).index().row;
        table.row(rowIdx).select();
    });
    $(document).on("keydown", function (e) {
        if (($(".dataTable").find("tr.selected").length != 0) && e.keyCode === 46) {
            var data = table.row($(".selected")).data();
            $.confirm({
            buttons: {
                    OK: {
                        btnClass: 'btn-red',
                        action: function () {
                            $.ajax({
                                url: deleteurl + "/" + data.id,
                                type: 'GET',
                                success: function (res) {
                                    if (res == true) {
                                        /*ajax.url().load();*/
                                        table.ajax.reload();
                                        $('input[type="search"]').focus();
                                    } else {
                                        alert("YOU CAN'T DELETE THIS ENTRY BECAUSE THIS ENTRY IS IN USE.");
                                        $('input[type="search"]').focus();
                                    }
                                }
                            });
                        }
                    },
                    CLOSE: function () {
                        $('input[type="search"]').focus();
                    }
                }
            
        });
        } else if ($('.btn-red').length === 0 && $(".dataTable").find("tr.selected").length != 0 && e.keyCode === 13) {
            var data = table.row($(".selected")).data();
            window.location = editurl + "/" + data.id;
        }
    });
    $(id).on('dblclick', 'tbody td', function (e) {
        e.stopPropagation();
        var data = table.row(table.cell(this).index().row).data();
        window.location = editurl + "/" + data.id;
    });
    $(document).on('click', '.edit-row', function (e) {
        if ($(".dataTable").find("tr.selected").length != 0) {
        e.stopPropagation();
        var data = table.row($(".selected")).data();
        window.location = editurl + "/" + data.id;
    } else {
        $('input[type="search"]').focus();
    }
    });
    $(document).on('click', '.delete-row', function (e) {
        if ($(".dataTable").find("tr.selected").length != 0) {
        e.stopPropagation();
        var data = table.row($(".selected")).data();

        $.confirm({
            buttons: {
                    OK: {
                        btnClass: 'btn-red',
                        action: function () {
                            $.ajax({
                                url: deleteurl + "/" + data.id,
                                type: 'GET',
                                success: function (res) {
                                    if (res == true) {
                                        /*ajax.url().load();*/
                                        table.ajax.reload();
                                    } else {
                                        alert("YOU CAN'T DELETE THIS ENTRY BECAUSE THIS ENTRY IS IN USE.");
                                    }
                                }
                            });
                        }
                    },
                    CLOSE: function () {
                        $('input[type="search"]').focus();
                    }
                }
            
        });
    } else {
        $('input[type="search"]').focus();
    }

    });
    //return table;
}