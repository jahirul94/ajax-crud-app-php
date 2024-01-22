<?php
$connect = mysqli_connect("localhost", "root", "", "wp");

$select = "SELECT * FROM ajax";
$ex = mysqli_query($connect, $select);
while ($row = mysqli_fetch_array($ex)) { ?>
    <tr>
        <td>
            <?php echo $row['id'] ?>
        </td>
        <td>
            <?php echo $row['name'] ?>
        </td>
        <td>
            <?php echo $row['email'] ?>
        </td>
        <td>
            <?php echo $row['password'] ?>
        </td>
        <td>
            <button onclick="delete_from_db(<?php echo $row['id'] ?>)">DELETE</button>
            <button onclick="update_data(<?php echo $row['id'] ?>)">UPDATE</button>
        </td>
    </tr>

<?php }




?>