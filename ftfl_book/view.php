<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");

$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Gender</td>
        <td>Birth Day</td>
        <td>Hobby</td>
        <td>Other</td>
        <td>Comment</td>


        <td>Action</td>
    </tr>
<?php
foreach($result as $row){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['fname']?></td>
        <td><?php echo $row['lname']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['password']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['dob']?></td>
        <td><?php echo $row['hobby']?></td>
        <td><?php echo $row['ffood']?></td>
        <td><?php echo $row['Comment']?></td>




        <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
            <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
    </tr>
    <?php }
?>
</table>
<a href="list.php">Go to Home</a>