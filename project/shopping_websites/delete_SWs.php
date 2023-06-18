<?php
include "config.php";

if(isset($_POST['web_id'])){

    $web_id = $_POST['web_id'];

    $sql_statement = "DELETE FROM shopping_websites WHERE web_id = $web_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>