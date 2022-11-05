function out(){
    var lag = "logout";
    swal({
        title: "Logout?",
        icon: "warning",
        buttons: ["Cancel","Yes"],
        dangerMode: true,
      })
      .then((value) => {
        if(value){
          if(lag){
              $.ajax({
                type: 'post',
                data: {
                  logout:lag
                },
                url: 'server/connection.php',
                success: function (data){
                  window.location.href='index.php';
                }
              });
          }
        }
      })
  };