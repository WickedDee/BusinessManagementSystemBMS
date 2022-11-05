<?php
    session_start();
    include '../database/conn.php';
    include '../header.php';
    if(!isset($_SESSION['username'])){
      // header('location: ../login.php');
      echo "<script type='text/JavaScript'>window.location = '../login.php';</script>";
    }
    date_default_timezone_set('Asia/Manila');
?>
<body style="background-color:#707070;">
  <form class="row" method="POST" action="index.php?page=add">
    <div class="container-fluid">
        <div class="row">
          <!-- RIGHT SIDE -->
          <div class="col-7">
            <div class="row">
              <!-- UPPER LEFT CONTAINER -->
              <div class="col-4 m-0 px-2" style="background-color:white">
                <img src="../assets/img/vs-logo-white-wide.png" alt="store-logo" style="width: 250;height: 110; border: solid 1px white;">
              </div>
              <!-- UPPER LEFT PROFILE CONTAINER -->
              <div class="col-7 py-1" style="width: 500; height: 110; background-color: #f0eaf7;border: solid 1px white">
                <div class="row py-1" style="padding-left:18">
                  <div class="col">
                    <h6 class="d-inline" style="font-size:14px">Date:</h6>
                    <input class="pre-input ms-2 d-inline px-2" name="pos_date" id="pos_date" value="<?php echo date('m/d/Y')?>" style="height:28; width:99; font-family:monospace; font-size:12px; letter-spacing: 1px;" readonly>
                    <h6 class="d-inline ms-4" style="font-size:14px">Time:</h6>
                    <input class="pre-input d-inline ms-2 px-2" name="pos_time" id="pos_time" value="<?php echo date('h:i a')?>" style="height:28; width:90; font-family:monospace; font-size:12px; letter-spacing: 1px;" readonly>         
                  </div>
                </div>
                <div class="row justify-content-around">
                  <div class="col-4 pt-2 text-end">
                    <h6 style="font-size:14px">Personnel ID:</h6>
                  </div>
                  <div class="col-8">
                    <input class="px-2" name="pos_id" id="pos_id" value="<?php echo $_SESSION['personnel_id']?>" style="height:28; width:200; font-family:monospace; font-size:14px; letter-spacing: 3px;" readonly>
                  </div>
                </div>
                <div class="row justify-content-around">
                  <div class="col-4 pt-2 text-end">
                    <h6 style="font-size:14px">Personnel Name:</h6>
                  </div>
                  <div class="col-8">
                    <input class="px-2" name="pos_name" id="pos_name" value="<?php echo $_SESSION['personnel_name']?>" style="height:28; width:200; font-family:monospace; font-size:14px; letter-spacing: 1px;" readonly>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="height:445">
              <div class="col-12 mt-2" style="width:768; background-color: #b0b0b0; border: solid 1px white">
                  <div class="row p-2 justify-content-between">
                      <div class="autocomplete-container col-6 p-0">
                        <!-- CUSTOMER SEARCH -->
                        <input type="text" name="search_customer" id="search_customer" class="form-control input-lg" list="customer_list" placeholder="Enter Customer Name" />
                        
                        <datalist id="customer_list">
                        <?php
                            // $query 	= mysqli_query($conn, "SELECT * FROM `customer` WHERE `cname` LIKE '%{$input}%'");
                          $query  = mysqli_query($conn, "SELECT * FROM `customer` WHERE `cname` LIKE '%{$input}%'");
                          while($fetch = mysqli_fetch_array($query)){
                            echo "<option value='".$fetch['cname']."'>".$fetch['cname']."</option>";
                            // echo "<option value=" . $fetch['cname'] . ">";
                            // alert($fetch['cname']);
                          }
                        ?>
                        </datalist>
                      </div>
                      <div class="col-5 px-0 bg-light" style="border-radius:6px">
                        <!-- PRODUCT SEARCH -->
                        <div class="input-group p-0 m-0">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                          </div>
                          <input class="form-control" type="text" placeholder="Enter Barcode or Product Name" aria-label="Search" id="search_products" name="search_products" onkeyup="loadProducts();" style="font-size:14px"/>
                        </div>
                      </div>
                  </div>
                  <div class="row mt-1 justify-content-center">
                    <div class="col-12">
                    <div id="product_area text-center" class="overflow-auto">
                    <table class="table table-bordered bg-light table-wrapper-scroll-y my-custom-scrollbar mt-1" style="display: block; position: relative; overflow: auto; height:385px; background-color:white;" id="product_table">
                        <thead class="text-center">
                          <th style="width:8%">Barcode</th>
                          <th style="width:80%">Description</th>
                          <th style="width:6%">Price</th>
                          <th style="width:4%">Stocks</th>
                        </thead>   
                        <tbody id="products">
                        </tbody>
                      </table>        
                    </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row mb-2 pe-1 w-100 justify-content-between" style="margin-top:33">
              <button id="buttons" onclick="window.location.href='../logout.php'" type="button" class="col-4 btn btn-success border" style="font-size:20px; width:200px; background-color:#313631">Logout</button>
              <button id="buttons" onclick="window.location.href='pos_inventory.php'" type="button" class="col-4 cancel btn btn-success border" style="font-size:20px; background-color:#859A41">Inventory</button>
              <button id="buttons" type="button" class="col-4 btn btn-warning border" style="font-size:20px; background-color:#859A41">Cash Register</button>                  
            </div>
          </div>
        <!-- LEFT SIDE -->
          <div class="col-5">
            <div class="row" style="height: 113;background-color: black; color:lime; font-family: monospace; letter-spacing:2; border: solid 2px #e4e6eb">
                <h5 class="pt-2">Grand Total</h5>
                <p class="mr-4 pb-2 text-end" style="float: right; font-size: 46px;" id="grand_total_value">₱ 0.00</p>
            </div>
            <div class="row">
            <div class="col-12 mt-1 py-3" style="height:540;background-color: #b0b0b0; border: solid 1px white">
              <div class="row">
                <form action="" method="post">
                  <table class="table table-bordered table-wrapper-scroll-y my-custom-scrollbar m-0 p-0" style="display: block;position: relative;overflow: auto;height:437px;cursor: pointer;background-color:white;" id="order_table">
                    <thead class="text-center bg-light">
                      <th style="width:96%">Description</th>
                      <th style="width:1%">Price</th>
                      <th style="width:1%">Qty</th>
                      <th style="width:1%">Subtotal</th>
                    </thead>   
                    <tbody id="orders">
                        
                    </tbody>
                  </table>     
                </form>   
              </div>
              <div class="row mx-2 p-0 justify-content-between">
                  <button id="cancel_button" type="button" class="cancel btn btn-success border col-4" style="font-size:20px; background-color:#f93154;">Cancel</button>
                  <button onclick="deleteRow()" type="button" class="col-2 btn btn-danger my-1 px-2" style="font-size:20px; background-color:#f93154;">Del</i></button>
                  <button onclick="grandTotal()" type="button" class="col-5 btn btn-success border" style="font-size:20px; background-color:#859A41">Check Out</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="pos_script.js"></script>



                      
</body>