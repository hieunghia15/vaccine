<script src="{{ asset('medino/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('medino/assets/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
<script src="{{ asset('medino/assets/js/vendor/wow.min.js')}}"></script>
<script src="{{ asset('medino/assets/js/vendor/owl-carousel.min.js')}}"></script>
<script src="{{ asset('medino/assets/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
<script src="{{ asset('medino/assets/js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('medino/assets/js/vendor/superfish.min.js')}}"></script>
<script src="{{ asset('medino/assets/js/main.js')}}"></script>

<!-- General JS Scripts -->
<script src="{{ asset('stisla/assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/popper.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('stisla/assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('stisla/assets/modules/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('stisla/assets/js/page/index.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
<script src="{{ asset('stisla/assets/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

<!-- Validate Form Update Account User -->
<script>
    $(document).ready(function() {
        $("#updateAccountUser").validate({
            rules: {
                fullname: "required",
                day_of_birth: "required",
                gender: "required",
                identification: {
                    required: true,
                    minlength:9,
                    maxlength:20
                },
                ethnic: "required",
                nationality: "required",
                email: {
                    email: true
                },
            },
            messages: {
                fullname: "Họ tên không được để trống",
                day_of_birth: "Ngày sinh không được để trống",
                gender: "Giới tính không được để trống",
                identification: {
                    required: "Số CCCD/Hộ chiếu không được để trống",
                    minlength:"Số CCCD/Hộ chiếu phải ít nhất 9 kí tự",
                    maxlength:"Số CCCD/Hộ chiếu không quá 20 kí tự",
                },
                ethnic: "Dân tộc không được để trống",
                nationality: "Quốc tịch không được để trống",
                email: "Email không hợp lệ"
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
            submitHandler: function(form) {
                form.submit();
            }

        });
    });
</script>
<script>
    @if(Session::has('status'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('status') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif
  
    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif
  
    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>
