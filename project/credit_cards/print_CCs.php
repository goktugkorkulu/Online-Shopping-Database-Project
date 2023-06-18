
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
<h1>Credit Cards Table</h1>
</div>


<table id = "credit cards">

<tr><th>PAYMENT_ID</th><th>PAYMENT_DATE</th><th>PAYMENT_AMOUNT</th><th>CARD_ID</th><th>CARD_TYPE</th><th>SECURITY_CODE</th><th>CARD_EXP_DATE</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  credit_cards";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $payment_id = $row['payment_id'];
    $payment_date = $row['payment_date'];
    $payment_amount = $row['payment_amount'];
    $card_id = $row['card_id'];
    $card_type = $row['card_type'];
    $security_code = $row['security_code'];
    $card_exp_date = $row['card_exp_date'];

    echo "<tr>" ."<th>".$payment_id."</th>"."<th>".$payment_date."</th>"."<th>".$payment_amount."</th>". "<th>" .$card_id ."</th>". "<th>" .$card_type ."</th>". "<th>" .$security_code ."</th>"."<th>".$card_exp_date."</th>"."</tr>";
}

?>

</table>