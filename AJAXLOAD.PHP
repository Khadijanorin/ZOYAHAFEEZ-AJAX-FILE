 <?php
include '../includes/db_connection.php'; // Include database connection
include '../includes/product_functions.php'; // Include product functions

// Retrieve products for the specified category (sent via AJAX)
if (isset($_POST['category'])) {
    $category = $_POST['category'];
    $categoryProducts = getProductsByCategory($category);

    // Output products as HTML
    foreach ($categoryProducts as $product) {
        echo "<li>{$product['name']} - {$product['price']} - {$product['quantity_in_stock']}</li>";
    }
}
?>