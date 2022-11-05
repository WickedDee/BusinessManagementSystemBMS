
function login_success() {
    toastr.options.timeOut = 3500; // 1.5s 
    toastr.success('You are logged in!', 'Welcome !');
  }
function login_fail() {
     toastr.options.timeOut = 3500; // 1.5s 
     toastr.error("Check username and password.", "You aren't login !");
    //  toastr["error"]("Check username and password.", "You aren't login!")
  }
function add_success() {
    toastr.options.timeOut = 3500; // 1.5s
    toastr.success('Data is Added Successfully !');
  }
function add_fail() {
    toastr.options.timeOut = 3500; // 1.5s 
    toastr.error("Data is Not Added !");
  }
function update_success() {
    toastr.options.timeOut = 3500; // 1.5s 
    toastr.options.closeMethod = 'fadeOut';
    toastr.success('Data is Updated Successfully !');
  }
function update_fail() {
    toastr.options.timeOut = 3500; // 1.5s 
    toastr.error("Data is Not Updated !");
  }
function delete_success() {
    toastr.options.timeOut = 3500; // 1.5s 
    toastr.success('Data is Deleted Successfully !');
  }
function delete_fail() {
    toastr.options.timeOut = 3500; // 1.5s
    toastr.error("Data is Not Deleted !");
}