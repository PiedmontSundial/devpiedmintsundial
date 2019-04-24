<?php
/**
 * @file
 * Contains \Drupal\sundial_free_page_module\Controller\FreePageController.
 */
 
namespace Drupal\sundial_free_page_module\Controller;
 
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\image\Entity\ImageStyle;

class FreePageController extends ControllerBase {
  public function listFree() {
    $output = 'Hi Free Module... <br>';
	
	$nids = \Drupal::entityQuery('node')
		->condition('status', 1)
		->condition('type', 'events')
		->execute();
	$rawEventIndex = 0;
	foreach ($nids as $nid) {
		$rawEvent[$rawEventIndex] = node_load($nid);
		$rawEventIndex++;
	}
	
	date_default_timezone_set('America/New_York');
	$month = date("m");
	$day = date("j");
	$year = date("Y");
	$timestamp = mktime(0,0,0,$month,$day,$year);
	$otherstamp = $timestamp + 604800;
	
	$unorderedIndex = 0;
	
	for ($i=0; $i<$rawEventIndex; $i++) {
		$isFree = $rawEvent[$i]->get('field_is_the_event_free')->value;
		$output .= $isFree;
		$output .= 'here<br>';
		if ($isFree) {
			$unorderedNodes[$unorderedIndex] = $rawEvent[$i];
			$unorderedIndex++;
		}
	}
	
	for ($i=0; $i<$tagEventsIndex; $i++) {
		$eventSorter[$i]['id'] = $tagEvents[$i]->id();
		$eventSorter[$i]['eventBegin'] = $tagEvents[$i]->get('field_event_date')->value;
	}
	
	if ($unorderedIndex) {
		$eventBegin = array();
		
		foreach ($eventSorter as $key => $row) {
			$eventBegin[$key] = $row['eventBegin'];
		}
	
		array_multisort($eventBegin, SORT_ASC, $eventSorter);
		
		$orderedEventIndex = 0;
		
		foreach ($eventSorter as $event) {
			$orderedEvent[$orderedEventIndex] = node_load($event['id']);
			$orderedEventIndex++;
		}
	}
	
	$nodes = array();
	
	for ($i=0; $i<$orderedEventIndex; $i++) {
		array_push($nodes, $orderedEvent[$i]);
	}
	
	return array (
		'#theme' => 'sundial_event_page',
		'#nodes' => $nodes,
	);
	
	/*
	return array(
      '#type' => 'markup',
      '#markup' => t($output),
    );
	*/
  }
}

?>
