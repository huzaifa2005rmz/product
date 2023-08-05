<?php
// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve order details from the form
        $customerName = $_POST['customer_name'];
        $contactDetails = $_POST['contact_details'];
        $productName = $_POST['product_name'];
        $quantity = $_POST['quantity'];
        $instructions = $_POST['instructions'];
    
        // Perform any necessary calculations or validations
    
        // Store the order details in the database
        // Assuming you have already set up the database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qaryat";
    
        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
    
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
    
        $sql = "INSERT INTO orders (customer_name, contact_details, product_name, quantity, instructions)
                VALUES ('$customerName', '$contactDetails', '$productName', '$quantity', '$instructions')";
        $result = $connection->query($sql);
    
        // Check if the order was successfully stored
        // if ($result === TRUE) {
          
        //     each($result)
        // }
    
        // $connection->close();
}

    
?>

<!-- HTML form to collect order details -->
<form method="POST" action="">
    <label for="customer_name">Customer Name:</label>
    <input type="text" name="customer_name" id="customer_name" required>

    <label for="contact_details">Contact Details:</label>
    <input type="text" name="contact_details" id="contact_details" required>

    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name[]" id="product_name" required>

    <label for="quantity">Quantity:</label>
    <input type="text" name="quantity[]" id="quantity" required>

    <label for="instructions">Instructions:</label>
    <textarea name="instructions" id="instructions"></textarea>

    <button type="submit">Submit Order</button>
</form>
