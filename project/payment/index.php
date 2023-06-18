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
include "print_payment.php";
?>
<br>

<form action = "create_payment.php" method = "POST">
<b>Amount:<b><input type = "text" name = "payment_amount" placeholder = "Type amount of payment"><br>
    <b>Date:<b><input type = "text" name = "payment_date" placeholder = "Type payment date"><br>
    <button class="button button1">Insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE PAYMENT YOU WANT TO DELETE AND CLICK 'delete' BUTTON<b>
<br><br>
<form action = "delete_payment.php" method = "POST">
    <select name = "Payment_id">
    <?php
    include "config.php";
    $sql_command = "SELECT Payment_id FROM payment";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['Payment_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button class="button button1">Delete</button><br>
</form>
</div>
</body>

</html>
