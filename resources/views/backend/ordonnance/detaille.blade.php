@extends('backend.bases')

@section('content')
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">

</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="{{route('home')}}">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">home</a>
</li>

</li>
</ul>
</div>
</div>
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
<button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20 m-b-10">  Print Invoice
</button>
<a class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20 m-b-10"  href="{{ route('createOrdonnance',$ordonance->id)}}">Medicament

</a>
</div>
</div>
</div>
</div>
<div class="card-block">
<div class="row invoive-info">
<div class="col-md-4 col-xs-12 invoice-client-info">
<h6>Information du Patient :</h6>
<th>Mr/Md:</th>
<td>{{ $ordonance->consultation->patient->nom}}.{{$ordonance->consultation->patient->prenom}}</td><br>
<th>Quartier:</th>
<td>{{ $ordonance->consultation->patient->quartier}} </td><br>
<th>Telephone:</th><td>{{ $ordonance->consultation->patient->telephone}}</td>
</div>
<div class="col-md-4 col-sm-6">
<h6>Information du Medecin:</h6>
<table class="table table-responsive invoice-table invoice-order table-borderless">
<tbody>
<tr>
<th>Docteur</th>
<td>{{ $ordonance->consultation->agentt->nom}}.{{ $ordonance->consultation->agentt->prenom}}</td>
</tr>
<tr>
<th>Status :</th>
<td>
<span class="label label-warning">{{ $ordonance->consultation->agentt->specialite->specialite}}</span>
</td>
</tr>
<tr>
<th>Telephone :</th>
<td>{{ $ordonance->consultation->agentt->telephone}}
</td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-4 col-sm-6">
<h6 class="m-b-20">Numero de l'ordonance</h6>
<h6 class="text-uppercase text-primary">N° :
<span>{{$ordonance->id}}</span>
</h6>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="table-responsive">
<table class="table  invoice-detail-table">
<thead>
<tr class="thead-default">
<th> Medicament</th>
<th> Quantite</th>
<th> Utilisation</th>
</tr>
</thead>
<tbody>
<tr>
 @foreach($produits as $produit)
<td>{{$produit->nom_produit}}</td>
<td>{{$produit->pivot->quantite}}</td>
<td>{{$produit->pivot->utilisation}}</td>
</tr>
@endforeach
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<h6>Terms And Condition :</h6>
<p> aucun ajout manuscrite de se document ne sera  prise en compte </p>
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