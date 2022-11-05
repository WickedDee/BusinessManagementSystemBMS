<div class="modal fade" id="view_personnel_<?php echo $fetch['personnel_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="personnel_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personnel_modal_label">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
        <div class="row p-2">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Personnel Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row pb-3">
            <div class="col-3">
              <label for="id" class="form-label "> Personnel ID</label>
              <input class="form-control" id="id" name="id" value="<?php echo $fetch['personnel_id']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-9 pe-4">
              <div class="row justify-content-between">
              <div class="col-5">
                <label for="first_name" class="form-label">First Name</label>
                <input class="form-control" id="first_name" name="first_name" value="<?php echo $fetch['fname']?>" readonly>
              </div>
              <div class="col-5">
                <label for="last_name" class="form-label">Last Name</label>
                <input class="form-control" id="last_name" name="last_name" value="<?php echo $fetch['lname']?>" readonly>
              </div>
              <div class="col-2">
                <label for="mid_name" class="form-label">M I</label>
                <input class="form-control" id="mid_name" name="mid_name" value="<?php echo $fetch['mname']?>" readonly>
              </div>
              </div>
            </div>
            <div class="col-3">
              <label for="sex" class="form-label">Sex</label>
              <input id="sex" name="sex " class="form-control" value="<?php echo $fetch['sex']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input class="form-control" id="address" name="address" value="<?php echo $fetch['address']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-12">
              <label for="email_address" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email_address" name="email_address" value="<?php echo $fetch['email']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3 justify-content-between">
            <div class="col-md-4">
              <label for="contact_number" class="form-label">Contact Number</label>
              <input class="form-control" id="contact_number" name="contact_number" value="<?php echo $fetch['contact_number']?>" readonly>
            </div>
            <div class="col-md-4">
              <label for="hired_date" class="form-label">Hired Date</label>
              <input class="form-control" id="hired_date" name="hired_date" value="<?php echo $fetch['hired_date']?>" readonly>
            </div>
            <div class="col-md-3">
              <label for="position" class="form-label">Position</label>
              <input id="position" name="position" class="form-control" value="<?php echo $fetch['position']?>" readonly>
            </div>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn text-white" id="send_btn" name="update_personnel" data-bs-toggle="modal" data-bs-target="#update_personnel_<?php echo $fetch['personnel_id']?>" style="background-color:#859a41;">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
