<?php

header('Content-Type: text/plain; charset=utf-8');
class FormTask7
{
    private $open ;
    private $input ;
    private $password;
    private $submit;
    private $textarea;
    private $close = '';


    public function getOpen(): string
    {
        return $this->open;
    }

    public function setOpen(string $open): void
    {
        $this->open = $open;
    }

    public function getInput(): string
    {
        return $this->input;
    }

    public function setInput(string $input): void
    {
        $this->input = $input;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getSubmit(): string
    {
        return $this->submit;
    }

    public function setSubmit(string $submit): void
    {
        $this->submit = $submit;
    }

    public function getTextarea(): string
    {
        return $this->textarea;
    }

    public function setTextarea(string $textarea): void
    {
        $this->textarea = $textarea;
    }

    public function getClose(): string
    {
        return $this->close;
    }

    public function setClose(string $close): void
    {
        $this->close = $close;
    }


}
$form=new FormTask7();
$form->setOpen('method="POST"');
$form->setInput('');
$form->setPassword('type="password" placeholder="password" name="password"');
$form->setSubmit('type="submit" name="submit"');
$form->setTextarea('placeholder="123" name="textarea"');
$form->setClose('');

