<?php
session_start();
include('config/config.php');
include('config/code-generator.php');

// Add Customer
if (isset($_POST['addCustomer'])) {
    // Prevent Posting Blank Values
    if (empty($_POST["customer_phoneno"]) || empty($_POST["customer_name"]) || empty($_POST['customer_email']) || empty($_POST['customer_password'])) {
        $err = "Blank Values Not Accepted";
    } else {
        $customer_name = $_POST['customer_name'];
        $customer_email = $_POST['customer_email'];
        $customer_password = sha1(md5($_POST['customer_password'])); // Hash This 
        $customer_id = $_POST['customer_id']; // Assuming this function generates a unique code

        // Insert Captured information to a database table
        $postQuery = "INSERT INTO customers (customer_id, customer_name, customer_email, customer_password) VALUES (?, ?, ?, ?)";
        $postStmt = $mysqli->prepare($postQuery);

        // Bind parameters
        $postStmt->bind_param('ssss', $customer_id, $customer_name, $customer_email, $customer_password);
        $postStmt->execute();

        // Declare a variable which will be passed to the alert function
        if ($postStmt) {
            $success = "Customer Added";
            header("refresh:1; url=addcustomer.php");
        } else {
            $err = "Please Try Again Or Try Later";
        }

        $postStmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin / Add Customer</title>
</head>
<body>
    <?php include 'header.php'?>
    <div class="container-fluid mt--8">
        <!-- Table -->
        <form method="POST">
            <div class="row" style="margin-top: 200px;">
                <div class="col-md-6">
                    <label>Customer Name</label>
                    <input type="text" name="customer_name" class="form-control">
                    <!-- Remove the next line unless you have a specific reason to use a predefined customer_id -->
                    <!-- <input type="hidden" name="customer_id" value="<?php echo $cus_id; ?>" class="form-control"> -->
                </div>
            </div>
            <hr>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Customer Email</label>
                    <input type="email" name="customer_email" class="form-control" value="">
                </div>
                <div class="col-md-6">
                    <label>Customer Password</label>
                    <input type="password" name="customer_password" class="form-control" value="">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-md-6">
                    <input type="submit" name="addCustomer" value="Add Customer" class="btn-success">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
