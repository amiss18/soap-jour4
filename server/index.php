<?php

/**
 *  Web service SOAP exposé sans fichier WSDL
 */

require_once 'vendor/autoload.php';
require('Events.php');

$url = "http://localhost:8080"; //url du web service

/*
$gen = new \PHP2WSDL\PHPClass2WSDL(Events::class, $url);

$gen->generateWSDL();
//génère le fichier wsdl
file_put_contents("events.wsdl", $gen->dump());

*/
//
$server = new SoapServer("events.wsdl");
//On renseigne la classe qui sera exposée par le serveur SOAP. Ses méthodes sont accessibles via le service Web
$server->setClass(Events::class);
$server->handle();
