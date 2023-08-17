<?php
include "connection.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $unit_weight = $_POST['unit_weight'];
    $quantity = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];

    $sql = "UPDATE products SET name='$name', unit_weight='$unit_weight', quantity='$quantity', unit_price='$unit_price' WHERE id = $id ";
    $result = $con->query($sql);

    if ($result == TRUE) {
        echo "Record Updated Successfully";
    } else {
        echo "Error!" . $sql . "<br>" . $con->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT *FROM products WHERE id= $id";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $unit_weight = $row['unit_weight'];
            $quantity = $row['quantity'];
            $unit_price = $row['unit_price'];
            $id = $row['id'];
        }
        ?>

        <style>
            fieldset {
                background-color: #eeeeee;
            }

            legend {
                background-color: darkgreen;
                color: white;
                padding: 5px 10px;
            }

            input {
                margin: 5px;
            }
        </style>

        <link rel="icon" href="images/logo.jfif" type="image/x-icon">
        <title>Edit Products</title>

        <h2> Product Update Form</h2>
        <form action="" method="POST">
            <fieldset>
                <legend>Update Details</legend>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label>Product Name</label><br>
                <input type="text" name="name" value="<?php echo $name; ?>"><br>
                <label>Unit_Weight</label><br>
                <input type="text" name="unit_weight" value="<?php echo $unit_weight; ?>"><br>
                <label>Quantity</label><br>
                <input type="number" name="quantity" value="<?php echo $quantity; ?>"><br>
                <label>Unit_Price</label><br>
                <input type="text" name="unit_price" value="<?php echo $unit_price; ?>"><br><br>
                <input type="submit" name="update" value="Update">
            </fieldset>
        </form>

        </body>
        </html>

    <?php
    } else {
        //if the 'id' value is not valid, redirect the user back to view.php page
        header('Location: view.php');
    }
}