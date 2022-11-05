<body id="main">
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">INVENTORY</h5>
            </div>
        </div>
        <div class="card-body ps-3 pe-0 mx-0">
            <div class="row justify-content-between px-0 pb-2 m-0 w-100">
                <div class="col-auto mx-0 py-1">
                </div>
                <div class="col-auto pt-0 pe-1">
                    <button type="button" class="btn py-2" style="margin-right: 20px; width: 178px; background-color: #859a41; font-size:16px; letter-spacing:2px; color: white;" data-bs-toggle="modal" data-bs-target="#add_product_modal">
                        Add Entry          
                    </button>
                </div>
            </div>
            <div class="row px-3 pt-2">
                <div class="table-responsive">      
                    <table class="table table-bordered row-border table-hover px-0 m-0 w-100" id="datatableid">
                        <thead class="py-3">
                            <tr>
                            <th id="id-val" class="text-center">#</th>
                                <th id="id-val" class="text-center">Barcode</th>
                                <th id="long-val" class="text-center">Selling Unit Price</th>
                                <th id="long-val" class="text-center">Expiration</th>
                                <th id="long-val" class="text-center">Quantity</th>
                                <th id="long-val" class="text-center">Status</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $i = 1;
                                $query  = mysqli_query($conn, "SELECT `product_id`, `barcode`, `product_name`, `category`, `purchase_unit_price`, `selling_unit_price`, `expiration`, `quantity` FROM `product`");
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="num text-center" id="id-val" style="width:3%"><?php echo $i++ ?></td>
                                <td id="id-val" style="width:8%; text-align: center"><?php echo $fetch['barcode']?></td>
                                <td id="ave-val" style="width:8%"><?php echo $fetch['selling_unit_price'];?></td>
                                <td id="ave-val" style="width:8%; text-align: center"><?php echo date("m-d-Y", strtotime($fetch['expiration']));?></td>
                                <td id="ave-val" style="width:5%"><?php echo $fetch['quantity'];?></td>
                                <td id="ave-val" style="width:8%; text-align: center">
                                    <?php
                                        $Date =date("Y-m-d") ;
                                        //Expired Products
                                        if (($fetch['expiration'] <= $Date) && ($fetch['quantity'] > 0)){
                                            ?><span class="badge badge-pill p-2 m-0" style="background-color:#ff4a4ac4;" id="badge">Expired</span><?php
                                        }else if($fetch['quantity'] <= 0){
                                            //Quantity <= 0
                                            ?><span class="badge badge-pill p-2 m-0" style="background-color:#afafafbe;" id="badge">Not Available</span><?php
                                        }else if(($fetch['expiration'] > $Date) && ($fetch['quantity'] <= 10)){
                                            //Quantity <= 10
                                            ?><span class="badge badge-pill p-2 m-0" style="background-color:#ffe057e0;" id="badge">Depleting</span><?php
                                        }else if(($fetch['expiration'] == date('Y-m-d', strtotime($Date. ' + 2 days')))){
                                            //About to expire
                                            ?><span class="badge badge-pill p-2 m-0" style="background-color:#ff9532c5;" id="badge">About to Expire</span><?php
                                        }else if(($fetch['expiration'] > $Date) && ($fetch['quantity'] > 10)){
                                            //Quantity <= 10
                                            ?><span class="badge badge-pill p-2 m-0" style="background-color: #b9da4fd5;" id="badge">Available</span><?php
                                        }
                                    ?>
                                </td>
                                <td id="act-val" class="text-center px-2 pt-2" style="width:5%">
                                    <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_inventory_<?php echo $fetch['barcode']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                </td>
                            </tr>
                                <?php 
                                    include 'view_inventory.php';
                                    include 'update_inventory.php';
                                }                                
                                ?>
                                <?php 
                                    mysqli_free_result($query);
                                    include 'add_inventory.php';
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

	