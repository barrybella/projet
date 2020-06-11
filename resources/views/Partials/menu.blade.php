
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>




<ul class="pcoded-item pcoded-left-item">
<li  class="pcoded-hasmenu {{ Request::is('/','analyse*') ? 'active  pcoded-trigger' : ''}} ">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-home"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">home</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class="{{ Request::is('/') ? 'active' : ''}}">
<a href="{{url('/')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Home</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class="{{Request::is('analyse') ? 'active  pcoded-trigger' : ''}} ">
<a href="{{route('analyse.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Analyse</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>

<li class="pcoded-hasmenu {{ Request::is('consultation*') ? 'active  pcoded-trigger' : ''}}">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Consultation</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">

<li class="{{ Request::is('consultation') ? 'active  pcoded-trigger' : ''}}">
<a href="{{route('consultation.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Liste des consultations</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>

<li class="{{ Request::is('agent') ? 'active' : ''}}">
<a href="{{route('agent.index')}}">
<span class="pcoded-micon"><i class="ti-user"></i></span>
<span class="pcoded-mtext" data-i18n="nav.widget.main">Agent de Sante</span>
<span class="pcoded-badge label label-danger">100+</span>

</a>
</li>

<li class=" {{Request::is('service') ? 'active' : '' }}">
<a href="{{route('service.index')}}">
<span class="pcoded-micon"><i class="ti-list"></i></span>
<span class="pcoded-mtext" data-i18n="nav.widget.main">service</span>
<span class="pcoded-badge label label-danger">100+</span>

</a>
</li>

<li class=" {{Request::is('patient') ? 'active' : '' }}">
<a href="{{route('patient.index')}}">
<span class="pcoded-micon"><i class="ti-list"></i></span>
<span class="pcoded-mtext" data-i18n="nav.widget.main">Patient</span>
<span class="pcoded-badge label label-danger">100+</span>

</a>
</li>

<li class="{{Request::is('specialiste*') ? 'active' : '' }}">
<a href="{{route('specialiste.index')}}">
<span class="pcoded-micon"><i class="ti-list"></i></span>
<span class="pcoded-mtext" data-i18n="nav.widget.main">specialité</span>
<span class="pcoded-badge label label-danger">100+</span>

</a>
</li>
<li  class="{{Request::is('type_agent*') ? 'active' : '' }}">
<a href="{{route('type_agent.index')}}">
<span class="pcoded-micon"><i class="ti-list"></i></span>
<span class="pcoded-mtext" data-i18n="nav.widget.main">Type agent</span>
<span class="pcoded-badge label label-danger">100+</span>

</a>
</li>


</ul>


<div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">Gestion des utilisateurs </div>
 <ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Utlisatuers</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">
  @can('see', App\User::class)
<li class=" ">
<a href="{{route('user.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Utilisateur </span>
<span class="pcoded-mcaret"></span>
</a>
</li>
@endcan
 @can('see', App\Role::class)
<li class=" ">
<a href="{{route('role.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Role </span>
<span class="pcoded-mcaret"></span>
</a>
</li>
@endcan
</ul>
</li>






</ul>


<div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">Service Rendez-vous</div>
 <ul class="pcoded-item pcoded-left-item">
<li  class="pcoded-hasmenu {{ Request::is('rendez_vous*','horaire*','jours*') ? 'active  pcoded-trigger' : ''}}">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Rendez vous</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">

<li class=" {{Request::is('horaire') ? 'active' : ''}}">
<a href="{{route('horaire.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Plage horaire</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class=" {{Request::is('jours') ? 'active' : ''}}">
<a href="{{route('jours.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Jours de la semaine</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li class="{{Request::is('rendez_vous') ? 'active' : ''}} ">
<a href="{{route('rendez_vous.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Rendez-vous</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
</ul>
</li>






</ul>


<div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">Service technique</div>
 <ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu {{ Request::is('type_exament*') ? 'active  pcoded-trigger' : ''}}">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Type exament</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">

<li class=" {{Request::is('type_exament') ? 'active':''}} ">
<a href="{{route('type_exament.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Liste des types</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>

<li class="pcoded-hasmenu {{ Request::is('index_examents*') ? 'active  pcoded-trigger' : ''}}">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Examen medical</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">

<li class=" {{Request::is('index_examents*') ? 'active':''}}">
<a href="{{route('index_examents.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Examen</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>

</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">Dossier Medicaux</div>
<ul class="pcoded-item pcoded-left-item">


<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Produit</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">

<li class=" ">
<a href="{{route('ajout_produit.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Liste des prouits</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Ordonance</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">

<li class=" ">
<a href="{{route('consultation_ordonance.index')}}">
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Ordonance</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-layout"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.main">Rapport Medical</span>

<span class="pcoded-mcaret"></span>
</a>


<ul class="pcoded-submenu">

<li class="pcoded-hasmenu">
<a href="{{route('rapport_medical.index')}}" >
<span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
<span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Rapport Medical</span>
<span class="pcoded-mcaret"></span>
</a>
</li>



</ul>
</li>

<div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables">Service Interne</div>



<ul class="pcoded-item pcoded-left-item">

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-receipt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Hospitalisation</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{route('consult.index')}}">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">Hospitaliser</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-receipt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Lits</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{route('lit.index')}}">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">Liste des lits</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-widgetized"></i></span>
<span class="pcoded-mtext" data-i18n="nav.data-table.main">Salles</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">




<li class=" ">
<a href="{{route('salle.index')}}">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.data-table.ajax">Liste des salles  </span>
<span class="pcoded-mcaret"></span>
</a>
</li>


</ul>
</li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables">Payement</div>



<ul class="pcoded-item pcoded-left-item">

<li class="pcoded-hasmenu">
<a >
<span class="pcoded-micon"><i class="ti-receipt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Payement</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">ajouter</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="ti-receipt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Facture</span>
<span class="pcoded-mcaret"></span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{route('lit.index')}}">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">Ajouter</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>
</ul>
<li class="nav-divider"></li>
					<li class="nav-copyright">&copy; 2019 seanTheme All Right Reserved</li>
<li class="nav-divider"></li>
					<li class="nav-copyright">&copy; 2019 seanTheme All Right Reserved</li>
<li class="nav-divider"></li>
					<li class="nav-copyright">&copy; 2019 seanTheme All Right Reserved</li>




</ul>
</div>
</nav>

<footer>copyrigth	</footer>
