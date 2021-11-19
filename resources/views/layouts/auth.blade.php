<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mobbin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('assets/css/style1.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/style.min.css') }}">

        <style>
            .invalid-feedbeck {
                color: red;
            }
        </style>
    </head>

    <body>
        @yield('container')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="{{ url('assets/js/script.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('#form-login').find('input').on('keyup', function (e) {
                    if (e.keyCode == 13) {
                        $('#btn-login').trigger('click');
                    }
                });

                $(document).on('click', '#btn-login', function () {
                    var btn = $(this);
                    var form = $('#form-login').serialize();
                    var url = $('#form-login').attr('action');
                    btn.html('<div class="spinner-border text-light" role="status"></div>');
                    btn.prop('disabled', true);
                    $('#form-login').find('input').prop('disabled', true);
                    $('#form-login').find('.invalid-feedbeck').remove();

                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: form,
                        success: (data) => {
                            // console.log(data);

                            window.location.href = data;
                        },
                        error: (err) => {
                            // console.log(err);
                            var errors = err.responseJSON.errors;

                            btn.html('ENTRAR');
                            btn.prop('disabled', false);
                            $('#form-login').find('input').prop('disabled', false);

                            if (errors) {
                                // console.log(errors);
                                $.each(errors, (key, value) => {
                                    $('#form-login').find('[name="' + key + '"]').parent().append('<span class="invalid-feedbeck">' + value[0] + '</span>');
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: err.responseJSON.invalid
                                });
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>
