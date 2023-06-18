
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
<h1>Coupons Table</h1>
</div>


<table id = "coupons">

<tr><th>PAYMENT_ID</th><th>PAYMENT_DATE</th><th>PAYMENT_AMOUNT</th><th>COUP_EXPR_DATE</th><th>COUP_AMOUNT</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  coupons";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $payment_id = $row['payment_id'];
    $payment_date = $row['payment_date'];
    $payment_amount = $row['payment_amount'];
    $coup_expr_date = $row['coup_expr_date'];
    $coup_amount = $row['coup_amount'];

    echo "<tr>" ."<th>".$payment_id."</th>"."<th>".$payment_date."</th>"."<th>".$payment_amount."</th>"."<th>".$coup_expr_date."</th>"."<th>".$coup_amount."</th>"."</tr>";
}

?>

</table>