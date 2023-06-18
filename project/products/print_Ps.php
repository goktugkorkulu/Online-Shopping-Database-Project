
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
<h1>Product Table</h1>
</div>


<table id = "products">
<tr><th>P_ID</th><th>P_NAME</th><th>P_COST</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  products";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $p_id = $row['p_id'];
    $p_name = $row['p_name'];
    $p_cost = $row['p_cost'];

    echo "<tr>" . "<th>" .$p_id ."</th>"."<th>" .$p_name ."</th>"."<th>" .$p_cost ."</th>"."</tr>";
}

?>

</table>