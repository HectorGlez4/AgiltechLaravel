<div id="editVehiculeModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title">Edit Vehicule</h2>
    </div>
    <div class="modal-body">
      <form id="frmEditVehicule" enctype="multipart/form-data">
        <input id="editVehiculeID" type="hidden" name="iVehiculeID">
        <input type="hidden" class="token" name="_token" value="{{csrf_token()}}">
        <input type="hidden" id="editClient" name="iClient" value="">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inRegistration">Registration</label>
              <input type="text" class="form-control" id="editRegistration" placeholder="XX-XXX-XXX" name="iRegistration">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inBrand">Brand</label>
              <select class="form-control" id="editBrand" onchange="loadVehiculeModelEdit()" name="iBrand">
                <opotion>Select Brand</opotion>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inIDVehicule">ID Vehicule</label>
              <input type="text" class="form-control" id="editIDVehicule" placeholder="XXXXXXXX" name="iIDV">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inModel">Model</label>
              <select class="form-control" id="editModel" name="iModel" >
                <option>Select Model</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inIDVehicule">Cirrculation Date</label>
              <input type="date" class="form-control" id="editCirrculationDate" name="iCirculationDate" >
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="inPhoto">Photo</label>
              <img src="" style="height:175px;width:100%;" id="previewPhoto" class="img img-responsive"><br>
              <input type="file" class="form-control" id="editPhoto" accept="image/*;capture=camera" name="iPhoto">
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-lg btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-lg btn-primary" onclick="updateVehicule()" data-dismiss="modal">Update Vehicule</button>
    </div>
  </div>  
 </div>
</div>
