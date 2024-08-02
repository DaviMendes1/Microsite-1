<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Our Products</h2>
    <div class="products-grid">
        <?php
        $products = [
            [
                "name" => "Ford Model T Touring",
                "price" => "$850",
                "promo_price" => "$750",
                "rating" => 4.5,
                "image" => "model-t-touring.jpg"
            ],
            [
                "name" => "Ford Model T Runabout",
                "price" => "$825",
                "promo_price" => "$725",
                "rating" => 4,
                "image" => "model-t-runabout.jpg"
            ],
            [
                "name" => "Ford Model T Coupe",
                "price" => "$900",
                "promo_price" => "$800",
                "rating" => 5,
                "image" => "model-t-coupe.jpg"
            ],
            [
                "name" => "Ford Model T Roadster",
                "price" => "$870",
                "promo_price" => "$770",
                "rating" => 4.5,
                "image" => "model-t-roadster.jpg"
            ],
            [
                "name" => "Ford Model T Town Car",
                "price" => "$950",
                "promo_price" => "$850",
                "rating" => 5,
                "image" => "model-t-town-car.jpg"
            ],
            [
                "name" => "Ford Model T Sedan",
                "price" => "$880",
                "promo_price" => "$780",
                "rating" => 4,
                "image" => "model-t-sedan.jpg"
            ]
        ];

        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="images/' . $product["image"] . '" alt="' . $product["name"] . '">';
            echo '<h3>' . $product["name"] . '</h3>';
            echo '<p class="price"><span class="original-price">' . $product["price"] . '</span> ' . $product["promo_price"] . '</p>';
            echo '<div class="rating">';
            for ($i = 0; $i < 5; $i++) {
                if ($i < floor($product["rating"])) {
                    echo '<span class="fa fa-star checked"></span>';
                } elseif ($i < $product["rating"]) {
                    echo '<span class="fa fa-star-half checked"></span>';
                } else {
                    echo '<span class="fa fa-star"></span>';
                }
            }
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>
