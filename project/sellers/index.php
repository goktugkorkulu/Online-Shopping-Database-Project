<?php
        include "config.php";
        if(isset($_POST['search'])) {

            $search_id = $_POST['search'];
            //$search_id = preg_replace("#[^0-9]#i","",$search_id); 
            
            $sql_statement = "SELECT * FROM sellers WHERE seller_name LIKE '%$search_id%'";
            $result = mysqli_query($db, $sql_statement) ;
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $seller_name = $row['seller_name'];
                        
                    $output .= '<div>'.$seller_name.'<div>';
                    print("$output");
                }
            }
            else{
              echo "result is empty!";
            }
        }

    
?>








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
include "print_sellers.php";
?>
<br>

<form action = "create_sellers.php" method = "POST">
<b>Seller Name:<b><input type = "text" name = "seller_name" placeholder = "Type seller name"><br>
    <button class="button button1">Insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE SELLER YOU WANT TO DELETE AND CLICK 'DELETE' BUTTON<b>
<br><br>

<form action = "delete_sellers.php" method = "POST">
    <select name = "seller_id">
    <?php
    include "config.php";
    $sql_command = "SELECT seller_id FROM seller";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['seller_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button class="button button1">Delete</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE NAME OF THE SELLER YOU WANT TO PRINT AND CLICK 'SELECT' BUTTON<b>
<br><br>
<form action = "index.php" method = "POST">
    <input type = "text" name = "search" placeholder = "Enter the name of the seller you want to search for"/>
    <input type = "submit" value = "Select" />
    
    
   
</form>
</div>
</body>

</html>
