<?php
include 'header.php';
?>
<div id="main-content">
    <h2>IT Students Records</h2>
    <table cellpadding="7px">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "SELECT * FROM STUDENT";
    $result = mysqli_query( $conn, $sql ) or die("Query unsuccessful");

    if(mysqli_num_rows($result) > 0){
        
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['sclass']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else{
    echo"<h2>No record found</h2>";
}
mysqli_close( $conn );
?>
</div>
</div>
</body>
</html>
