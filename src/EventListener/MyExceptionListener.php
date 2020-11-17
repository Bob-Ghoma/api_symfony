<?php


namespace App\EventListener;


use Symfony\Component\Config\Definition\Exception\Exception;

class MyExceptionListener
{
    public function onKernelException(Exception $event){
        $event->getThrowable();
        dump("Hey, il y a une erreur");
    }

}