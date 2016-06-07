<div id="newVehiculeModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title">New Vehicule</h2>
    </div>
    <div class="modal-body">
      <form id="frmCreateVehicule" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" id="iClient" name="iClient" value="">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inRegistration">Registration</label>
              <input type="text" class="form-control" id="inRegistration" placeholder="XX-XXX-XXX" name="iRegistration">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inBrand">Brand</label>
              <select class="form-control" id="selectBrand" onchange="loadVehiculeModel()" name="iBrand">
                <opotion>Select Brand</opotion>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inIDVehicule">ID Vehicule</label>
              <input type="text" class="form-control" id="inIDVehicule" placeholder="XXXXXXXX" name="iIDV">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inModel">Model</label>
              <select class="form-control" id="selectModel" name="iModel" >
                <option>Select Model</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inIDVehicule">Cirrculation Date</label>
              <input type="date" class="form-control" id="inCirrculationDate" name="iCirculationDate" >
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inPhoto">Photo</label>
              <input type="file" class="form-control" id="inCirrculationDate" accept="image/*;capture=camera" name="iPhoto">
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-lg btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-lg btn-primary" onclick="createVehicule()" data-dismiss="modal">Add Vehicule</button>
    </div>
  </div>  
 </div>
</div>
