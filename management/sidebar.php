
<section>
  <?php $page=basename($_SERVER['PHP_SELF']);?>
    <nav class="sidebar" id="side_bar">
      <!-- sidebar-header -->
      <div class="row pb-3">
        <div class="col-10 mx-3">
        <!-- brand-logo -->
          <div class="nav-brand bg-light pt- text-center">
            <img src="assets/img/vs-logo-white.png" alt="brand-logo" style="height:80px; width:190px;" class="img-fluid">
          </div>
        </div>
        <div class="col">
          <a href="javascript:void(0)" class="closebtn p-0" onclick="closeNav()" style="font-family: 'Flamenco', cursive">X</a>
        </div>
      </div>
      <!-- <hr class="solid my-3" style="color: #474747;"> -->
      <!-- side-navigation -->
      <ul class="navbar-nav p-0" id="nav-menu">
        <li class="nav-item <?php if($_GET['page'] == 'dashboard'){echo 'current';} ?>">
          <a class="nav-link" href="./index.php?page=dashboard" class="<?php if($_GET['page'] == 'dashboard');?>"><i class="bi bi-stack"></i>Dashboard</a>
        </li>
        <hr class="solid my-1" style="color: #474747;">
        <li class="nav-item has-submenu">
          <a href="#inventory-menu" class="nav-link">
            <i class="bi bi-credit-card"></i>Inventory </a>
          <ul class="submenu collapse px-0 mx-0 my-2" id="inventory-menu" style="background-color: transparent; border: 0">
            <li class="nav-item <?php if($_GET['page'] == 'inventory'){echo 'current';} ?>"><a class="nav-link px-3 py-1" href="./index.php?page=inventory" class="<?php if($_GET['page'] == 'inventory');?>">Inventory</a></li>
            <li class="nav-item <?php if($_GET['page'] == 'product_details'){echo 'current';} ?>"><a class="nav-link px-3 py-1" href="./index.php?page=product_details" class="<?php if($_GET['page'] == 'product_details');?>">Product Details</a></li>
          </ul>
        </li>
        <hr class="solid my-1" style="color: #474747;">
        <li class="nav-item">
          <a class="nav-link" href="./index.php?page=personnel" class="<?php if($_GET['page'] == 'personnel'){echo 'current';} ;?>"><i class="bi bi-person-lines-fill"></i>Personnel</a>
        </li>
        <hr class="solid my-1" style="color: #474747;">
        <li class="nav-item <?php if($_GET['page'] == 'supplier'){echo 'current';} ?>">
          <a class="nav-link" href="./index.php?page=supplier" class="<?php if($_GET['page'] == 'supplier');?>"><i class="bi bi-truck"></i>Supplier</a>
        </li>
        <hr class="solid my-1" style="color: #474747;">
        <li class="nav-item <?php if($_GET['page'] == 'customer'){echo 'current';} ?>">
          <a class="nav-link" href="./index.php?page=customer" class="<?php if($_GET['page'] == 'customer');?>"><i class="bi bi-people-fill"></i>Customer</a>
        </li>
        <hr class="solid my-1" style="color: #474747;">
        <li class="nav-item has-submenu">
          <a href="#transaction-menu" class="nav-link">
          <i class="bi bi-credit-card"></i>Transaction </a>
          <ul class="submenu collapse px-0 mx-0 my-2" id="transaction-menu" style="background-color: transparent; border: 0">
            <li class="nav-item <?php if($_GET['page'] == 'sales_order'){echo 'current';} ?>"><a class="nav-link px-3 py-1" href="./index.php?page=sales_order" class="<?php if($_GET['page'] == 'sales_order');?>">Sales Orders</a></li>
            <li class="nav-item <?php if($_GET['page'] == 'purchase_order'){echo 'current';} ?>"><a class="nav-link px-3 py-1" href="./index.php?page=purchase_order" class="<?php if($_GET['page'] == 'purchase_order');?>">Purchase Orders</a></li>
          </ul>
        </li>
        <hr class="solid my-1" style="color: #474747;">
        <li class="nav-item has-submenu">
          <a href="#account-menu" class="nav-link">
          <i class="bi bi-person-circle"></i>Account</a>
          <ul class="submenu collapse px-0 mx-0 my-2" id="transaction-menu" style="background-color: transparent; border: 0">
            <li class="nav-item <?php if($_GET['page'] == 'account'){echo 'current';} ?>"><a class="nav-link px-3 py-1" href="./index.php?page=account" class="<?php if($_GET['page'] == 'account');?>">Account Lists</a></li>
            <li class="nav-item <?php if($page =='dly_lgs') echo 'active'; ?>"><a class="nav-link px-3 py-1" href="./index.php?page=dly_lgs" class="<?php if($_GET['page'] == 'dly_lgs');?>">Daily Logs</a></li>
          </ul>
        </li>
        <div class="mb-0">
          <hr class="solid my-1"  style="color: #474747;">
          <li class="nav-item">
            <a class="nav-link" href="./sales/pos_main.php"><i class="bi bi-calculator"></i>Cash Register</a>
          </li>
        </div>
      </ul>
    </nav>
</section>

<script>
/* DROPDOWN*/
document.addEventListener("DOMContentLoaded", function(){
document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
</script>
<?php
ob_end_flush();
?>