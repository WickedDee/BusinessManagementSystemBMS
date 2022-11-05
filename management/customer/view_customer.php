<div class="modal fade" id="view_customer_<?php echo $fetch['customer_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="customer_modal_label" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="customer_modal_label">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
      <div class="row">
      <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Customer Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-sm-6">
              <label for="id" class="form-label">Customer ID</label>
              <input class="form-control" id="id" name="id" value="<?php echo $fetch['customer_id']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="customer" class="form-label">Customer Name</label>
              <input class="form-control" id="customer" name="customer" value="<?php echo $fetch['cname']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input class="form-control" id="address" name="address" row="3" value="<?php echo $fetch['address']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-md-6">
              <label for="contact_number" class="form-label">Contact Number</label>
              <input class="form-control" id="contact_number" name="contact_number" value="<?php echo $fetch['contact_number']?>" readonly>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>            
            <button type="button" class="btn savebtn text-white" name="update_personnel" data-bs-toggle="modal" data-bs-target="#update_customer_<?php echo $fetch['customer_id']?>" style="background-color:#859a41">Update</button>
          </div>
</div>
    </div>
    </div>
  </div>
</div>


