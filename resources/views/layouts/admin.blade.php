<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="iconç" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/summernote.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">

    <link rel="stylesheet" href="{{ asset('vendor/odontogram/jquery.odontogram.min.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <style>
        .default-datepicker .datepicker-inline .datepicker .datepicker--content .datepicker--days .datepicker--days-names {
            margin: 20px 0 0;
            padding: 0;
        }
    </style>
    @livewireStyles
</head>
<body onload="startTime()">
<div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
    </svg>
</div>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        @include('components.admin.navbar')
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
    @include('components.admin.sidebar')
    <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-6">
                            <h3>{{ $title }}</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a>
                                </li>
                                @isset($breadcumb)
                                    <li class="breadcrumb-item">Dashboard</li>
                                @endisset
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{ $slot }}
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->
{{--<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" charset="utf-8"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>
<script src="{{asset('assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>


<script src="{{ asset('vendor/odontogram/jquery.odontogram.js') }}" charset="utf-8"></script>
<script type="text/javascript">
    var data = [
        {
            "title": "Kosongkan",
            "type": "clean",
            "all": false,
            "menu": true
        }, {"type": "separator", "menu": false}, {
            "index": "1",
            "title": "Gigi Hilang",
            "type": "section",
            "figure": {"background": "#FF0000"},
            "menu": false
        }, {
            "index": "2",
            "title": "Gigi Belum Sepurna",
            "type": "unit",
            "figure": {"background": "url('..\/img\/triangle-red.svg')"},
            "menu": true
        }, {
            "index": "3",
            "title": "Gigi Hilangaaa",
            "type": "unit",
            "figure": {"background": "url('..\/img\/asteric-red.svg')"},
            "menu": true
        }, {
            "index": "4",
            "title": "Sellante Realizado",
            "type": "unit",
            "figure": {"background": "url('..\/img\/asteric-blue.svg')"},
            "menu": true
        }, {
            "index": "5",
            "title": "Extraccin Indicada",
            "type": "unit",
            "figure": {"background": "url('..\/img\/x-red.svg')"},
            "menu": true
        }, {
            "index": "6",
            "title": "Perdida por Caries",
            "type": "unit",
            "figure": {"background": "url('..\/img\/x-blue.svg')"},
            "menu": true
        }, {
            "index": "7",
            "title": "Perdida (otra causa)",
            "type": "unit",
            "figure": {"background": "url('..\/img\/x-circle-red.svg')"},
            "menu": true
        }, {
            "index": "8",
            "title": "Endodoncia",
            "type": "unit",
            "figure": {"background": "url('..\/img\/triangle-red.svg')"},
            "menu": true
        }, {
            "index": "9",
            "title": "Corona",
            "type": "unit",
            "figure": {"background": "url('..\/img\/square-3-red.svg')"},
            "menu": true
        }];

    var json = {
        "52": {"unit": "5", "up": null, "down": null, "right": null, "left": null, "center": null},
        "51": {"center": null, "down": null, "right": null, "unit": "5", "up": null, "left": null},
        "43": {
            "unit": "4",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "42": {
            "unit": null,
            "up": null,
            "down": "2",
            "right": null,
            "left": "1",
            "center": "2",
            "mobility": null,
            "recession": null
        },
        "12": {
            "unit": "4",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "recession": "3",
            "mobility": null
        },
        "41": {
            "unit": "5",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": "2",
            "recession": "3"
        },
        "11": {
            "unit": "6",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "recession": "2",
            "mobility": "2"
        },
        "31": {
            "unit": null,
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "32": {
            "center": null,
            "right": null,
            "unit": "3",
            "up": null,
            "down": null,
            "left": null,
            "mobility": "3",
            "recession": null
        },
        "45": {
            "unit": "8",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "34": {
            "unit": "6",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "36": {
            "unit": "3",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "38": {
            "unit": "8",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "35": {
            "center": "1",
            "right": "1",
            "down": null,
            "unit": null,
            "up": "1",
            "left": null,
            "mobility": null,
            "recession": "3"
        },
        "62": {"center": null, "down": "2", "right": "1", "left": "1", "up": "1"},
        "16": {"up": "1", "right": "1", "down": "1", "left": "1", "center": "1"},
        "25": {
            "recession": null,
            "mobility": null,
            "unit": "4",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null
        },
        "63": {"center": "1", "up": "1", "down": "1", "left": "1", "right": "1"},
        "13": {
            "recession": "1",
            "mobility": "3",
            "unit": "5",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null
        },
        "18": {
            "up": "1",
            "center": "1",
            "down": "1",
            "recession": null,
            "mobility": null,
            "unit": null,
            "right": null,
            "left": null
        },
        "17": {
            "recession": null,
            "mobility": null,
            "unit": null,
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null
        },
        "44": {
            "center": null,
            "up": null,
            "unit": "7",
            "down": null,
            "right": null,
            "left": null,
            "mobility": null,
            "recession": null
        },
        "28": {"center": "1", "down": "1"},
        "21": {
            "right": null,
            "up": null,
            "center": null,
            "recession": null,
            "mobility": null,
            "unit": "5",
            "down": null,
            "left": null
        },
        "22": {
            "recession": null,
            "mobility": null,
            "unit": null,
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null
        },
        "64": {"unit": "4", "up": null, "down": null, "right": null, "left": null, "center": null},
        "24": {
            "right": "1",
            "down": "1",
            "center": "1",
            "up": "1",
            "recession": "2",
            "mobility": null,
            "unit": null,
            "left": null
        },
        "74": {"down": null, "center": null, "up": null, "unit": "6", "right": null, "left": null},
        "75": {"right": null, "left": null, "center": null, "up": null, "down": null, "unit": "8"},
        "14": {
            "recession": null,
            "mobility": "3",
            "unit": "8",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null
        },
        "27": {
            "recession": null,
            "mobility": null,
            "unit": "6",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null
        },
        "81": {"center": null},
        "47": {
            "unit": "5",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "37": {
            "unit": "5",
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null,
            "mobility": null,
            "recession": null
        },
        "71": {"center": null, "down": null, "right": null, "unit": "3", "up": null, "left": null},
        "55": {"unit": null, "up": null, "down": null, "right": null, "left": null, "center": null},
        "33": {
            "center": "1",
            "down": "1",
            "unit": null,
            "up": null,
            "right": null,
            "left": null,
            "mobility": "2",
            "recession": null
        },
        "23": {
            "recession": null,
            "mobility": "2",
            "unit": null,
            "up": null,
            "down": null,
            "right": null,
            "left": null,
            "center": null
        },
        "85": {"unit": "5", "up": null, "down": null, "right": null, "left": null, "center": null},
        "84": {"up": "1"}
    };

    $odontogram = $('.odontogram').odontogram({
        'format': 'iconTitle,recession,mobility,unit',
        'json': json,
        'data': data,
        'menu-title': 'Pieza #%dataItem%',
        'enable': true,
        'icons_dir': '../img/',
    });
    console.log($('.odontogram').odontogram.getValue("58"))

</script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
<!-- login js-->
<!-- Plugin used-->
@livewireScripts
</body>
</html>
