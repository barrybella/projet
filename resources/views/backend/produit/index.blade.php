
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
<button><a href="{{route('ajout_produit.create')}}">
<i class="icofont icofont-plus"></i>
</a>
</button>
<h5>Liste des produits </h5>

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
<th>Code produit</th>
<th>Nom produit</th>
<th>Action</th>

</tr>
</thead>

<tbody>
	@foreach($produit as $produit)
<tr>
<td>{{$produit->code_produit}}</td>
<td>{{$produit->nom_produit}}</td>
<td><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-star" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<button  class="dropdown-item" href="" type="submit"><i class="icofont icofont-ui-note"></i>Notes</button>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div></td>
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