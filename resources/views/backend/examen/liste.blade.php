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


<h5>Liste des consultations</h5>

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
<th>Nom de patient</th>
<th>Prenom de patient</th>

<th>Temperature</th>
<th>Date</th>
<th>description</th>
<th>medecin</th>
<th>Action</th>
</tr>
</thead>

<tbody>
    @foreach($consultation as $agent)
    
<tr>
<td>{{$agent->patient->nom}}</td>
<td>{{$agent->patient->prenom}}</td>
<td>{{$agent->temperature}}</td>
<td>{{$agent->date_consultation}}</td>
<td>{{$agent->description}}</td>
<td>{{$agent->agentt->nom}}</td>
<td>
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-star" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="{{route('Exament',$agent->id)}}"><i class="icofont icofont-eye-alt"></i>liste des examents</a>
<a class="dropdown-item" href="{{route('createExament',$agent->id)}}"><i class="icofont icofont-eye-alt"></i>Ajouter un examen</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>


</tr>
@endforeach
</tbody>

</tfoot>
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