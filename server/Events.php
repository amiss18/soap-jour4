<?php
/**
 * Classe qui va permettre de tester le service Web SOAP.
 * Ses méthodes sont accessibles
 */


class Events {

	protected $events = [
		1 => ["name" => "Quel est le rapport entre TCP, UDP et la programmation orientée objet",
			"date" => "2019-05-17 09:20",
			"location" => "Lyon"
		],
		2 => ["name" => "Laravel : the good, the bad and the ugly.Laravel : the good, the bad and the ugly.",
			"date" => "2019-05-17 10:05",
			"location" => "Lyon"
		],
		3 => ["name" => "Retour d'expérience : La migration d'un Zend Framework 1.12 vers Symfony",
			"date" => "2019-05-17 11:10",
			"location" => "Lille"
		],
		4 => ["name" => "Une application sans framework en 2019",
			"date" => "2019-05-17 16:40",
			"location" => "Lille"
		],
		5 => ["name" => "Software Management Lessons from the 1960s",
			"date" => "2017-10-26 11:25",
			"location" => "Lille"
		],

	];

	/**
	 * Get all the events we know about
	 *
	 * @return array The collection of events
	 */
	public function getEvents():array {
		return $this->events;
	}


	/**
	 * Fetch the detail for a single event
	 *
	 * @param int $event_id The identifier of the event
	 *
	 * @return array The event data
	 * @throws Exception
	 */
	public function getEventById( int $event_id):array {
		if(isset($this->events[$event_id])) {
			return $this->events[$event_id];
		} else {
			throw new Exception("Event not found");
		}
	}
}