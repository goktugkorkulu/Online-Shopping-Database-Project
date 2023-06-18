<?php
include "config.php";

if(isset($_POST['produce_id'])){

    $produce_id = $_POST['produce_id'];

    $sql_statement = "DELETE FROM produce WHERE produce_id = $produce_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>