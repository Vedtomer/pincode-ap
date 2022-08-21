<!DOCTYPE html>
<html>

<head>
    <title>Search Pincode Information</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Indian Pincode code finder">
    <meta name="keywords" content="pincode,postal code,pincode finder">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/icons/favicon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        #kl_info {
            display: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0px !important;
        }
        .page-item:first-child .page-link{
            display: none;
        }

        .page-item:last-child .page-link{
            display: none;
        }

        /* nav.navbar.navbar-expand-lg.navbar-light.bg-light {
            float: right !important;
            
        } */
    </style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pincode-finder')}}">Easy Pincode Search</a>
                    </li>

                </ul>

            </div>
        </nav>




    <div class="container-contact100">

       
        <div class="wrap-contact100 table-responsive" style="width: 100%;">

            <h1 class="contact100-form-title">
                Pincode Finder Tool
            </h1>

            
            <table id="kl" class="table table-striped table-bordered " style="width:100%">
                <thead>
                    <tr>

                        <th>Pincode</th>
                        <th>State</th>
                        <th>District</th>
                        <th>office Name/Area</th>
                        <th width="10px">Detail</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-147KKNRCL0"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-147KKNRCL0');
</script>

<script type="text/javascript">
    $(function() {

        var table = $('#kl').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('pincode-finder') }}",
            columns: [


                {
                    data: 'pincode',
                    name: 'pincode'
                },
                {
                    data: 'statename',
                    name: 'statename'
                },
                {
                    data: 'Districtname',
                    name: 'Districtname'
                },
                {
                    data: 'officename',
                    name: 'officename'
                },

                {
                    data: 'Details',
                    name: 'Details',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>

</html>