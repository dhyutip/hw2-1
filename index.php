<?php 
    //set default value of variables for initial page load
    if (!isset($pdesc)) { $pdesc = ''; } 
    if (!isset($list_price)) { $list_price = ''; } 
    if (!isset($discount_percent)) { $discount_percent = ''; } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Product Discount Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="pdesc"
                   value="<?php echo htmlspecialchars($pdesc); ?>">
            <br>

            <label>List Price:</label>
            <input type="text" name="list_price"
                   value="<?php echo htmlspecialchars($list_price); ?>">
            <br>

            <label>Discount Percent:</label>
            <input type="text" name="discount_percent"
                   value="<?php echo htmlspecialchars($discount_percent); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>
