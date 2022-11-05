<div class="modal fade" id="update_personnel_<?php echo $fetch['personnel_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="supplier_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personnel_modal_label">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
      <form class="row" id="update_supplier_form" method="POST" action="index.php?page=update">
        <div class="row">
          <div class="col-12">
            <h4 style="font-family:'Roboto', sans-serif;">Personnel Details</h4>
            <hr/>
          </div>
        </div>
        <div class="row pb-3">
          <div class="col-3">
            <label for="id" class="form-label "> Personnel ID</label>
            <input type="number" class="form-control" id="input_id" name="input_id" value="<?php echo $fetch['personnel_id']?>" readonly>
          </div>
        </div>
        <div class="row gx-3 pb-3">
          <div class="col-9 pe-4">
            <div class="row justify-content-between">
              <div class="col-5">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="input_first_name" name="input_first_name" value="<?php echo $fetch['fname']?>" required>
              </div>
              <div class="col-5">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="input_last_name" name="input_last_name" value="<?php echo $fetch['lname']?>" required>
              </div>
              <div class="col-2">
                <label for="mid_name" class="form-label">M I</label>
                <input type="text" class="form-control" id="input_mid_name" name="input_mid_name" value="<?php echo $fetch['mname']?>" required>
              </div>
            </div>
          </div>
          <div class="col-3">
            <label for="sex" class="form-label">Sex</label>
            <select id="input_sex" name="input_sex" class="form-select" required>
              <?php 
                $option_sx [0] = "<option value='Female'>Female</option>";
                $option_sx [1] = "<option value='Male'>Male</option>";

                switch($fetch['sex']){
                  case "Female":
                    echo $option_sx [0] . $option_sx [1];
                    break;
                  case "Male":
                    echo $option_sx [1] . $option_sx [0];
                    break;
                  default:
                    echo $option_sx [0] . $option_sx [1];
                    break;
                }
              ?>   
            </select>
          </div>
        </div>
        <div class="row gx-3 pb-3">
          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="input_address" name="input_address" value="<?php echo $fetch['address']?>" required>
          </div>
        </div>
        <div class="row gx-3 pb-3">
          <div class="col-md-12">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="input_email_address" name="input_email_address" value="<?php echo $fetch['email']?>" required>
          </div>
        </div>
        <div class="row gx-3 pb-3">
          <div class="col-md-4">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="number" class="form-control" id="input_contact_number" name="input_contact_number" value="<?php echo $fetch['contact_number']?>" required>
          </div>
          <div class="col-md-4">
            <label for="hired_date" class="form-label">Hired Date</label>
            <input type="date" class="form-control" id="input_hired_date" name="input_hired_date" value="<?php echo $fetch['hired_date']?>" required>
          </div>
          <div class="col-md-3">
            <label for="input_position" class="form-label">Position</label>
            <select class="form-select form-select" id="input_position" name="input_position" required>
              <?php 
                $option_pos [0] = "<option value='Admin'>Admin</option>";
                $option_pos [1] = "<option value='Management'>Management</option>";
                $option_pos [2] = "<option value='Sales'>Sales</option>";

                switch($fetch['position']){
                  case "Admin":
                    echo $option_pos [0] . $option_pos [1] . $option_pos [2];
                    break;
                  case "Management":
                    echo $option_pos [1] . $option_pos [0] . $option_pos [2];
                    break;
                  case "Sales":
                    echo $option_pos [2] . $option_pos [0] . $option_pos [1];
                    break;
                  default:
                  echo $option_pos [0] . $option_pos [1] . $option_pos [2];
                    break;
                }
              ?>
              </select>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button class="btn text-white" name="update_personnel" type="submit" style="background-color:#859a41">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
