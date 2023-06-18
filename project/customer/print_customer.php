
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
<h1>Customer Table</h1>
</div>


<table id = "customer">

<tr><th>C_ID</th><th>C_PASSWORD</th><th>C_ADRESS</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  customer";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $c_id = $row['c_id'];
    $c_password = $row['c_password'];
    $c_adress = $row['c_adress'];

    echo "<tr>" . "<th>" .$c_id ."</th>". "<th>" .$c_password ."</th>". "<th>" .$c_adress ."</th>"."</tr>";
}

?>

</table>