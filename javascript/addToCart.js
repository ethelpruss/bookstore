$(document).ready(function() {
    $('.btn.btn-primary').click(function() {
        var id = $(this).attr('id');
        console.log(id);
        $.ajax({
            type: "POST",
            url: "addProduct.php",
            data: {"itemID": "id"},
            success: function(data) {
                console.log(data);
            }
        });
    });
});