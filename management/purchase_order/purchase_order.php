<body id="main">
    
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">PURCHASE INVENTORY</h5>
            </div>
        </div>
        <div class="card-body ps-3 pe-0 mx-0">
            <div class="row justify-content-end p-0 m-0 w-100">
                <div class="col-auto mx-0 px-0 py-1">
                <?php include 'add_purchase_order.php';?>
                </div>
                <div class="col-auto pt-0 pe-1">
                    <button type="button" class="btn py-2" style="margin-right: 20px; width: 178px; background-color: #859a41; font-size:16px; letter-spacing:2px; color: white;" data-bs-toggle="modal" data-bs-target="#add_p_o_modal">
                        Add Entry          
                    </button>
                </div>
            </div>
            <div class="row pe-3 px-0 pt-2">
                <div class="table-responsive">
                    <table class="table table-bordered row-border table-hover px-0 m-0 w-100" id="datatableid">
                        <thead class="py-3">
                            <tr>
                                <th id="id-val" class="text-center">Purchase ID</th>
                                <th id="long-val" class="text-center">Supplier</th>
                                <th id="ave-val" class="text-center">Order Date</th>
                                <th id="ave-val" class="text-center">Total</th>
                                <th id="ave-val" class="text-center">Delivery Date</th>
                                <th id="ave-val" class="text-center">Status</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $query  = mysqli_query($conn, "SELECT po.`pur_ord_id`, s.`company`, po.`order_date`, po.`total`, po.`del_date`, pd.status FROM `purchase_order` po JOIN `supplier` s ON s.supplier_id = po.supplier_id JOIN `purchase_del` pd ON pd.order_code = po.pur_ord_id;");
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="num text-center" id="id-val" style="width:7%"><?php echo $fetch['pur_ord_id'] ?></td>
                                <td id="long-val" style="width:20%"><?php echo $fetch['company'];?></td>
                                <td id="ave-val" style="width:8%; text-align: center"><?php echo date("m-d-Y", strtotime($fetch['order_date']));?></td>
                                <td id="ave-val" style="width:8%"><?php echo $fetch['total'];?></td>
                                <td id="ave-val" style="width:8%; text-align: center"><?php echo date("m-d-Y", strtotime($fetch['del_date']));?></td>
                                <td id="ave-val" style="width:8%;text-align:center" >
                                    <?php
                                        $stat = $fetch['status']; 
                                        switch($stat){
                                            case 'Received':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color: #b9da4fd5;" id="badge"><?php echo $fetch['status'];?></span><?php
                                                break;
                                            case 'To Receive':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color: #7bc0e7cc;" id="badge"><?php echo $fetch['status'];?></span><?php
                                                break;
                                                case 'Cancelled':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color: #afafafbe;" id="badge"><?php echo $fetch['status'];?></span><?php
                                                break;
                                        }
                                    ?>
                                </td>
                                <td id="act-val" class="text-center px-2 pt-2" style="width:6%">
                                    <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_p_o_<?php echo $fetch['pur_ord_id']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                </td>
                            </tr>
                            <?php 
                                include 'view_p_o.php';
                                include 'update_p_o.php';
                                }        
                            ?>
                            <?php mysqli_free_result($query);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

	