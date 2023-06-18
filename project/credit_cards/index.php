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
include "print_CCs.php";
?>
<br>

<form action = "create_CCs.php" method = "POST">
    <b>Card ID:<b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type = "text" name = "card_id" placeholder = "Type card id (16 digits)"><br>
    <b>Card Type:<b>&nbsp &nbsp &nbsp &nbsp &nbsp<input type = "text" name = "card_type" placeholder = "Type card type"><br>
    <b>Security Code:<b>&nbsp &nbsp<input type = "text" name = "security_code" placeholder = "Type security code (3 digits)"><br>
    <b>Expiration Date:<b><input type = "text" name = "card_exp_date" placeholder = "Type expiration date"><br><br>
    <b>Payment Date:<b> &nbsp &nbsp &nbsp<input type = "text" name = "payment_date" placeholder = "Type payment date"><br>
    <b>Payment Amount:<b><input type = "text" name = "payment_amount" placeholder = "Type payment amount"><br>
    <button class="button button1">Insert</button><br>
</form>

<br><br><br>
<b>PPlease Select the ID of the payment you want to delte and click 'DELETE'<b>
<br><br>
<form action = "delete_CCs.php" method = "POST">
    <select name = "payment_id">
    <?php
    include "config.php";
    $sql_command = "SELECT payment_id FROM credit_cards";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['payment_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button class="button button1">Delete</button>
</form>
</div>
</body>

</html>
