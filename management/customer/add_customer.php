<body>
<div class="modal fade" id="add_customer_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="customer_modal_label" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#859a41">
        <h5 class="modal-title" id="customer_modal_label" style="font-family: 'Roboto', sans-serif; font-size:20px; color: white; letter-spacing:1px">Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
      <form class="row g-3 p-2 justify-content-start" id="add_customer_form" method="POST" action="index.php?page=add">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Customer Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-sm-6">
              <label for="input_id" class="form-label">Customer ID</label>
              <input type="number" class="form-control" id="input_id" name="input_id" required>
            </div>
          </div>
          <div class="row gx-3 pb-2">
            <div class="col-12">
              <label for="input_customer" class="form-label">Customer Name</label>
              <input type="text" class="form-control" id="input_customer" name="input_customer" required>
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
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button class="btn text-white" name="add_customer" type="submit" style="background-color:#859a41">Add Entry</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
