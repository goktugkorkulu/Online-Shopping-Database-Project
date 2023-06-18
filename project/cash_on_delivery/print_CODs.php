<!DOCTYPE html>
<html>
<head>
<style>
table {
  
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 10px;
  border: 3px solid white;
}

tr:nth-child(even) {background-color: #E36B89;}
.header {
    padding: 30px;
    text-align: center;
    background: #E36B89;
    color: #fff0f3;
    font-size: 20px;
    border: 3px solid white;

   }
</style>
</head>
<body style="background-color:#FCC7CF;">

<div class="header">
<h1>Cash On Delivery Table</h1>
</div>
<table id="customers">

<tr><th>PAYMENT ID</th><th>PAYMENT DATE</th><th>PAYMENT AMOUNT</th><th>CURRENCY TYPE</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  cash_on_delivery";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $payment_id = $row['payment_id'];
    $payment_date = $row['payment_date'];
    $payment_amount = $row['payment_amount'];
    $currency_type = $row['currency_type'];

    echo "<tr>" ."<th>".$payment_id."</th>"."<th>".$payment_date."</th>"."<th>".$payment_amount."</th>"."<th>".$currency_type."</th>"."</tr>";
}

?>

</table>

</body>
</html>