
@extends('backend.bases')

@section('content')


<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">

<div class="container">

<div>

<div class="card">
<div class="row invoice-contact">
 <div class="col-md-8">
<div class="invoice-box row">
<div class="col-sm-12">
<table class="table table-responsive invoice-table table-borderless">
<tbody>
<tr>
<td> <img class="img-fluid" src="{{asset('assets/images/logo.png')}}" class="m-b-10" alt=""></td>
</tr>
<tr>
<td>Conakry</td>
</tr>
<tr>
<td>commune de kaloum, BP 262-689-6253</td>
</tr>
<tr>
<td>wwww.beela@gamil.com
</td>
</tr>
<tr>
<td>+91 919-91-91-919</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-md-4">
<div class="row text-center">
<div class="col-sm-12 invoice-btn-group">
<button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20 m-b-10">Print Invoice
</button>
<button type="button" class="btn btn-danger waves-effect waves-light m-b-10">Cancel Invoice
</button>
</div>
</div>
</div>
</div>
<div class="card-block">
<div class="row invoive-info">
<div class="col-md-4 col-xs-12 invoice-client-info">
<h6>Information du Patient :</h6>
<th>Mr/Md:</th>
<td>{{$consultations->patient->nom}}.{{$consultations->patient->prenom}}</td><br>
<th>Quartier:</th>
<td>{{$consultations->patient->quartier}}</td><br>
<th>Telephone:</th><td>{{$consultations->patient->telephone}}</td>
</div>
<div class="col-md-4 col-sm-6">
<h6>Information du Medecin:</h6>
<table class="table table-responsive invoice-table invoice-order table-borderless">
<tbody>
<tr>
<th>Docteur</th>
<td>{{$consultations->agentt->nom}}</td>
</tr>
<tr>
<th>Status :</th>
<td>
<span class="label label-warning">Pending</span>
</td>
</tr>
<tr>
<th>Telephone :</th>
<td>{{$consultations->agentt->telephone}}
</td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-4 col-sm-6">
<h6 class="m-b-20">Numero du dossier medical</h6>
<h6 class="text-uppercase text-primary">N° :
<span>{{$consultations->id}}</span>
</h6>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="table-responsive">
<table class="table  invoice-detail-table">
<thead>
<tr class="thead-default">
<th>Description</th>
<th>Quantity</th>
<th>Amount</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h6>Logo Design</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
</td>
<td>6</td>
<td>$200.00</td>
<td>$1200.00</td>
</tr>
<tr>
<td>
<h6>template Design</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
</td>
<td>7</td>
<td>$100.00</td>
<td>$700.00</td>
</tr>
<tr>
<td>
<h6>rebuild Your Design</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
</td>
<td>5</td>
<td>$150.00</td>
<td>$750.00</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="">
<table class="table invoice-table invoice-total table-responsive">
<tbody>
<tr>
<th>Sub Total :</th>
<td>$4725.00</td>
</tr>
<tr>
<th>Taxes (10%) :</th>
<td>$57.00</td>
</tr>
<tr>
<th>Discount (5%) :</th>
<td>$45.00</td>
</tr>
 <tr class="text-info">
<td>
<hr />
<h5 class="text-primary">Total :</h5>
</td>
<td>
<hr />
<h5 class="text-primary">$4827.00</h5>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<h6>Terms And Condition :</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
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
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->



@endsection