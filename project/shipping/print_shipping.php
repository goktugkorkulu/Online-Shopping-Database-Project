
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
<h1>Shipping Table</h1>
</div>


<table id = "shipping">

<tr><th>SHIP_ID</th><th>SHIP_COMPANY</th><th>SHIP_COST</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  shipping";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $ship_id = $row['ship_id'];
    $ship_company = $row['ship_company'];
    $ship_cost = $row['ship_cost'];
    
    echo "<tr>" . "<th>" .$ship_id ."</th>". "<th>" .$ship_company ."</th>". "<th>" .$ship_cost ."</th>"."</tr>";
}

?>

</table>