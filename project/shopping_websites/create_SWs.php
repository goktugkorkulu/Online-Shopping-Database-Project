<?php

include "config.php";

if(isset($_POST['web_address'])){

    $web_address= $_POST['web_address'];

    echo $web_address;

    $sql_statement = "INSERT INTO shopping_websites(web_address)
                        VALUES ('$web_address')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>