<div id="TechnicianManagerModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title">Technician Manager</h2>
    </div>
    <div  class="modal-body ">
      <div class="row">
        <div class="col-sm-5">
          <h3>Included</h3>
        </div>
        <div class="col-sm-2">
          
        </div>
        <div class="col-sm-5">
          <h3>Not Included</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div id="technicianIncludedList" class="list-group">
            <button class="list-group-item">Michael Berteloot</button>
          </div>
        </div>
        <div class="col-sm-2 text-center">
          <button><span style="color:#337ab7;font-size:2.5em;" class="glyphicon glyphicon-arrow-left"></span></button>
          <br>
          <br>
          <button><span style="color:#337ab7;font-size:2.5em;" class="glyphicon glyphicon-arrow-right"></span></button>
        </div>
        <div class="col-sm-5">
          <div id="technicianNotIncludedList" class="list-group">
            <button onclick="toggleTechnicianManager()" class="list-group-item">Marc Deldem</button>
            <button class="list-group-item">Mathieu Coulon</button>
            <button class="list-group-item">Sebastien Lasson</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-lg btn-default pull-left" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-lg btn-primary">Save Changes</button>
    </div>
  </div>  
 </div>
</div>
