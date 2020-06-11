
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
<a class="btn btn-primary" href="{{route('patient.create')}}">
ajouter
</a>
<h5>Liste des patients</h5>


<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>

<div class="card-block">
<div class="dt-responsive table-responsive">
<table  id="basic-btn"  class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Date de naissance</th>
<th>Lieux de naissance</th>
<th>Genre</th>
<th>Profession</th>
<th>Telephone</th>
<th>Action</th>
</tr>
</thead>

<tbody>
	@foreach($patients as $agent)
<tr>
<td>{{$agent->nom}}</td>
<td>{{$agent->prenom}}</td>
<td>{{$agent->date_naissance}}</td>
<td>{{$agent->lieu_naissance}}</td>
<td>{{$agent->genre}}</td>
<td>{{$agent->profession}}</td>
<td>{{$agent->telephone}}</td>


<td> 
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-star" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<button  class="dropdown-item" ><a onclick="return confirm('voulez vous modifier less Information')" href="{{route('patient.edit',$agent->id)}}"><i class="icofont icofont-edit"></i>Edit</a> </button>
<form  action="{{route('patient.destroy',$agent)}}" class="inline-form" role="form" method="post" >  {{csrf_field()}}
                                      {{method_field("DELETE")}}
<button   onclick="return confirm('voulez vous supprimer le patient')" class="dropdown-item"  type="submit"><i class="icofont icofont-ui-delete"></i>Delete</a></button></form>
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