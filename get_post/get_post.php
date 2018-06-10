<?php
    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <label>Name: </label>
        <input type="text" name="name" placeholder="Enter First Name">

        <br><br>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Enter Email">

        <br><br>

        <input type="submit" value="submit">
    </form>

    <ul>
        <li>
            <a href="http://localhost/php_practice/website2/get_post.php?name=kira&email=hmruiz13%40gmail.com">kira</a>
        </li>
        <li>
            <a href="http://localhost/php_practice/website2/get_post.php?name=blu&email=hmruiz13%40gmail.com">blu</a>
        </li>
    </ul>

    <?php echo $name . "'s profile"; ?>
</body>
</html>