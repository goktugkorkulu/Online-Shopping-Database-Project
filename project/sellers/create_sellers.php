<?php

include "config.php";

if(isset($_POST['seller_name'])){

    $seller_name = $_POST['seller_name'];

    echo $seller_name;

    $sql_statement = "INSERT INTO seller(seller_name)
                        VALUES ('$seller_name')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>