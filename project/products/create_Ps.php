<?php

include "config.php";

if(isset($_POST['p_name'])){

    $p_name = $_POST['p_name'];
    $p_cost = $_POST['p_cost'];

    echo $p_name . " " . $p_cost;

    $sql_statement = "INSERT INTO products(p_name, p_cost)
                        VALUES ('$p_name', '$p_cost')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>