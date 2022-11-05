<div class="modal fade" id="update_supplier_<?php echo $fetch['supplier_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="supplier_modal_label" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="supplier_modal_label">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
      <form class="row" id="update_supplier_form" method="POST" action="index.php?page=update">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Supplier Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row pb-3">
            <div class="col-sm-6">
              <label for="input_id" class="form-label">Supplier ID</label>              
              <input type="number" class="form-control" id="input_id" name="input_id" value="<?php echo $fetch['supplier_id']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="input_company" class="form-label">Company</label>
              <input type="text" class="form-control" id="input_company" name="input_company" value="<?php echo $fetch['company']?>" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="input_address" class="form-label">Address</label>
              <input type="text" class="form-control" id="input_address" name="input_address" value="<?php echo $fetch['address']?>" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-6">
              <label for="input_contact_number" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="input_contact_number" name="input_contact_number" value="<?php echo $fetch['contact_number']?>" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button class="btn text-white" name="update_supplier" type="submit" style="background-color:#859a41">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
