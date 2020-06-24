var phone_number;
var DOMAIN = "http://localhost/klangber";
$(document).ready(function () {
    console.log(DOMAIN);
    load_data();

    function load_data(category, tt) {
        phone_number = $("#phone_number").DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: DOMAIN + "/data_process/phone_number_retrieve_process.php",
                type: "POST",
                data: {
                    category: category,
                    tt: tt
                },
                error: function () {
                    $("#phone_number").css("display", "none");
                }
            },
            "columnDefs": [{
                "targets": [4,5,6],
                "orderable": false,
            }],
            "aLengthMenu": [
                [25, 50, 75, -1],
                [25, 50, 75, "All"]
            ]
        });
    }
    $(document).on('change', '#network_filter', function () {
        var network_filter = $(this).val();
        $('#phone_number').DataTable().destroy();
        var tt = "nf";
        if (network_filter != '') {
            load_data(network_filter, tt);
        } else {
            load_data();
        }
    });
    $(document).on('change', '#type_filter', function () {
        var type_filter = $(this).val();
        $('#phone_number').DataTable().destroy();
        var tt = "tf";
        if (type_filter != '') {
            load_data(type_filter, tt);
        } else {
            load_data();
        }
    });

});

function removePhonenumber(key) {
    var x = confirm("ลบเบอร์ที่เลือก?");
    console.log(key);
    if (x) {
        $.ajax({
            url: DOMAIN + '/data_process/phone_number_remove_process.php',
            type: 'POST',
            data: {
                data: key,
            },
            success: function (response) {
                if (response == "ok") {
                    phone_number.ajax.reload(null, false);
                    // $("#edit_User_Modal").modal('hide');
                    alert("ลบข้อมูลเรียบร้อยแล้ว");
                } else {
                    alert("ผิดพลาดไม่สามารถลบข้อมูลได้");
                }
            }
        });
    } else {
        return false;
    }
}
