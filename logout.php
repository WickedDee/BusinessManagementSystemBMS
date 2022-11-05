<?php
    session_start();
    date_default_timezone_set('Asia/Manila');
    require 'database/conn.php';
?>
<?php
    $p_id = $_SESSION['personnel_id'];
    $timestmp = date_default_timezone_set('Asia/Manila');
    $query = mysqli_query($conn, "INSERT INTO `logs`(`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES ('null','$p_id','User Logged Out','$timestmp')");

    session_destroy();
    $_SESSION = array();
    foreach ($_SESSION as $key => $value) {
        unset($_SESSION[$key]);
    }
    // add_fail();
    session_destroy();
    header("location:login.php");
?>