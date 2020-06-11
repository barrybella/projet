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
<div class="row">
<div class="col-sm-12">

<div class="card">

<div class="card-header">
  <h5>Ajouter un agent</h5>
<div class="card-header-right ">
<i class="icofont icofont-rounded-down"></i>
 <i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<h4 class="sub-title"></h4>
<form method="post" action="{{route('ajout_produit.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
@include('backend.produit._forme')
</form>








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

@endsection