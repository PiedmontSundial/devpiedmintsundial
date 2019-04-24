<?php
/**
 * @file
 * Contains \Drupal\venue_read_module\Controller\VenueReadController.
 */
 
namespace Drupal\venue_read_module\Controller;
 
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\image\Entity\ImageStyle;
 
class VenueReadController extends ControllerBase {
  public function readVenue() {
	$output = 'and away... ';
	if (file_exists('venueTest.xml')) {
		$obj = simplexml_load_file('venueTest.xml');
	} else {
		$output .= 'Failed to open venueTest.xml.';
	}
	
	$nids = \Drupal::entityQuery('node')
		->condition('status', 1)
		->condition('type', 'venue')
		->execute();
	$nodeIndex = 0;
	foreach ($nids as $nid) {
		$oldNodes[$nodeIndex] = node_load($nid);
		$output .= $oldNodes[$nodeIndex]->getTitle();
		$output .= '<br>';
		$nodeIndex++;
	}
	
	$query = \Drupal::entityQuery('taxonomy_term');
    $query->condition('vid', 'cities');
    $tids = $query->execute();
    $cities = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
	
	foreach($obj->venue as $venue) {
		$exists = 0;
		for ($i=0; $i<$nodeIndex; $i++) {
			if((string)$venue->{'title'} == $oldNodes[$i]->getTitle()) {
				$exists = 1;
			}
		}
		if (!$exists) {
			foreach ($cities as $city) {
				$cityName = $city->toLink()->getText();
				if ($cityName == (string)$venue->{'city'}) {
					$cityId = $city->get('tid')->getString();
				}
			}
			
			$node = Node::create(array(
				'type' => 'venue',
				'title' => (string)$venue->{'title'},
				'langcode' => 'en',
				'uid' => '1',
				'status' => 1,
				'field_city' => $cityId,
				'field_venue_state' => 'NC',
				'field_venue_address' => (string)$venue->{'address'},
				'field_venue_description' => (string)$venue->{'blurb'},
				'field_zip_code' => (integer)$venue->{'zip'},
			));
			
			$node->save();
		}
	}
	
	return array(
	  '#type' => 'markup',
	  '#markup' => t($output),
	);
  }
  
  public function readPerformer() {
	$output = 'and away... ';
	if (file_exists('performerTest.xml')) {
		$obj = simplexml_load_file('performerTest.xml');
	} else {
		$output .= 'Failed to open performerTest.xml.';
	}
	
	$nids = \Drupal::entityQuery('node')
		->condition('status', 1)
		->condition('type', 'performer')
		->execute();
	$nodeIndex = 0;
	foreach ($nids as $nid) {
		$oldNodes[$nodeIndex] = node_load($nid);
		$output .= $oldNodes[$nodeIndex]->getTitle();
		$output .= '<br>';
		$nodeIndex++;
	}
	
	$query = \Drupal::entityQuery('taxonomy_term');
    $query->condition('vid', 'event_types');
    $tids = $query->execute();
    $types = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
	
	foreach ($obj->performer as $performer) {
		$title = (string)$performer->{'title'};
		$typeName = (string)$performer->{'type'};
		foreach ($types as $type) {
			$name = $type->toLink()->getText();
			if ($typeName == $name) {
				$output .= $title;
				$output .= ' has ';
				$output .= $typeName;
				$output .= '<br>';
			}
		}
	}
	
	foreach($obj->performer as $performer) {
		$exists = 0;
		for ($i=0; $i<$nodeIndex; $i++) {
			if((string)$performer->{'title'} == $oldNodes[$i]->getTitle()) {
				$exists = 1;
			}
		}
		if (!$exists) {
			foreach ($types as $type) {
				$typeName = $type->toLink()->getText();
				if ($typeName == (string)$performer->{'type'}) {
					$typeId = $type->get('tid')->getString();
				}
			}
			
			$node = Node::create(array(
				'type' => 'performer',
				'title' => (string)$performer->{'title'},
				'langcode' => 'en',
				'uid' => '1',
				'status' => 1,
				'field_description' => (string)$performer->{'blurb'},
				'field_performance_type' => $typeId,
			));
			
			$node->save();
		}
	}
	
	return array(
	  '#type' => 'markup',
	  '#markup' => t($output),
	);
  }
  
