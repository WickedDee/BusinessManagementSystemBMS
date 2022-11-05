<?php
    ob_start();
    include 'database/conn.php';

    date_default_timezone_set('Asia/Manila');
    $timestmp = date('Y-m-d h:i:s', time());
    $p_id = $_SESSION['personnel_id'];

    if(isset($_POST['add_account'])){
        $id = $_POST['input_id'];
        $p_id = $_POST['input_p_id'];
        $email = $_POST['input_email'];
        $username = $_POST['input_username'];
        $password = $_POST['input_password'];
        $c_password = $_POST['input_c_password'];
        
        // $query1 = "SELECT * FROM personnel WHERE personnel_id = '$p_id'";
        if (!mysqli_query($conn, "SELECT * FROM personnel WHERE personnel_id = '$p_id'")) {
            ?><script>window.location = 'index.php?page=account&status=add_fail&message=personnel and email is not listed'</script><?php

        }else{
            if($password == $c_password){
                $query =  "INSERT INTO `account`(`account_id`, `personnel_id`, `username`, `password`) VALUES ('$id','$p_id','$username','$password')";
                if (mysqli_query($conn, $query)) {
                    $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Account `$id` Added','$timestmp')");
                    ?><script>window.location = 'index.php?page=account&status=add_success'</script><?php
                }else {
                    ?><script>window.location = 'index.php?page=customer&status=add_fail'</script><?php
                }
            }
        }
    }else if(isset($_POST['add_customer'])){
        $id = $_POST['input_id'];
        $customer = $_POST['input_customer'];
        $address = $_POST['input_address'];
        $contact_number = $_POST['input_contact_number'];

        $query = " INSERT INTO `customer`(`customer_id`, `cname`, `contact_number`, `address`) VALUES ('$id','$customer','$contact_number','$address')";        
        if (mysqli_query($conn, $query)) {
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Customer `$id` Added','$timestmp')");
            ?><script>window.location = 'index.php?page=customer&status=add_success';</script><?php
        }else {
            ?><script>window.location = 'index.php?page=customer&status=add_fail'</script><?php
        }
    }else if(isset($_POST['add_inventory'])){
        $barcode = $_POST['input_barcode'];
        $product_name  = $_POST['input_product_name'];
        $category  = $_POST['input_category'];
        $p_u_p = $_POST['input_p_price'];
        $s_u_p = $_POST['input_s_price'];
        $exp = $_POST['input_exp'];
        $qty = $_POST['input_qty'];

        $query = "INSERT INTO `product`(`product_id`, `barcode`, `product_name`, `category`, `purchase_unit_price`, `selling_unit_price`, `expiration`, `quantity`) VALUES (null,'$barcode','$product_name ','$category ','$p_u_p','$s_u_p','$exp','$qty')";
        if(mysqli_query($conn, $query)){
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Product `$barcode` Added','$timestmp')");
            ?><script>window.location = 'index.php?page=inventory&status=add_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=inventory&status=add_fail'</script><?php
        }
    }else if(isset($_POST['add_personnel'])){
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

        $query = "INSERT INTO `personnel`(`personnel_id`, `fname`, `mname`, `lname`, `sex`, `email`, `contact_number`, `position`, `hired_date`, `address`) 
                  VALUES ('$id','$fname','$mname','$lname','$sex','$email','$contact_number','$position','$hired_date','$address')";
        if(mysqli_query($conn, $query)){
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Personnel `$id` Added','$timestmp')");
            ?><script>window.location = 'index.php?page=personnel&status=add_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=personnel&status=add_fail'</script><?php
        }
    }else if(isset($_POST['add_supplier'])){
        $id = $_POST['input_id'];
        $company = $_POST['input_company'];
        $address = $_POST['input_address'];
        $contact_number = $_POST['input_contact_number'];

        $query = " INSERT INTO `supplier`(`supplier_id`, `company`, `contact_number`, `address`) VALUES ('$id','$company','$contact_number','$address')";        
        if (mysqli_query($conn, $query)) {
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Supplier `$id` Added','$timestmp')");
            ?><script>window.location = 'index.php?page=supplier&status=add_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=supplier&status=add_fail'</script><?php
        }
    }else if(isset($_POST['add_p_o'])){
        $id = $_POST['input_id'];
        $supplier = $_POST['input_company'];
        $ord_date = $_POST['input_o_date'];
        $del_date = $_POST['input_del_date'];
        $barcode = $_POST['input_barcode'];
        $price = $_POST['input_price'];
        $qty = $_POST['input_qty'];
        $total = $_POST['input_total'];
        $status = $_POST['input_stat'];

        $query_a = "SELECT `supplier_id`, `company` FROM `supplier` WHERE `company` LIKE '%$supplier%';";
        if ($result = $conn -> query($query_a)) {
            while($fetch_a = $result -> fetch_array()){
                $supplier_id = $fetch_a['supplier_id'];
                $query_b = mysqli_query($conn, "INSERT INTO `purchase_order`(`pur_ord_id`, `supplier_id`, `order_date`, `total`, `del_date`) VALUES ('$id','$supplier_id','$ord_date','$total','$del_date');");
                $query_c = mysqli_query($conn, "INSERT INTO `purchase_product`(`pur_product_id`, `pur_ord_id`, `barcode`, `price`, `qty`) VALUES (null,'$id ','$barcode','$price','$qty');");
                $query_s = mysqli_query($conn, "INSERT INTO `purchase_del`(`pur_del_id`, `order_code`, `status`) VALUES (null,'$id ','$status');");
                $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','PUrchase Order `$id` Added','$timestmp')");
                ?><script>window.location = 'index.php?page=purchase_order&status=add_success'</script><?php
            }
        }else{
            ?><script>window.location = 'index.php?page=purchase_order&status=add_fail'</script><?php
        }

    }else if(isset($_POST['add_sale_order'])){
        $p_id = $_POST['pos_id'];
        $customer = $_POST['search_customer'];
        $barcode = $_POST[''];
        $address = $_POST['input_address'];
        $contact_number = $_POST['input_contact_number'];

        $query = " INSERT INTO `supplier`(`supplier_id`, `company`, `contact_number`, `address`) VALUES ('$id','$company','$contact_number','$address')";        
        if (mysqli_query($conn, $query)) {
            $query_log = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','Supplier `$id` Added','$timestmp')");
            ?><script>window.location = 'index.php?page=supplier&status=add_success'</script><?php
        }else {
            ?><script>window.location = 'index.php?page=supplier&status=add_fail'</script><?php
        }
    }

?>