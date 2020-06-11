<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/dark/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 12:45:34 GMT -->
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
<meta name="keywords" content="flat ui, admin flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/pages/flag-icon/flag-icon.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/pages/menu-search/css/component.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/nvd3/css/nv.d3.css')}}" media="all">


<link rel="stylesheet" href="{{asset('assets/www.amcharts.com/lib/3/plugins/export/export.css')}}" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/linearicons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/simple-line-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
</head>
<body>

<div class="theme-loader">
<div class="ball-scale">
<div></div>
</div>
</div>



@include('Partials.entete')




<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="card card_main p-fixed users-main">
<div class="user-box">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-1.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-2.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/task/task-u2.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia</div>
</div>
</div>
<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen</div>
</div>
</div>
<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-3.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Michael Scofield</div>
</div>
</div>
 <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-4.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Irina Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-5.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara Tancredi</div>
</div>
</div>
<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-1.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Samon</div>
</div>
</div>
<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Daizy Mendize</div>
</div>
</div>
<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-3.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Loren Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
<a class="media-left" href="#!">
 <img class="media-object img-circle" src="{{asset('assets/images/avatar-4.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara</div>
</div>
</div>
<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/avatar-1.pn.png')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="{{asset('assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="icofont icofont-rounded-left"></i> Josephin Doe
</a>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-circle m-t-5" src="{{asset('assets/images/avatar-1.pn.png')}}" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media-right photo-table">
<a href="#!">
<img class="media-object img-circle m-t-5" src="{{asset('assets/images/avatar-2.pn.png')}}" alt="Generic placeholder image">
</a>
</div>
</div>
<div class="chat-reply-box p-b-20">
<div class="right-icon-control">
<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
<div class="form-icon">
<i class="icofont icofont-paper-plane"></i>
</div>
</div>
</div>
</div>






@include('Partials.menu')


<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-header">
<div class="page-header-title">
<h4>Analyse Dashboard</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">Dasboard</a>
</li>
<li class="breadcrumb-item"><a href="#!">Analytic Dashboard</a>
</li>
</ul>
</div>
</div>
<div class="page-body">
<div class="row">

<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-facebook">
<h3>1 +</h3>
<span class="m-t-10">Patient du jours</span>
<i class="icofont icofont-user"></i>
</div>
 </div>
</div>


<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-twitter">
<h3>780 +</h3>
<span class="m-t-10">Patient Hospitalisé</span>
<i class="icofont icofont-user"></i>
</div>
</div>
</div>


<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-linkein">
<h3>998 +</h3>
<span class="m-t-10">Patient en reahnimation</span>
<i class="icofont icofont-user"></i>
</div>
</div>
</div>


<div class="col-md-6 col-xl-3">
<div class="card social-widget-card">
<div class="card-block-big bg-google-plus">
<h3>650 +</h3>
<span class="m-t-10">Patient en soin intensif</span>
<i class="icofont icofont-user"></i>
</div>
</div>
</div>


<div class="col-md-12 col-xl-7">
<div class="card">
<div class="card-header">
<h5>LINE CHART</h5>
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
<div class="card-block">
<div id="linechart" class="nvd-chart"></div>
</div>
</div>
</div>


<div class="col-xl-5">
<div class="row">
<div class="col-lg-12">
<div class="card table-1-card">
 <div class="card-block">
<div class="table-responsive">
<table class="table">
<thead>
<tr class="text-capitalize">
<th>Type</th>
<th>Lead Name</th>
<th>Views</th>
<th>Last Action</th>
<th>Last Date</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="#!">Buyer</a>
</td>
<td>Denish Ann</td>
<td>153</td>
<td>9.23 A.M.</td>
<td>9/27/2015</td>
</tr>
<tr>
<td><a class="text-danger" href="#!">Lanload</a>
</td>
<td>John Doe</td>
<td>121</td>
<td>6.23 A.M.</td>
<td>8/27/2015</td>
</tr>
<tr>
<td><a href="#!">Buyer</a>
</td>
<td>Henry Joe</td>
<td>154</td>
<td>7.54 P.M.</td>
<td>4/30/2015</td>
</tr>
<tr>
<td><a class="text-danger" href="#!">Lanload</a>
</td>
<td>Sara Soudein</td>
<td>153</td>
<td>9.23 A.M.</td>
 <td>5/20/2016</td>
