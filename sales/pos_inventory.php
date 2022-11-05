<?php
    include '../database/conn.php';
    include '../header.php';
    include 'topbar.php';
?>
<body class="container-fluid m-0 p-0 w-100 h-100" style="background-color:#54642d; font-family: 'Roboto', sans-serif">
    <div class="row bg-light m-3">
            <div class="row text-center m-0 py-2" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:20px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">INVENTORY</h5>
            </div>
                


            <div class="row" style="height:275px">
            <table class="table table-bordered row-border table-hover px-0 m-0" id="datatableid" style="height: 30px">
                    <thead class="py-1">
                        <tr>
                        <th id="id-val" class="text-center">#</th>
                            <th id="id-val" class="text-center">Barcode</th>
                            <th id="long-val" class="text-center">Selling Unit Price</th>
                            <th id="long-val" class="text-center">Expiration</th>
                            <th id="long-val" class="text-center">Quantity</th>
                            <th id="long-val" class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody id="row_data" style="font-size:14px">
                        <?php
                            $i = 1;
                            $query  = mysqli_query($conn, "SELECT `product_id`, `barcode`, `product_name`, `category`, `purchase_unit_price`, `selling_unit_price`, `expiration`, `quantity` FROM `product`");
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td class="num text-center" id="id-val" style="width:3%"><?php echo $i++ ?></td>
                            <td id="id-val" style="width:12%; text-align: center"><?php echo $fetch['barcode']?></td>
                            <td id="ave-val" style="width:12%"><?php echo $fetch['selling_unit_price'];?></td>
                            <td id="ave-val" style="width:12%; text-align: center"><?php echo date("m-d-Y", strtotime($fetch['expiration']));?></td>
                            <td id="ave-val" style="width:8%"><?php echo $fetch['quantity'];?></td>
                            <td id="ave-val" style="width:10%; text-align: center">
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
                        </tr>
                            <?php 
                                }
                                mysqli_free_result($query);
                            ?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
    <?php include '../footer.php'?>
</body>
