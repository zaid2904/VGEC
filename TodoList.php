<?php
$con=mysqli_connect("localhost","root","","otp");
if(isset($_POST['submit'])){
    $textbox=$_POST['textbox'];
    $sql="insert into todo_list(title) values('$textbox')";
    mysqli_query($con, $sql);
}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sql="delete from todo_list where id=$id";
    mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO</title>
    <style>
        body{width:80%; margin:auto;}
        #container{margin-top: 100px;}
        #container h1{text-align: center;}
        #option #textbox{width: 82%; float: left;}
        /* #option #button{width: 16%; float:righ;} */
        #row_data{width: 90%;}
        #row_data td{border: 1px solid #ddd; padding: 8px;}
        #row_data tr:nth-child(even){background-color: #f2f2f2;}
        .clear{clear: both;}

    </style>
</head>
<body>
    <div id="container">
        <h1>PHP todo list</h1>
        <form method="post">
        <div id="option">
            <div id="textbox"><input type="textbox" name="textbox" id="textbox" style="width: 100%;padding:15px;"/></div>
            <div id="button"><input type="submit" name="submit" id="submit" style=padding:15px;"/></div>
        </div>
        </form>
        <div class="clear">&nbsp;</div>
        <div id="display">
            <table id="row_data">
                <?php
                $sql= "select * from todo_list order by id desc";
                $res=mysqli_query($con, $sql);
                echo $echo=mysqli_num_rows($res);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td width = "92%"> <?php echo $row['title']?></td>
                        <td><a href="index.php?delete=<?php echo $row['id']?>">Delete</a></td>
                    </tr>
                    <?php
                } 
                ?>
            </table>
        </div>
    </div>
</body>
</html>