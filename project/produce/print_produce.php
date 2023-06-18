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
<h1>Produce Table</h1>
</div>


<table id = "produce">



<tr><th>PRODUCTION ID</th><th>MANUFACTURER ID</th><th>FINAL PRODUCT ID</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  produce";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $produce_id = $row['produce_id'];
    $m_id = $row['m_id'];
    $P_id = $row['P_id'];

    echo "<tr>" . "<th>" .$produce_id ."</th>". "<th>" .$m_id ."</th>". "<th>" .$P_id ."</th>"."</tr>";
}

?>

</table>