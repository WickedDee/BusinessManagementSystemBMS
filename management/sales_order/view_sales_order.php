<div class="modal fade " id="view_sales_<?php echo $fetch['reciept_no']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="s_o_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
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
            <div class="col-6">
              <label class="form-label pe-2">Purchase ID :</label>       
              <span style="font-weight: bold"><?php echo $fetch['reciept_no']?></span>       
            </div>
            <div class="col-6">
              <label class="form-label pe-2">Time & Date :</label>       
              <span style="font-weight: bold"><?php echo $date->format('H:ia  m-d-Y')?></span>       
            </div>
          </div>
          <div class="row gx-3 justify-content-between">
            <div class="col">
              <label class="form-label pe-2">Personnel :</label>       
              <span style="font-weight: bold"><?php echo $fetch['personnel']?></span>       
            </div>
          </div>
          <div class="row gx-3 mt-1 justify-content-between">
            <div class="col">
              <label class="form-label pe-2">Customer :</label>       
              <span style="font-weight: bold"><?php echo $fetch['cname']?></span>       
            </div>
          </div>
          <div class="row gx-3 mt-2 py-4 ms-1" id="invoice_form" style="background-color:white;border: 1px solid">
            <div class="row">
              <h4 style="font-family:'Roboto', sans-serif; font-weight:700; letter-spacing:1px; text-align: center">SALES RECEIPT</h4>
            </div>
            <div class="row px-0 py-1">
              <div class="container px-4" style="font-size: 12px">
                <div class="row py-1 mx-3 px-0 justify-content-between" style="font-weight:bold">
                  <div class="col-3 text-center">Barcode</div>
                  <div class="col-3 text-center">Qty</div>
                  <div class="col-3 text-center">Price</div>
                  <div class="col-3 text-center">Subtotal</div>
                </div>
                <hr class="my-1">
                <div>
                  <?php
                    $id = $fetch['reciept_no'];
                    $total =0;
                    $subtotal=0;
                    $query_v = mysqli_query($conn, "SELECT sp.reciept_no , p.barcode , sp.price , sp.qty FROM `sales_product` sp JOIN `product` p ON p.product_id = sp.product_id WHERE sp.reciept_no = '$id';"); 
                    while($fetch_v = mysqli_fetch_array($query_v)){ 
                      echo "<div class='row py-1 mx-3 px-0 justify-content-between'>";
                        echo "<div class='col-3 text-center'>" . $fetch_v['barcode'] . "</div>";
                        echo "<div class='col-3 text-center'>" . $fetch_v['qty'] . "</div>";
                        echo "<div class='col-3 text-center'> ₱" . $fetch_v['price'] . "</div>";
                        $subtotal = $fetch_v['price'] * $fetch_v['qty'];
                        $total += $subtotal;
                        echo "<div class='col-3 text-center'> ₱" . $subtotal . "</div>";
                      echo "</div>";
                    }
                    echo "<div class='row py-1 justify-content-around mx-3' style='font-size: 14px'>" . "<div class='col-7 ms-3 text-end'><b> TOTAL </b></div>" . "<div class='col-2 ps-4 text-center'> ₱".  $total . "</div>"
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
