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
    .button1 {font-size: 15px;}
    .button1:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}

    
    </style>
</head>

<body>




<?php
include "print_Ps.php";
?>
<br>

<form action = "create_Ps.php" method = "POST">
    <b>Product Name:<b><input type = "text" name = "p_name" placeholder = "Type product name"><br>
    <b>Product Cost:<b><input type = "text" name = "p_cost" placeholder = "Type product cost"><br>
    <button class="button button1">Insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE PRODUCT YOU WANT TO DELETE AND CLICK 'delete' BUTTON<b>
<br><br>
<form action = "delete_Ps.php" method = "POST">
    <select name = "p_id">
    <?php
    include "config.php";
    $sql_command = "SELECT p_id FROM products";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['p_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button class="button button1">Insert</button><br>
</form>
</div>
</body>

</html>
