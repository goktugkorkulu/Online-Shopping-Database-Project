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
<h1>Goes To Table</h1>
</div>
<table id="goesto">

<tr><th>DELIVERY ID</th><th>CUSTOMER ID</th><th>SHIP ID</th><th>DELIVERY DATE</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  goes_to";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $delivery_id = $row['delivery_id'];
    $c_id = $row['c_id'];
    $ship_id = $row['ship_id'];
    $delivery_date = $row['delivery_date'];

    echo "<tr>" . "<th>" .$delivery_id ."</th>". "<th>" .$c_id ."</th>". "<th>" .$ship_id ."</th>"."<th>".$delivery_date."</th>"."</tr>";
}

?>

</table>