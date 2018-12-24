<?php

        session_start();
        //session_destroy();
        $_SESSION ['country']=$_REQUEST['country'];

?>

Введите Вашу страну :
<form method="GET">
<input name="country">
<input type="submit">
<a href="test.php" >Ваша страна :<? echo $_SESSION ['country']; ?></a>
</form>

