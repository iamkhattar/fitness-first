<!-- 

1. Display Products from DB

2. Clicking product takes you to product page by code

3. Product page has an add to cart option

4. Clicking add to cart updates the session cart with the item

5. Cart page shows all items in the session cart

-->

<?php

$db = mysqli_connect('localhost', 'root', '', 'fitness-first-users');

$prods_query = "SELECT * FROM products";

$result = mysql_query($prods_query);

while($row = mysql_fetch_assoc($result)) {
    print_r($row);
}

?>