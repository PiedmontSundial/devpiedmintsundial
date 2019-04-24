<?php

namespace Drupal\sundial_new_event_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\image\Entity\ImageStyle;

class SundialNewEventModuleController extends ControllerBase {
	
	public function createEvent() {
		$output = 'Hi event creator';
		
		// if we created a new venue and add it before pulling venues
		if (isset($_POST['isCreatingVenue']) && $_POST['isCreatingVenue'] == 1) {
			$node = Node::create(array(
				'type' => 'venue',
				'title' => (string)$_POST['newVenueName'],
				'langcode' => 'en',
				'uid' => '1',
				'status' => 1,
				'field_city' => $_POST['cityId'],
				'field_venue_state' => $_POST['state'],
				'field_venue_address' => $_POST['address'],
				'field_venue_description' => (string)$_POST['blurb'],
				'field_zip_code' => $_POST['zip'],
			));
					
			$node->save();
			
			$newVenueId = $node->id();
		} else {
			$newVenueId = 0;
			$newPerformerId = 0;
			$venueId = 0;
		}
		
		// if we created a new performer and add it before pulling performers
		if (isset($_POST['isCreatingPerformer']) && $_POST['isCreatingPerformer'] == 1) {
			$node = Node::create(array(
				'type' => 'performer',
				'title' => (string)$_POST['newPerformerName'],
				'langcode' => 'en',
				'uid' => '1',
				'status' => 1,
				'field_venue_description' => (string)$_POST['blurb'],
			));
					
			$node->save();
			
			$newPerformerId = $node->id();
			$venueId = $_POST['venueId'];
		} else {
			$newPerformerId = 0;
			$venueId = 0;
		}
		
		$nids = \Drupal::entityQuery('node')
			->condition('status', 1)
			->condition('type', 'Venue')
			->execute();
		$rawVenueIndex = 0;
		foreach ($nids as $nid) {
			$rawVenue[$rawVenueIndex] = node_load($nid);
			$rawVenueIndex++;
		}
		
		$venues = array();
		
		for ($i=0; $i<$rawVenueIndex; $i++) {
			array_push($venues, $rawVenue[$i]);
		}
		
		$nids = \Drupal::entityQuery('node')
			->condition('status', 1)
			->condition('type', 'Performer')
			->execute();
		$rawPerformerIndex = 0;
		foreach ($nids as $nid) {
			$rawPerformer[$rawPerformerIndex] = node_load($nid);
			$rawPerformerIndex++;
		}
		
		$performers = array();
		
		for ($i=0; $i<$rawPerformerIndex; $i++) {
			array_push($performers, $rawPerformer[$i]);
		}
		
		$query = \Drupal::entityQuery('taxonomy_term');
		$query->condition('vid', 'tags');
		$tids = $query->execute();
		$eventTypes = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
		
		return array (
			'#theme' => 'sundial_add_event',
			'#venues' => $venues,
			'#performers' => $performers,
			'#event_types' => $eventTypes,
			'#newVenueId' => $newVenueId,
			'#newPerformerId' => $newPerformerId,
			'#venueId' => $venueId,
		);
		
	}
	
	public function showProvs() {
		
		$connection = \Drupal::database();
		$query = $connection->query("SELECT * FROM {editable_provisional_event}");
		$results = $query->fetchAll();
		
		$uno = $results[0];
		$dbPerformerIdArray = explode(",", $uno->performer_ids);
		print_r("XXX");
		print_r($dbPerformerIdArray[0]);
		print_r("XXX");
		
		$output = 'Hi call form';
		
		$stuff = array();
		
		foreach ($results as $thing) {
			array_push($stuff, $thing->name);
			array_push($stuff, $thing->performer_ids);
			array_push($stuff, $thing->venue_id);
			array_push($stuff, $thing->event_primary_category_id);
			array_push($stuff, $thing->event_secondary_category_one_id);
			array_push($stuff, $thing->event_secondary_category_two_id);
			array_push($stuff, $thing->blurb);
			array_push($stuff, $thing->time_of_event);
			array_push($stuff, $thing->is_event_free);
			array_push($stuff, $thing->is_there_a_cost_range);
			array_push($stuff, $thing->event_cost);
			array_push($stuff, $thing->event_cost_range);
			array_push($stuff, $thing->event_drupal_node_id);
		}
		
		$nid = 10841;
		
		$connection = \Drupal::database();
		$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $nid);
		$editable = $query->fetchAssoc();
		
		print_r($editable);
		
		$node = \Drupal\node\Entity\Node::load($nid);
		$node->setTitle('Working Title Allmanni');
		$bill = $node->get('field_bill_performer_reference')->getValue();
		$secs = $node->get('field_secondary_categories')->getValue();
		$titles = $node->get('field_event_image')->getValue();
		$node->save();
		
		//print_r($bill);
		//print_r($titles);
		//print_r($secs);
		$perfs = $node->get('field_bottom_cost_range')->getValue();
		//print_r($perfs);
		
