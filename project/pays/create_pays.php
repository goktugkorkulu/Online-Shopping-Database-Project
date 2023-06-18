<?php

include "config.php";

if(isset($_POST['c_id'])){

    $c_id = $_POST['c_id'];
    $payment_id = $_POST['payment_id'];
    

    echo $c_id . " " . $c_id;

    $sql_statement = "INSERT INTO pays(c_id, payment_id)
                        VALUES ('$c_id', '$payment_id')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>