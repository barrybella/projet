     {{csrf_field()}}
  <div class="row">
     <div class="col-sm-12">
              <label>Type consulation</label>
                <div class="input-group input-group-button">

                    <input type="text" name="type_consultation" class="form-control  " placeholder="type">
               </div>
     </div>
    </div>

<div class="row">
    <div class="col-sm-12">
           <label>Tension</label>
             <div class="input-group input-group-button">

               <input type="text" name="tension" class="form-control  " placeholder="prenom">
       </div>
     </div>
</div>

<div class="row">
     <div class="col-sm-12">
           <label>Poids</label>
                <div class="input-group input-group-button">

                <input type="text" name="poids" class="form-control  " placeholder="poids">
                </div>
        </div>
</div>

<div class="row">
         <div class="col-sm-12">
                 <label> Temperature</label>
                <div class="input-group input-group-button">

                      <input type="text"  name="temperature" class="form-control  " placeholder="temperature">
                </div>
         </div>
</div>

     <div class="row">
              <div class="col-sm-12">
                <label>Date Consultation</label>
                  <div class="input-group input-group-button">
                     <input type="Date" name="date_consultation" class="form-control  " placeholder="date de consultation">

                  </div>
              </div>
     </div>
</div>
<div class="col-sm-12 col-lg-6">


<div class="row">
                <div class="col-sm-12">
                    <label> Nombre d'enfant</label>
                        <div class="input-group input-group-button">
                       <input type="text" name="nombre_enfant" class="form-control  " placeholder="nombre enfant">

                        </div>
                </div>
</div>


<div class="row">
      <div class="col-sm-12">
               <label> Medecin</label>
                  <div class="input-group input-group-button">
                    <select name="agentt_id" class="form-control ">
                         @foreach($agentts as $spe)
                              <option  value="{{$spe->id}}">{{$spe->nom}}</option>
                                  @endforeach
                   </select>

</div>
</div>
</div>
<div class="row">
                      <div class="col-sm-12">
                          <label>Patient</label>
                                <div class="input-group input-group-button">
                                   <select name="patient_id" class="form-control ">
                                        @foreach($patient as $serv)
                                             <option value="{{$serv->id}}">{{$serv->nom}}{{$serv->id_type_agent}}</option>
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


</div>
</div>

<div style="margin-left: 300px">

<button type="resect" class="btn btn-danger btn-round">Danger Button</button>
<button type="submit" class="btn btn-success btn-round">Success Button</button>
</div>