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
include "print_customer.php";
?>
<br>

<form action = "create_customer.php" method = "POST">
<b>Customer ID:<b> &nbsp &nbsp &nbsp <input type = "text" name = "c_id" placeholder = "Customer ID" style="font-style:italic"> </b><br>
    <b>Customer Password:<b> <input type = "text" name = "c_password" placeholder = "Customer Password" style="font-style:italic" > &nbsp &nbsp <button class="button button1">Insert</button><br>
    <b>Customer Adress:<b> &nbsp &nbsp <input type = "text" name = "c_adress" placeholder = "Customer Adress" style="font-style:italic" >
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE CUSTOMER YOU WANT TO DELETE AND CLICK 'delete' BUTTON<b>
<br><br>
<form action = "delete_customer.php" method = "POST">
    <select name = "c_id">
    <?php
    include "config.php";
    $sql_command = "SELECT c_id FROM customer";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['c_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button class="button button1">Insert</button><br>
</form>
</div>
</body>

</html>
