<?php

    $link = mysqli_connect("shareddb-f.hosting.stackcp.net","checklist-3234bdb4","password98@","checklist-3234bdb4");

    if(isset($_POST['submit'])) {
        if($_POST['title'] != "" && $_POST['count']) {
            
            $query = "INSERT INTO `items`(`title`, `count`, `comment`) VALUES('".mysqli_real_escape_string($link, $_POST['title'])."', '". mysqli_real_escape_string($link, $_POST['count'])."', '".mysqli_real_escape_string($link, $_POST['comment'])."')";
            if(mysqli_query($link, $query)) {
                echo "<script> alert('Added to checklist!'); </script>";
            }
            
        } else {
            
            echo "<script> alert('Add title, count!'); </script>";
            
        }
    }

    if(isset($_POST['check'])) {
        $query = "UPDATE `items` SET `checked`= 1 WHERE `id`='".$_POST['check']."'";
        mysqli_query($link, $query);
    } else if(isset($_POST['uncheck'])) {
        $query = "UPDATE `items` SET `checked`= 0 WHERE `id`='".$_POST['uncheck']."'";
        mysqli_query($link, $query);
    }

    if(isset($_POST['edit'])) {
        $link = "edit.php?id=".$_POST['edit'];
        echo "<script> location.href='$link'; </script>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHECKLIST</title>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        
        <style>
        
            table, th, td {
                
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
                width: 80px;
                
            }
            
            .sign {
                
                width: 40%;
                
            }
            
        </style>
        
    </head>
    <body>
        <h1 style="text-align: center;">MY CHECKLIST</h1>
        <button type="button" id="addItem">ADD</button><br><br>
        <div id="itemForm" style="display: none;">
            <form method="post">
            
                <input type="text" name="title" placeholder="Title">
                <input type="number" name="count" placeholder="Count">
                <input type="comment" name="comment" placeholder="Comment">
                <button name="submit">Put</button>
            
            </form>
            <br><br>
            
        </div>
        
        <table id="checklist">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Count</th>
                    <th>Comment</th>
                    <th>Checked</th>
                    <th>Check</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $query = "SELECT * FROM `items`";
                    
                    if($result = mysqli_query($link, $query)) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$row['title']."</td>";
                            echo "<td>".$row['count']."</td>";
                            echo "<td>".$row['comment'];
                            if($row['comment'] == "") {
                                echo "NIL"."</td>";
                            } else {
                                echo "</td>";
                            }
                            if($row['checked'] == 1) {
                                echo "<td> <img src='tick.png' class='sign'> <img src='tick.png' class='sign'> </td>";
                                echo "<td><form method='post'><button name='uncheck' value='$id'>Uncheck</button></form>";
                            } else {
                                echo "<td> <img src='cross.png' class='sign'> <img src='cross.png' class='sign'> </td>";
                                echo "<td><form method='post'><button name='check' value='$id'>Check</button></form>";
                            }
                            echo "<td><form method='post'><button name='edit' value='$id'>Edit</button></form>";
                        }
                    }
                
                ?>
            </tbody>
        </table>
        
        <script type="text/javascript">
        
            $("#addItem").click(function() {
               
                $("#itemForm").css("display","block");
                
            });
            
        </script>
    </body>
</html>