<?php
include "config.php";

if(isset($_POST['seller_id'])){

    $seller_id = $_POST['seller_id'];

    $sql_statement = "DELETE FROM seller WHERE seller_id = $seller_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>