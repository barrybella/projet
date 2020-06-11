<form method="post" action="{{route('specialiste.store')}}">
    {{csrf_field()}}
<div class="form-group row">
<label class="col-sm-2 col-form-label">specialité</label>
<div class="col-sm-10  ">
<input type="text" class="form-control border-primary" name="specialite" placeholder="Type your title in Placeholder">
{!!$errors->first('specialite','<small class="help-block">:message</small>')!!}
</div>
</div>

<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>
</form>