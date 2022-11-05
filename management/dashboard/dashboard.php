<body id="main" >
    <div class="container-fluid" id="dashboard">
        <div class="row mt-3 mx-1 jusitfy-content-between">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card px-4 py-3" style="height:110px">
                    <div class="card-body m-0 p-0">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="bi bi-people text-info fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <h3 class="count-numbers m-0 p-0"><?php echo $conn->query("SELECT * FROM `customer`")->num_rows; ?></h3>
                                <h6 class="count-name text-info mt-2 p-0">Customers</h6>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-3">
                <div class="card px-4 py-3" style="height:110px">
                    <div class="card-body m-0 p-0">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="bi bi-cash-stack text-warning fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <h3 class="count-numbers m-0 p-0">
                                <?php 
                                    $date = date("Y");
                                    $query = mysqli_query($conn, "SELECT SUM(`total`) AS total_sale FROM `sales` WHERE YEAR(`date`) = '$date';");
                                    $fetch = mysqli_fetch_assoc($query); 
                                    $total_sale = $fetch['total_sale'];
                                    echo "₱ ". $total_sale;
                                ?>
                                </h3>
                                <h6 class="count-name text-warning mt-2 p-0">Annual's Sale</h6>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-3">
                <div class="card px-4 py-3" style="height:110px">
                    <div class="card-body m-0 p-0">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="bi bi-truck fa-3x text-secondary"></i>
                            </div>
                            <div class="text-end">
                                <h3 class="count-numbers m-0 p-0"><?php echo $conn->query("SELECT * FROM `purchase_del` WHERE `status` = 'To Receive'")->num_rows;?></h3>
                                <h6 class="count-name text-secondary mt-2 p-0">Deliveries</h6>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-3">
                <div class="card px-4 py-3" style="height:110px">
                    <div class="card-body m-0 p-0">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="bi bi-clipboard-x fa-3x text-danger"></i>
                            </div>
                            <div class="text-end">
                                <h3 class="count-numbers m-0 p-0"> <?php 
                                    $date = date("Y-m-d");
                                    echo $conn->query("SELECT * FROM `product` WHERE `expiration` <= '2022/10/09' OR `quantity` = 0")->num_rows;
                                ?>
                                </h3>
                                <h6 class="count-name text-danger mt-2 p-0">Write Off</h6>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        <div class="row card py-4 mt-3 mx-1 jusitfy-content-between">
            <?php
                $year = date("Y");
                $query  = $conn->query("SELECT SUM(`total`) AS `monthly_sales`, MONTHNAME(date) AS `month` FROM `sales` WHERE YEAR(date) = '2022' GROUP BY MONTH(date);") ;
                foreach($query as $data)
                {
                    $month[] = $data['month'];
                    $monthly_sales[] = $data['monthly_sales'];
                }
            ?>
            <h3 class="m-0 pt-1 pb-2 text-center" style="font-weight: 600">Monthly Sales</h3>
            <canvas id="myChart" width="100%" height="30px">
                
            </canvas>
            <script>
                const labels = <?php echo json_encode($month) ?>;
                const data = {
                    labels: labels,
                    datasets: [{
                    label: 'Sales',
                    data: <?php echo json_encode($monthly_sales) ?>,
                    backgroundColor: [
                        'rgb(46, 203, 233)',
                        'rgb(245, 211, 0)',
                        'rgb(254, 83, 187)',
                        'rgb(127, 255, 0)',
                        'rgb(3, 16, 234)',
                        'rgb(206, 255, 3)',
                        'rgb(237, 0, 3)',
                        'rgb(140, 0, 252)',
                        'rgb(255, 228, 92)',
                        'rgb(125, 154, 15)',
                    ],
                    borderColor: [
                        'rgb(120, 120, 120)'
                    ],
                    fill: true,
                    borderWidth: 1
                    }]
                };
                const config = {
                    type: 'line',
                    data: data,
                    options: {
                        title:'Montly Sales',
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    },
                };
                var myChart = new Chart(document.getElementById('myChart'),config);
            </script>
        </div>
    </div>
</body>