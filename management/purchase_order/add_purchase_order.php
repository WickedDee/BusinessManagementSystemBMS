<div class="modal fade" id="add_p_o_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="p_o__modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="p_o_modal_label">Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body px-4 bg-light">
            <form class="row" method="POST" action="index.php?page=add">
                <div class="row">
                    <div class="col-12">
                        <h4 style="font-family:'Roboto', sans-serif;">Purchase Order Details</h4>
                        <hr/>
                    </div>
                </div>
                <div class="row gx-3 pb-2">
                    <div class="col-5 pe-5">
                        <label for="input_id" class="form-label">Purchase ID</label>
                        <input type="number" class="form-control" id="input_id" name="input_id" value="<?php echo date("d-m-Y")?>" required>
                    </div>
                    <div class="col-4">
                        <label for="input_o_date" class="form-label">Order Date</label>
                        <input type="date" class="form-control" id="input_o_date" name="input_o_date" value="<?php echo date("d-m-Y")?>" required>
                    </div>
                </div>
                <div class="row gx-3 pb-2">
                    <div class="col-5 pe-5">
                        <label for="input_stat" class="form-label">Status</label>
                        <select id="input_stat" name="input_stat" class="form-select" required>
                            <option value="Received">Received</option>
                            <option value="To Receive">To Receive</option>
                            <option value="Cancelled">Cancelled</option>
                        </select> 
                    </div>
                    <div class="col-4">
                        <label for="input_id" class="form-label">Delivery Date</label>
                        <input type="date"  data-date="" data-date-format="mm-dd-yyyy" class="form-control" id="input_del_date" name="input_del_date" value="<?php echo date("m-d-Y")?>" required>
                    </div>
                </div>
                <div class="row gx-3 pb-3">
                    <div class="col-12">
                        <label for="input_company" class="form-label">Company</label>
                        <input type="text" class="form-control" id="input_company" name="input_company" required>
                    </div>
                </div>
                <div class="row gx-3 pt-1 pb-2 m-0">
                    <h5 style="font-family:'Roboto', sans-serif; font-weight:700; letter-spacing:1px">ORDER LIST</h5>
                    <div class="">
                        <div class="row justify-content-between text-center" id="order_table">
                            <div class="col-4 fw-bold">Barcode</div>
                            <div class="col-3 fw-bold">Price</div>
                            <div class="col-2 fw-bold">Qty</div>
                            <div class="col-3 fw-bold">Subtotal</div>
                        </div>
                        <div class="row justify-content-around mt-2" id="order_list">
                            <div class="col-4 m-0 px-1">
                                <input type="text" class="form-control d-inline" id="input_barcode" name="input_barcode" required>
                            </div>
                            <div class="col-3 m-0 px-1">
                                <div class="input-group"> 
                                    <span class="input-group-text">₱</span>
                                    <input type="text" class="form-control d-inline" id="input_price" name="input_price" required>
                                </div>
                            </div>
                            <div class="col-2 m-0 px-1">
                                <input type="text" class="form-control d-inline" id="input_qty" name="input_qty" required>
                            </div>
                            <div class="col-3 m-0 px-1">
                                <div class="input-group"> 
                                    <span class="input-group-text">₱</span>
                                    <input type="text" class="form-control d-inline" id="input_total" name="input_total" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-around">
                            <div class="col-4 pe-3 text-end">
                                <label for="input_total" class="form-label">Total</label>
                            </div>
                            <div class="col-5 m-0 px-1">
                                <div class="input-group"> 
                                    <span class="input-group-text">₱</span>
                                    <input type="text" class="form-control" id="input_total_purchase" name="input_total_purchase" required>
                                </div>
                            </div>
                            <div class="col-3 text-end">
                                <button type="button" class="btn py-2 text-light" style="width: 80px; background-color: #859a41; letter-spacing:2px;" id="add_btn">
                                    Add      
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn text-white" name="add_p_o" type="submit" style="background-color:#859a41">Add Entry</button>
                </div>
            </form>
        </div>      
    </div>
    <script type="text/javascript">
        var i = 1;
        $( "#add_btn" ).click(function() {
            i++;
            $('#order_list').append('<div class="row justify-content-around mx-0 my-1 p-0"><div class="col-4 m-0 px-1"><input type="text" class="form-control d-inline" id="input_company" name="input_company" required></div><div class="col-3 m-0 px-1"><div class="input-group"><span class="input-group-text">₱</span><input type="text" class="form-control d-inline" id="input_company" name="input_company" required></div></div><div class="col-2 m-0 px-1"><input type="text" class="form-control d-inline" id="input_company" name="input_company" required></div><div class="col-3 m-0 px-1"><div class="input-group"><span class="input-group-text">₱</span><input type="text" class="form-control d-inline" id="input_company" name="input_company" required></div></div></div></div>'); 
        });
    </script>
</div>