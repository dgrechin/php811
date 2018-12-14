<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
<table border="2">
    <tr>
        <td> Имя: <label><?= $values['name'] ?>  </label></td>
        <td> Email:<label><?=$values['email'] ?>  </label> </td>
        <td> Зарегестрирован:<label><?=$values['password'] ?>  </label> </td>
    </tr>
</table>

</body>
</html>