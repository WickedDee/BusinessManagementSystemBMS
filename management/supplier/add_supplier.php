<div class="modal fade" id="add_supplier_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="supplier_modal_label" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="supplier_modal_label">Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
      <form class="row" id="add_customer_form" method="POST" action="index.php?page=add">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Supplier Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-sm-6">
              <label for="input_id" class="form-label">Supplier ID</label>
              <input type="number" class="form-control" id="input_id" name="input_id" required>
            </div>
          </div>
          <div class="row gx-3 pb-2">
            <div class="col-12">
              <label for="input_company" class="form-label">Company</label>
              <input type="text" class="form-control" id="input_company" name="input_company" required>
            </div>
          </div>
          <div class="row gx-3 pb-2">
            <div class="col-12">
              <label for="input_address" class="form-label">Address</label>
              <input type="text" class="form-control" id="input_address" name="input_address" row="3" required>
            </div>
          </div>
          <div class="row gx-3 pb-2">
            <div class="col-md-6">
              <label for="input_Cnumber" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="input_contact_number" name="input_contact_number" required>
            </div>
          </div>
          <div class="modal-footer">
          <!-- <button type="button" id="submit_btn">POST</button> -->
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button class="btn text-white" name="add_supplier" type="submit" style="background-color:#859a41">Add Entry</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
