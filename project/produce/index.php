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
include "print_produce.php";
?>
<br>

<form action = "create_produce.php" method = "POST">
<input type = "text" name = "m_id" placeholder = "Type the manufacturer id"><br>
    <input type = "text" name = "P_id" placeholder = "Type the product id"><br>
    <button>insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE PRODUCTION YOU WANT TO DELETE AND CLICK 'delete' BUTTON<b>
<br><br>
<form action = "delete_produce.php" method = "POST">
    <select name = "produce_id">
    <?php
    include "config.php";
    $sql_command = "SELECT produce_id FROM produce";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['produce_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button>delete</button>
</form>
</div>
</body>

</html>
