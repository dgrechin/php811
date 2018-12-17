<?php

namespace App\service;


class Mailer
{

    public function send($to)
    {
        echo 'Sending mail ' . $to;

        $transport = (new \Swift_SmtpTransport('smtp.ethereal.email', 587, 'tls'))
            ->setUsername('yvfg3w7ywyd2b5b4@ethereal.email')
            ->setPassword('YuWvP1FxSagNwNTK3p');


        $mailer = new \Swift_Mailer($transport);


        $message = (new \Swift_Message('Wonderful Subject'))
            ->setFrom(['john@doe.com' => 'John Doe'])
            ->setTo($to)
            ->setBody('Сщщбщение из PHP');

        $result = $mailer->send($message);
        var_dump($result);

    }


}