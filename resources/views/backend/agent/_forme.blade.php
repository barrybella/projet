<form method="post" action="{{route('agent.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
  <div class="row">
     <div class="col-sm-12">
              <label> Nom</label>
                <div class="input-group input-group-button">

                    <input type="text"  name="nom" class="required form-control " placeholder="nom" required>
               </div>
     </div>
    </div>

<div class="row">
    <div class="col-sm-12">
           <label> Prenom</label>
             <div class="input-group input-group-button">

               <input type="text" name="prenom" class="required form-control " placeholder="prenom">
       </div>
     </div>
</div>

<div class="row">
     <div class="col-sm-12">
           <label>Date de naissance</label>
                <div class="input-group input-group-button">

                <input type="date" name="date_naissance" class="form-control  " placeholder="date">
                </div>
        </div>
</div>

<div class="row">
         <div class="col-sm-12">
                 <label> Lieux de naissance</label>
                <div class="input-group input-group-button">

                      <input type="text"  name="lieu_naissance" class="form-control  " placeholder="Lieux">
                </div>
         </div>
</div>
<div class="row">
       <div class="col-sm-12">
              <label> Genre</label>
                    <div class="input-group input-group-button">
                          <select name="genre" class="form-control ">

                              <option value="masculin">Masculin</option>
                              <option value="feminin">Feminin</option>

                             </select>

                    </div>
       </div>
</div>
     <div class="row">
              <div class="col-sm-12">
                <label> Email</label>
                  <div class="input-group input-group-button">
                     <input type="email" name="email" class="form-control  " placeholder="Email">

                  </div>
              </div>
     </div>
</div>
<div class="col-sm-12 col-lg-6">

<div class="row">
                <div class="col-sm-12">
                     <label> Quartier</label>
                        <div class="input-group input-group-button">
                             <input type="text" name="quartier" class="form-control  " placeholder="quartier">

                       </div>
               </div>
</div>
<div class="row">
                <div class="col-sm-12">
                    <label> Telephone</label>
                        <div class="input-group input-group-button">
                       <input type="text" name="telephone" class="form-control  " placeholder="telephone">

                        </div>
                </div>
</div>
<div class="row">
          <div class="col-sm-12">
             <label> Photo</label>
                  <div class="input-group input-group-button">
                      <input type="file" name="photo" class="form-control  " placeholder="photo">

                  </div>
        </div>
</div>

<div class="row">
         <div class="col-sm-12">
               <label> Specialités</label>
                  <div class="input-group input-group-button">
                    <select name="specialite_id" class="form-control ">
                         @foreach($specialiste as $spe)
                              <option  value="{{$spe->id}}">{{$spe->specialite}}</option>
                          @endforeach
                   </select>

                 </div>
         </div>
</div>
<div class="row">
                      <div class="col-sm-12">
                          <label> Services</label>
                                <div class="input-group input-group-button">
                                   <select name="service_id" class="form-control ">
                                        @foreach($service as $serv)
                                             <option value="{{$serv->id}}">{{$serv->nom_services}}</option>
                                               @endforeach
                                    </select>
                                 </div>
                        </div>
</div>

<div class="row">
               <div class="col-sm-12">
                   <label>Type Agent</label>
                      <div class="input-group input-group-button">
                         <select name="type_agent_id" class="form-control ">
                              @foreach($type_agent as $agent)

                           <option value="{{$agent->id}}">{{$agent->type_agent}}</option>
                               @endforeach

                        </select>

                      </div>
                </div>
</div>
</div>
</div>

<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>
</form>