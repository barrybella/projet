<div class="form-group row">
<label class="col-sm-2 col-form-label">Jours</label>
<div class="col-sm-10">
<select name="jours_semaine_id" class="form-control ">
@foreach($jours as $jours)
<option  value="{{$jours->id}}">{{$jours->jours}}</option>

@endforeach
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Heure debut</label>
<div class="col-sm-10">
    <input type="time" name="heure_debut" class="form-control " placeholder=".form-control-round">

</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Heure fin</label>
<div class="col-sm-10">
<input type="time" name="heure_fin" class="form-control ">
</div>
</div>

<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>