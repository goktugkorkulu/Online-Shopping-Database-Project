<?php

include "config.php";

if(isset($_POST['fp_name'])){

    $fp_name = $_POST['fp_name'];
    $fp_cost = $_POST['fp_cost'];
    $fp_stock = $_POST['fp_stock'];

    echo $fp_name . " " . $fp_cost ." ". $fp_stock;

    $sql_statement = "INSERT INTO final_products(fp_name, fp_cost, fp_stock)
                        VALUES ('$fp_name', '$fp_cost', '$fp_stock')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>