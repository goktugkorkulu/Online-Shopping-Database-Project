<?php
include "config.php";

if(isset($_POST['seller_id']) && isset($_POST['fp_id'])){

    $seller_id = $_POST['seller_id'];
    $fp_id = $_POST['fp_id'];

    $sql_statement = "DELETE FROM orders 
            WHERE seller_id = '$seller_id}' 
            and fp_id = '$fp_id'";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>