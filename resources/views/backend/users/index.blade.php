
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
<a href="">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">home</a>
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
 @can('create', App\User::class)
<a  class="btn btn-primary" href="{{route('user.create')}}"> ajouter

</a>
@endcan
<h5>Liste des utilisateurs</h5>

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
                    <th>No</th>
                    <th>Nom & Prénom</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>Date d'ajout</th>
                    <th class="min-tablet">Action</th>
                </tr>
</thead>

<tbody>
   @if($users->isNotEmpty())
                    @foreach($users as $user)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$user->full_name }}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->nom}}</td>
                            <td>{{Date::make($user->created_at)->format('d F Y')}}</td>
                            <td>
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-star" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
 @can('edit', App\User::class)
<a class="dropdown-item"href="{{route('user.edit', ['id' => $user->id]) }}"><i class="icofont icofont-edit"></i>Edit</a>
@endcan
@can('delete', App\User::class)
<form action="{{ route('user.destroy', ['id' => $user->id]) }}" class="inline-form" role="form" method="post" >  {{csrf_field()}}
                                      {{method_field("DELETE")}}
<button   onclick="return confirm('voulez vous supprimer le patient')" class="dropdown-item"  type="submit"><i class="icofont icofont-ui-delete"></i>Delete</a></button></form>
@endcan
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>

</tr>
                    @endforeach
                @else
                    <p class="alert alert-danger">Aucune information disponible pour le moment!</p>
                @endif
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
