//products();
$(document).ready(function () {
    function products(search) {
        $.ajax({
            url: "./data_process/phone_number_search.php",
            method: "post",
            data: {
                data: search
            },
            beforeSend: function () {
                $(".modalx").show();
            },
            complete: function () {
                $(".modalx").hide();
            },
            success: function (data) {
                $('#gridContainer').html(data);
            }
        });
    }
    $('#form_search').submit(function (event) {
        event.preventDefault();
        var search = $('#keyword').val();
        if (search != '') {
            products(search);
        } else {
            return false;
            //products();
        }
    });
    // $('.close-custom').click(function () {
    //     products();
    // });
});