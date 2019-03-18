$(document).ready(function() {
    $('.btn.btn-primary').click(function() {
        var id = $(this).attr('id');
        console.log(id);
        $.ajax({
            url: "cart.php",
            type: "POST",
            data: {itemID: id},
            success: function(data) {
                // Do stuff when the AJAX call returns
            }
        });
    });
});