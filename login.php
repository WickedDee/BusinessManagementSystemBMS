<?php
    session_start();
    include 'database/conn.php';
    include 'header.php';
    // Log out User 
    $_SESSION = array();
    foreach ($_SESSION as $key => $value) {
        unset($_SESSION[$key]);
    }
?>
<body class="container vh-100" style="background-image: url(assets/img/login-bg.png); background-repeat: no-repeat; background-size: 1366px 870px;">
    <div class="row m-0 p-0 justify-content-center">
        <div class="card row mt-5 px-1" style="height:580px;width:850px">
            <!-- left-image -->
            <div class="col col-sm-4 py-3 m-0 d-none d-md-block" style="height:580px; border-top-left-radius: 1rem; border-bottom-left-radius: 1rem">
                <div class="login_photo">
                    <img src="assets/img/login_photo.png" alt="login_photo" class="img-fluid w-100" style="border-radius: 1rem; height:550px">
                </div>
            </div>
            <!-- left-image -->
            <!-- right form -->
            <div class="col-sm-7 p-5 mt-3 bg-light" style="width:500px;height:550px; border-radius: 1rem; border-bottom-right-radius: 1rem">
                <form method="post" class="justify-content-center mt-5 p-0" style="font-family: 'Roboto', sans-serif;" id="loginForm">
                    <div class="text-center form-head p-0">
                        <h3 class="px-3 pb-3" style="font-size: 30px; font-weight:700;letter-spacing:1">Sign In</h3>
                    </div>
                    <div class="form-group px-2 py-3">
                        <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Username" required>
                    </div>
                    <div class="form-group px-2 py-3">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
                    </div>
                    <div class="form-footer px-2 pt-3 pb-1">
                        <button type="submit" class="btn text-light w-100 mt-1 mb-5" style="height:50px; font-weight:500; font-size:18px; letter-spacing:1; background-color:#424F2B">Login</button>
                        <a href="#!" class="small text-muted mt-0">Terms of use.</a>
                        <a href="#!" class="small text-muted mt-0">Privacy policy</a>
                    </div>
                </form>
            </div>
                    <!-- right form -->
        </div>
    </div>
    <script>
        $("#loginForm").submit( (e) =>{
            e.preventDefault();

            var form = $("#loginForm").serialize();
            $.ajax({
                url: "auth.php",
                method: 'post',
                data: form,
                success: function(fetch){
                    var data = $.parseJSON(fetch);
                    // alert(data.message);
                    if(data.status == 'login_success'){
                        if(data.type == 'management'){
                            window.location = 'index.php?page=dashboard&status=login_success';
                        }else if(data.type == 'sales'){
                            window.location = 'sales/pos_main.php?status=login_success'
                        }
                    }else{
                        login_fail();
                    }
                }
            })
        })
    </script>
</body>

