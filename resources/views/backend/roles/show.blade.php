
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/dark/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 12:44:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Mash Able - Premium Admin Template</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="{{asset('/assets/images/favicon.ico')}}" type="image/x-icon">


<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/bower_components/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/bower_components/bootstrap-daterangepicker/css/daterangepicker.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('/assets/bower_components/datedropper/css/datedropper.min.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('/assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/icon/themify-icons/themify-icons.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/icon/icofont/css/icofont.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/pages/flag-icon/flag-icon.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/pages/menu-search/css/component.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/linearicons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/simple-line-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/ionicons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/jquery.mCustomScrollbar.css')}}">
</head>
<body>

@include('partials/entete')

@include('partials/menu')

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body user-profile">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-sm-8">
<div class="page-header-title">
<div class="d-inline">

</div>
</div>
</div>
<div class="col-sm-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="{{route('home')}}">
<i class="icofont icofont-home"></i>
</a>
 </li>
<li class="breadcrumb-item"><a href="#!">User Profile</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-body">





<div class="row">
<div class="col-lg-12">

 <div class="tab-header">
<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Utilisateur</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Permissions</a>
<div class="slide"></div>
</li>

</ul>
</div>


<div class="tab-content">

<div class="tab-pane active" id="personal" role="tabpanel">

<div class="card">
<div class="card-header">
<h5 class="card-header-text">Utilisateur</h5>
<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
</div>

 

<div class="card-block">
<div class="view-info">
<div class="row">
<div class="col-lg-12">
<div class="general-info">
<div class="row">
<div class="col-lg-12 col-xl-12">
<div class="table-responsive">




<table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nom & Prénom</th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($users->isNotEmpty())
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$loop->index+1}}</td>

                                                    <td>
                                                        <a href="{{ route('user.show', $user->id) }}">
                                                            {{ $user->full_name }}
                                                        </a>
                                                    </td>

                                                    <td>
                                                        {{ $user->email}}

                                                    </td>

                                                </tr>


                                            @endforeach
                                        @else
                                            <p class="alert alert-danger">Aucune information disponible pour le
                                                moment!</p>
                                        @endif
                                        </tbody>
                                    </table>
</div>
</div>






</div>

</div>

</div>

</div>

</div>










</div>

</div>




</div>


<div class="tab-pane" id="binfo" role="tabpanel">









<div class="row">
<div  class="col-lg-12 col-xl-12">
<div class="card">
<div class="card-header">
<h5 class="card-header-text">Permission</h5>
</div>
<div class="card-block">
 @php $lastType = ''; @endphp
                                    @foreach($permissions as $permission)

                                        @php $currentType = $permission->type @endphp

                                        @if($lastType != $currentType)
                                            @php $lastType = $currentType; @endphp

                                            <div class="col-md-10">
                                                <h3> {{ $permission->type }} </h3>
                                            </div>

                                        @endif

                                        <div class="col-md-4">
                                            <input type="checkbox" name="permissions[]"
                                                   id="{{ $permission->permission }}"
                                                   value="{{ $permission->id }} " checked>
                                            <label for="{{ $permission->permission }}" class="margin">
                                                <b> {{ $permission->label}}</b>
                                            </label>
                                        </div>
                                    @endforeach
</div>
</div>
</div>
</div>

</div>


<div class="tab-pane" id="contacts" role="tabpanel">
<div class="row">
<div class="col-lg-3">







</div>
<div class="col-lg-9">
<div class="row">
<div class="col-sm-12">



	

</div>
</div>
</div>
</div>
</div>






</div>

</div>
</div>
</div>

</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{asset('assets/images/browser/chrome.png')}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{asset('assets/images/browser/firefox.png')}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{asset('assets/images/browser/opera.png')}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{asset('assets/images/browser/safari.png')}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{asset('assets/images/browser/ie.png')}}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script data-cfasync="false" src="{{asset('assets/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script type="text/javascript" src="{{asset('assets/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/classie/js/classie.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/pages/advance-elements/moment-with-locales.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/datedropper/js/datedropper.min.js')}}"></script>

<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/pages/ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/pages/user-profile.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/demo-12.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/dark/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 12:44:43 GMT -->
</html>




