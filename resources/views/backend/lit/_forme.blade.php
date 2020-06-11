<div class="row">
     <div class="col-sm-12">
              <label> Numero lit</label>
                <div class="input-group input-group-button">

                    <input type="text"  name="numero_lit" class="required form-control " placeholder="nom" required>
               </div>
     </div>
    </div>
<div class="row">
         <div class="col-sm-12">
               <label> numero salle</label>
                  <div class="input-group input-group-button">
                    <select name="salle_id" class="form-control ">
                         @foreach($salle as $spe)
                              <option  value="{{$spe->id}}">{{$spe->numero_salle}}</option>
                          @endforeach
                   </select>

                 </div>
         </div>
</div>

<div style="margin-left:300px">

<button  type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button  type="submit" class="btn btn-success btn-round">Success Button</button>
</div>