<?php

include "config.php";

if(isset($_POST['m_name'])){

    $m_name = $_POST['m_name'];
    
    echo $m_name;

    $sql_statement = "INSERT INTO manufacturer(m_name)
                        VALUES ('$m_name')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>