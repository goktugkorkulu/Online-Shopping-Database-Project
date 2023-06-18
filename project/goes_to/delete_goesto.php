<?php
include "config.php";

if(isset($_POST['delivery_id'])){

    $delivery_id = $_POST['delivery_id'];

    $sql_statement = "DELETE FROM goes_to WHERE delivery_id = $delivery_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>