</tr>
<tr>
<td><a href="#!">Buyer</a>
</td>
<td>Denish Ann</td>
<td>153</td>
<td>9.23 A.M.</td>
<td>3/26/2015</td>
</tr>
<tr>
<td><a class="text-info" href="#!">Lanload</a>
</td>
<td>Stefen Joe</td>
<td>153</td>
<td>11.45 A.M.</td>
<td>5/20/2017</td>
</tr>
<tr>
<td><a href="#!">Buyer</a>
</td>
<td>Mark Backlus</td>
<td>153</td>
<td>12.40 A.M.</td>
<td>3/27/2017</td>
</tr>
<tr>
<td><a href="#!">Buyer</a>
</td>
<td>Denish Ann</td>
<td>153</td>
<td>9.23 A.M.</td>
<td>9/27/2015</td>
</tr>
<tr>
<td><a class="text-danger" href="#!">Lanload</a>
</td>
<td>John Doe</td>
<td>121</td>
<td>6.23 A.M.</td>
<td>8/27/2015</td>
</tr>
<tr>
 <td><a href="#!">Buyer</a>
</td>
<td>Henry Joe</td>
<td>154</td>
<td>7.54 P.M.</td>
<td>4/30/2015</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="col-xl-9">
<div class="card">
<div class="card-header">
<h5>Daily Page Visit</h5>
<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
<div class="card-block">
<div id="datebasechart"></div>
</div>
</div>
</div>


<div class="col-lg-6 col-xl-3">
<div class="card borderless-card">
<div class="profile-card">
<img class="img-fluid" src="{{asset('assets/images/widget/profile-person1.jpg')}}" alt="">
<div class="card-block">
<h3>John Steve</h3>
<p>UI/UX Designer at CreativesCastle Studio</p>
<button class="btn btn-info">+ Follow</button>
</div>
</div>
<div class="card-footer bg-inverse">
<div class="row text-center">
<div class="col-sm-4">
<h4>134</h4>
<span>Shots</span>
</div>
<div class="col-sm-4">
<h4>13,227</h4>
<span>Shots</span>
</div>
<div class="col-sm-4">
<h4>488</h4>
 <span>Shots</span>
</div>
</div>
</div>
</div>
</div>


<div class="col-xl-5 dashbored-live-left col-lg-6">
<div class="card widget">
<div class="section section-graph">
<div class="graph-info">
<i class="graph-arrow"></i>
<span class="graph-info-big">634.39</span>
<span class="graph-info-small">+2.18 (3.71%)</span>
</div>
<div id="graph"></div>
</div>
<div class="section section-info">
<span class="info-time">Today 2:25 PM</span>
<h3 class="info-title">Salt Lake City, Utah</h3>
<div class="text-center o-auto">
<div class="info-block">
<dl>
<dt>13.5 M</dt>
<dd>Shares Traded</dd>
</dl>
</div>
<div class="info-block last m-l-20">
<dl>
<dt>28.44</dt>
<dd>Market Cap</dd>
</dl>
</div>
</div>
<div class="info-aapl">
<h4>AAPL</h4>
<ul>
<li><span class="orange" style="height: 37.5%"></span>
</li>
<li><span class="orange" style="height: 47.5%"></span>
</li>
<li><span class="orange" style="height: 70%"></span>
</li>
<li><span class="orange" style="height: 85%"></span>
</li>
<li><span class="orange" style="height: 40%"></span>
</li>
<li><span class="green" style="height: 75%"></span>
</li>
<li><span class="green" style="height: 50%"></span>
</li>
<li><span class="green" style="height: 15%"></span>
</li>
<li><span class="green" style="height: 25%"></span>
</li>
</ul>
</div>
<div class="yearly-change">
<h4>Yearly Change</h4>
<span><em>+</em> 127.01</span>
</div>
</div>
</div>
<div class="section"></div>
</div>


