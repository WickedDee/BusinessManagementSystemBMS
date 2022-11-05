
<body id="main">
    <div class="card border-dark mt-3 mx-4">
        <div class="container-fluid p-0">
            <div class="card-header content-header text-center pt-3 pb-0 m-0 w-100" style="background-color:#D4D4D4;">
                <h5 style="font-family: 'Roboto', sans-serif;font-size:25px;font-weight: bold; letter-spacing: 3px; word-spacing:3px;">DAILY LOGS</h5>
            </div>
        </div>
        <div class="card-body ps-3 pe-0 mx-0">
            <div class="row">
            </div>
            <div class="row px-3 pt-2">
                <div class="table-responsive">
                    <table class="table table-bordered row-border table-hover px-0 m-0 w-100" id="datatableid">
                        <thead class="py-3">
                            <tr>
                                <th id="id-val" class="text-center">ID</th>
                                <th id="ave-val" class="text-center">Personnel</th>
                                <th id="ave-val" class="text-center">Action Logs</th>
                                <th id="ave-val" class="text-center">Date</th>
                                <th id="act-val" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="row_data">
                            <?php
                                $query  = mysqli_query($conn, "SELECT `log_id`, `personnel_id`, `purpose`, `log_time` FROM `logs`");
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="num text-center" id="id-val" style="width: 3%"><?php echo $fetch['log_id']; ?></td>
                                <td id="ave-val" style="width: 10%"><?php echo $fetch['personnel_id'] ?></td>
                                <td id="ave-val" style="width: 20%"><?php echo $fetch['purpose'] ?></td>
                                <td id="ave-val" class="text-center" style="width: 10%; word-spacing:10"><?php $date = new DateTimeImmutable($fetch['log_time']); echo $date->format('m-d-Y H:i:s'); ?></td>
                                <td id="act-val" class="text-center px-2 pt-2" style="width: 4%">
                                    <button type="button" class="btn px-3 py-2" id="view_data" data-bs-toggle="modal" data-bs-target="#view_dly_lgs_<?php echo $fetch['log_id']?>" style="letter-spacing:2px;background-color: #859a41; color: white">View</button>
                                </td>
                            </tr>
                                <?php 
                                    include 'view_dly_lgs.php';
                                }   mysqli_free_result($query);                              
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

	