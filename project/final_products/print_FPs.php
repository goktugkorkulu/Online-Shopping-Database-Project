

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
<h1>Final Products Table</h1>
</div>


<table id = "final">

<tr><th>FP_ID</th><th>FP_NAME</th><th>FP_COST</th><th>FP_STOCK</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  final_products";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $fp_id = $row['fp_id'];
    $fp_name = $row['fp_name'];
    $fp_cost = $row['fp_cost'];
    $fp_stock = $row['fp_stock'];

    echo "<tr>" . "<th>" .$fp_id ."</th>". "<th>" .$fp_name ."</th>". "<th>" .$fp_cost ."</th>"."<th>".$fp_stock."</th>"."</tr>";
}

?>

</table>