<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> | Shopify </title> <!--display te name of online site-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php" <?php if($active =='home') {echo "class = 'active'";}?> >Home</a></li>
                <li><a href="about.php" <?php if($active =='about') {echo "class = 'active'";}?>>About</a></li>
                <li><a href="contact.php" <?php if($active =='contact') {echo "class = 'active'";}?>>Contact</a></li>
                <li><a href="guest.php" <?php if($active =='guest') {echo "class = 'active'";}?>>Guest</a></li>
                </ul>
        </nav>
</header>

    <div class="container">
     
