<div class="modal fade" id="update_customer_<?php echo $fetch['customer_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="customer_modal_label" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#859a41">
        <h5 class="modal-title" id="customer_modal_label" style="font-family: 'Roboto', sans-serif; font-size:20px; color: white; letter-spacing:1px">Update Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
      <form class="row g-3 p-2 justify-content-start" id="add_customer_form" method="POST" action="index.php?page=update">
          <div class="row">
            <h4 style="font-family:'Roboto', sans-serif;">Customer Details</h4>
            <hr>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-sm-6">
              <label for="id" class="form-label">Customer ID</label>
              <input class="form-control" id="input_id" name="input_id" value="<?php echo $fetch['customer_id']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-2">
            <div class="col-12">
              <label for="input_customer" class="form-label">Customer Name</label>
              <input type="text" class="form-control" id="input_customer" name="input_customer" value="<?php echo $fetch['cname']?>" required>
            </div>
          </div>
          <div class="row gx-3 pb-2">
            <div class="col-12">
              <label for="input_address" class="form-label">Address</label>
              <input type="text" class="form-control" id="input_address" name="input_address" row="3" value="<?php echo $fetch['address']?>" required>
            </div>
          </div>
          <div class="row gx-3 pb-2">
            <div class="col-md-6">
              <label for="input_Cnumber" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="input_contact_number" name="input_contact_number" value="<?php echo $fetch['contact_number']?>" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button class="btn text-white" name="update_customer" type="submit" style="background-color:#859a41">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
