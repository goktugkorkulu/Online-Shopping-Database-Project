<?php
include "config.php";

if(isset($_POST['pay_id'])){

    $pay_id = $_POST['pay_id'];

    $sql_statement = "DELETE FROM pays WHERE pay_id = $pay_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>