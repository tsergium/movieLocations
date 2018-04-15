<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $mapsApiKey = 'AIzaSyAmaja05sRdrV5twx92iscOSmls2qW_4Gw';

        return $this->render('home/index.html.twig', [
            'apiKey' => $mapsApiKey,
        ]);
    }
}
