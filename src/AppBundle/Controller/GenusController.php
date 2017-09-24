<?php
/**
 * Created by PhpStorm.
 * User: josephbutler
 * Date: 9/24/17
 * Time: 4:49 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class GenusController
{

    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response('Under the Seat!');
    }


}