<div id="newPeripheriqueModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title">New Peripheral</h2>
    </div>
    <div class="modal-body ">
      <form class="form">
        <div class="form-group">
          <label >Peripheral Type:</label>
          <select class="form-control" onchange="loadNewPeripheralModal()">
            <option>Select Peripheral</option>
            <option>Pupitre</option>
            <option>Ecran</option>
            <option>Interface</option>
            <option>Kit Main Libre</option>
            <option>BusCAN</option>
            <option>Alcoolémie</option>
            <option>Comptage de personne</option>
            <option>RFID</option>
            <option>Chronotachygraphe</option>
          </select>
        </div>
      </form>
      <div id="frmNewPeripheral"></div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-lg btn-default pull-left" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-lg btn-primary">Save Changes</button>
    </div>
  </div>  
 </div>
</div>
