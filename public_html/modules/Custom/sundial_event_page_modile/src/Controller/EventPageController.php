<?php
/**
 * @file
 * Contains \Drupal\sundial_event_page_module\Controller\EventPageController.
 */
 
namespace Drupal\sundial_event_page_module\Controller;
 
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\image\Entity\ImageStyle;

class EventPageController extends ControllerBase {
  public function listEvent() {
    $output = 'Hi Module... <br>';
	
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
	
	$aStartDate = 0;
	$bStartDate = 0;
	
	if(isset($_REQUEST['listStartDate'])) {
		$aStartDate = strtotime($_REQUEST['listStartDate']);
	}
	
	if(isset($_REQUEST['listEndDate'])) {
		$bStartDate = strtotime($_REQUEST['listEndDate']);
	}
	
	if ($aStartDate && $bStartDate) {
		if ($aStartDate <= $bStartDate) {
			$timestamp = $aStartDate;
			$otherstamp = $bStartDate + 86399;
		} else {
			$timestamp = $bStartDate;
			$otherstamp = $aStartDate + 86399;
		}
	} elseif ($aStartDate) {
		$timestamp = $aStartDate;
		$otherstamp = $timestamp + 86400;
	} elseif ($bStartDate) {
		$otherstamp = $bStartDate + 86399;
		$timestamp = $otherstamp - 518400;
	}
	
	$output .= 'stamp is ';
	$output .= $timestamp;
	$output .= '<br>';
	
	$output .= 'otherstamp is ';
	$output .= $otherstamp;
	$output .= '<br>';
	
	$output .= $rawEventIndex;
	$output .= '<br>';
	
	$unorderedIndex = 0;
	
	for ($i=0; $i<$rawEventIndex; $i++) {
		//$eventBeginString = $rawEvent[$i]->get('field_date_of_event')->value;
		$eventBegin = $rawEvent[$i]->get('field_event_date')->value;
		$output .= $eventBeginString;
		$output .= 'vv';
		
		if ($eventBegin >= $timestamp && $eventBegin <= $otherstamp) {
			$unorderedNodes[$unorderedIndex] = $rawEvent[$i];
			$unorderedIndex++;
		}
	}
	
	for ($i=0; $i<$unorderedIndex; $i++) {
		$eventSorter[$i]['id'] = $unorderedNodes[$i]->id();
		//$eventSorter[$i]['eventBeginString'] = $unorderedNodes[$i]->get('field_date_of_event')->value;
		$eventSorter[$i]['eventBegin'] = $unorderedNodes[$i]->get('field_event_date')->value;
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
