<?php
/**
 * Created by PhpStorm.
 * User: Dugrossy
 * Date: 11/02/2019
 * Time: 10:30
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function homepage()
    {
        return new Response('OMG! My first Symfony page :D');
    }
}