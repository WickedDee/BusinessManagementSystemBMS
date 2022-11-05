<div class="modal fade" id="view_product_<?php echo $fetch['barcode']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="product_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="product_modal_label">VIEW</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
        <div class="row p-2">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Product Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-sm-6">
              <label for="barcode" class="form-label">Barcode</label>
              <input class="form-control" id="barcode" name="barcode" value="<?php echo $fetch['barcode']?>" readonly>
            </div>
            <div class="col-6">
              <label for="category" class="form-label">Category</label>
              <input class="form-control" id="category" name="category" value="<?php echo $fetch['category']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="product_name" class="form-label">Product Name</label>
              <input class="form-control" id="product_name" name="product_name" value="<?php echo $fetch['product_name']?>" readonly>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-6">
              <label for="p_price" class="form-label">Purchase Unit Price</label>
              <div class="input-group"> 
                <span class="input-group-text">₱</span>
                <input class="form-control" id="p_price" name="p_price" value="<?php echo $fetch['purchase_unit_price']?>" readonly>
              </div>
            </div>
            <div class="col-6">
              <label for="s_price" class="form-label">Selling Unit Price</label>
              <div class="input-group"> 
                <span class="input-group-text">₱</span>
                <input class="form-control" id="s_price" name="s_price" value="<?php echo $fetch['selling_unit_price']?>" readonly>
              </div>
            </div>
          </div> 
      </div>
      <div class="modal-footer" >
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