  public function readArticle() {
	$output = 'and away... ';
	if (file_exists('articleTest.xml')) {
		$obj = simplexml_load_file('articleTest.xml');
	} else {
		$output .= 'Failed to open articleTest.xml.';
	}
	
	$nids = \Drupal::entityQuery('node')
		->condition('status', 1)
		->condition('type', 'sundial_article')
		->execute();
	$nodeIndex = 0;
	foreach ($nids as $nid) {
		$oldNodes[$nodeIndex] = node_load($nid);
		$output .= $oldNodes[$nodeIndex]->getTitle();
		$output .= '<br>';
		$nodeIndex++;
	}
	
	$nids = \Drupal::entityQuery('node')
		->condition('status', 1)
		->condition('type', 'writer')
		->execute();
	$writerIndex = 0;
	foreach ($nids as $nid) {
		$writer[$writerIndex] = node_load($nid);
		$output .= $writer[$writerIndex]->getTitle();
		$output .= '<br>';
		$writerIndex++;
	}
	
	foreach($obj->article as $article) {
		$exists = 0;
		for ($i=0; $i<$nodeIndex; $i++) {
			if((string)$article->{'title'} == $oldNodes[$i]->getTitle()) {
				$exists = 1;
			}
		}
		if (!$exists) {
			for ($i=0; $i<$writerIndex; $i++) {
				$writerName = $writer[$i]->getTitle();
				if ($writerName == (string)$article->{'writer'}) {
					$writerId = $writer[$i]->id();
				}
			}
			
			$node = Node::create(array(
				'type' => 'sundial_article',
				'title' => (string)$article->{'title'},
				'langcode' => 'en',
				'uid' => '1',
				'status' => 1,
				'field_author' => $writerId,
				'body' => (string)$article->{'body'},
				'field_date_filed' => (string)$article->{'dateFiled'},
				'field_subhead_1' => (string)$article->{'subhead'},
				'field_subhead_2' => (string)$article->{'subheadTwo'},
			));
			
			$node->save();
		}
	}
	
	return array(
	  '#type' => 'markup',
	  '#markup' => t($output),
	);
  }
  
