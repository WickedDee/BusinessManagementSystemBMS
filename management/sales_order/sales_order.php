<body id="main">
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">SALE ORDER</h5>
            </div>
        </div>
            <div class="card-body  ps-3 pe-0 mx-0">
            <div class="row justify-content-between px-0 pb-2 m-0 w-100">
                <div class="col-auto mx-0 py-1">
                </div>
                <div class="col-auto pt-0 pe-1">
                    <a href="./sales/sample.php">
                        <button type="button" class="btn py-2" style="margin-right: 20px; width: 178px; background-color: #859a41;color: white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                            </svg> 
                        </button>
                    </a>    
                </div>
            </div>
            <div class="row px-3 pt-2">
                <div class="table-responsive">
                    <table class="table table-bordered row-border table-hover px-0 m-0 w-100" id="datatableid">
                        <thead class="py-3">
                            <tr>
                            <th id="id-val" class="text-center">Receipt #</th>
                                <th id="long-val" class="text-center">Customer</th>
                                <th id="ave-val" class="text-center">Personnel</th>
                                <th id="ave-val" class="text-center">Total</th>
                                <th id="ave-val" class="text-center">Time & Date</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $query = mysqli_query($conn, "SELECT sl.`reciept_no`, c.`cname`, CONCAT(p.`fname`,' ',p.`mname`,' ',p.`lname`) AS personnel, sl.`total`, sl.`date` FROM `sales` sl JOIN `customer` c ON sl.`customer_id` = c.`customer_id` JOIN `personnel` p ON p.`personnel_id` = sl.`personnel_id`; ");
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="num text-center" id="id-val" style="width:12%"><?php echo $fetch['reciept_no'] ?></td>
                                <td id="long-val" style="width:20%"><?php echo $fetch['cname']?></td>
                                <td id="long-val" style="width:18%"><?php echo $fetch['personnel'];?></td>
                                <td id="ave-val" style="width:10%"><?php echo $fetch['total'];?></td>
                                <td id="ave-val" class="text-center" style="width:15%; word-spacing:10"><?php $date = new DateTimeImmutable($fetch['date']); echo $date->format('H:ia m-d-Y'); ?></td>
                                <td id="act-val" class="text-center px-2 pt-2" style="width:8%">
                                    <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_sales_<?php echo $fetch['reciept_no']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                </td>
                            </tr>
                                <?php 
                                    include 'view_sales_order.php';                                
                                }   mysqli_free_result($query);
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

	