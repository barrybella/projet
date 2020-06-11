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
<h5>Ajouter un role</h5>

<div class="card-header-right ">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<div class="row m-b-20">
<div  class="col-lg-12 col-xl-12">
<form method="post" action="{{route('role.store')}}" enctype="multipart/form-data">
     {{csrf_field()}}
            <div class="panel-body">
                
                        @include('backend.roles._form')
                  
                <div class="panel-footer">
                    <h4>Affecter les permissions</h4>

                    <div class="row">
                        @php $lastType = ''; @endphp
                        @foreach($permissions as $permission)
                            @php $currentType = $permission->type @endphp

                            @if($lastType != $currentType)
                                @php $lastType = $currentType; @endphp

                                <div class="col-md-10">
                                    <h3> {{ $permission->type }} </h3>
                                </div>
                                
                            @endif

                            <div class="col-md-4">
                                <input type="checkbox" name="permissions[]"
                                    id="{{ $permission->permission }}"
                                    value="{{ $permission->id }} ">
                                <label for="{{ $permission->permission }}" class="margin">
                                    <b> {{ $permission->label}}</b>
                                </label>
                            </div>    
                        
                                
                        @endforeach
                    </div>
                   

                    <div class="text-right">
                        <button class="btn btn-success" type="submit">Ajouter</button>
                    </div>
                </div>
            </div>
        </form>
  <!--===================================================-->
            <!--End Horizontal Form-->
 
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