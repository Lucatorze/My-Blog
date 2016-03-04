$(function () {
    $('#registerForm').submit(function () {
        $('#blocError').html('');
        $('#blocSuccess').html('');

        $.ajax({
            url: './controller/registerController.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data){
                var toPrint = 'You have successfully subscribed !';
                $('#blocSuccess').html(toPrint);
            },
            error: function(data, status, error) {
                var toPrint = '';
                data = JSON.parse(data.responseText);
                for(var d in data.errors){
                    toPrint += d+' :'+data.errors[d]+'<br>';
                }
                $('#errorBlock').html(toPrint);
            }
        });
        return false;
    });
});
