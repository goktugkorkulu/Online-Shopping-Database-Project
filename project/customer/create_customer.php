<?php

include "config.php";

if(isset($_POST['c_password'])){

    $c_password = $_POST['c_password'];
    $c_adress = $_POST['c_adress'];
    

    echo $c_password . " " . $c_password;

    $sql_statement = "INSERT INTO customer(c_password, c_adress)
                        VALUES ('$c_password', '$c_adress')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>