<?php
include "config.php";

if(isset($_POST['p_id'])){

    $p_id = $_POST['p_id'];

    $sql_statement = "DELETE FROM products WHERE p_id = $p_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>