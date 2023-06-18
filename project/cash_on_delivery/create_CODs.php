<?php

include "config.php";

if(isset($_POST['payment_date'])){

    $payment_date = $_POST['payment_date'];
    $payment_amount = $_POST['payment_amount'];
    $currency_type = $_POST['currency_type'];

    echo $payment_date . " " . $payment_amount . " " . $currency_type;

    $sql_statement = "INSERT INTO cash_on_delivery(payment_date, payment_amount, currency_type)
                        VALUES ('$payment_date', '$payment_amount', '$currency_type')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>