<?php

namespace App;
header('Content-Type: text/plain; charset=utf-8');
class FormTask7
{
    public  $open= '<form method="POST"><br>';
    public  $input= '<input type="text" placeholder="Ваше имя" name="name"><br>';
    public $submit;
    public $password='<input type="password" placeholder="password" name="pass"><br>';
    public $textarea='<textarea> type="text" placeholder="123" name="textarea"</textarea><br>';
    public $close = '</form>';
}
$form= new FormTask7();
echo $form->open;
echo $form->input;
echo $form->password;
echo $form->textarea;
echo $form->close;