<div class="col-xl-7">
<div class="card">
<div class="card-header">
<h5>Last Activity</h5>
<div class="f-right">
<label class="label label-success">Today</label>
<label class="label label-danger">Month</label>
</div>
</div>
<div class="card-block table-border-style">
<div class="table-responsive analytic-table">
<table class="table">
<tbody>
<tr>
<td>
<span class="count text-primary">2567</span>
<span class="table-msg">Total Message Sent</span>
</td>
<td>34%</td>
</tr>
<tr>
<td>
<span class="count text-success">3058</span>
<span class="table-msg">Last Activity</span>
</td>
<td>56%</td>
</tr>
<tr>
<td>
<span class="count text-inverse">6451</span>
 <span class="table-msg">Total Message Received</span>
</td>
<td>84%</td>
</tr>
<tr>
<td>
<span class="count text-warning">9512</span>
<span class="table-msg">Monthly Income</span>
</td>
<td>79%</td>
</tr>
<tr>
<td>
<span class="count text-info">9874</span>
<span class="table-msg">Total Transfer</span>
</td>
<td>81%</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div class="col-md-12 col-xl-6">
<div class="card">
<div class="card-header">
<h5>Total Visitors</h5>
</div>
<div class="card-block">
<div id="morris-site-visit"></div>
</div>
</div>
</div>


<div class="col-md-12 col-xl-6">
<div class="card">
<div class="card-header">
<h5>Daily Visitors</h5>
</div>
<div class="card-block">
<div id="pie-chart" style="height:350px"></div>
</div>
</div>
</div>


<div class="col-md-12 col-xl-6">
<div class="card user-activity-card">
<div class="card-block-big">
<h5>Page Visits</h5>
<h3 class="user-number">195</h3>
<h6 class="m-b-15">Social Users</h6>
<div class="progress m-b-30">
<div class="progress-bar progress-bar-striped progress-sm progress-bar-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="row">
<div class="col-sm-6">
<p>Page Visits</p>
<h6>1265</h6>
</div>
<div class="col-sm-6">
<p>New Visitors</p>
<h6>67%</h6>
</div>
</div>
<i class="icofont icofont-link-alt link"></i>
</div>
<div class="card-footer">
<p class="m-b-0">This is standard panel footer</p>
</div>
</div>
</div>


<div class="col-md-12 col-xl-6">
<div class="card analytic-user">
<div class="card-block-big text-center">
<i class="icofont icofont-wallet"></i>
<h1>$ 324587</h1>
<h4>All Income</h4>
</div>
<div class="card-footer p-t-25 p-b-25">
<p class="m-b-0">This is standard panel footer</p>
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
                    <img src="{{asset('assets/images/browser/chrome.pn.png')}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{asset('assets/images/browser/firefox.pn.png')}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{asset('assets/images/browser/opera.pn.png')}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{asset('assets/images/browser/safari.pn.png')}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{asset('assets/images/browser/ie.pn.png')}}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="{{asset('assets/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/classie/js/classie.js')}}"></script>

<script src="{{asset('assets/bower_components/d3/js/d3.js')}}"></script>
<script src="{{asset('assets/bower_components/nvd3/js/nv.d3.js')}}"></script>
<script src="{{asset('assets/pages/chart/nv-chart/js/stream_layers.js')}}"></script>

<script src="{{asset('assets/www.amcharts.com/lib/3/amcharts.js')}}"></script>
<script src="{{asset('assets/www.amcharts.com/lib/3/serial.js')}}"></script>
<script src="{{asset('assets/www.amcharts.com/lib/3/plugins/export/export.min.js')}}"></script>
<script src="{{asset('assets/www.amcharts.com/lib/3/themes/light.js')}}"></script>

<script src="{{asset('assets/pages/dashboard/high-chart/js/high-chart.js')}}"></script>

<script src="{{asset('assets/bower_components/raphael/js/raphael.min.js')}}"></script>
<script src="{{asset('assets/bower_components/morris.js/js/morris.js')}}"></script>

<script src="{{asset('assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('assets/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/pages/dashboard/analytic-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/demo-12.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/dark/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 12:45:51 GMT -->
</html>
