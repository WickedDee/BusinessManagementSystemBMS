<div class="modal fade" id="update_p_o_<?php echo $fetch['pur_ord_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="p_o_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="p_0_modal_label">UPDATE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 bg-light">
        <form class="row justify-content-around" action="index.php?page=update" method="POST">
          <div class="row">
            <div class="col-12">
              <h4 style="font-family:'Roboto', sans-serif;">Purchase Order Details</h4>
              <hr/>
            </div>
          </div>
          <div class="row gx-3 pb-1">
            <div class="col-6">
              <label class="form-label pe-2 d-inline">Purchase ID :</label>   
              <input class="d-inline bg-light" id="input_id" name="input_id" value="<?php echo $fetch['pur_ord_id']?>" style="border:none; font-size:14px; font-weight: bold; width:120px" readonly>            
            </div>
            <div class="col-6">
              <label class="form-label pe-2">Order Date :</label>       
              <span style="font-weight: bold"><?php echo date("m-d-Y", strtotime($fetch['order_date']))?></span>       
            </div>
          </div>
          <div class="row gx-3 justify-content-between">
            <div class="col-6 d-inline">
              <label class="form-label pe-2 d-inline">Status :</label>  
              <select id="input_stat" name="input_stat" class="d-inline form-select" style="font-size:14px; font-weight: bold; width:150px" required>
                <?php 
                $option_stat [0] = "<option value='Received'>Received</option>";
                $option_stat [1] = "<option value='To Receive'>To Receive</option>";
                $option_stat [2] = "<option value='Cancelled'>Cancelled</option>";
                switch($fetch['status']){
                  case "Received":
                    echo $option_stat [0] . $option_stat [1] . $option_stat [2];
                    break;
                  case "To Receive":
                    echo $option_stat [1] . $option_stat [0] . $option_stat [2];
                    break;
                  case "Cancelled":
                    echo $option_stat [2] . $option_stat [0] . $option_stat [1];
                    break;
                  }
                ?>
              </select>
            </div>
            <div class="col-6 d-inline">
              <label class="form-label pe-2">Delivery Date :</label>       
              <span style="font-weight: bold"><?php echo date("m-d-Y", strtotime($fetch['del_date']))?></span>       
            </div>
          </div>
          <div class="row gx-3 mt-3 justify-content-between">
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
            <button class="btn text-white" name="update_p_o" type="submit" style="background-color:#859a41">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
