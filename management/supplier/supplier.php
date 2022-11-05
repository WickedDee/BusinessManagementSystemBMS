<body id="main">
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">SUPPLIER</h5>
            </div>
            <div class="card-body ps-3 pe-0 mx-0">
            <div class="row justify-content-between px-0 pb-2 m-0 w-100">
                <div class="col-auto mx-0 py-1">
                </div>
                <div class="col-auto pt-0 pe-1">
                    <button type="button" class="btn py-2" style="margin-right: 20px; width: 178px; background-color: #859a41; font-size:16px; letter-spacing:2px; color: white;" data-bs-toggle="modal" data-bs-target="#add_supplier_modal">
                        Add Entry          
                    </button>
                </div>
            </div>
            <div class="row px-3 pt-2">
                <div class="table-responsive px-2">
                    <table class="table table-bordered row-border table-hover px-0 m-0 w-100" id="datatableid">
                        <thead class="py-3">
                            <tr>
                                <th id="id-val" class="text-center" >ID</th>
                                <th id="ave-val" class="text-center" >Company</th>
                                <th id="bar-val" class="text-center">Contact Number</th>
                                <th id="bar-val" class="text-center">Address</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $query  = mysqli_query($conn, "SELECT `supplier_id`, `company`, `contact_number`, `address` FROM `supplier`") or die(mysqli_error());                            // $query = mysqli_query($conn, "SELECT p.product_id, p.barcode, pd.product_name, pd.selling_unit_price, p.category, p.quantity, DATE_FORMAT(pd.expiration, '%m-%d-%Y') FROM product p join product_details pd on pd.product_id = p.product_id;") or die(mysqli_error());
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="num text-center" id="id-val" style="width: 8%"><?php echo $fetch['supplier_id']; ?></td>
                                <td id="ave-val" style="width: 30%"><?php echo $fetch['company']; ?></td>
                                <td id="bar-val" style="width: 15%"><?php echo $fetch['contact_number']; ?></td>
                                <td id="add-val" style="width: 30%"><?php echo $fetch['address']; ?></td>
                                <td id="act-val" class="text-center px-2 pt-2" style="width: 8%">
                                    <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_supplier_<?php echo $fetch['supplier_id']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                </td>
                            </tr>
                            <?php 
                                include 'view_supplier.php';
                                include 'update_supplier.php';
                            }                                
                            ?>
                            <?php 
                                mysqli_free_result($query);
                                include 'add_supplier.php';
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
	