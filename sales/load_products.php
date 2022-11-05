<?php
    include '../database/conn.php';
    
    if(isset($_POST['products'])){
        $input = mysqli_real_escape_string($conn,$_POST['products']);
        $query = mysqli_query($conn, "SELECT `product_id`, `barcode`, `product_name`, `selling_unit_price`, `quantity` FROM `product` WHERE `quantity` > '0' AND `barcode` LIKE '%{$input}%' OR `product_name` LIKE '$input%';"); 
        if($query){
            while($fetch = mysqli_fetch_array($query)){
                echo "<tr onclick='orderAdd(this)' style='font-size: 13px'>";
                    echo "<td class='text-justify py-3' style='width:8%;width: min-content;' name='input_barcode' value='". $fetch['barcode'] . "'>". $fetch['barcode'] . "</td>";
                    echo "<td class='text-justify py-3' style=';width:84%;width: min-content;'>". $fetch['product_name'] . "</td>";
                    echo "<td class='text-justify py-3' style='width:4%'>". $fetch['selling_unit_price']. "</td>";
                    echo "<td class='text-center py-3' style='width:1%'>". $fetch['quantity'] ."</td>";
                echo "</tr>";
            }
        }else{
			echo "<td></td><td>No Products found!</td><td></td>";
		}
    }
?>
<!-- data-barcode=".$fetch['barcode']."data-product_name=".$fetch['product_name']."data-selling_unit_price=".$fetch['selling_unit_price']."data-quantity=".$fetch['quantity']." -->