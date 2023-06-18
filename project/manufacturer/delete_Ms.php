<?php
include "config.php";

if(isset($_POST['m_id'])){

    $m_id = $_POST['m_id'];

    $sql_statement = "DELETE FROM manufacturer WHERE m_id = $m_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>