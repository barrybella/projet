<form method="post" action="{{route('patient.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
<div class="form-group row">
<label class="col-sm-2 col-form-label">Nom</label>
<div class="col-sm-10  ">
<input type="text" class="form-control " name="nom" placeholder="Type your title in Placeholder" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Prenom</label>
<div class="col-sm-10">
<input type="text" name="prenom" class="form-control " placeholder="Type your title in Placeholder">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">date de naissance</label>
<div class="col-sm-10">
<input type="date" name="date_naissance" class="form-control " placeholder="Password input">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">lieux de naissance</label>
<div class="col-sm-10">
<input type="text" name="lieu_naissance" class="form-control " placeholder="You can't change me">
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Genre</label>
<div class="col-sm-10">
<select name="genre" class="form-control ">

<option value="masculin">Masculin</option>
<option value="feminin">Feminin</option>

</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">profession</label>
<div class="col-sm-10">
<input type="text" name="profession" class="form-control " placeholder=".form-control-round">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Statu matrimonial</label>
<div class="col-sm-10">
<select name="statut_matrimonial" class="form-control ">

<option  value="marié">marié</option>
<option  value="celibataire">celibataire</option>

</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">quartier</label>
<div class="col-sm-10">
    <input type="text" name="quartier" class="form-control " placeholder=".form-control-round">

</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Telephone</label>
<div class="col-sm-10">
<input type="text" name="telephone" class="form-control ">
</div>
</div>

<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>
</form>
