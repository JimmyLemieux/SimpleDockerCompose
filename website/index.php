<html>
    <head>
        <title> This is my shop </title>
    </head>

    <body>
        <h2> These are the shop items </h2>

        <ul>
            <?php
                $json = file_get_contents('http://product-service');
                $obj = json_decode($json);
                
                $products = $obj->products;
                foreach($products as $product) {
                    echo "<li>$product</li>";
                }
            ?>
        </ul>
    </body>
</html>