
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
<h1>Buys Table</h1>
</div>


<table id = "buys">



<table>

<tr><th>BUYS ID</th><th>CUSTOMER ID</th><th>FINAL PRODUCT ID</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  buys";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $buy_id = $row['buy_id'];
    $c_id = $row['c_id'];
    $fp_id = $row['fp_id'];

    echo "<tr>" . "<th>" .$buy_id ."</th>". "<th>" .$c_id ."</th>". "<th>" .$fp_id ."</th>"."</tr>";
}

?>

</table>