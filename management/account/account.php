
<?php
 include 'add_account.php';
?>
<body id="main">
    <!-- <script type="text/javascript"> add_success();</script> -->
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">ACCOUNTS</h5>
            </div>
        </div>
            <div class="card-body px-0 mx-0">
            <div class="row justify-content-between px-0 pb-2 m-0 w-100">
                <div class="col-auto mx-0 py-1">
                    <!-- <h5 class="px-0 lead">List of Personnel</h5> -->
                </div>
                <div class="col-auto pt-0 pe-1">
                    <button type="button" class="btn py-2" style="margin-right: 20px; width: 178px; background-color: #859a41; font-size:16px; letter-spacing:2px; color: white;" data-bs-toggle="modal" data-bs-target="#add_account_modal">
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
                                <th id="bar-val" class="text-center">Personnel ID</th>
                                <th id="ave-val" class="text-center">Email Address</th>
                                <th id="long-val" class="text-center">Username</th>
                                <th id="long-val" class="text-center">Password</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $i = 1;
                                $query  = mysqli_query($conn, "SELECT a.`account_id`, a.`personnel_id`, a.`username`, a.`password`, p.`email` FROM `account` a JOIN `personnel` p ON a.`personnel_id` = p.`personnel_id`");
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                                <!-- <i class="bi bi-plus-square-fill"></i> -->
                                <!-- <i class="bi bi-pencil-square"></i> -->
                            <tr>
                                <td class="num text-center" id="id-val" style="width:3%"><?php echo $i++ ?></td>
                                <td id="id-val" style="width:8%; text-align: center"><?php echo $fetch['personnel_id']?></td>
                                <td id="ave-val" style="width:12%"><?php echo $fetch['email'];?></td>
                                <td id="ave-val" style="width:12%"><?php echo $fetch['username'];?></td>
                                <td id="ave-val" style="width:30%"><?php echo password_hash($fetch['password'], PASSWORD_DEFAULT);?></td>
                                <td id="act-val" class="text-center px-2 pt-2" style="width:5%">
                                    <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_account_<?php echo $fetch['account_id']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                    <!-- <button type="button" class="btn px-2 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_account_<?php echo $fetch['account_id']?>" style="background-color: #859a41; color: white"><i class="bi bi-folder2-open" style="font-size: 14px;"></i></button>
                                    <button type="button" class="btn px-2 py-2 ms-1" id="delete_data" onClick="deleteSupplier();" style="background-color: #f93154;; color: white"><i class="bi bi-trash" style="font-size: 14px; font-weight:200"></i></button> -->
                                </td>
                            </tr>
                                <?php 
                                    include 'view_account.php';
                                    include 'update_account.php';
                                
                                    // include 'update.php';
                                }                                
                                ?>
                                <?php 
                                mysqli_free_result($query);
                            
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

	