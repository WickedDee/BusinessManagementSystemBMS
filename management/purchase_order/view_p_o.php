<div class="modal fade" id="view_p_o_<?php echo $fetch['pur_ord_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="p_o_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="p_o_modal_label">VIEW</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
        <div class="row p-2">
        <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Inventory Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 pb-1">
            <div class="col-6">
              <label class="form-label pe-2">Purchase ID :</label>       
              <span style="font-weight: bold"><?php echo $fetch['pur_ord_id']?></span>       
            </div>
            <div class="col-6">
              <label class="form-label pe-2">Order Date :</label>       
              <span style="font-weight: bold"><?php echo date("m-d-Y", strtotime($fetch['order_date']))?></span>       
            </div>
          </div>
          <div class="row gx-3 justify-content-between">
            <div class="col-6 d-inline">
              <label class="form-label pe-2">Status :</label>
              <span style="font-weight: bold"><?php echo $fetch['status']?></span>       
            </div>
            <div class="col-6 d-inline">
              <label class="form-label pe-2">Delivery Date :</label>
              <span style="font-weight: bold"><?php echo date("m-d-Y", strtotime($fetch['del_date']))?></span>       
            </div>
          </div>
          <div class="row gx-3 justify-content-between">
            <div class="col-12 d-inline">
              <label class="form-label pe-2">Supplier :</label>       
              <span style="font-weight: bold"><?php echo $fetch['company']?></span>       
            </div>
          </div>
          <div class="row gx-3 mt-2 pt-2 pb-1" style="background-color:white;border: 1px solid">
            <div class="row">
              <div class="col-12">
                <h4 style="font-family:'Roboto', sans-serif; font-weight:700; letter-spacing:1px; text-align: center">PRO FORMA INVOICE</h4>
              </div>
            </div>
            <div class="row px-0 py-1">
              <div class="container px-4" style="font-size: 12px">
                <div class="row py-1 mx-3 px-0 justify-content-between" style="font-weight:bold">
                  <div class="col-3 text-center">Barcode</div>
                  <div class="col-3 text-center">Price</div>
                  <div class="col-3 text-center">Qty</div>
                  <div class="col-3 text-center">Subtotal</div>
                </div>
                <hr class="my-1">
                <div>
                  <?php
                    $id = $fetch['pur_ord_id'];
                    $total = 0;
                    $subtotal = 0;
                    $query_v = mysqli_query($conn, "SELECT `barcode`, `price`, `qty` FROM `purchase_product`  WHERE `pur_ord_id` = $id"); 
                    while($fetch_v = mysqli_fetch_array($query_v)){
                      echo "<div class='row py-1 mx-3 px-0 justify-content-between'>";
                      echo "<div class='col-3 text-center'>" . $fetch_v['barcode'] . "</div>";
                      echo "<div class='col-3 text-center'> ₱" . $fetch_v['price'] . "</div>";
                      echo "<div class='col-3 text-center'>" . $fetch_v['qty'] . "</div>";
                      $subtotal = $fetch_v['price'] * $fetch_v['qty'];
                      $total += $subtotal;
                      echo "<div class='col-3 text-center'> ₱" . $subtotal . "</div>";
                      echo "</div>";
                    }
                    echo "<div class='row py-1 justify-content-around mx-3' style='font-size: 14px'>" . "<div class='col-7 ms-3 text-end'><b> TOTAL </b></div>" . "<div class='col-2 ps-4 text-center'> ₱".  $total . "</div></div>"
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn text-white" id="send_btn" name="update_p_o_<?php echo $fetch['pur_ord_id']?>" data-bs-toggle="modal" data-bs-target="#update_p_o_<?php echo $fetch['pur_ord_id']?>" style="background-color:#859a41;">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
