<div class="modal fade" id="add_product_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="product_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="product_modal_label">ADD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
        <form class="row justify-content-around" action="index.php?page=add" method="POST">
          <div class="row">
            <div class="row">
              <div class="col-12">
                <h4 style="font-family:'Roboto', sans-serif;">Inventory Details</h4>
                <hr/>
              </div>
            </div>
          </div>
          <div class="row pb-3">
            <div class="col-sm-6">
              <label for="input_barcode" class="form-label">Barcode</label>
              <input type="number" class="form-control" id="input_barcode" name="input_barcode" required>
            </div>
            <div class="col-6">
              <label for="input_exp" class="form-label">Expiration</label>
              <input type="date" class="form-control" value="MM-dd-yyyy" id="input_exp" name="input_exp" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-12">
              <label for="input_product_name" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="input_product_name" name="input_product_name" required>
            </div>
          </div>
          <div class="row pb-3">
            <div class="col-6">
              <label for="input_category" class="form-label">Category</label>
              <select class="form-select" id="input_category" name="input_category" required>
                <?php
                  $category = array("Beverages", "Bread/Bakery", "Canned/Jarred Goods", "Cleaners", "Dairy", "Dry/Baking Goods", "Frozen Foods", "Paper Goods", "Personal Care", "Produce", "Snacks", "Other");
                  foreach($category as $cat){
                    echo "<option value='$cat'>$cat</option>";
                  }
                ?>
              </select>
            </div>
            <div class="col-3">
              <label for="input_qty" class="form-label">Quantity</label>
              <input type="number" class="form-control" id="input_qty" name="input_qty" placeholder="0" required>
            </div>
          </div>
          <div class="row gx-3 pb-3">
            <div class="col-6">
              <label for="input_p_price" class="form-label">Purchase Unit Price</label>
              <div class="input-group"> 
                <span class="input-group-text">???</span>
                <input type="text" class="form-control" id="input_p_price" name="input_p_price" required>
              </div>
            </div>
            <div class="col-6">
              <label for="input_s_price" class="form-label">Selling Unit Price</label>
              <div class="input-group"> 
                <span class="input-group-text">???</span>
                <input type="text" class="form-control" id="input_s_price" name="input_s_price" required>
              </div>
            </div>
          </div> 
          <div class="modal-footer" >
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button class="btn savebtn text-white" name="add_inventory" style="background-color:#859a41">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
