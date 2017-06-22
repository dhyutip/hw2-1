<?php
    // get the data from the form
    
    $pdesc = filter_input(INPUT_POST, 'pdesc');
    $list_price = filter_input(INPUT_POST, 'list_price',
        FILTER_VALIDATE_FLOAT);
    $discount_percent= filter_input(INPUT_POST, 'discount_percent',
        FILTER_VALIDATE_FLOAT);


    // calculate the discount
    $discount = $list_price*$discount_percent*.01;
    $discount_price=$list_price-$discount;

    // apply currency and percent formatting
    $list_price_formatted = '$'.number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent.'%';
    $discount_formatted = '$'.number_format($discount,2);
    $discount_price_formatted = '$'.number_format($discount_price, 2);
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
      <form>
        <h1>Product Discount Calculator</h1>

	<div id="data">
        <label>Product Description:</label>
        <span><?php echo $pdesc; ?><br></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Discount Percentage:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

	<label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

	<label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
         <div id="buttons">
           <input type="submit" value="Calculate Discount"><br>
         </div>

      </form>
    </main>
</body>
</html>
