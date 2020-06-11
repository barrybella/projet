
<div class="row">
         <div class="col-sm-12">
               <label>Type d'examen</label>
                  <div class="input-group input-group-button">
                    <select name="type_exament_id" class="form-control ">
                         @foreach($type_examents as $s)
                              <option  value="{{$s->id}}">{{$s->type_exament}}</option>
                          @endforeach
                   </select>

                 </div>
         </div>
</div>
<div class="row">
         <div class="col-sm-12">
               <label>Laborantain</label>
                  <div class="input-group input-group-button">
                    <select name="agentt_id" class="form-control ">
                         @foreach($agentt as $s)
                              <option  value="{{$s->id}}">{{$s->nom}}</option>
                          @endforeach
                   </select>

                 </div>
         </div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">date d'examen </label>
<input type="date" name="date_consultation" class="form-control " placeholder="Password input">
</div>
</div>

<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>