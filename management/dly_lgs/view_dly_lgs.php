<div class="modal fade " id="view_dly_lgs_<?php echo $fetch['log_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="s_o_modal_label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="s_o_modal_label">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
        <div class="container container-fluid g-3 p-2 justify-content-start" id="view_s_o_form">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Sale Order Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 justify-content-between">
            <div class="col">
              <label class="form-label pe-2">Log ID :</label>       
              <span style="padding-left: 25;font-weight: bold"><?php echo $fetch['log_id']?></span>       
            </div>
            <div class="col">
              <label class="form-label pe-2">Date :</label>       
              <span style="font-weight: bold; word-spacing:10"><?php $date = new DateTimeImmutable($fetch['log_time']); echo $date->format('m-d-Y H:i:s'); ?></span>       
            </div>
          </div>
          <div class="row gx-3 justify-content-between">
            <div class="col">
              <label class="form-label pe-2">Personnel :</label>       
              <span style="font-weight: bold"><?php echo $fetch['personnel_id']?></span>       
            </div>
          </div>
          <div class="row gx-3 justify-content-between">
            <div class="col">
              <label class="form-label pe-2">Action :</label>       
              <span style="padding-left: 25;font-weight: bold"><?php echo $fetch['purpose']?></span>       
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
