$(function () {

    $("#button").click(function()
    {
        $.ajax({
            url: '../distance.php',
            data: {funkcja: 'getDistance'},
            type: 'post',
            success: function(output) {
                $("#dane").append(output);
            }
        });
    });

});