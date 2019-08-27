// $(document).on('click','#submit-button', function(e) {
//     e.preventDefault();
//     bootbox.confirm("Are you sure?", function(result) {
//         if(result)
//         $('#myForm').submit();
//     })
// });


$('#submit-button').click(function (e) {

    e.preventDefault();
    bootbox.confirm("Are you sure?", function (result) {
        if (result)
            $('#myForm').submit();
    });


});
