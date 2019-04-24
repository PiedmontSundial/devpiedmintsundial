<?php

namespace Drupal\form_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\image\Entity\ImageStyle;

class FormTestController extends ControllerBase {
	
	public function sendForm() {
		
		$output = 'Hi send form';
		
		/*
		return array(
			'#type' => 'markup',
			'#markup' => t($output),
		);
		*/
		
		return array (
			'#theme' => 'send_form',
		);
		
	}
	
	public function getForm() {
		
		$connection = \Drupal::database();
		$query = $connection->insert('form_hold')
			->fields([
				'its' => $_POST['it'],
				'notits' => $_POST['notit'],
			])->execute();
		
		$output = 'Hi get form';
		
		$stuff = array();
		
		foreach ($_POST as $thing) {
			array_push($stuff, $thing);
		}
		
		//print_r($stuff);
		
		$ham = $_POST['notit'];
		
		/*
		return array(
			'#type' => 'markup',
			'#markup' => t($output),
		);
		*/
		
		return array (
			'#theme' => 'get_form',
			'#objects' => $ham,
		);
		
	}
	
	public function callData() {
		
		$connection = \Drupal::database();
		$query = $connection->query("SELECT * FROM {form_hold}");
		$results = $query->fetchAll();
		
		$output = 'Hi call form';
		
		$stuff = array();
		
		foreach ($results as $thing) {
			array_push($stuff, $thing->its);
			array_push($stuff, $thing->notits);
		}
		
		print_r($stuff);
		
		$ham = $_POST['notit'];
		
		/*
		return array(
			'#type' => 'markup',
			'#markup' => t($output),
		);
		*/
		
		return array (
			'#theme' => 'call_data',
			'#objects' => $stuff,
		);
		
	}
	
}

?>
