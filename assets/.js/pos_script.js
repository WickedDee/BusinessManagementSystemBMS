localStorage.clickcount = 0;
/* LOAD CUSTOMERS */
// $(document).ready(function(){

// 	$('#search_customer').typeahead({
  
// 	  source: function(query, result)
// 	  {
  
// 		  $.ajax({
// 			url: 'load_customer.php',
// 			method: "POST",
// 			data:{
// 			  query:query
// 			},
// 			dataType: "json",
// 			success:function(data)
// 			{
// 			  result($.map(data,function(item){
// 				return item;
// 			  }));
// 			}
// 		  })
// 	  }
// 	});
//   });

// $(function() {
//     // $( "#search_customer" ).autocomplete({
//     // source: 'load_customer.php'  
//     // });
// 	$.get("load_customer.php", function(data, status){
// 		// alert("Data: " + data + "\nStatus: " + status);
// 	});
// });
// function loadCustomers(){
// 	var input = $("#search_customer").val();
// 	if(input){
// 		$.ajax({
// 			type: 'GET',
// 			data: {customers:input},
// 			url: 'load_customer.php',
// 			success: function (response){
// 				$('#customer_list').html(response);
// 			}
// 		});
// 	}
// };
  
/* LOAD PRODUCTS FROM product_table to order_table AND SEARCH PRODUCTS WITH ENTERED KEYWORDS in search_products */
function loadProducts(){
	var input = $("#search_products").val();
	if(input){
		$.ajax({
			type: 'POST',
			data: {products:input},
			url: 'load_products.php',
			success: function (response){
				$('#products').html(response);
			}
		});
	}
};
/* CALCULATE TOTAL FROM ALL CLICKED PRODUCTS AND SHOW IN grand_total_value */
function grandTotal(){
	var totalVal=0;
	var totalPriceArr = $('#order_table tr .subTotal').get();
	
	$(totalPriceArr).each(function(){
		totalVal += parseFloat($(this).text().replace(/,/g, "").replace("₱",""));
	});

	document.getElementById("grand_total_value").innerHTML = totalVal;
}

/* DELETE last row in order_table AND SUBTRACT grand_total_value */
function deleteRow(){
	var x = $('#order_table >tbody >tr').length;
	document.getElementById("order_table").deleteRow(x);
	grandTotal();
};

/* THE ROW OF PRODUCT CLICKED GETS COPIED TO order_table */
function orderAdd(x){
	var barcode = x.cells[0].innerHTML;
	var product = x.cells[1].innerHTML;
	var price = x.cells[2].innerHTML;
	var stock = x.cells[3].innerHTML;
	if (typeof(Storage) !== "undefined") {
		if (localStorage.clickcount) {
		  localStorage.clickcount = Number(localStorage.clickcount)+1;
		} else {
		  localStorage.clickcount = 1;
		}
	}
	Swal.fire({
		title: "Enter number of items:",
        input: 'number',
        showCancelButton: true
		// confirmButtonText: 'Okay'
	}).then((result) => {
		if (result.isConfirmed) {
			var qtynum = result.value;
			if((qtynum == null) ||(qtynum == 0)) {
				swal.fire("Error","Input is not accepted!","error");
			}
			else{
				var subtotal = qtynum * price;
				$('#orders').append("<tr class='m-0 py-2' id='order_list' style='font-size: 12px'></td><td style='width:93%;font-size:12px;'>"+ product +"</td><td style='width:1%;'>"+ price + "</td><td style='width:1%;'>"+ qtynum + "</td><td class='subTotal' style='width:1%;'>" + subtotal + "</td></tr>"); 
				grandTotal();
			}
		}		
	})
}
/* CANCEL BUTTON */
$(document).on('click','#cancel_button',function(e){
	Swal.fire({
		title: "Confirm to Cancel Orders?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonText: 'Confirm'
	  }).then((result) => {
		if (result.isConfirmed) {
			location.reload()
		}
  });
})











/* ENTER BUTTON */
// $(document).on('click','.Enter',function(){

// 	var TotalPriceArr = $('#tableData tr .totalPrice').get();
  
// 	if($.trim($('#customer_search').val()).length == 0){
// 		swal("Warning","Please Enter Customer Name!","warning");
// 		return false;
// 	  }
  
// 	if (TotalPriceArr == 0){
// 	  swal("Warning","No products ordered!","warning");
// 	  return false; 
// 	}else{
  
// 	  var product = [];
// 	  var quantity = [];
// 	  var price = [];
// 	  var user = $('#uname').val();
// 	  var customer = $('#customer_search').val();
// 	  var discount = $('#discount').val();
  
// 	  $('.barcode').each(function(){
// 		product.push($(this).text());
// 	  });
// 	  $('.qty').each(function(){
// 		quantity.push($(this).text());
// 	  });
// 	  $('.price').each(function(){
// 		price.push($(this).text().replace(/,/g, "").replace("₱",""));
// 	  });
  
// 	  swal({
// 		title: "Enter Cash",
// 		content: "input",
// 	  })
// 	  .then((value) => {  
// 		if(value == "") {
// 		  swal("Error","Entered None!","error");
// 		}else{
  
// 		  var qtynum = value;
// 		  if(isNaN(qtynum)){
// 			swal("Error","Please enter a valid number!","error");
// 		  }else if(qtynum == null){
// 			swal("Error","Entered None!","error");
// 		  }else{
  
// 			var change = 0;
// 			// var TotalPriceArr = $('#tableData tr .totalPrice').get()
// 			// $(TotalPriceArr).each(function(){
// 			//   TotalValue += parseFloat($(this).text().replace(/,/g, "").replace("₱",""));
// 			// });
// 			var TotalValue = parseFloat($('#totalValue').text().replace(/,/g, "").replace("₱",""));
  
// 			if(TotalValue > qtynum){
// 			  swal("Error","Can't process a smaller number","error");
// 			}else{
// 			  change = parseInt(value,10) - parseFloat(TotalValue);
// 			  $.ajax({
// 				url:"insert_sales.php",
// 				method:"POST",
// 				data:{totalvalue:TotalValue, product:product, price:price, user:user, customer:customer, quantity:quantity, discount:discount},
// 				success: function(data){
				  
// 				  if( data == "success"){
// 					swal({
// 					  title: "Change is " + accounting.formatMoney(change,{symbol:"₱",format: "%s %v"}),
// 					  icon: "success",
// 					  buttons: "Okay",
// 					})
// 					.then((okay)=>{
// 					  if(okay){
// 						window.location.href='main.php';
// 					  }
// 					})
// 				  }else{
// 					window.location.href='main.php?'+data;
// 				  }
				  
// 				}
// 			  });
// 			}
// 		  }
// 		}
// 	  });
// 	}
//   });