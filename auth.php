<?php
    session_start();
    include 'database/conn.php';
    date_default_timezone_set('Asia/Manila');
?>
<?php
    if(isset($_POST['username']) && ($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "SELECT a.`account_id` , a.`personnel_id`, a.`username`, a.`password`, CONCAT(`fname`, ' ' , `mname`, ' ' , `lname`) AS `personnel_name` , p.`position` FROM account a, personnel p WHERE `username` = '$username' AND `password` = '$password' AND p.`personnel_id` = a.`personnel_id`;");
        $fetch = mysqli_fetch_assoc($query);
        
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['username'] = $fetch['username'];
            $_SESSION['account_id'] = $fetch['account_id'];
            $_SESSION['personnel_id'] = $fetch['personnel_id'];
            $_SESSION['personnel_name'] = $fetch['personnel_name'];
            $p_id = $_SESSION['personnel_id'];
            $timestmp = date('Y-m-d h:i:s', time());
            
            if(($fetch['position'] === 'Management') || ($fetch['position'] === 'Admin')){
                $query = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','User Logged In','$timestmp')");
                $_SESSION['path'] = 'management';
            }else if($fetch['position'] === 'Sales'){
                $query = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','User Logged In','$timestmp')");
                $_SESSION['path'] = 'sales';
            }
            $arr = array("status" => 'login_success', 'type' => $_SESSION['path']);
        }else {
            $arr = array("status" => 'login_fail');
        }
        echo  json_encode($arr);
    }
?>