		return array (
			'#theme' => 'show_provs',
			'#objects' => $stuff,
		);
		
	}
	
	public function editEvent() {
		
		if (isset($_POST['isCreatingNewEvent']) && $_POST['isCreatingNewEvent'] == 1) {
			foreach ($_POST as $thing) {
				$output .= $thing;
				$output .= '<br>';
			}
			
			date_default_timezone_set('America/New_York');
			$timeString = $_POST['date'] . ' ' . $_POST['startHour'] . ':' . $_POST['startMinute'] . ':00 ' . $_POST['startAmPm'];
			$timestamp = strtotime($timeString);
			
			if ($_POST['performerId']) {
				$eventBasicCategory = 'Performance';
			} else {
				$eventBasicCategory = '';
			}
			
			if ($_POST['hasCostRange']) {
				$baseCost = $_POST['costDollarsForRange'] . '.' . $_POST{'costCentsForRange'};
				$rangeCost = $_POST['rangeCostDollars'] . '.' . $_POST{'rangeCostCents'};
			} else {
				$baseCost = $_POST['costDollars'] . '.' . $_POST{'costCents'};
			}
			
			$output .= $timeString;
			$output .= '<br>';
			
			$output .= $timestamp;
			$output .= '<br>';
			
			$secondaryTypeArray = array();
			
			// see if ther are zerp one or two secondary types
			if ($_POST['eventSecondaryTypeOne']) {
				$tempArray = array();
				$tempArray['target_id'] = $_POST['eventSecondaryTypeOne'];
				array_push($secondaryTypeArray, $tempArray);
			}
			if ($_POST['eventSecondaryTypeTwo']) {
				$tempArray = array();
				$tempArray['target_id'] = $_POST['eventSecondaryTypeTwo'];
				array_push($secondaryTypeArray, $tempArray);
			}
			
			if ($_POST['performerId']) {
				$node = Node::create(array(
					'type' => 'events',
					'title' => (string)$_POST['name'],
					'field_event_category' => $eventBasicCategory,
					'langcode' => 'en',
					'uid' => '1',
					'status' => 0,
					'field_event_date' => $timestamp,
					'field_venue' => $_POST['venueId'],
					'field_bill_performer_reference' => $_POST['performerId'],
					'field_event_description' => (string)$_POST['blurb'],
					'field_primary_category' => $_POST['eventType'],
					'field_secondary_categories' => $secondaryTypeArray,
					'field_is_the_event_free' => $_POST['hasCost'],
					'field_cost_range' => $_POST['hasCostRange'],
					'field_bottom_cost_range' => $baseCost,
					'field_top_cost_range' => $rangeCost,
				));
			} else {
				$node = Node::create(array(
					'type' => 'events',
					'title' => (string)$_POST['name'],
					'field_event_category' => $eventBasicCategory,
					'langcode' => 'en',
					'uid' => '1',
					'status' => 0,
					'field_event_date' => $timestamp,
					'field_venue' => $_POST['venueId'],
					'field_event_description' => (string)$_POST['blurb'],
					'field_primary_category' => $_POST['eventType'],
					'field_secondary_categories' => $secondaryTypeArray,
					'field_is_the_event_free' => $_POST['hasCost'],
					'field_cost_range' => $_POST['hasCostRange'],
					'field_bottom_cost_range' => $baseCost,
					'field_top_cost_range' => $rangeCost,
				));
			}
			
			$node->save();
			
			$id = $node->id();
			
			// if there is only one secondary type id it should be one
			$secTypeOne = 0;
			$secTypeTwo = 0;
			if ($_POST['eventSecondaryTypeOne']) {
				$secTypeOne = $_POST['eventSecondaryTypeOne'];
				$secTypeTwo = $_POST['eventSecondaryTypeTwo'];
			} else {
				$secTypeOne = $_POST['eventSecondaryTypeTwo'];
			}
			
			$connection = \Drupal::database();
			$query = $connection->insert('editable_provisional_event')
				->fields([
					'name' => (string)$_POST['name'],
					'performer_ids' => $_POST['performerId'],
					'venue_id' => $_POST['venueId'],
					'event_primary_category_id' => $_POST['eventType'],
					'event_secondary_category_one_id' => $secTypeOne,
					'event_secondary_category_two_id' => $secTypeTwo,
					'blurb' => (string)$_POST['blurb'],
					'time_of_event' => $timestamp,
					'is_event_free' => $_POST['hasCost'],
					'is_there_a_cost_range' => $_POST['hasCostRange'],
					'event_cost' => $baseCost,
					'event_cost_range' => $rangeCost,
					'event_drupal_node_id' => $id,
				])->execute();
			
			$output .= $id;
			
			$_REQUEST['eventId'] = $id;
			//print_r($_REQUEST['eventId']);
		}
		
		if (isset($_REQUEST['isCloningEvent']) && $_REQUEST['isCloningEvent'] == 1) {
			$eventId = $_REQUEST['eventId'];
			
			date_default_timezone_set('America/New_York');
			$timeString = $_POST['date'] . ' ' . $_POST['startHour'] . ':' . $_POST['startMinute'] . ':00 ' . $_POST['startAmPm'];
			$timestamp = strtotime($timeString);
			
			$node = node_load($eventId);
			
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $eventId);
			$editable = $query->fetchAssoc();
			
			if ($node && $editable) {
				$dbPerformerIdArray = explode(",", $editable['performer_ids']);
				if ($dbPerformerIdArray[0] != "") {
					$performerArray = array();
					for ($i = 0; $i < count($dbPerformerIdArray); $i++) {
						$tempArray = array();
						$tempArray['target_id'] = $dbPerformerIdArray[$i];
						array_push($performerArray, $tempArray);
					}
				}
				
				if ($dbPerformerIdArray[0]) {
					$eventCategory = 'Performance';
				} else {
					$eventCategory = '';
				}
				
				$secondaryCatsArray = array();
				if ($editable['event_secondary_category_one_id']) {
					$tempArray = array();
					$tempArray['target_id'] = $editable['event_secondary_category_one_id'];
					array_push($secondaryCatsArray, $tempArray);
				}
				if ($editable['event_secondary_category_two_id']) {
					$tempArray = array();
					$tempArray['target_id'] = $editable['event_secondary_category_two_id'];
					array_push($secondaryCatsArray, $tempArray);
				}
				$query = $connection->update('editable_provisional_event')
					->fields([
						'date_clone_family_id' => $editable['id'],
					])->condition('id', $editable['id'])
					->execute();
				
				$newNode = Node::create(array(
					'type' => 'events',
					'title' => (string)$editable['name'],
					'field_event_category' => $eventCategory,
					'langcode' => 'en',
					'uid' => '1',
					'status' => 0,
					'field_event_date' => $timestamp,
					'field_venue' => $editable['venue_id'],
					'field_bill_performer_reference' => $performerArray,
					'field_event_description' => (string)$editable['blurb'],
					'field_primary_category' => $editable['event_primary_category_id'],
					'field_secondary_categories' => $secondaryCatsArray,
					'field_is_the_event_free' => $editable['is_event_free'],
					'field_cost_range' => $editable['is_there_a_cost_range'],
					'field_bottom_cost_range' => $editable['event_cost'],
					'field_top_cost_range' => $editable['event_cost_range'],
				));
				
				$newNode->save();
				
				$newNodeId = $newNode->id();
				
				$query = $connection->insert('editable_provisional_event')
					->fields([
						'name' => (string)$editable['name'],
						'performer_ids' => $editable['performer_ids'],
						'venue_id' => $editable['venue_id'],
						'event_primary_category_id' => $editable['event_primary_category_id'],
						'event_secondary_category_one_id' => $editable['event_secondary_category_one_id'],
						'event_secondary_category_two_id' => $editable['event_secondary_category_two_id'],
						'blurb' => (string)$editable['blurb'],
						'time_of_event' => $timestamp,
						'is_event_free' => $editable['is_event_free'],
						'is_there_a_cost_range' => $editable['is_there_a_cost_range'],
						'event_cost' => $editable['event_cost'],
						'event_cost_range' => $editable['event_cost_range'],
						'event_drupal_node_id' => $newNodeId,
						'date_clone_family_id' => $editable['id'],
					])->execute();
				
			}
		}
		
		if (isset($_REQUEST['isCloningEventRange']) && $_REQUEST['isCloningEventRange'] == 1) {
			//print_r("got here");
			$eventId = $_REQUEST['eventId'];
			
			date_default_timezone_set('America/New_York');
			
			// get beginning and end day and make sure that they are in right order
			$dayOneStamp = strtotime($_POST['dateBegin']);
			$dayTwoStamp = strtotime($_POST['dateEnd']);
			
			if ($dayOneStamp > $dayTwoStamp) {
				$stampFirst = $dayTwoStamp;
				$stampSecond = $dayOneStamp;
			} else {
				$stampFirst = $dayOneStamp;
				$stampSecond = $dayTwoStamp;
			}
			
			//print_r($stampFirst);
			//print_r("stampSecond ");
			//print_r($stampSecond);
			//print_r("dayDiff ");
			
			
			// get difference and see how many days it is
			$dayDiff = $stampSecond - $stampFirst;
			$numberOfDays = intdiv($dayDiff, 86400);
			//print_r($dayDiff);
			//print_r("numberOfDays ");
			//print_r($numberOfDays);
			//print_r("totalDays ");
			// now get an array counter including the first day
			$totalDays = $numberOfDays + 1;
			//print_r($totalDays);
			$dayStamp[0] = $stampFirst;
			//print_r("dayStamp ");
			//print_r($dayStamp[0]);
			for ($i = 1; $i < $totalDays; $i++) {
				$dayStamp[$i] = $stampFirst + (86400 * $i);
				//print_r("dayStamp ");
				//print_r($dayStamp[$i]);
			}
			
			for ($i = 0; $i < $totalDays; $i++) {
				
				$dateString = date("Y-m-d", $dayStamp[$i]);
				$timeString = $dateString . ' ' . $_POST['startHour'] . ':' . $_POST['startMinute'] . ':00 ' . $_POST['startAmPm'];
				$timestamp = strtotime($timeString);
				
				//print_r("dateString ");
				//print_r($dateString);
				
				$node = node_load($eventId);
				
				$connection = \Drupal::database();
				$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $eventId);
				$editable = $query->fetchAssoc();
				
				if ($node && $editable) {
					$dbPerformerIdArray = explode(",", $editable['performer_ids']);
					if ($dbPerformerIdArray[0] != "") {
						$performerArray = array();
						for ($j = 0; $j < count($dbPerformerIdArray); $j++) {
							$tempArray = array();
							$tempArray['target_id'] = $dbPerformerIdArray[$j];
							array_push($performerArray, $tempArray);
						}
					}
					
					if ($dbPerformerIdArray[0]) {
						$eventCategory = 'Performance';
					} else {
						$eventCategory = '';
					}
					
					$secondaryCatsArray = array();
					if ($editable['event_secondary_category_one_id']) {
						$tempArray = array();
						$tempArray['target_id'] = $editable['event_secondary_category_one_id'];
						array_push($secondaryCatsArray, $tempArray);
					}
					if ($editable['event_secondary_category_two_id']) {
						$tempArray = array();
						$tempArray['target_id'] = $editable['event_secondary_category_two_id'];
						array_push($secondaryCatsArray, $tempArray);
					}
					$query = $connection->update('editable_provisional_event')
						->fields([
							'date_clone_family_id' => $editable['id'],
						])->condition('id', $editable['id'])
						->execute();
					
					$newNode = Node::create(array(
						'type' => 'events',
						'title' => (string)$editable['name'],
						'field_event_category' => $eventCategory,
						'langcode' => 'en',
						'uid' => '1',
						'status' => 0,
						'field_event_date' => $timestamp,
						'field_venue' => $editable['venue_id'],
						'field_bill_performer_reference' => $performerArray,
						'field_event_description' => (string)$editable['blurb'],
						'field_primary_category' => $editable['event_primary_category_id'],
						'field_secondary_categories' => $secondaryCatsArray,
						'field_is_the_event_free' => $editable['is_event_free'],
						'field_cost_range' => $editable['is_there_a_cost_range'],
						'field_bottom_cost_range' => $editable['event_cost'],
						'field_top_cost_range' => $editable['event_cost_range'],
					));
					
					$newNode->save();
					
					$newNodeId = $newNode->id();
					
					$query = $connection->insert('editable_provisional_event')
						->fields([
							'name' => (string)$editable['name'],
							'performer_ids' => $editable['performer_ids'],
							'venue_id' => $editable['venue_id'],
							'event_primary_category_id' => $editable['event_primary_category_id'],
							'event_secondary_category_one_id' => $editable['event_secondary_category_one_id'],
							'event_secondary_category_two_id' => $editable['event_secondary_category_two_id'],
							'blurb' => (string)$editable['blurb'],
							'time_of_event' => $timestamp,
							'is_event_free' => $editable['is_event_free'],
							'is_there_a_cost_range' => $editable['is_there_a_cost_range'],
							'event_cost' => $editable['event_cost'],
							'event_cost_range' => $editable['event_cost_range'],
							'event_drupal_node_id' => $newNodeId,
							'date_clone_family_id' => $editable['id'],
						])->execute();
					
				}
			}
		}
		
		if (isset($_REQUEST['eventId'])) {
			// check to see if there is an editable
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $_REQUEST['eventId']);
			$checkEditable = $query->fetchAssoc();
			if ($checkEditable) {
				// if there is check for a drupak node and create on if not
				$checkNode = node_load($_REQUEST['eventId']);
				if (!$checkNode) {
					$dbPerformerIdArray = explode(",", $checkEditable['performer_ids']);
					if ($dbPerformerIdArray[0] != "") {
						$performerArray = array();
						for ($i = 0; $i < count($dbPerformerIdArray); $i++) {
							$tempArray = array();
							$tempArray['target_id'] = $dbPerformerIdArray[$i];
							array_push($performerArray, $tempArray);
						}
					}
					
					if ($dbPerformerIdArray[0]) {
						$eventCategory = 'Performance';
					} else {
						$eventCategory = '';
					}
					
					$secondaryCatsArray = array();
					if ($checkEditable['event_secondary_category_one_id']) {
						$tempArray = array();
						$tempArray['target_id'] = $checkEditable['event_secondary_category_one_id'];
						array_push($secondaryCatsArray, $tempArray);
					}
					if ($checkEditable['event_secondary_category_two_id']) {
						$tempArray = array();
						$tempArray['target_id'] = $checkEditable['event_secondary_category_two_id'];
						array_push($secondaryCatsArray, $tempArray);
					}
					
					$node = Node::create(array(
						'type' => 'events',
						'title' => (string)$checkEditable['name'],
						'field_event_category' => $eventCategory,
						'langcode' => 'en',
						'uid' => '1',
						'status' => 0,
						'field_event_date' => $checkEditable['time_of_event'],
						'field_venue' => $checkEditable['venue_id'],
						'field_bill_performer_reference' => $performerArray,
						'field_event_description' => (string)$checkEditable['blurb'],
						'field_primary_category' => $checkEditable['event_primary_category_id'],
						'field_secondary_categories' => $secondaryCatsArray,
						'field_is_the_event_free' => $checkEditable['is_event_free'],
						'field_cost_range' => $checkEditable['is_there_a_cost_range'],
						'field_bottom_cost_range' => $checkEditable['event_cost'],
						'field_top_cost_range' => $checkEditable['event_cost_range'],
					));
					
					$node->save();
					
					$id = $node->id();
					
					$query = $connection->update('editable_provisional_event')
						->fields([
							'event_drupal_node_id' => $id,
						])->condition('id', $checkEditable['id'])
						->execute();
						
					$_REQUEST['eventId'] = $id;
				}
			} else {
				$checkNode = node_load($_REQUEST['eventId']);
				if ($checkNode) {
					$name = $checkNode->get('title')->getValue()[0]['value'];
					$bill = $checkNode->get('field_bill_performer_reference')->getValue();
					$billString = "";
					if ($bill[0]) {
						$i = 0;
						foreach ($bill as $perf) {
							if ($i > 0) {
								$billString .= ",";
							}
							$billString .= $perf['target_id'];
							$i++;
						}
					}
					$secCats = $checkNode->get('field_secondary_categories')->getValue();
					$secCatOne = $secCats[0]['target_id'];
					$secCatTwo = $secCats[1]['target_id'];
					$venueId = $checkNode->get('field_venue')->getValue()[0]['target_id'];
					$eventType = $checkNode->get('field_primary_category')->getValue()[0]['target_id'];
					$blurb = $checkNode->get('field_event_description')->getValue()[0]['value'];
					$time = $checkNode->get('field_event_date')->getValue()[0]['value'];
					$free = $checkNode->get('field_is_the_event_free')->getValue()[0]['value'];
					$hasRange = $checkNode->get('field_cost_range')->getValue()[0]['value'];
					$costBottom = $checkNode->get('field_bottom_cost_range')->getValue()[0]['value'];
					$costTop = $checkNode->get('field_top_cost_range')->getValue()[0]['value'];
					$connection = \Drupal::database();
					$query = $connection->insert('editable_provisional_event')
						->fields([
							'name' => (string)$name,
							'performer_ids' => $billString,
							'venue_id' => $venueId,
							'event_primary_category_id' => $eventType,
							'event_secondary_category_one_id' => $secCatOne,
							'event_secondary_category_two_id' => $secCatTwo,
							'blurb' => (string)$blurb,
							'time_of_event' => $time,
							'is_event_free' => $free,
							'is_there_a_cost_range' => $hasRange,
							'event_cost' => $costBottom,
							'event_cost_range' => $costTop,
							'event_drupal_node_id' => $_REQUEST['eventId'],
						])->execute();
				}
			}
			$eventId = $_REQUEST['eventId'];
		} else if (isset($_REQUEST['databaseEventId'])) {
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE id = " . $_REQUEST['databaseEventId']);
			$checkEditable = $query->fetchAssoc();
			$eventId = $checkEditable['event_drupal_node_id'];
		} else {
			$eventId = 27795;
		}
		
		if (isset($_POST['amHarmonizing']) && $_POST['amHarmonizing'] == 1) {
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $eventId);
			$editable = $query->fetchAssoc();
			
			$dbPerformerIdArray = explode(",", $editable['performer_ids']);
			if ($dbPerformerIdArray[0] != "") {
				$performerArray = array();
				for ($i = 0; $i < count($dbPerformerIdArray); $i++) {
					$tempArray = array();
					$tempArray['target_id'] = $dbPerformerIdArray[$i];
					array_push($performerArray, $tempArray);
				}
			}
			
			if ($dbPerformerIdArray[0]) {
				$eventCategory = 'Performance';
			} else {
				$eventCategory = '';
			}
			
			$secondaryCatsArray = array();
			if ($editable['event_secondary_category_one_id']) {
				$tempArray = array();
				$tempArray['target_id'] = $editable['event_secondary_category_one_id'];
				array_push($secondaryCatsArray, $tempArray);
			}
			if ($editable['event_secondary_category_two_id']) {
				$tempArray = array();
				$tempArray['target_id'] = $editable['event_secondary_category_two_id'];
				array_push($secondaryCatsArray, $tempArray);
			}
			
			$node = node_load($eventId);
			
			$node->set('title', $editable['name']);
			$node->set('field_event_category', $eventCategory);
			$node->set('field_event_date', $editable['time_of_event']);
			$node->set('field_venue', $editable['venue_id']);
			$node->set('field_bill_performer_reference', $performerArray);
			$node->set('field_event_description', (string)$editable['blurb']);
			$node->set('field_primary_category', $editable['event_primary_category_id']);
			$node->set('field_secondary_categories', $secondaryCatsArray);
			$node->set('field_is_the_event_free', $editable['is_event_free']);
			$node->set('field_cost_range', $editable['is_there_a_cost_range']);
			$node->set('field_bottom_cost_range', $editable['event_cost']);
			$node->set('field_top_cost_range', $editable['event_cost_range']);
			$node->save();
			
		}
		
		if (isset($_POST['amReverting']) && $_POST['amReverting'] == 1) {
			$node = node_load($eventId);
			
			$name = $node->get('title')->getValue()[0]['value'];
			$bill = $node->get('field_bill_performer_reference')->getValue();
			$billString = "";
			if ($bill[0]) {
				$i = 0;
				foreach ($bill as $perf) {
					if ($i > 0) {
						$billString .= ",";
					}
					$billString .= $perf['target_id'];
					$i++;
				}
			}
			$venueId = $node->get('field_venue')->getValue()[0]['target_id'];
			$eventType = $node->get('field_primary_category')->getValue()[0]['target_id'];
			$secCats = $node->get('field_secondary_categories')->getValue();
			$secCatOne = $secCats[0]['target_id'];
			$secCatTwo = $secCats[1]['target_id'];
			$blurb = $node->get('field_event_description')->getValue()[0]['value'];
			$time = $node->get('field_event_date')->getValue()[0]['value'];
			$free = $node->get('field_is_the_event_free')->getValue()[0]['value'];
			$hasRange = $node->get('field_cost_range')->getValue()[0]['value'];
			$costBottom = $node->get('field_bottom_cost_range')->getValue()[0]['value'];
			$costTop = $node->get('field_top_cost_range')->getValue()[0]['value'];
			
			$query = $connection->update('editable_provisional_event')
				->fields([
					'name' => $name,
					'performer_ids' => $billString,
					'venue_id' => $venueId,
					'event_primary_category_id' => $eventType,
					'event_secondary_category_one_id' => $secCatOne,
					'event_secondary_category_two_id' => $secCatTwo,
					'blurb' => $blurb,
					'time_of_event' => $time,
					'is_event_free' => $free,
					'is_there_a_cost_range' => $hasRange,
					'event_cost' => $costBottom,
					'event_cost_range' => $costTop,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
		
		}
		
		if (isset($_POST['hasNewName']) && $_POST['hasNewName'] == 1) {
			$connection = \Drupal::database();
			$query = $connection->update('editable_provisional_event')
				->fields([
					'name' => $_POST['name'],
				])->condition('id', $_POST['databaseEventId'])
				->execute();
		}
		
		// if we created a new performer and add it before pulling performers
		if (isset($_POST['isCreatingPerformer']) && $_POST['isCreatingPerformer'] == 1) {
			$node = Node::create(array(
				'type' => 'performer',
				'title' => (string)$_POST['newPerformerName'],
				'langcode' => 'en',
				'uid' => '1',
				'status' => 1,
				'field_venue_description' => (string)$_POST['blurb'],
			));
					
			$node->save();
			
			$newPerformerId = $node->id();
			$_POST['isAddingPerformer'] = 1;
			$_POST['newPerformerId'] = $newPerformerId;
		}
		
		if (isset($_POST['isAddingPerformer']) && $_POST['isAddingPerformer'] == 1) {
			
			// get current performer list
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE id = " . $_POST['databaseEventId']);
			$tempEditable = $query->fetchAssoc();
			$currentPerfString = $tempEditable['performer_ids'];
			// append new performer id to it
			if ($tempEditable['performer_ids'] != "0") {
				$currentPerfString .= ',';
			}
			if ($tempEditable['performer_ids'] != "0") {
				$currentPerfString .= $_POST['newPerformerId'];
			} else {
				$currentPerfString = $_POST['newPerformerId'];
			}
			// set new list to db
			$query = $connection->update('editable_provisional_event')
				->fields([
					'performer_ids' => $currentPerfString,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
		}
		
		if (isset($_POST['isMovingPerformerUp']) && $_POST['isMovingPerformerUp'] == 1) {
			
			// get current performer list
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE id = " . $_POST['databaseEventId']);
			$tempEditable = $query->fetchAssoc();
			//get ordered array of performers
			$dbPerformerIdArray = explode(",", $tempEditable['performer_ids']);
			// switch the ith performer with the one above it
			$tempHold = $dbPerformerIdArray[$_POST['listPosition'] - 1];
			$dbPerformerIdArray[$_POST['listPosition'] - 1] = $dbPerformerIdArray[$_POST['listPosition']];
			$dbPerformerIdArray[$_POST['listPosition']] = $tempHold;
			// make the new string
			$currentPerfString = implode(",",$dbPerformerIdArray);
			// set new  list
			$query = $connection->update('editable_provisional_event')
				->fields([
					'performer_ids' => $currentPerfString,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
		}
		
		if (isset($_POST['isMovingPerformerDown']) && $_POST['isMovingPerformerDown'] == 1) {
			
			// get current performer list
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE id = " . $_POST['databaseEventId']);
			$tempEditable = $query->fetchAssoc();
			//get ordered array of performers
			$dbPerformerIdArray = explode(",", $tempEditable['performer_ids']);
			// switch the ith performer with the one below it
			$tempHold = $dbPerformerIdArray[$_POST['listPosition'] + 1];
			$dbPerformerIdArray[$_POST['listPosition'] + 1] = $dbPerformerIdArray[$_POST['listPosition']];
			$dbPerformerIdArray[$_POST['listPosition']] = $tempHold;
			// make the new string
			$currentPerfString = implode(",",$dbPerformerIdArray);
			// set new  list
			$query = $connection->update('editable_provisional_event')
				->fields([
					'performer_ids' => $currentPerfString,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
		}
		
		if (isset($_POST['isRemovingPerformer']) && $_POST['isRemovingPerformer'] == 1) {
			
			// get current performer list
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE id = " . $_POST['databaseEventId']);
			$tempEditable = $query->fetchAssoc();
			//get ordered array of performers
			$dbPerformerIdArray = explode(",", $tempEditable['performer_ids']);
			// make new list without ith perfomer
			// first make top part of list
			$currentPerfString = "";
			for ($i = 0; $i < $_POST['listPosition']; $i++) {
				$currentPerfString .= $dbPerformerIdArray[$i];
				$currentPerfString .= ",";
			}
			// now make bottom of list
			$start = $_POST['listPosition'] + 1;
			$secondToLast = count($dbPerformerIdArray) - 1;
			for ($i = $start; $i < count($dbPerformerIdArray); $i++) {
				$currentPerfString .= $dbPerformerIdArray[$i];
				if ($i < $secondToLast) {
					$currentPerfString .= ",";
				}
			}
			// finally set string to 0 if it is empty
			if ($currentPerfString == "") {
				$currentPerfString = 0;
			}
			// set new list
			$query = $connection->update('editable_provisional_event')
				->fields([
					'performer_ids' => $currentPerfString,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
		}
		
		// if we created a new venue and add it before pulling venues
		if (isset($_POST['isCreatingVenue']) && $_POST['isCreatingVenue'] == 1) {
			$node = Node::create(array(
				'type' => 'venue',
				'title' => (string)$_POST['newVenueName'],
				'langcode' => 'en',
				'uid' => '1',
				'status' => 1,
				'field_city' => $_POST['cityId'],
				'field_venue_state' => $_POST['state'],
				'field_venue_address' => $_POST['address'],
				'field_venue_description' => (string)$_POST['blurb'],
				'field_zip_code' => $_POST['zip'],
			));
					
			$node->save();
			
			$newVenueId = $node->id();
			
			$_POST['isChangingVenue'] = 1;
			$_POST['newVenueId'] = $newVenueId;
		}
		
		if (isset($_POST['isChangingVenue']) && $_POST['isChangingVenue'] == 1) {
			
			// set new venue
			$connection = \Drupal::database();
			$query = $connection->update('editable_provisional_event')
				->fields([
					'venue_id' => $_POST['newVenueId'],
				])->condition('id', $_POST['databaseEventId'])
				->execute();
			//print_r($_POST['newVenueId']);
		}
		
		if (isset($_POST['hasNewCategories']) && $_POST['hasNewCategories'] == 1) {
			
			// if there is only one secondary type id it should be one
			$secTypeOne = 0;
			$secTypeTwo = 0;
			if ($_POST['secondaryCategoryOne']) {
				$secTypeOne = $_POST['secondaryCategoryOne'];
				$secTypeTwo = $_POST['secondaryCategoryTwo'];
			} else {
				$secTypeOne = $_POST['secondaryCategoryTwo'];
			}
			
			// set new types but don't allow repeats
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE id = " . $_POST['databaseEventId']);
			$tempEditable = $query->fetchAssoc();
			if ($secTypeOne == $tempEditable['event_primary_category_id']
				|| $secTypeOne == $_POST['primaryCategory']) {
				$secTypeOne = $secTypeTwo;
				$secTypeTwo = 0;
			}
			if ($secTypeTwo == $tempEditable['event_primary_category_id']
				|| $secTypeTwo == $_POST['primaryCategory']
				|| $secTypeTwo == $secTypeOne) {
				$secTypeTwo = 0;
			}
			$query = $connection->update('editable_provisional_event')
				->fields([
					'event_primary_category_id' => $_POST['primaryCategory'],
					'event_secondary_category_one_id' => $secTypeOne,
					'event_secondary_category_two_id' => $secTypeTwo,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
			//print_r($_POST['primaryCategory']);
		}
		
		if (isset($_POST['hasNewBlurb']) && $_POST['hasNewBlurb'] == 1) {
			
			$connection = \Drupal::database();
			$query = $connection->update('editable_provisional_event')
				->fields([
					'blurb' => $_POST['blurb'],
				])->condition('id', $_POST['databaseEventId'])
				->execute();
			//print_r($flag);
		}
		
		if (isset($_POST['hasNewDate']) && $_POST['hasNewDate'] == 1) {
			
			date_default_timezone_set('America/New_York');
			$timeString = $_POST['date'] . ' ' . $_POST['startHour'] . ':' . $_POST['startMinute'] . ':00 ' . $_POST['startAmPm'];
			$timestamp = strtotime($timeString);
			
			$connection = \Drupal::database();
			$query = $connection->update('editable_provisional_event')
				->fields([
					'time_of_event' => $timestamp,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
			//print_r($flag);
		}
		
		if (isset($_POST['hasNewCost']) && $_POST['hasNewCost'] == 1) {
			
			$newCost = $_POST['costDollars'] . "." .  $_POST['costCents'];
			if ($_POST['hasCostRange']) {
				$newCost = $_POST['costDollarsForRange'] . "." . $_POST['costCentsForRange'];
			}
			$newCostRange = $_POST['rangeCostDollars'] .  "." . $_POST['rangeCostCents'];
			
			$connection = \Drupal::database();
			$query = $connection->update('editable_provisional_event')
				->fields([
					'is_event_free' => $_POST['hasCost'],
					'is_there_a_cost_range' => $_POST['hasCostRange'],
					'event_cost' => $newCost,
					'event_cost_range' => $newCostRange,
				])->condition('id', $_POST['databaseEventId'])
				->execute();
			//print_r($flag);
		}
		
		$event = node_load($eventId);
		
		$connection = \Drupal::database();
		$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $eventId);
		$editable = $query->fetchAssoc();
		
		$nids = \Drupal::entityQuery('node')
			->condition('status', 1)
			->condition('type', 'Performer')
			->execute();
		$rawPerformerIndex = 0;
		foreach ($nids as $nid) {
			$rawPerformer[$rawPerformerIndex] = node_load($nid);
			$rawPerformerIndex++;
		}
		
		$performers = array();
		
		for ($i=0; $i<$rawPerformerIndex; $i++) {
			array_push($performers, $rawPerformer[$i]);
		}
		
		$nids = \Drupal::entityQuery('node')
			->condition('status', 1)
			->condition('type', 'Venue')
			->execute();
		$rawVenueIndex = 0;
		foreach ($nids as $nid) {
			$rawVenue[$rawVenueIndex] = node_load($nid);
			$rawVenueIndex++;
		}
		
		$venues = array();
		
		for ($i=0; $i<$rawVenueIndex; $i++) {
			array_push($venues, $rawVenue[$i]);
		}
		
		$query = \Drupal::entityQuery('taxonomy_term');
		$query->condition('vid', 'tags');
		$tids = $query->execute();
		$rawTags = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
		
		$tags = array();
		
		foreach ($rawTags as $tag) {
			$tagName = $tag->label();
			$tagId = $tag->id();
			array_push($tags, [$tagName, $tagId]);
		}
		
		// create array of current editable event performers to be passed to template
		$dbPerformers = array();
		if ($editable['performer_ids'][0] != "0") {
			// clean up leading and trailing commas
			if ($editable['performer_ids'][0] == ",") {
				$editable['performer_ids'] = substr($editable['performer_ids'], 1,strlen($editable['performer_ids']));
			}
			if ($editable['performer_ids'][strlen($editable['performer_ids']) - 1] == ",") {
				$secondToLast = strlen($editable['performer_ids']) - 1;
				$editable['performer_ids'] = substr($editable['performer_ids'], 0,$secondToLast);
			}
			$dbPerformerIdArray = explode(",", $editable['performer_ids']);
			for ($i = 0; $i < count($dbPerformerIdArray); $i++) {
				$perf = node_load($dbPerformerIdArray[$i]);
				$perfTitle = $perf->get('title')->getValue();
				$perfId = $perf->id();
				array_push($dbPerformers, [$perfTitle[0]['value'], $perfId]);
			}
		}
		
		// get name of venue in database and pass it to the template
		$dbVenue = "";
		if ($editable['venue_id'] != "0") {
			$ven = node_load($editable['venue_id']);
			$ven = $ven->get('title')->getValue();
			$dbVenue = $ven[0]['value'];
		} else {
			$dbVenue = "no venue assigned yet";
		}
		
		$editableCost = explode(".", $editable['event_cost']);
		$editableCostRange = explode(".", $editable['event_cost_range']);
		
		$connection = \Drupal::database();
		$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE date_clone_family_id = " . $editable['id'] . " AND id <> " . $editable['id']);
		$dateClones = $query->fetchAll();
		
		return array (
			'#theme' => 'edit_event',
			'#node' => $event,
			'#editable' => $editable,
			'#performers' => $performers,
			'#venues' => $venues,
			'#tags' => $tags,
			'#databasePerformers' => $dbPerformers,
			'#databaseVenue' => $dbVenue,
			'#databaseCost' => $editableCost,
			'#databaseCostRange' => $editableCostRange,
			'#dateClones' => $dateClones,
		);
		
	}
	
	public function quickAddNewVenue() {
		$output = $_POST['venueName'];
		
		$query = \Drupal::entityQuery('taxonomy_term');
		$query->condition('vid', 'cities');
	    $tids = $query->execute();
	    $cities = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
		
		if ($_POST['nodeId']) {
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $_POST['nodeId']);
			$editable = $query->fetchAssoc();
		} else {
			$editable['id'] = 0;
		}
		//print_r($cities);
		
		return array (
			'#theme' => 'quick_add_venue',
			'#dbEntryId' => $editable['id'],
			'#node' => $_POST['nodeId'],
			'#name' => $_POST['venueName'],
			'#cities' => $cities,
		);
		
		/*
		return array(
			'#type' => 'markup',
			'#markup' => t($output),
		);
		*/
	}
	
	public function quickAddNewPerformer() {
		$output = $_POST['performerName'];
		
		if ($_POST['nodeId']) {
			$connection = \Drupal::database();
			$query = $connection->query("SELECT * FROM {editable_provisional_event} WHERE event_drupal_node_id = " . $_POST['nodeId']);
			$editable = $query->fetchAssoc();
		} else {
			$editable['id'] = 0;
		}
		
		return array (
			'#theme' => 'quick_add_performer',
			'#dbEntryId' => $editable['id'],
			'#node' => $_POST['nodeId'],
			'#name' => $_POST['performerName'],
			'#venueId' => $_POST['venueId'],
		);
		
		/*
		return array(
			'#type' => 'markup',
			'#markup' => t($output),
		);
		*/
	}
	
	public function listUpcomingUnpublishedEvents() {
		$nids = \Drupal::entityQuery('node')
			->condition('status', 0)
			->condition('type', 'Events')
			->condition('field_event_date', REQUEST_TIME, '>')
			->execute();
		
		$now = time();
		$events = array();
		$orderedEvent = array();
		$eventIndex = 0;
		
		foreach ($nids as $nid) {
			if ($eventIndex < 100) {
				$events[$eventIndex] = node_load($nid);
				$eventIndex++;
			}
		}
		
		for ($i=0; $i<$eventIndex; $i++) {
			$eventSorter[$i]['id'] = $events[$i]->id();
			$eventSorter[$i]['eventBegin'] = $events[$i]->get('field_event_date')->value;
		}
		
		if ($eventIndex) {
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
		
		return array (
			'#theme' => 'list_upcoming_unpublished_events',
			'#events' => $orderedEvent,
		);
	}
}

?>
