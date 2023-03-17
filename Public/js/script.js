$(document).ready(function () {

    // add button 
    $('.add-student').click(function () {
        $("#exampleModalLabel").html("Adding New Student");
        $(".modal-footer button[type='submit']").html("Save").attr('name', 'btn-add');
        $(".modal-body form").attr('action', 'http://localhost/phpmvc/public/students/addStudent');
        $("#student_id").val('');
        $("#student_name").val('');
        $("#student_nim").val('');
    });

    // update button
    $(".update").click(function () {
        $("#exampleModalLabel").html("Update Student");
        $(".modal-footer button[type='submit']").html("update").attr('name', 'btn-update');
        $(".modal-body form").attr('action', "http://localhost/phpmvc/public/students/setUpdate");


        // get value from attribute
        const id = $(this).attr("data-id-update");

        // Asynchronous javascript and XML
        $.ajax({
            url: 'http://localhost/phpmvc/public/students/getDataUpdate',
            data: { id: id },
            type: 'post',
            dataType: 'json',

            success: function (result) {
                $("#student_id").val(result.id);
                $("#student_name").val(result.name);
                $("#student_nim").val(result.nim);
            }
        });

    });

});