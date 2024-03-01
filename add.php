
<?php
include("header.php");
$servername = "localhost";
$username = "root";
$password = "";;
$dbname = "crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("failed to connect". mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["sname"];
    $address = $_POST["saddress"];
    $sub = $_POST["branch"];
    $phone = $_POST["sphone"];
    echo $sub;
    $sql = "INSERT INTO student(sname,saddress,sclass,sphone) 
    VALUES ('{$name}','{$address}','{$sub}','{$phone}')";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("location:index.php");
    }

}

?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div name="sub" class="form-group">
            <label>Class</label>
            <select name="branch">
                <option value="btech" selected>btech</option>
                <option value="bcom" >bcom</option>
                <option value="bca" >bca</option>
                <option value="bsc" >bsc</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
        <!-- <button type="submit" >submit</button> -->
    </form>
</div>
</div>
</body>

</html>