<body id="main">
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">PRODUCT DETAILS</h5>
            </div>
        </div>
        <div class="card-body ps-3 pe-0 mx-0">
            <div class="row px-3 pt-2">
                <div class="table-responsive">
                    <table class="table table-bordered row-border table-hover px-0 m-0 w-100" id="datatableid">
                        <thead class="py-3">
                            <tr>
                                <th id="id-val" class="text-center">Barcode</th>
                                <th id="bar-val" class="text-center">Product Name</th>
                                <th id="ave-val" class="text-center">Category</th>
                                <th id="long-val" style="font-size:13px" class="text-center">Purchase Unit Price</th>
                                <th id="long-val" style="font-size:13px" class="text-center">Selling Unit Price</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $i = 1;
                                $query  = mysqli_query($conn, "SELECT `product_id`, `barcode`, `product_name`, `category`, `purchase_unit_price`, `selling_unit_price`, `expiration`, `quantity` FROM `product` GROUP BY barcode");
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td id="id-val" style="width:8%; text-align: center"><?php echo $fetch['barcode']?></td>
                                <td id="ave-val" style="width:30%"><?php echo $fetch['product_name'];?></td>
                                <td id="ave-val" style="width:10%; text-align: center">
                                    <?php
                                        $cat = $fetch['category'];
                                        switch($cat){
                                            case 'Beverages':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#a2cef7;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Bread/Bakery':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#eccc6a;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Canned/Jarred Goods':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#c8be8e;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Dairy':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#ffe1e9;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Dry/Baking Goods':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#cec5a0;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Frozen Foods':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#d2e261;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Produce':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#83e377;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Cleaners':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#277da1;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Paper Goods':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#90be6d;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Personal Care':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#f9c74f;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Snacks':
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#f8961e;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break;
                                            case 'Other':                                                
                                                ?><span class="badge badge-pill p-2 m-0" style="background-color:#e2e2df;" id="badge"><?php echo $fetch['category'];?></span><?php
                                                break; 
                                            }
                                        ?>
                                    </td>
                                    <td id="ave-val" style="width:8%"><?php echo $fetch['purchase_unit_price'];?></td>
                                    <td id="ave-val" style="width:7%"><?php echo $fetch['selling_unit_price'];?></td>
                                    <td id="act-val" class="text-center px-2 pt-2" style="width:5%">
                                        <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_product_<?php echo $fetch['barcode']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                    </td>
                                </tr>
                            <?php 
                                include 'view_product.php';
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

	