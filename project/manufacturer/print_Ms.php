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
<h1>Manufacturer Table</h1>
</div>


<table id = "manufacturer">

<tr><th>M_ID</th><th>M_NAME</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  manufacturer";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $m_id = $row['m_id'];
    $m_name = $row['m_name'];

    echo "<tr>" . "<th>" .$m_id ."</th>". "<th>" .$m_name ."</th>"."</tr>";
}

?>

</table>