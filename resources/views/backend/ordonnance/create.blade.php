<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/dark/form-elements-component.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 12:44:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Mash Able - Premium Admin Template</title>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">
<link rel="stylesheet" href="{{asset('assets/pages/multi-step-sign-up/css/reset.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/pages/multi-step-sign-up/css/style.css')}}">

@include('Partials.lient_entete')
</head>
<body  class="multi-step-sign-up">

@include('Partials.entete')

@include('Partials.menu')

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
  <h5>Ajouter une ordonnance</h5>
<div class="card-header-right ">
<i class="icofont icofont-rounded-down"></i>
 <i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>




<form id="msform" action="{{route('storeordonance',$consultation)}}" method="POST">
{{csrf_field()}}

</ul>

<fieldset class="form-control ">



<div class="row">
                <div class="col-sm-12">
               <label>Date de lordonance</label>
                   <div class="input-group input-group-button">
                       <input type="date" name="date" class="form-control  " placeholder="date">

                        </div>
         </div>
</div>
<button type="submit" name="next" class="btn btn-primary" >Submit</button>
</fieldset>



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
<script type="text/javascript" src="{{asset('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
<script src="{{asset('assets//pages/multi-step-sign-up/js/main.js')}}"></script>
@include('Partials.lient_pied')


<script>
    "use strict";
    $(document).ready(function() {

            // Color picker js start
            function change_checkbox_color() {
                $('.color-box .show-box').on('click', function() {
                    $(".color-box").toggleClass("open");
                });

                $('.colors-list a').on('click', function() {
                    var curr_color = $('main').data('checkbox-color');
                    var color = $(this).data('checkbox-color');
                    var new_colot = 'checkbox-' + color;

                    $('.rkmd-checkbox .input-checkbox').each(function(i, v) {
                        var findColor = $(this).hasClass(curr_color);

                        if (findColor) {
                            $(this).removeClass(curr_color);
                            $(this).addClass(new_colot);
                        }

                        $('main').data('checkbox-color', new_colot);

                    });
                });
            }

            // Mini-color js start
            $('.demo').each(function() {
                $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    defaultValue: $(this).attr('data-defaultValue') || '',
                    format: $(this).attr('data-format') || 'hex',
                    keywords: $(this).attr('data-keywords') || '',
                    inline: $(this).attr('data-inline') === 'true',
                    letterCase: $(this).attr('data-letterCase') || 'lowercase',
                    opacity: $(this).attr('data-opacity'),
                    position: $(this).attr('data-position') || 'bottom left',
                    swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
                    change: function(value, opacity) {
                        if (!value) return;
                        if (opacity) value += ', ' + opacity;
                        if (typeof console === 'object') {
                            console.log(value);
                        }
                    },
                    theme: 'bootstrap'
                });

});
            // Mini-color js ends
        });
</script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/dark/form-elements-component.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 12:44:06 GMT -->
</html>
