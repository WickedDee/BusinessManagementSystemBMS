<body id="main">
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">CUSTOMER</h5>
            </div>
        </div>
        <div class="card-body ps-3 pe-0 mx-0">
            <div class="row justify-content-between px-0 pb-2 m-0 w-100">
                <div class="col-auto mx-0 py-1">
                </div>
                <div class="col-auto pt-0 pe-1">
                    <button type="button" class="btn py-2" style="margin-right: 20px; width: 178px; background-color: #859a41; font-size:16px; letter-spacing:2px; color: white;" data-bs-toggle="modal" data-bs-target="#add_customer_modal">
                        Add Entry          
                    </button>
                </div>
            </div>
            <div class="row px-3 pt-2">
                <div class="table-responsive">
                    <table class="table table-bordered row-border table-hover px-0 m-0 w-100" id="datatableid">
                        <thead class="py-3">
                            <tr>
                                <th id="id-val" class="text-center">ID</th>
                                <th id="long-val" class="text-center">Name</th>
                                <th id="bar-val" class="text-center">Contact Number</th>
                                <th id="long-val" class="text-center">Address</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $query  = mysqli_query($conn, "SELECT `customer_id`, `cname`, `contact_number`, `address` FROM `customer`")or die(mysqli_error());  
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="num text-center" id="id-val" style="width:6%"><?php echo $fetch['customer_id']; ?></td>
                                <td id="long-val" style="width:28%"><?php echo $fetch['cname']; ?></td>
                                <td id="bar-val" style="width:12%"><?php echo $fetch['contact_number']; ?></td>
                                <td id="add-val" style="width:28%"><?php echo $fetch['address']; ?></td>
                                <td id="act-val" class="text-center px-2 pt-2" style="width:8%">
                                    <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_customer_<?php echo $fetch['customer_id']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                </td>
                            </tr>
                                <?php 
                                    include 'view_customer.php';
                                    include 'update_customer.php';
                                }                                
                                ?>
                                <?php 
                                    mysqli_free_result($query);
                                    include 'add_customer.php';
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

	