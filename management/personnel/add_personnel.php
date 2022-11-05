<div class="modal fade" id="add_personnel_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="personnel_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personnel_modal_label">Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
        <form class="row" action="index.php?page=add" method="POST"> 
        <div class="row justify-content-between">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Personnel Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row pb-3">
            <div class="col-3">
              <label for="input_id" class="form-label">ID</label>
              <input type="number" class="form-control" id="input_id" name="input_id" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-9 pe-4">
              <div class="row justify-content-between">
                <div class="col-5">
                  <label for="input_first_name" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="input_first_name" name="input_first_name"  required>
                </div>
                <div class="col-5">
                  <label for="input_last_name" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="input_last_name" name="input_last_name" required>
                </div>
                <div class="col-2">
                  <label for="input_mid_name" class="form-label">M I</label>
                  <input type="text" class="form-control" id="input_mid_name" name="input_mid_name" required>
                </div>
              </div>
            </div>
            <div class="col-3">
              <label for="input_sex" class="form-label">Sex</label>
              <select id="input_sex" name="input_sex" class="form-select" required>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
              </select>            
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="input_address" class="form-label">Address</label>
              <input type="text" class="form-control" id="input_address" name="input_address" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-12">
              <label for="input_email_address" class="form-label">Email Address</label>
              <input class="form-control" type="email" id="input_email_address" name="input_email_address" required>
            </div>
          </div>
          <div class="row gx-3 pb-3 justify-content-between">
            <div class="col-md-4">
              <label for="input_contact_number" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="input_contact_number" name="input_contact_number" required>
            </div>
            <div class="col-md-4">
              <label for="input_hired_date" class="form-label">Hired Date</label>
              <input type="date" class="form-control" id="input_hired_date" name="input_hired_date" required>
            </div>
            <div class="col-md-3">
              <label for="input_position" class="form-label">Position</label>
              <select class="form-select form-select" id="input_position" name="input_position" required>
                <?php
                  $position = array("Admin","Management", "Sales");
                  foreach($position as $cat){
                    echo "<option value='$cat'>$cat</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button class="btn savebtn text-white" name="add_personnel" style="background-color:#859a41">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
