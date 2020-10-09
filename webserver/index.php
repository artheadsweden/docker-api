<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Welcome to the shop!</h1>
    <h3>The products we have:</h3>
    <ul>
        <?php
            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);
            $products = $obj->products;
            foreach($products as $product) {
                echo "<li>$product</li>";
            }

        ?>
    </ul>
</body>
</html>