<?php
require 'functions.php';

if (!empty($_GET['sort'])){
    $sort = $_GET['sort'];

}else $sort = 'name';

if (!in_array($sort,['id', 'email','name','dob'])){
    $sort='name';
}

$sql= 'Select id, name , email , dob from users order by ' . $sort;
$query = $db ->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пользователи</title>
</head>
<body>
<table border="5">
    <tr>
        <th><a href="users.php?sort=id"> Id </a></th>
        <th><a href="users.php?sort=email"> Email</a></th>
        <th><a href="users.php?sort=name"> Name</a></th>
        <th><a href="users.php?sort=dob">DOB</a> </th>
    </tr>
<?php while  ($row = $query->fetch()):?>
<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['email']?></td>
    <td><?=$row['name']?></td>
    <td><?=$row['dob']?></td>
</tr>
<?php endwhile ?>
</table>
</body>
</html>
