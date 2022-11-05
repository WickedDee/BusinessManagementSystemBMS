<?php
    ob_start();
    include 'database/conn.php';

    date_default_timezone_set('Asia/Manila');
    $timestmp = date('Y-m-d h:i:s', time());
    $p_id = $_SESSION['personnel_id'];

    if(isset($_POST['update_account'])){
        $id = $_POST['input_id'];
        $p_id = $_POST['input_p_id'];
        $username = $_POST['input_username'];
        $password = $_POST['input_password'];
        
        $query =  "UPDATE `account` SET `username`='$username',`password`='$password' WHERE account_id = '$id'";
            if (mysqli_query($conn, $query)) {
                $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Account `$id` Updated','$timestmp')");
                ?><script>window.location = 'index.php?page=account&status=update_success'</script><?php
            }else {
                ?><script>window.location = 'index.php?page=customer&status=update_fail'</script><?php
            }
    }else if(isset($_POST['update_supplier'])){
        $id = $_POST['input_id'];
        $company = $_POST['input_company'];
        $address = $_POST['input_address'];
        $contact_number = $_POST['input_contact_number'];
        
        $query =  "UPDATE `supplier` SET `company`='$company',`contact_number`='$contact_number',`address`='$address' WHERE supplier_id = '$id'";
            if (mysqli_query($conn, $query)) {
                $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Supplier `$id` Updated','$timestmp')");
                ?><script>window.location = 'index.php?page=supplier&status=update_success'</script><?php
            }else {
                ?><script>window.location = 'index.php?page=supplier&status=update_fail'</script><?php
            }
    }else if(isset($_POST['update_customer'])){
        $id = $_POST['input_id'];
        $customer = $_POST['input_customer'];
        $address = $_POST['input_address'];
        $contact_number = $_POST['input_contact_number'];

        $query = "UPDATE `customer` SET `cname`='$customer',`contact_number`='$contact_number',`address`='$address' WHERE `customer_id`='$id';";        
        if (mysqli_query($conn, $query)) {
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Personnel `$id` Updated','$timestmp')");
            ?><script>window.location = 'index.php?page=customer&status=update_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=customer&status=update_fail'</script><?php
        }
    }else if(isset($_POST['update_inventory'])){
        $barcode = $_POST['input_barcode'];
        $product_name  = $_POST['input_product_name'];
        $category  = $_POST['input_category'];
        $p_u_p = $_POST['input_p_price'];
        $s_u_p = $_POST['input_s_price'];
        $exp = $_POST['input_exp'];
        $qty = $_POST['input_qty'];

        $query = "UPDATE `product` SET `product_name`='$product_name',`category`='$category',`purchase_unit_price`='$p_u_p',`selling_unit_price`='$s_u_p',`expiration`='$exp',`quantity`='$qty' WHERE `barcode`='$barcode'";
        if (mysqli_query($conn, $query)) {
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Personnel `$barcode` Updated','$timestmp')");
            ?><script>window.location = 'index.php?page=inventory&status=update_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=inventory&status=update_fail'</script><?php
        }
    }else if(isset($_POST['update_personnel'])){
        $id = $_POST['input_id'];
        $fname = $_POST['input_first_name'];
        $mname = $_POST['input_mid_name'];
        $lname = $_POST['input_last_name'];
        $sex = $_POST['input_sex'];
        $email = $_POST['input_email_address'];
        $contact_number = $_POST['input_contact_number'];
        $position = $_POST['input_position'];
        $hired_date = $_POST['input_hired_date'];
        $address = $_POST['input_address'];

        $query = "UPDATE `personnel` SET `personnel_id`='$id',`fname`='$fname',`mname`='$mname',`lname`='$lname',`sex`='$sex',`email`='$email',`contact_number`='$contact_number',`position`='$position',`hired_date`='$hired_date',`address`='$address' WHERE `personnel_id` = '$id';";
        if(mysqli_query($conn, $query)){
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Personnel `$id` Updated','$timestmp')");
            ?><script>window.location = 'index.php?page=personnel&status=update_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=personnel&status=update_fail'</script><?php
        }
    }else if(isset($_POST['update_p_o'])){
        $id = $_POST['input_id'];
        $stat = $_POST['input_stat'];

        $query = "UPDATE `purchase_del` SET `status` = '$stat' WHERE `purchase_del`.`order_code` = '$id';";
        if(mysqli_query($conn, $query)){
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Purchase Order `$id` Updated','$timestmp')");
            ?><script>window.location = 'index.php?page=purchase_order&status=update_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=purchase_order&status=update_fail'</script><?php
        }
    }
