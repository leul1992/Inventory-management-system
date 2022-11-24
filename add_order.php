<?php
include_once 'php_action/connect.php';
include_once 'include/header.php';
?>
<div class='form'>

<table class="table" id="productTable">
			  	<thead>
			  		<tr>			  			
			  			<th style="width:40%;">Product</th>
			  			<th style="width:20%;">Rate</th>
			  			<th style="width:10%;">Available Quantity</th>
			  			<th style="width:15%;">Quantity</th>			  			
			  			<th style="width:25%;">Total</th>			  			
			  			<th style="width:10%;"></th>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php
			  		$arrayNumber = 0;
			  		for($x = 1; $x < 4; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

			  					<select class="form-control" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  							$productSql = "SELECT * FROM product WHERE active = 1 AND status = 1 AND quantity != 0";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."'>".$row['product_name']."</option>";
										 	}

			  						?>
		  						</select>
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" />			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
							<td style="padding-left:20px;">
			  					<div class="form-group">
									<p id="available_quantity<?php echo $x; ?>"></p>
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" />
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" />			  					
			  					<input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>


    <form action="php_action/add_order.php" method="POST" enctype="multipart/form-data">
            <label for="client_name" name="client_name">Client Name</label>
            <input type="text" name="client_name" id="client_name" accept="image/*" value="" required><br/>
            <label for=" client_contract ">Client Contract</label>
            <input type="text " name="client_contract" required><br/>
            <!-- <label for=" orderDate ">Date</label>
            <input type="text " name="orderDate" required><br/> -->
            <label for="orderDate" name="orderDate">order Date</label>
            <input type="date" name="orderDate" id="orderDate" required><br/>
            <label for="subTotalValue" name="subTotalValue">subTotalValue</label>
            <input type="text" name="subTotalValue" id="subTotalValue" required value="8"><br/>
            <label for="vatValue" name="vatValue">vatValue</label>
            <input type="text" name="vatValue" id="vatValue" required value="8"><br/>
            <label for="totalAmountValue" name="totalAmountValue">totalAmountValue</label>
            <input type="text" name="totalAmountValue" id="totalAmountValue" required value="8"><br/>
            <label for="discount" name="discount">discount</label>
            <input type="text" name="discount" id="discount" required><br/>
            <label for="grandTotalValue" name="grandTotalValue">grandTotalValue</label>
            <input type="text" name="grandTotalValue" id="grandTotalValue" required value="8"><br/>
            <label for="paid" name="paid">paid</label>
            <input type="text" name="paid" id="paid" required value="8"><br/>
            <label for="dueValue" name="dueValue">dueValue</label>
            <input type="text" name="dueValue" id="dueValue" required value="8"><br/>
            <label for="paymentType" name="paymentType">paymentType</label>
            <input type="number" name="paymentType" id="paymentType" required value=15><br/>
            <!-- <label for="paymentStatus" name="paymentStatus">paymentStatus</label>
            <input type="number" name="paymentStatus" id="paymentStatus" required><br/>
            <label for="paymentPlace" name="paymentPlace">paymentPlace</label>
            <input type="number" name="paymentPlace" id="paymentPlace" required> --><br/>
            <label for="paymentStatus" name="paymentStatus">paymentStatus</label>
            <select class="paymentStatus" id="paymentStatus" name="paymentStatus" required>
                <option value="" name="available">SELECT</option>
                <option value="1">Available</option>
                <option value="2">Not Available</option>
            </select>
            <br>
            <label for="paymentPlace" name="paymentPlace">paymentPlace</label>
        <select class="paymentPlace" id="paymentPlace" name="paymentPlace" required>
            <option value="" name="available">SELECT</option>
            <option value="1">Available</option>
            <option value="2">Not Available</option>
        </select>
            <br/>
            <button type="submit" name="add" id="btn">Add</button> 
    </form>
</div>