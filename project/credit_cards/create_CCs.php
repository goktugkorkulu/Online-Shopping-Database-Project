<?php

include "config.php";

if(isset($_POST['card_id'])){

    $card_id = $_POST['card_id'];
    $card_type = $_POST['card_type'];
    $security_code = $_POST['security_code'];
    $card_exp_date = $_POST['card_exp_date'];
    $payment_date = $_POST['payment_date'];
    $payment_amount = $_POST['payment_amount'];

    echo $card_id . " " . $card_type . " " . $security_code ." ". $card_exp_date. " " . $payment_date. " " . $payment_amount;

    $sql_statement = "INSERT INTO credit_cards(card_id, card_type, security_code, card_exp_date, payment_date, payment_amount)
                        VALUES ('$card_id', '$card_type', '$security_code', '$card_exp_date', '$payment_date', '$payment_amount')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>