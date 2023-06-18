
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
<h1>Payment Table</h1>
</div>


<table id = "payment">

<tr><th>PAYMENT_ID</th><th>PAYMENT_AMOUNT</th><th>PAYMENT_DATE</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  payment";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $Payment_id = $row['Payment_id'];
    $payment_amount = $row['payment_amount'];
    $payment_date = $row['payment_date'];
    
    echo "<tr>" . "<th>" .$Payment_id ."</th>". "<th>" .$payment_amount ."</th>". "<th>" .$payment_date ."</th>"."</tr>";
}

?>

</table>