
<div  class="form-group row">
    <label label class="col-sm-2 col-form-label"><b>Nom</b></label>
    <div  class="col-sm-8  ">
        <input type="text" placeholder="Nom de famille"  name="nom" class="form-control" value="{{ $user->nom }}">
        {!! $errors->first('nom', '
        <small class="help-block ">:message</small>
        ') !!}
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 control-label" for="email"><b>Prénom</b></label>
    <div class="col-sm-8">
        <input type="text" placeholder="Prénoom" id="prenom" name="prenom" class="form-control" value="{{ $user->email }}">
        {!! $errors->first('prenom', '
        <small class="help-block ">:message</small>
        ') !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 control-label" for="email"><b>Email</b></label>
    <div class="col-sm-8">
        <input type="text" placeholder="Email" id="email" name="email" class="form-control" value="{{ $user->email }}">
        {!! $errors->first('email', '
        <small class="help-block ">:message</small>
        ') !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 control-label" for="password"><b>Mot de passe</b></label>
    <div class="col-sm-8">
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Taper votre mot de passe'])!!}
        {!! $errors->first('password', '<small class="help-block ">:message</small>') !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 control-label" for="password_confirmation"><b>Confirmation</b></label>
    <div class="col-sm-8">
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Retaper votre mot de passe'])!!}
        {!! $errors->first('password_confirmation', '<small class="help-block ">:message</small>') !!}
    </div>
</div>


    <div class="form-group row">
        <label class="col-sm-2 control-label" for="priorite"><b>Role</b></label>
        <div class="col-sm-8">
            {!! Form::select('role', $roles, $user->role, ['class' => 'demo_select2 form-control select-research'])!!}
        </div>
    </div>


