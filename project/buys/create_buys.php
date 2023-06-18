<?php

include "config.php";

if(isset($_POST['c_id'])){

    $c_id = $_POST['c_id'];
    $fp_id = $_POST['fp_id'];
    

    echo $c_id . " " . $c_id;

    $sql_statement = "INSERT INTO buys(c_id, fp_id)
                        VALUES ('$c_id', '$fp_id')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>