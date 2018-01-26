<?php

    $link = mysqli_connect("shareddb-f.hosting.stackcp.net","checklist-3234bdb4","password98@","checklist-3234bdb4");

    $id = mysqli_real_escape_string($link, $_GET['id']);

    $query = "SELECT `title` FROM `items` WHERE `id` = '$id'";
    
    $row = mysqli_fetch_assoc(mysqli_query($link, $query));

    $title = $row['title'];

    if(isset($_POST['submit'])) {
        
        if($_POST['title'] != '') {
            $query = "UPDATE `items` SET `title` = '".mysqli_real_escape_string($link, $_POST['title'])."' WHERE `id` = '$id'";
            mysqli_query($link, $query);
        } 
        if($_POST['count'] != '') {
            $query = "UPDATE `items` SET `count` = '".mysqli_real_escape_string($link, $_POST['count'])."' WHERE `id` = '$id'";
            mysqli_query($link, $query);
        } 
        if($_POST['comment'] != '') {
            $query = "UPDATE `items` SET `comment` = '".mysqli_real_escape_string($link, $_POST['comment'])."' WHERE `id` = '$id'";
            mysqli_query($link, $query);
        }
        
        echo "<script> location.href='index.php'; </script>";
        
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <form method="post">
        
            <input type="text" name="title" placeholder="Title"><br><br>
            <input type="number" name="count" placeholder="Count"><br><br>
            <input type="text" name="comment" placeholder="Comment"><br><br>
            <button name="submit">Submit</button>
            
        </form>
    </body>
</html>