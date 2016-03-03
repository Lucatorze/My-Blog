$(function () {
    $('form').submit(function () {
        $('#errorBlock').html('');
        $('#successBlock').html('');

        $.ajax({
            url: '../controller/signUpController.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',

            success: function(data){
                var toPrint = 'You have successfully subscribed !';
                $('#successBlock').html(toPrint);
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
