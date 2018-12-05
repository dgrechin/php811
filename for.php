<?php


$salary=[
    'IVAN' =>  3000,
    'VICTOR' =>  2000,
    'SVETA' =>  35000,
    ];
if(isset($_GET['sort'])){
    switch ($_GET['sort']){
        case 'name':
            ksort($salary);
            break;
        case "salary":
            asort($salary);
            break;

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salary</title>
</head>
<body>
  <table>
      <tr>
          <th> <a href="for.php?sort=name">Name</a> </th>
          <th> <a href="for.php?sort=salary">Salary</a> </th>
      </tr>
      <?php foreach ( $salary as $name => $value):?>
          <tr>
              <td> <?= $name ?></td>
              <td> <?= $value ?></td>
          </tr>

      <?php endforeach ?>
  </table>
</body>
</html>