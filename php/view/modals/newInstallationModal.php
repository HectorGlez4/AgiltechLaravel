<div id="newInstallationModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title">New Installation <small id="niSubTitle"></small>  </h2>
    </div>
    <div id="copyInstallation" class="modal-body hidden">
      <h3>Select Vehicule to copy installation</h3>
      <div class="row">
            <div class="col-xs-12">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                  <thead >
                    <tr>
                      <th>ID</th>
                      <th>Registration</th>
                      <th>ID Vehicule</th>
                      <th>Brand</th>
                      <th>Model</th>
                    </tr>
                  </thead>
                  <tbody id="tbVehicules2" data-link="row" class="rowlink">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-lg btn-default pull-left" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-lg btn-warning" onclick="copyInstallation()"
      >Copy Installation</button>
        <button type="button" class="btn btn-lg btn-primary">New Installation</button>
    </div>
  </div>  
 </div>
</div>
