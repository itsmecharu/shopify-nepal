<?php
$title="Home";
$active="Home";
    include_once("includes/header.php");
?>

<br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<link rel="stylesheet" href="css/main.css">
<h1 style="margin:auto;
    padding:auto;
    text-align:center;
    ">Shopify Nepal</h1>

    
    <br> <br><br>
    <br> <br>
<div class="buttons">
<a href="cregister.php" <?php if($active="rcustomer"){
    echo "class:'active'";
    }?>>Register As Customer</a>
<a href="sregister.php">Register As Seller</a>
<br>
<br>
<br>
<br>
<br>
<a href="login.php">LOG IN</a>
</div>
</div>
<br> <br><br>
 <br>

<?php
    include_once("includes/footer.php");
?>