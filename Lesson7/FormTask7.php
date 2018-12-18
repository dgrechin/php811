<?php

namespace App;

header('Content-Type: text/plain; charset=utf-8');
class FormTask7
{
public $input;
public $submit;
public $password;
public $textarea;
public $open;
public $close;
}
$form= new FormTask7();
$form->input= ['type'=>'text', 'value'=>'!!!' , 'class'=>'ggg'];
echo $form->input[1];