  public function readOldEvent() {
    $output = 'and away... ';
    if (file_exists('oldEventTest.xml')) {
      $obj = simplexml_load_file('oldEventTest.xml');
    } else {
      $output .= 'Failed to open oldEventTest.xml.';
    }
    
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 0)
      ->condition('type', 'events')
      ->execute();
    $nodeIndex = 0;
    foreach ($nids as $nid) {
      $oldNodes[$nodeIndex] = node_load($nid);
      $output .= $oldNodes[$nodeIndex]->getTitle();
      $output .= '<br>';
      $nodeIndex++;
    }
    
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'venue')
      ->execute();
    $venueIndex = 0;
    foreach ($nids as $nid) {
      $venue[$venueIndex] = node_load($nid);
      $output .= $venue[$venueIndex]->getTitle();
      $output .= '<br>';
      $venueIndex++;
    }
    
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'performer')
      ->execute();
    $performerIndex = 0;
    foreach ($nids as $nid) {
      $performer[$performerIndex] = node_load($nid);
      $output .= $performer[$performerIndex]->getTitle();
      $output .= '<br>';
      $performerIndex++;
    }
    
    foreach($obj->event as $event) {
      $exists = 0;
      for ($i=0; $i<$nodeIndex; $i++) {
        if((string)$event->{'title'} == $oldNodes[$i]->getTitle()) {
          $exists = 1;
        }
      }
      if (!$exists) {
        if ((string)$event->{'category'} == 'performance' && (string)$event->{'venue'} != 'NULL' && (string)$event->{'performer'} != 'NULL' && (string)$event->{'title'} != '') {
          for ($i=0; $i<$venueIndex; $i++) {
            $venueName = $venue[$i]->getTitle();
            if ($venueName == (string)$event->{'venue'}) {
              $venueId = $venue[$i]->id();
            }
          }
          
          for ($i=0; $i<$performerIndex; $i++) {
            $performerName = $performer[$i]->getTitle();
            if ($performerName == (string)$event->{'performer'}) {
              $performerId = $performer[$i]->id();
            }
          }
          
          if ((int)$event->{'cost'} == 0) {
            $isFree = 1;
          } else {
            $isFree = 0;
          }
          
          $node = Node::create(array(
            'type' => 'events',
            'title' => (string)$event->{'title'},
            'langcode' => 'en',
            'uid' => '1',
            'status' => 0,
            'field_author' => $writerId,
            'field_event_category' => 'Performance',
            'field_event_date' => (string)$event->{'startTimestamp'},
            'field_venue' => $venueId,
            'field_bottom_cost_range' => (string)$event->{'cost'},
            'field_is_the_event_free' => $isFree,
            'field_bill_performer_reference' => $performerId,
            'field_event_description' => (string)$event->{'blurb'},
          ));
          
          $node->save();
        } else if ((string)$event->{'category'} == 'Community' && (string)$event->{'venue'} != 'NULL' && (string)$event->{'title'} != '') {
          for ($i=0; $i<$venueIndex; $i++) {
            $venueName = $venue[$i]->getTitle();
            if ($venueName == (string)$event->{'venue'}) {
              $venueId = $venue[$i]->id();
            }
          }
          
          if ((int)$event->{'cost'} == 0) {
            $isFree = 1;
          } else {
            $isFree = 0;
          }
          
          $node = Node::create(array(
            'type' => 'events',
            'title' => (string)$event->{'title'},
            'langcode' => 'en',
            'uid' => '1',
            'status' => 0,
            'field_author' => $writerId,
            'field_event_category' => 'Performance',
            'field_event_date' => (string)$event->{'startTimestamp'},
            'field_venue' => $venueId,
            'field_bottom_cost_range' => (string)$event->{'cost'},
            'field_is_the_event_free' => $isFree,
            'field_event_description' => (string)$event->{'blurb'},
          ));
          
          $node->save();
        }
      }
    }
    
    return array(
      '#type' => 'markup',
      '#markup' => t($output),
    );
  }
  
  public function readNewEvent() {
    $output = 'and away... ';
    if (file_exists('newEventTest.xml')) {
      $obj = simplexml_load_file('newEventTest.xml');
    } else {
      $output .= 'Failed to open newEventTest.xml.';
    }
    
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'venue')
      ->execute();
    $venueIndex = 0;
    foreach ($nids as $nid) {
      $venue[$venueIndex] = node_load($nid);
      $output .= $venue[$venueIndex]->getTitle();
      $output .= '<br>';
      $venueIndex++;
    }
    
    $nids = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'performer')
      ->execute();
    $performerIndex = 0;
    foreach ($nids as $nid) {
      $performer[$performerIndex] = node_load($nid);
      $output .= $performer[$performerIndex]->getTitle();
      $output .= '<br>';
      $performerIndex++;
    }
    foreach($obj->event as $event) {
      $exists = 0;
      if (!$exists) {
        if ((string)$event->{'category'} == 'performance' && (string)$event->{'venue'} != 'NULL' && (string)$event->{'performer'} != 'NULL' && (string)$event->{'title'} != '') {
          for ($i=0; $i<$venueIndex; $i++) {
            $venueName = $venue[$i]->getTitle();
            if ($venueName == (string)$event->{'venue'}) {
              $venueId = $venue[$i]->id();
            }
          }
          
          for ($i=0; $i<$performerIndex; $i++) {
            $performerName = $performer[$i]->getTitle();
            if ($performerName == (string)$event->{'performer'}) {
              $performerId = $performer[$i]->id();
            }
          }
          
          if ((int)$event->{'cost'} == 0) {
            $isFree = 1;
          } else {
            $isFree = 0;
          }
          
          $node = Node::create(array(
            'type' => 'events',
            'title' => (string)$event->{'title'},
            'langcode' => 'en',
            'uid' => '1',
            'status' => 1,
            'field_author' => $writerId,
            'field_event_category' => 'Performance',
            'field_event_date' => (string)$event->{'startTimestamp'},
            'field_venue' => $venueId,
            'field_bottom_cost_range' => (string)$event->{'cost'},
            'field_is_the_event_free' => $isFree,
            'field_bill_performer_reference' => $performerId,
            'field_event_description' => (string)$event->{'blurb'},
          ));
          
          $node->save();
        } else if ((string)$event->{'category'} == 'Community' && (string)$event->{'venue'} != 'NULL' && (string)$event->{'title'} != '') {
          for ($i=0; $i<$venueIndex; $i++) {
            $venueName = $venue[$i]->getTitle();
            if ($venueName == (string)$event->{'venue'}) {
              $venueId = $venue[$i]->id();
            }
          }
          
          if ((int)$event->{'cost'} == 0) {
            $isFree = 1;
          } else {
            $isFree = 0;
          }
          
          $node = Node::create(array(
            'type' => 'events',
            'title' => (string)$event->{'title'},
            'langcode' => 'en',
            'uid' => '1',
            'status' => 1,
            'field_author' => $writerId,
            'field_event_category' => 'Performance',
            'field_event_date' => (string)$event->{'startTimestamp'},
            'field_venue' => $venueId,
            'field_bottom_cost_range' => (string)$event->{'cost'},
            'field_is_the_event_free' => $isFree,
            'field_event_description' => (string)$event->{'blurb'},
          ));
          
          $node->save();
        }
      }
    }
    
    return array(
      '#type' => 'markup',
      '#markup' => t($output),
    );
  }
  
  public function killEvent() {
    $nids = \Drupal::entityQusery('node')
      ->condition('type', 'events')
      ->condition('status', 1)
      ->execute();
    foreach ($nids as $nid) {
      $node = node_load($nid);
      $node->delete();
    }/*
    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'sundial_article')
      ->execute();
    foreach ($nids as $nid) {
      $node = node_load($nid);
      $node->delete();
    }
    */
    
    $output = 'old events killed!';
    
    return array(
      '#type' => 'markup',
      '#markup' => t($output),
    );
  }
  
  public function makeFutureEventsLive() {
	  $nids = \Drupal::entityQuery('node')
		->condition('status', 0)
		->condition('type', 'events')
		->execute();
	
	foreach ($nids as $nid) {
		$node = node_load($nid);
		$now = time();
		$stamps = $node->get('field_event_date')->getValue();
		$eventTime = $stamps[0];
		if ($eventTime >= $now) {
			$node->set('status', 1);
		}
	}
	
	$output = 'live?';
	return array(
	  '#type' => 'markup',
	  '#markup' => t($output),
	);
  }
}

?>
