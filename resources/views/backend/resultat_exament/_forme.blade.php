<div class="row">
                      <div class="col-sm-12">
                          <label> Examen</label>
                                <div class="input-group input-group-button">
                                   <select name="exament_id" class="form-control ">
                                        @foreach($exament as $serv)
                                             <option value="{{$serv->id}}">{{$serv->exament_id}}</option>
                                               @endforeach
                                    </select>
                                 </div>
                        </div>
</div>
<div class="row"> 
                   <div class="col-sm-12">
                    <label>Description</label>
                        <textarea id="story" name="description" class="form-control  "
          rows="5" cols="33">
veillez saisire la description..
                      </textarea>
                   </div>
</div>


<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>