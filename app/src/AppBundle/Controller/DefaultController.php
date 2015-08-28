<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{type}", name="log")
     */
    public function infoAction(Request $request, $type)
    {
        $this->get('logger')->log($type, sprintf('My %s', $type), ['path' => $request->getPathInfo()]);

        die($type);
    }
}
