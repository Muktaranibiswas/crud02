<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "first");

$query = "select * from users;";
$result = mysqli_query($link, $query);


?>

<table border="1" width="100%">
    <tr>
        <td>id</td>
        <td>First Name</td>
        <td>Last Name</td>

        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>

            <td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
            </td>
        </tr>
    <?php
    }
    ?>
</table>
