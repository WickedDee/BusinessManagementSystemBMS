<div class="modal fade" id="add_account_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="account_modal_label" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="account_modal_label">Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
      <form class="row g-3 p-2 justify-content-start" id="add_account_form" method="POST" action="index.php?page=add">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Account Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-6">
              <label for="input_id" class="form-label"> Account ID</label>
              <input type="number" class="form-control" id="input_id" name="input_id" required>
            </div>
              <div class="col-6">
              <label for="input_p_id" class="form-label">Personnel ID</label>
              <input type="number" class="form-control" id="input_p_id" name="input_p_id">
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-12">
              <label for="input_email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="input_email" name="input_email" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-12">
              <label for="input_username" class="form-label">Username</label>
              <input type="text" class="form-control" id="input_username" name="input_username" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-12">
              <label for="input_password" class="form-label">Password</label>
              <input type="password" class="form-control" id="input_password" name="input_password" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-12">
              <label for="input_c_password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="input_c_password" name="input_c_password" required>
            </div>
          </div>
          <div class="modal-footer">
          <!-- <button type="button" id="submit_btn">POST</button> -->
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>            
            <button class="btn text-white" name="add_account" type="submit" style="background-color:#859a41">Add Entry</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

