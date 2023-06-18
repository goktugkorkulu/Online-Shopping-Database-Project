<?php

include "config.php";

if(isset($_POST['payment_date'])){

    $payment_date = $_POST['payment_date'];
    $payment_amount = $_POST['payment_amount'];
    $coup_expr_date = $_POST['coup_expr_date'];
    $coup_amount = $_POST['coup_amount'];

    echo $payment_date . " " . $payment_amount . " " . $coup_expr_date . " " . $coup_amount;

    $sql_statement = "INSERT INTO coupons(payment_date, payment_amount, coup_expr_date, coup_amount)
                        VALUES ('$payment_date', '$payment_amount', '$coup_expr_date', '$coup_amount')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>