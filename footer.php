<!-- DATATABLES -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.uikit.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.uikit.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<script>
$(document).ready( function () {
    $('#datatableid').DataTable();
} );
</script>
<!-- DATATABLES -->



<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("side_bar").style.width = "270px";
        document.getElementById("main").style.marginLeft = "270px";
        document.getElementById("topbar").style.marginLeft = "270px";
    }
    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("side_bar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("topbar").style.marginLeft = "270px";
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
<script type="text/javascript">
   $(document).ready(function(){
        var status = "<?= $_GET['status']; ?>";         
        if (status == 'login_success'){
            login_success();
        }else if (status == 'login_fail') {
            login_fail();
        }else if (status == 'add_success'){
            add_success();
        }else if (status == 'add_fail') {
            add_fail();
        }else if (status == 'update_success'){
            update_success();
        }else if (status == 'update_fail') {
            update_fail();
        }else if (status == 'delete_success'){
            delete_success();
        }else if (status == 'delete_fail') {
            delete_fail();
        }   
    }); 
</script>