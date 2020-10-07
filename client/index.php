<?php
/**
 * Appel au Web service(avec WSDL) situé sur 'http://localhost:8080'
 */


try {
	//appel du web service par le fichier wsdl
	$client = new SoapClient("http://localhost:8080/events.wsdl");
	$events = $client->getEvents(); // appel de lé méthode du web service
	echo "<pre>";
	//affiche les données du Web service
	//print_r($events);
	display( $events); //appel à la fonction

	//récupère l'événement 2
	$event = $client->getEventById(2);

	echo "<br>=========== EVENT 2 ========";
	print_r($event);
} catch (SoapFault $e) {
	var_dump($e);
}

/**
 *  affiche les événements
 *
 * @param array $events
 */
function display(array $events ){
	foreach ( $events as $index => $event) {
		echo "<h4>  $index# {$event['name']}</h4>";
		echo "<p> {$event['location']} , {$event['date']}</p>";
	}
}