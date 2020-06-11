@extends('backend.base')
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
<h5>Nouvelle utilisateur</h5>

<div class="card-header-right ">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<div class="row m-b-20">
<div  class="col-lg-12 col-xl-12">

            {!! Form::open(['method' => 'PUT', 'class' => 'panel-body form-horizontal form-padding', 'url' => route('user.update', $user->id)]) !!}
<div class="panel-body">
                <div class="panel-body">
                    @include('backend.users._form')

                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success" type="submit">Enregistrer</button>
                </div>
            </div>

           {!! Form::close() !!}
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





