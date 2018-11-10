<?php
/**
 * Created by PhpStorm.
 * User: oussoutoure
 * Date: 16/02/17
 * Time: 00:45
 */

// src/OC/PlatformBundle/Bigbrother/MessageNotificator.php

namespace OC\PlatformBundle\Bigbrother;
use Symfony\Component\Security\Core\User\UserInterface;

class MessageNotificator
{
    protected $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    // Méthode pour notifier par e-mail un administrateur
    public  function notifyByEmail($message, UserInterface $user)
    {
        $message = \Swift_Message::newInstance()
               ->setSubject("Nouveau message d'un utilisateur en surveillance")
               ->setFrom("hudtoure@gmail.com")
               ->setTo("alassaneousmane071@gmail.com")
               ->setBody("L'utilisateur surveillé". $user->getUsername()." a posté le message suivant: ". $message)
            ;
        $this->mailer->send($message);
    }
}