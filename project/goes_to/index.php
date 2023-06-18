<html>
<head>
    <title>Shopping Website</title>
    <style>
    .button {
      background-color: #590d22; 
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin: 6px 2px;
      cursor: pointer;
    }
    .button1 {border-radius: 30px;} /* Button Tasarımı */
    .button1 {font-size: 12px;}
    .button1:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}

    
    </style>
</head>

<body>

<?php
include "print_goesto.php";
?>
<br>

<form action = "create_goesto.php" method = "POST">
<input type = "text" name = "c_id" placeholder = "Type customer id"><br>
    <input type = "text" name = "ship_id" placeholder = "Type shipping id"><br>
    <input type = "text" name = "delivery_date" placeholder = "Type delivery date"><br><br>
    <button>insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE FINAL PRODUCT YOU WANT TO DELETE AND CLİCK 'delete' BUTTON<b>
<br><br>
<form action = "delete_goesto.php" method = "POST">
    <select name = "delivery_id">
    <?php
    include "config.php";
    $sql_command = "SELECT delivery_id FROM goes_to";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['delivery_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button>delete</button>
</form>
</div>
</body>

</html>
