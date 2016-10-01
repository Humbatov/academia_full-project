$(document).ready(function() {
    $('#table').DataTable();
});

$(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text(" Update");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').removeClass('delete');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    var stuff = $(this).data('info').split(',');
    fillmodalData(stuff)
    $('#myModal').modal('show');
});

function fillmodalData(details) {
    $('#fid').val(details[0]);
    $('#fname').val(details[1]);
    $('#lname').val(details[2]);
    $('#email').val(details[3]);
    $('#gender').val(details[4]);
    $('#country').val(details[5]);
    $('#salary').val(details[6]);
}

$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'post',
        url: '/editItem',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#fid").val(),
            'fname': $('#fname').val(),
            'lname': $('#lname').val(),
            'email': $('#email').val(),
            'gender': $('#gender').val(),
            'country': $('#country').val(),
            'salary': $('#salary').val()
        },
        success: function(data) {
            if (data.errors) {
                $('#myModal').modal('show');
                if (data.errors.fname) {
                    $('.fname_error').removeClass('hidden');
                    $('.fname_error').text("First name can't be empty !");
                }
                if (data.errors.lname) {
                    $('.lname_error').removeClass('hidden');
                    $('.lname_error').text("Last name can't be empty !");
                }
                if (data.errors.email) {
                    $('.email_error').removeClass('hidden');
                    $('.email_error').text("Email must be a valid one !");
                }
                if (data.errors.country) {
                    $('.country_error').removeClass('hidden');
                    $('.country_error').text("Country must be a valid one !");
                }
                if (data.errors.salary) {
                    $('.salary_error').removeClass('hidden');
                    $('.salary_error').text("Salary must be a valid format ! (ex: #.##)");
                }
            } else {

                $('.error').addClass('hidden');
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" +
                    data.id + "</td><td>" + data.first_name +
                    "</td><td>" + data.last_name + "</td><td>" + data.email + "</td><td>" +
                    data.gender + "</td><td>" + data.country + "</td><td>" + data.salary +
                    "</td><td><button class='edit-modal btn btn-info' data-info='" + data.id + "," + data.first_name + "," + data.last_name + "," + data.email + "," + data.gender + "," + data.country + "," + data.salary + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-info='" + data.id + "," + data.first_name + "," + data.last_name + "," + data.email + "," + data.gender + "," + data.country + "," + data.salary + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");

            }
        }
    });
});
