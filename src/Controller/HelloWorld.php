<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HelloWorld
{
    /** 
    * @Route("/hello-world") 
    */ 
    public function hello()
    {
        // $mensaje = 'Hello World!';

        return new Response(
            '<html><body><h1>Hello World!</h1></body></html>'
        );
    }
}