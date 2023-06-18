<?php
include "config.php";

if(isset($_POST['c_id'])){

    $c_id = $_POST['c_id'];

    $sql_statement = "DELETE FROM customer WHERE c_id = $c_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>