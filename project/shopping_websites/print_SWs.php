
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

tr:nth-child(even) {background-color: #ff4d6d;}
.header {
    padding: 30px;
    text-align: center;
    background: #c9184a;
    color: #fff0f3;
    font-size: 20px;
    border: 3px solid white;
   }

</style>
</head>
<body style="background-color:#ffccd5;">

<div class="header">
<h1>Shopping Websites Table</h1>
</div>


<table id = "shopping_websites">

<tr><th>WEB_ID</th><th>WEB_ADDRESS</th></tr>

<?php

include "config.php";

$sql_statement = "SELECT *
                    FROM  shopping_websites";

$result = mysqli_query($db, $sql_statement);

while ($row = mysqli_fetch_assoc($result)){
    $web_id = $row['web_id'];
    $web_address = $row['web_address'];

    echo "<tr>" . "<th>" .$web_id ."</th>". "<th>" .$web_address ."</th>"."</tr>";
}

?>

</table>