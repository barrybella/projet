
<div class="form-group row">
<label class="col-sm-2 col-form-label">Numero de lit </label>
<div class="col-sm-10">
               
                  <div class="input-group input-group-button">
                    <select name="lit_id" class="form-control ">
                         @foreach($lit as $spe)
                              <option  value="{{$spe->id}}">{{$spe->numero_lit}}</option>
                          @endforeach
                   </select>

                 </div>
         </div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Date debut</label>
<div class="col-sm-10">
<input type="date" name="date_debut" class="form-control " placeholder="Password input">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Date fin</label>
<div class="col-sm-10">
<input type="date" name="date_fin" class="form-control " placeholder="You can't change me">
</div>
</div>



<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>