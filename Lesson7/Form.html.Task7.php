
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вывод</title>
</head>
<body>
<form <?$form->getInput() ?>>
    <input>
    <input<?$form->getPassword()?>>
    <textarea<?$form->getTextarea()?>></textarea>
    <input<?$form->getSubmit()?>>
    <input<?$form->getClose()?>>
</form>
</body>
</html>