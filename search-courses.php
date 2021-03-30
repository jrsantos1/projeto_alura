<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;


$client = new Client();

$return = $client->request('GET','https://www.alura.com.br/cursos-online-programacao/php');

$html = $return->getBody();

$crawler = new Crawler();

$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso_nome');

