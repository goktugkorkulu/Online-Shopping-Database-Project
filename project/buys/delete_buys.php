<?php
include "config.php";

if(isset($_POST['buy_id'])){

    $buy_id = $_POST['buy_id'];

    $sql_statement = "DELETE FROM buys WHERE buy_id = $buy_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>