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
  <h5>Ajouter une crenaux</h5>
<div class="card-header-right ">
<i class="icofont icofont-rounded-down"></i>
 <i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<h4 class="sub-title"></h4>
<form method="post" action="{{route('rendez_vous.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}

<div class="form-group row">
<label class="col-sm-2 col-form-label">Medecin</label>
<div class="col-sm-10">
<select name="agentt_id" class="form-control ">
@foreach($agent as $agent)
<option  value="{{$agent->id}}">{{$agent->nom}}</option>

@endforeach
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Service</label>
<div class="col-sm-10">
<select name="service_id" class="form-control ">
@foreach($service as $service)
<option  value="{{$service->id}}">{{$service->nom_services}}</option>

@endforeach
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Horaire</label>
<div class="col-sm-10">
<select name="horairess_id" class="form-control ">
@foreach($horaire as $horaire)
<option  value="{{$horaire->id}}">{{$horaire->jours_semaine->jours}}.{{$horaire->heure_debut}}.a.{{$horaire->heure_fin}}</option>

@endforeach
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Patient</label>
<div class="col-sm-10">
<select name="patient_id" class="form-control ">
@foreach($patient as $patient)
<option  value="{{$patient->id}}">{{$patient->nom}}.{{$patient->telephone}}</option>

@endforeach
</select>
</div>
</div>

<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>
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