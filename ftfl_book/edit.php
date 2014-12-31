<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");

$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//var_dump($row);
//echo ($row['dob']);
?>


<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>First Name:</label>

    <input type="text" name="fname" value="<?php echo $row['fname'];?>" />
    <br /><br />
    <label>Last Name:</label>
    <input type="text" name="lname" value="<?php echo $row['lname'];?>" />
    <br /><br />
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />

    <br /><br />
    <label>Password</label>
    <input type="password" name="password" value="<?php echo $row['password'];?>" />
    <br /><br />
    <label>Gender:</label>
    <input type="radio" name="gender"<?php if ($row['gender']== "Male") echo 'checked';?> value= "Male" />Male
    <input type="radio" name="gender"<?php if ($row['gender']== "Female") echo 'checked';?> value= "Female" />Female
    <br /><br />

    <?php
    $date = explode('-', $row['dob']);
    list($byear,$bmonth,$bday)=$date;
    ?>


    <label>Birth Day:</label>
    <select name="byear">
        <option  value="1" selected="selected">--Year--</option>
        <option <?php if ($byear == '2000' ) echo 'selected'; ?> value="2000">2000</option>
        <option <?php if ($byear == '1999' ) echo 'selected'; ?> value="1999">1999</option>
        <option <?php if ($byear == '1998' ) echo 'selected'; ?> value="1998">1998</option>
        <option <?php if ($byear == '1997' ) echo 'selected'; ?> value="1997">1997</option>
        <option <?php if ($byear == '1996' ) echo 'selected'; ?> value="1996">1996</option>
        <option <?php if ($byear == '1995' ) echo 'selected'; ?> value="1995">1995</option>

    </select>
    <select name="bmonth">
        <option value="1" selected="selected">--Month--</option>
        <option <?php if ($bmonth == '1' ) echo 'selected'; ?> value="1">January</option>
        <option <?php if ($bmonth == '2' ) echo 'selected'; ?> value="2">February</option>
        <option <?php if ($bmonth == '3' ) echo 'selected'; ?> value="3">March</option>
        <option <?php if ($bmonth == '4' ) echo 'selected'; ?> value="4">April</option>
    </select>
    <select name="bday">
        <option value="0" selected="selected">--Day--</option>
        <option <?php if ($bday == '1' ) echo 'selected'; ?> value="1">1</option>
        <option <?php if ($bday == '2' ) echo 'selected'; ?> value="2">2</option>
        <option <?php if ($bday == '3' ) echo 'selected'; ?> value="3">3</option>
        <option <?php if ($bday == '4' ) echo 'selected'; ?> value="4">4</option>
    </select>


    <br /><br />

    <label>Hobby:</label>

    <input type="checkbox" name="hobby"<?php if ($row['hobby']== "reading") echo 'checked';?> value= "reading" />Reading
    <input type="checkbox" name="hobby"<?php if ($row['hobby']== "travelling") echo 'checked';?> value= "travelling" />Travelling
    <input type="checkbox" name="hobby"<?php if ($row['hobby']== "gardening") echo 'checked';?> value= "gardening" />Gardening
    <input type="checkbox" name="hobby"<?php if ($row['hobby']== "other") echo 'checked';?> value= "other" />
    <label>Other:</label>

    <select name = "ffood">
        <option <?php if ($row ['ffood']== "barger") echo 'selected'; ?> value="barger">Barger</option>
        <option <?php if ($row ['ffood']== "pizza") echo 'selected'; ?> value="pizza">Pizza</option>
        <option <?php if ($row ['ffood']== "snacks") echo 'selected'; ?> value="snacks">Snacks</option>
        <option <?php if ($row ['ffood']== "chicken fry") echo 'selected'; ?> value="chicken fry">Chicken Fry</option>
        </select>

    <br /><br />

    <label>Comment:</label>
    <textarea name="Comment" cols="20" rows="2"><?php echo $row['Comment'];?></textarea>


<br>
    <button type="submit">Save</button>
    <button type="reset">Cancel</button>
</form>
</html>