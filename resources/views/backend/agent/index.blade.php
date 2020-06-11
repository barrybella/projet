
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
<a href="{{url('/')}}">
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
<div class="card-header table-card-header">
<a class="btn btn-primary" href="{{route('agent.create')}}">
ajouter
</a>

<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="basic-btn"  class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Date de naissance</th>
<th>Lieux de naissance</th>
<th>Genre</th>
<th>Email</th>
<th>Quartier</th>
<th>Telephone</th>
<th>Specialité</th>
<th>Agent</th>
<th>Service</th>


</tr>
</thead>

<tbody>
@foreach($agents as $agent)
    
<tr>
<td>{{$agent->nom}}</td>
<td>{{$agent->prenom}}</td>
<td>{{$agent->date_naissance}}</td>
<td>{{$agent->lieu_naissance}}</td>
<td>{{$agent->genre}}</td>
<td>{{$agent->email}}</td>
<td>{{$agent->quartier}}</td>
<td>{{$agent->telephone}}</td>
<td>{{$agent->specialite->specialite}}</td>
<td>{{$agent->type_agent->type_agent}}</td>
<td>{{$agent->service->nom_services}}</td>

</tr>
@endforeach
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

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>



@endsection