<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel simple starter project</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap and core css -->
    <link href="{{ mix('/css/be.css')}}" rel="stylesheet">

    <!-- css for this demo page. Can be deleted for production -->
    <style>
        .danger {
            color: red;
        }
        .ok {
            color: green;
        }
    </style>>

</head>

<body>

    <div class="container">
        <p>Jquery Version is:
            <span id="jquery-version" class="danger">Not Working</span>
        </p>
        <p>
            Font Awesome is working?
            <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-3x" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-4x" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-5x" aria-hidden="true"></i>
        </p>
    </div>

    <div class="container">
        <h2>Modal Example</h2>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <span data-toggle="tooltip" data-placement="right" title="This is a tooltip on the right of the button.">
                Open modal
            </span>
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Scripts - 1. Jquery 2. Popper 3.Bootstrap  -->

    <script src="{{ mix('/js/be.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('[data-toggle="tooltip"]').tooltip();

            $('#jquery-version').html($().jquery);
            $('#jquery-version').addClass('ok').removeClass('danger');
        });
    </script>

</body>

</html>