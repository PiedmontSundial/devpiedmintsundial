<?php
/**
 * @file
 * Contains \Drupal\sundial_family_page_module\Controller\FamilyPageController.
 */
 
namespace Drupal\sundial_family_page_module\Controller;
 
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\image\Entity\ImageStyle;

class FamilyPageController extends ControllerBase {
  public function familyList() {
    $output = 'Hi Family Module... <br>';
	
	$nids = \Drupal::entityQuery('node')
		->condition('status', 1)
		->condition('type', 'events')
		->execute();
	$rawEventIndex = 0;
	foreach ($nids as $nid) {
		$rawEvent[$rawEventIndex] = node_load($nid);
		$rawEventIndex++;
	}
	
	$tagEventsIndex = 0;
	
	$nodes = array();
	for ($i=0; $i<$rawEventIndex; $i++) {
		if (!$rawEvent[$i]->get('field_primary_category')->isEmpty()) {
			$primaryTag = Term::load($rawEvent[$i]->get('field_primary_category')->target_id);
			$name = $primaryTag->getName();
			if ($name == 'Family') {
				$tagEvents[$tagEventsIndex] = $rawEvent[$i];
				$tagEventsIndex++;
			}
		}
	}
	
	for ($i=0; $i<$rawEventIndex; $i++) {
		if (!$rawEvent[$i]->get('field_secondary_categories')->isEmpty()) {
			foreach ($rawEvent[$i]->field_secondary_categories as $tag) {
				$tagId = $tag->target_id;
				$secTag = Term::load($tagId);
				$name = $secTag->getName();
				if ($name == 'Family') {
					$tagEvents[$tagEventsIndex] = $rawEvent[$i];
					$tagEventsIndex++;
				}
			}
		}
	}
	
	$nids = \Drupal::entityQuery('node')
		->condition('status', 1)
		->condition('type', 'sundial_article')
		->execute();
	$rawArticleIndex = 0;
	foreach ($nids as $nid) {
		$rawArticle[$rawArticleIndex] = node_load($nid);
		$rawArticleIndex++;
	}
	
	$tagArticlesIndex = 0;
	
	for ($i=0; $i<$rawArticleIndex; $i++) {
		if (!$rawArticle[$i]->get('field_story_tags')->isEmpty()) {
			foreach ($rawArticle[$i]->field_story_tags as $tag) {
				$tagId = $tag->target_id;
				$secTag = Term::load($tagId);
				$name = $secTag->getName();
				if ($name == 'Family') {
					$tagArticles[$tagArticlesIndex] = $rawArticle[$i];
					$tagArticlesIndex++;
				}
			}
		}
	}
	
	for ($i=0; $i<$tagEventsIndex; $i++) {
		$eventSorter[$i]['id'] = $tagEvents[$i]->id();
		$eventSorter[$i]['eventBegin'] = $tagEvents[$i]->get('field_event_date')->value;
	}
	
	if ($tagEventsIndex) {
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
	
	for ($i=0; $i<$tagArticlesIndex; $i++) {
		$articleSorter[$i]['id'] = $tagArticles[$i]->id();
		$articleSorter[$i]['dateString'] = $tagArticles[$i]->get('field_filed_on')->value;
		$articleSorter[$i]['date'] = strtotime($articleSorter[$i]['dateString']);
	}
	
	if ($tagArticlesIndex) {
		foreach ($articleSorter as $key => $row) {
			$date[$key] = $row['date'];
		}
		
		array_multisort($date, SORT_DESC, $articleSorter);
		
		$orderedArticleIndex = 0;
		
		foreach ($articleSorter as $article) {
			$orderedArticle[$orderedArticleIndex] = node_load($article['id']);
			$orderedArticleIndex++;
		}
	}
	
	for ($i=0; $i<$orderedArticleIndex; $i++) {
		$title = $orderedArticle[$i]->get('title')->value;
		$output .= $title;
		$output .= '<br>';
	}
	
	for ($i=0; $i<$orderedEventIndex; $i++) {
		$title = $orderedEvent[$i]->get('title')->value;
		$output .= $title;
		$output .= '<br>';
	}
	
	$nodes = array();
	
	$maxIndex = max($orderedArticleIndex, $orderedEventIndex);
	
	$output .= $maxIndex;
	$output .= '<br>';
	
	$highestArticle = $orderedArticleIndex - 1;
	$highestEvent = $orderedEventIndex - 1;
	
	for ($i=0; $i<$maxIndex; $i++) {
		if ($i <= $highestEvent) {
			array_push($nodes, $orderedEvent[$i]);
		}
		if ($i <= $highestArticle) {
			array_push($nodes, $orderedArticle[$i]);
		}
	}
	
	for ($i=0; $i<$tagEventsIndex; $i++) {
		$title = $tagEvents[$i]->get('title')->value;
		$output .= $title;
		$output .= '<br>';
	}
	
	for ($i=0; $i<$tagArticlesIndex; $i++) {
		$title = $tagArticles[$i]->get('title')->value;
		$output .= $title;
		$output .= '<br>';
	}
	
	foreach ($nodes as $node) {
		$title = $node->get('title')->value;
		$output .= $title;
		$output .= '<br>';
	}
	
	return array (
		'#theme' => 'sundial_family_page',
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
