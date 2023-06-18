<?php
include "config.php";

if(isset($_POST['Payment_id'])){

    $Payment_id = $_POST['Payment_id'];

    $sql_statement = "DELETE FROM payment WHERE Payment_id = $Payment_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>