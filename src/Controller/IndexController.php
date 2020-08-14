<?php

namespace App\Controller;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MonologBundle\MonologBundle;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(LoggerInterface $logger)
    {
        $logger->debug('Princes of the universes');

        $king = 'Queen';

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'prince' => $king
        ]);
    }
}
