<?php

include "config.php";

if(isset($_POST['m_id'])){

    $m_id = $_POST['m_id'];
    $P_id = $_POST['P_id'];
    

    echo $m_id . " " . $m_id;

    $sql_statement = "INSERT INTO produce(m_id, P_id)
                        VALUES ('$m_id', '$P_id')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>