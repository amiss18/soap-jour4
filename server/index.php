<?php

/**
 *  Web service SOAP exposé sans fichier WSDL
 */
require('Events.php');

$url = "http://localhost:8080"; //url du web service

$options = array("uri" => $url );
$server = new SoapServer(null, $options);



//On renseigne la classe qui sera exposée par le serveur SOAP. Ses méthodes sont accessibles via le service Web
$server->setClass('Events');
$server->handle();