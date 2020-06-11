<div class="form-group row">
    <label class="col-sm-2 control-label" for="nom"><b>Nom</b></label>
    <div class="col-sm-8">
        <input type="text" placeholder="nom du role" name="nom" id="nom" class="form-control" value="{{ $role->nom }}">
        {!! $errors->first('nom', '
        <small class="help-block ">:message</small>
        ') !!}
    </div>
</div>