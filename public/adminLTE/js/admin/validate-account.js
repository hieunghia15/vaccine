$(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            alert("Form successful submitted!");
        }
    });
    $('#accountForm').validate({
        rules: {
            fullname: {
                required: true,
            },
            day_of_birth: {
                required: true,
            },
            identification: {
                required: true,
                minlength: 9
            },
            email: {
                email: true
            }
        },
        messages: {
            fullname: {
                required: "Họ và tên không được bỏ trống",
            },
            day_of_birth: {
                required: "Ngày sinh không được bỏ trống",
            },
            identification: {
                required: "CCCD/Hộ chiếu không được bỏ trống",
                minlength: "CCCD/Hộ chiếu phải ít nhất 9 kí tự"
            },
            email: {
                email: "Email phải đúng định dạng"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});