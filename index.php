<?php
    session_start();
    include 'database/conn.php';
    include 'header.php';
    if(!isset($_SESSION['username'])){
      // header('location: ../login.php');
      echo "<script type='text/JavaScript'>window.location = 'login.php';</script>";
    }
    // $id=$_SESSION['username'];
?>
<body>
    <?php include 'management/sidebar.php';?>
    <?php include 'management/topbar.php';?>
    
    <div id="main">
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
            if(($page === 'add') || ($page === 'update')){
                include 'management/'.$page.'.php';
            }else{
                if(!file_exists('management/'.$page.'/'.$page.".php")){
                    echo"<body><img src='assets/img/404.png' alt='' style='height:100%; width:100%'></body>";
                }else{
                        include 'management/'.$page.'/'.$page.'.php';
                }
            }
        ?>
    </div>
    <footer class="page-footer font-small relative-bottom mt-2">
    <!-- <footer class="page-footer font-small" style="bottom: 0;position: relative;  width: 100%; height: 55px"> -->
    <hr class="hr hr-blurry hr-light" />
    <!-- Copyright -->
    <div class="footer-copyright text-center pt-0 mt-0 pb-2">
        <a href="/">2022 VSU-Pasalubong Center</a>
        . All rights reserved.
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("side_bar").style.width = "270px";
            document.getElementById("main").style.marginLeft = "270px";
        }
        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("side_bar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
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
</body>
<?php include 'footer.php';?>
