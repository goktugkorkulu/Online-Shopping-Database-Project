<?php
include "config.php";

if(isset($_POST['fp_id'])){

    $fp_id = $_POST['fp_id'];

    $sql_statement = "DELETE FROM final_products WHERE fp_id = $fp_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>