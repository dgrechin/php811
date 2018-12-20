<?php

header('Content-Type: text/plain; charset=utf-8');
class FormTask7
{
    protected $open = '<form method="POST">' . "\n";
    protected $input = '<input type="text" placeholder="Ваше имя" name="name"><br>' . "\n";
    protected $password = '<input type="password" placeholder="password" name="password"><br>' . "\n";
    protected $submit = '<input type="submit" name="submit">' . "\n";
    protected $textarea = '<textarea placeholder="123" name="textarea"></textarea><br>' . "\n";
    protected $close = '</form>';

    public function getOpen(): string
    {
        return $this->open;
    }

    public function getInput(): string
    {
        return $this->input;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getSubmit(): string
    {
        return $this->submit;
    }

    public function getTextarea(): string
    {
        return $this->textarea;
    }

    public function getClose(): string
    {
        return $this->close;
    }

public function require(): self
{
    $form=new FormTask7();
    echo $form->getOpen();
    echo $form->getInput();
    echo $form->getPassword();
    echo $form->getTextarea();
    echo $form->getSubmit();
    echo $form->getClose();

}

}
$form=new FormTask7();
echo $form->require();
