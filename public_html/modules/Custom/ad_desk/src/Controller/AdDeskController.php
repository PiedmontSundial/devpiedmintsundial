<?php

namespace Drupal\ad_desk\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\image\Entity\ImageStyle;


class AdDeskController {
	
	public function adDesk() {
		
		return array (
		
			//'#markup' => 'ham', 
			
			'#theme' => 'ad_desk_main',
		
		);
		
		
	}
	
	
	public function chooseClient() {
		
		return array (
		
			'#markup' => 'ham', 
		
		);
		
		
	}
	
	
	public function adPlacement() {
		
		return array (
		
			//'#markup' => 'ham',
			
			'#theme' => 'ad_desk_ad_placement',
		
		);
		
		
	}
	
	public function calendar() {
		
		//$serverIDNumber = $_POST['serverID'];
		
		$serverIDNumber = $_GET['serverID'];
		
		//$serverID = $_GET['serverID'];
		
		//$serverIDExploded = explode("-", $serverID);
		
		//$serverIDNumber = $serverID;
		
		//echo $serverID;
		
		if (isset($_POST['serverID'])) {
			
			$serverIDNumber = $_POST['serverID'];
			
		}
		
		
		
		//First, let's set the timezone.
		date_default_timezone_set("America/New_York");
		
		//Because we want the calendar to default to the current month, we start with the current time.
		//We will extract the month and year from this timestamp.
		//However, if a timestamp has been passed to this page by the setMonth function on the calendar, we'll use that instead.
		
		$setMonth = $_POST['monthValue'];
		
		if(isset($setMonth)) {
			$now = $setMonth;
		} else {
			$now = time();
		}
		
		//Extracting the month and year:
		$month = date('m', $now);
		
		$year = date('Y', $now);
		
		//We're getting the full name of the month for display purposes too.
		
		$displayMonth = date('F', $now);
		
		//And now we calculate the first day of the month and figure out the starting day.
		
		$startDate = mktime(0,0,0,$month, 1, $year);
		
		//Once we have that, we get the numerical representation of the day of the beginning date.
		$startDay = date('N', $startDate);
		
		//After that, we calculate the number of days in the month, then take the numerical representation of the day of the ending date.  

		$daysInMonth = cal_days_in_month(CAL_GREGORIAN, date('m', $startDate), date('Y', $startDate));
		
		//Here, we take the name of the month we've selected. 
		$monthName = date('M', $startDate);
		
		//I guess we have to make Sunday be equal to zero? 
		//This is to make the columns line up correctly with Sunday first instead of last. 
		if ($startDay > 6) {
			$startDay = 7 - $startDay;
		}

		//Here we decide what each cell in the calendar will contain. The calendar is built to have seven columns and six rows, 
		//so as to accomodate any given month. This block of code will create an array to fill them appropriately. 

		$currentElement = 0;
		$dayCounter = 1;
		$firstDayHasCome = 0;



		//The i-loop determins which row we're in, and the j-loop determines the column. 
		for ($i = 0; $i <= 5; $i++) {
			for ($j = 0; $j <= 6; $j++) {
				
				//The following series of if-statements will decide the content of each cell. 
				//This will keep a day blank if the month hasn't started yet, e.g. keeping Sunday blank if the month starts on Monday.
				//While $firstDayHasCome = fasle: If the $currentElement's value is less than the value of 
				//$startDay, because !$firstDayHasCome is true, the antecedent is true, meaning the consequent block of code is executed.
				//While $firstDayHasCome = true, the antecedent must always be false since the second conjunct is false, preventing execution.
				//That is, once $firstDayHasCome is set to true, this conditional must always be bypassed.
				if (($currentElement < $startDay) && !$firstDayHasCome) {
					$arrayCalendar[$i][$j][0] = 0;
				}
				
				//This says that if the current element(the day on the calendar) is equal to the starting day of the month
				//set it to say the first day has been counted, then give the current array index a value of 1,  
				//so we know which day is the first of the month.
				//While $firstDayHasCome = false: There is exactly one case where the antecedent is true, and when it is,
				//it prevents prevents future execution of this consequential block as well as the execution of the block above.
				if (($currentElement == $startDay) && !$firstDayHasCome) {
					$firstDayHasCome = 1;
					$arrayCalendar[$i][$j][0] = $dayCounter; 
				} else {

					//Once the first day has come, subsequent days will be checked to see that they don't exceed
					//the number of days in a month. If the they don't, they get a number. Otherwise, they're blank.
					//This will never execute until the block above does. And once that block executes,
					//this will be the only block to execute until the loops have covered all 42 squares on the calendar.
					//Putting this block inside an else prevents the immediate execution of this block 
					if ($firstDayHasCome) {
						if ($dayCounter < $daysInMonth) {
							$arrayCalendar[$i][$j][0] = ++$dayCounter;
						} else {
							$arrayCalendar[$i][$j][0] = 0;
						}
					}
				}
				
				$currentElement++; 
			} //j-loop's closing bracket. 
			
		} //i-loop's closing bracket.
		
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//This maakes timestamps from our calendar days.
	
	for ($i = 0; $i < 6; $i++) {
		for ($j = 0; $j < 7; $j++) {
			if (isset($arrayCalendar[$i][$j][0])) {
				$stampy = mktime(0,0,0,$month,$arrayCalendar[$i][$j][0],$year);
				$arrayCalendar[$i][$j][1] = $stampy;
			} else {
				$arrayCalendar[$i][$j][1] = 0;
			} //if-else
		} // j-loop
	} 	//i-loop
	
	
	//And this makes an array we'll use to make the month selector. We'll make it 2D, with a prong for the timestamp and a prong for the date.
	
	//Because we need this menu to stay centered on the actual current month, we'll summon the actual time to construct this array.
	
	//"Jetzt" is German for "now".
	
	$jetzt = time();
	
	$jetztMonth = date('m', $jetzt);
	
	$jetztYear = date ('Y', $jetzt);
	
	$jetztStart = mktime(0,0,0,$jetztMonth,1,$jetztYear);
	
	for ($i = 0; $i < 24; $i++) {
		
		$futures[$i][0] = strtotime('+' . $i . ' months', $jetztStart);
		
		$futureMonth = date('F', $futures[$i][0]);
		
		$futureYear = date('Y', $futures[$i][0]);
		
		$futures[$i][1] = $futureMonth . " " . $futureYear;
		
	}
	
	
	//print_r($futures);
	
	$server = Node::load($serverIDNumber);
	$serverTitle = $server->get('title')->value;
	$carouselAllowed = $server->field_carousel_allowed->getString();
	
	if ($carouselAllowed == '') {
		
		$carouselAllowed = 0;
		
	}
	
	//echo $carouselAllowed;
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
		
		//return (new Response())->setContent('Hello World');

		
		//And finally, we return the product of our calculations. 
		
		
		return array (
		
			'#theme' => 'ad_desk_calendar',
		
			'#arrayCalendar' => $arrayCalendar,
			
			'#displayMonth' => $displayMonth,
			
			'#displayYear' => $year,
			
			'#futures' => $futures,
			
			'#serverIDNumber' => $serverIDNumber,
			
			'#serverTitle' => $serverTitle,
			
			'#carouselAllowed' => $carouselAllowed,
		
		);
		
	}
	
	
	
	public function scheduler() {
		
		$serverIDNumber = $_POST['serverID'];
		
		//echo $serverIDNumber;
		
		//First, the timestamp of the beginning, midnight, of the chosen week, Monday through Sunday, is transmitted to this file.
		//For this prototype, we'll use the timestamp for midnight of the day this file was created: Feb 5th 2018. 
		//But let's also set the time zone.	
		date_default_timezone_set("America/New_York");
		
		//Monday will be the first value in an array of the days of the week. This will be a POST value, presumably, in the final file,
		//but here we'll use mktime to get Feb. 5th, 2018's midnight, 1517806800
		//$weekValues[0] = mktime(0,0,0,2,5,2018); //for a week with all 24 hour days
		//$weekValues[0] = mktime(0,0,0,3,5,2018); //for the week containing the beginning of DST
		//$weekValues[0] = mktime(0,0,0,10,29,2018); //for the week containing the end of DST
		
		if (isset($_POST['timestamp'])) {
			$timeStamp = $_POST['timestamp'];
		} else {
			$calendarNow = time(); 
			
			$calendarMonth = date('m', $calendarNow);
			
			$calendarDay = date('j', $calendarNow);
		
			$calendarYear = date('Y', $calendarNow);
			
			$timeStamp = mktime(0,0,0,$calendarMonth,$calendarDay,$calendarYear);
			
		}
		
		//For debugging going to the page in the middle of the day on a Monday,
		//but not going through the calendar: mktime(12,0,0,3,19,2018);
		
		$dayNumber = date('N', $timeStamp);
						
		if ($dayNumber == 1) {
				
			$weekValues[0] = $timeStamp;
				
		} else {
				
			$dayNumber = date('N', $timeStamp);
				
			$difference = $dayNumber - 1;
				
			//$starter = strtotime("last Monday", $timeStamp);
				
			$starter = strtotime("-" . $difference . " days", $timeStamp);
			
			$weekValues[0] = $starter;
				
		}
		
		
		
		
		//Now, we use a for loop to derive the rest of the days of the week. The index begins with 1, as we already have 0. 
		//So, every time the block executes, it says index $i in the week array is the initial Monday plus $i days. 
		//We will include an 8th day for purposes below.
		for ($i = 1; $i < 8; $i++) {
			$weekValues[$i] = strtotime('+' . $i . ' day', $weekValues[0]);
		}
		
		//Next, we figure out the number of hours in each day, as DST can cause a day to be 23 or 25 hours long. 
		//We'll do this by finding the difference, in seconds, between a day and its following day. 
		//This is why our array above has one more day than it needs. 
		//The difference in seconds is divided by 60 twice to render how many hours the day has. 
		for ($i = 0; $i < 7; $i++) {
			$dayHours[$i] = (($weekValues[$i + 1] - $weekValues[$i]) / 60 / 60);
		}
		
		for ($i = 0; $i < 7; $i++) {
			for ($j = 0; $j < $dayHours[$i]; $j++) {
				$hourStamp[$i][$j] =  $weekValues[$i] + ($j * 3600);
			}
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		
		//Here, we will create an output array to pass to the template. 
		//The array will have X entries, where X is equal to the number of hours in the selected week. 
		//On average, this will be 168, but will vary by 1 either way depending on the beginning or end of DST.
		
		
		//An indexer for constructing the output index.
		$boxIndex = 0;
	
	
		//First, we take the starting time stamp of every hour and make it the first part of the box array.
		for ($i = 0; $i < 7; $i++) {
			for ($j = 0; $j < $dayHours[$i]; $j++) {
				
				$hourBoxArray[$boxIndex][hour_start] = $hourStamp[$i][$j];
				$boxIndex++;
				
			}
		}
		
		//Now, we will calculate the ending time stamp of every hour by adding 3599 to the start time.
		for ($i = 0; $i < $boxIndex; $i++) {
			$hourBoxArray[$i][hour_end] = $hourBoxArray[$i][hour_start] + 3599;
			$hourBoxArray[$i][words] = '';
		}
		
		//print_r($hourBoxArray);
		//////////////////////////////////////////////////////////////////////////////////
		//Now, we'll scan the databases for pertinent information! CHRIS HERE WEEK LIMITER
		
		//First, we'll pull up all the sequencers for our selected server.
		
		//where server_id and starting time is equal to or greater than $hourBoxArray[0][hour_start] and less than or equal to $hourBoxArray[$boxIndex - 1][hour_start]
		
		//$seqResults = db_query("SELECT * FROM {ad_desk_sequencers} WHERE server_id = " . $serverIDNumber);
		
		$seqResults = db_query("SELECT * FROM {ad_desk_sequencers} WHERE server_id = " . $serverIDNumber . " AND start_time_stamp >= " . $hourBoxArray[0][hour_start] . " AND start_time_stamp <= " . $hourBoxArray[$boxIndex - 1][hour_start]);
		
		//Now, we'll build the first half of the hour box array's info, then use the ID of each result to 
		//check the loaders and provisional loaders and add on. 
		//JAMBO
		
		$sequencerIDsIndex = 0;
		
		foreach ($seqResults as $seqResult) {
			
			$sequencerIDs[$sequencerIDsIndex] = $seqResult->id;
			$sequencerIDsIndex++;
			
			$startTimeStamp = $seqResult->start_time_stamp;
			
			for($i = 0; $i < $boxIndex; $i++) {
				
				if($startTimeStamp == $hourBoxArray[$i][hour_start]) {
					
					$hourBoxArray[$i][sequencer_id] = $seqResult->id;
					$hourBoxArray[$i][server_id] = $seqResult->server_id; //Inherent to all this, we need to be able to receive a sequencer ID. 
					$hourBoxArray[$i][start_time_stamp] = $startTimeStamp;
					$hourBoxArray[$i][end_time_stamp] = $seqResult->end_time_stamp;
					
					//debug code
					
					$hourBoxArray[$i][loader_id] = 0;
					$hourBoxArray[$i][prov_loader_id] = 0;
					$hourBoxArray[$i][ad_sequencer_id] =  0;
					$hourBoxArray[$i][track] =  0;
					$hourBoxArray[$i][type_of_ad] = 0; 
					$hourBoxArray[$i][ad_id] = 0;
					$hourBoxArray[$i][duration] =  0;
					$hourBoxArray[$i][next_loader_id] = 0;
					
					
					//end debug
					
					
				}//if
				
			}//i-loop
			
		} //sequencer foreach end
		
		
		//Now, we'll use a bunch of nested loops to get the loader/prov loader data into the hourBoxArray. 
		
		for ($i = 0; $i < $sequencerIDsIndex; $i++) {
			
			$loadResults = db_query("SELECT * FROM {ad_desk_loaders} WHERE ad_sequencer_id = " . $sequencerIDs[$i]);
			
			foreach($loadResults as $loadResult) {
				
				$loadSeqID = $loadResult->ad_sequencer_id;
				
				for ($j = 0; $j < $boxIndex; $j++) {
					
					if ($loadSeqID == $hourBoxArray[$j][sequencer_id]) {
						
						$hourBoxArray[$j][loader_id] =  $loadResult->id;
						$hourBoxArray[$j][prov_loader_id] = 0;
						$hourBoxArray[$j][ad_sequencer_id] =  $loadSeqID;
						$hourBoxArray[$j][track] =  $loadResult->track;
						$hourBoxArray[$j][type_of_ad] =  $loadResult->type_of_ad;
						$hourBoxArray[$j][ad_id] =  $loadResult->ad_id;
						$hourBoxArray[$j][duration] =  $loadResult->duration;
						$hourBoxArray[$j][next_loader_id] =  $loadResult->next_loader_id;
						
					}
					
					
				}//j-loop
				
			}//loader foreach
			
		}//loader i-loop
		
		
		//And lastly, we take the provisional info. 
		
		for ($i = 0; $i < $sequencerIDsIndex; $i++) {
			
			$provResults = db_query("SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = " . $sequencerIDs[$i]);
			
			foreach ($provResults as $provResult) {
				
				$provSeqID = $provResult->ad_sequencer_id;
				
				for ($j = 0; $j < $boxIndex; $j++) {
					
					if ($provSeqID == $hourBoxArray[$j][sequencer_id]) {
						
						//$hourBoxArray[$j][loader_id] = 0; 
						$hourBoxArray[$j][prov_loader_id] = $provResult->id;
						$hourBoxArray[$j][ad_sequencer_id] =  $provSeqID;
						$hourBoxArray[$j][track] =  $provResult->track;
						$hourBoxArray[$j][type_of_ad] =  $provResult->type_of_ad; 
						$hourBoxArray[$j][ad_id] =  $provResult->ad_id;
						$hourBoxArray[$j][duration] =  $provResult->duration;
						$hourBoxArray[$j][next_loader_id] =  $provResult->next_loader_id;
						
					}
					
					
				} //j-loop
				
			}//prov foreach
			
		} //provs i-loop
			
			
			
		$numberOfHours = $boxIndex; 
		
		
		//print_r($hourBoxArray);
		
		$query = \Drupal::entityQuery('node')->condition('type', 'advertisement');
		
		$adResults = $query->execute();
		
		$adIDsIndex = 0;
		
		foreach ($adResults as $adResult) {
			
			$adIDs[$adIDsIndex] = $adResult;
			$adIDsIndex++;
			
			
		}
		
		
		$adTitlesIndex = 0;
		
		for ($i = 0; $i < $adIDsIndex; $i++) {
			
			$ad = Node::load($adIDs[$i]);
			
			$adTitles[$adTitlesIndex] = $ad->get('title')->value;
			
			$adTitlesIndex++;
			
			
		}
		
		$query = \Drupal::entityQuery('node')->condition('type', 'ad_client');
		
		$clientResults = $query->execute();
		
		$clientIDsIndex = 0;
		
		foreach ($clientResults as $clientResult) {
			
			$clientIDs[$clientIDsIndex] = $clientResult;
			
			$clientIDsIndex++;
			
			
		}
		
		$clientTitlesIndex = 0;
		
		for ($i = 0; $i < $clientIDsIndex; $i++) {
			
			$client = Node::load($clientIDs[$i]);
			
			$clientTitles[$clientTitlesIndex] = $client->get('title')->value;
			
			$clientTitlesIndex++;
			
			
		}
		
		//Now, we're going back through the hourBoxArray to get blocking info. 
		
		for ($i = 0; $i < $sequencerIDsIndex; $i++) {
			
			$blockResults = db_query("SELECT * FROM {ad_desk_blocking} WHERE start_time_stamp = " . $hourBoxArray[$i][hour_start]);
			
			foreach ($blockResults as $blockResult) {
				
				$blockID = $blockResult->id;
				
				if ($blockID) {
					
					$hourBoxArray[$i][block_id] = $blockID;
					
					
				}
				
				
			}
			
		} //for loop
		
		//Finally, here's how we'll get the text for projecting the text into the boxes.
		//We'll iterate through the hour box array, seeing if there's an ad ID 
		//or a block ID. If so, we'll go pull the appropriate text. GHG
		
		//for ($i = 0; $i < $sequencerIDsIndex; $i++) {
			
		for ($i = 0; $i < $numberOfHours; $i++) {
			/*
			if ($hourBoxArray[$i][ad_id]) {
				
				$ad = Node::load($hourBoxArray[$i][ad_id]);
				
				$adText = $ad->get('title')->value;
				
				//$hourBoxArray[$i][text] .= "<br>" . $adText;
				
				$hourBoxArray[$i][words] .=  $adText;
				
				
			}
			*/
			
			//CHRIS HERE 109
			
				if ($hourBoxArray[$i][sequencer_id]) {
					
					$connection = \Drupal::database();
					$query = $connection->query("SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = " . $hourBoxArray[$i][sequencer_id]);
					$provResults = $query->fetchAll();
					
					$provResultsCount = count($provResults);
					
					if($provResultsCount) {
					
						foreach ($provResults as $provResult) {
							
							$adID = $provResult->ad_id;
							
							$ad = Node::load($adID);
							
							$adText = $ad->get('title')->value;
							
							$hourBoxArray[$i][words] .=  $adText . "^^^"; 
							
						}
					}
				}
				
				if ($hourBoxArray[$i][sequencer_id]) {
					
					$connection = \Drupal::database();
					$query = $connection->query("SELECT * FROM {ad_desk_loaders} WHERE ad_sequencer_id = " . $hourBoxArray[$i][sequencer_id]);
					$loadResults = $query->fetchAll();
					
					$loadResultsCount = count($loadResults);
					
					if($loadResultsCount) {
						
						foreach ($loadResults as $loadResult) {
							
							$adID = $loadResult->ad_id;
							
							$ad = Node::load($adID);
							
							$adText = $ad->get('title')->value;
							
							$hourBoxArray[$i][words] .=  $adText . "^^^";
							
						}
					}
				}
				
				
				
			
			
			
				if ($hourBoxArray[$i][block_id]) {
				
					$blockResults = db_query("SELECT * FROM {ad_desk_blocking} WHERE id = " . $hourBoxArray[$i][block_id]);
				
					foreach ($blockResults as $blockResult) {
					
						$clientText = $blockResult->client_name;
					
						//$hourBoxArray[$i][text] .= "<br>" . $clientText;					
					
						$hourBoxArray[$i][words] .= $clientText;
						
					}
				
				
				}
			
			
		} //i-loop
		
		$server = Node::load($serverIDNumber);
		$serverTitle = $server->get('title')->value;
		$carouselAllowed = $server->field_carousel_allowed->getString();
		
		if ($carouselAllowed == '') {
		
			$carouselAllowed = 0;
		
		}
		
		//And the output is off to the races!
		
		//print_r($hourBoxArray);
		
		return array(
		
			'#theme' => 'ad_desk_scheduler',
			
			'#hourBoxArray' => $hourBoxArray,
			
			'#numberOfHours' => $numberOfHours,
			
			'#serverIDNumber' => $serverIDNumber,
			
			'#adIDs' => $adIDs,
			
			'#adTitles' => $adTitles,
			
			'#clientIDs' => $clientIDs,
			
			'#clientTitles' => $clientTitles,
			
			'#serverTitle' => $serverTitle,
			
			'#carouselAllowed' => $carouselAllowed,
			
			
		);
		
		
	}
	
	
	public function handler() {
		
		//First, we'll get our post data.
		
		$selectus = $_POST['selectus'];
		
		$output = $selectus;
		
		$serverIDNumber = $_POST['serverIDNumber'];
		
		$adID = $_POST['adSelection'];
		
		//Next, let's hack up our timestamps into a useable form.
		
		$selectusSplit = explode("-", $selectus);
	
		$selectusSplitCount = count($selectusSplit);
	
		for ($i = 0; $i < $selectusSplitCount - 1; $i++) {
			
			$timeStamps[$i][0] = $selectusSplit[$i];
			
			
		}
		
		$timeStampsCount = count($timeStamps); //This will be of use later. 
		
		
		//Now that the timestamps are in our 2D array, we'll dredge up the sequencer info from the database.
		//If there's no match, we'll create a sequencer. 
		//If there is, we'll skip it for now, because once the creation is done, we'll dredge the data up anew to get ID numbers to go with all our timestamps.
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $serverIDNumber);
		$results = $query->fetchAll();
		
		$county = count($results);
		
		//While sequencers persist, this if-branch here is for fresh installs with an empty database. 
		
		if($county) {
		
		//Let's get all the existing starting time stamps into an array to check against what was AJAX'd over. 

		$sequencerTimeStampsIndex = 0;
		
		foreach($results as $result) {
			$sequencerTimeStamps[$sequencerTimeStampsIndex] = $result->start_time_stamp;
			$sequencerTimeStampsIndex++;
		}
	
		$sequencerTimeStampsCount = count($sequencerTimeStamps);
	
	
	
	
			
		//Now that we have arrays for comparison, we can build the block for insertion. 
		//THE ARRAY IS 2D, CHRIS. 
		for ($i = 0; $i < $timeStampsCount; $i++) {
			
			$insertSwitch = 0;
			
			for($j = 0; $j < $sequencerTimeStampsCount; $j++) {
				
				if ($timeStamps[$i][0] == $sequencerTimeStamps[$j]) {
					
					$insertSwitch = 0;
					break;
					
				} else {
					
					$insertSwitch = 1;
					
				}
				
			} //j-loop
			
			
			if ($insertSwitch) {
				
				$endTimes = $timeStamps[$i][0] + 3599;
				
				//$output .= $endTimes . "-";
					
				$connection = \Drupal::database();
				$query = $connection->insert('ad_desk_sequencers')
				->fields([
					'server_id' => $serverIDNumber,
					'start_time_stamp' => $timeStamps[$i][0],
					'end_time_stamp' => $endTimes,
				])->execute();
				
				
			} //if
			
			
			
		} //i-loop
		
	} else {
		
		for ($i = 0; $i < $timeStampsCount; $i++) {
			
			$endTimes = $timeStamps[$i][0] + 3599;
			
			//$output .= $endTimes . "-";
				
			$connection = \Drupal::database();
			$query = $connection->insert('ad_desk_sequencers')
			->fields([
				'server_id' => $serverIDNumber,
				'start_time_stamp' => $timeStamps[$i][0],
				'end_time_stamp' => $endTimes,
			])->execute();
			
			
		} //i-loop
		
	}//if-else close
	
	/*
	//Let's get all the existing starting time stamps into an array to check against what was AJAX'd over.
	
	$sequencerTimeStampsIndex = 0;
	
	foreach($results as $result) {
		$sequencerTimeStamps[$sequencerTimeStampsIndex] = $result->start_time_stamp;
		$sequencerTimeStampsIndex++;
	}
	
	$sequencerTimeStampsCount = count($sequencerTimeStamps);
	
	
	
	
			
	//Now that we have arrays for comparison, we can build the block for insertion. 
	//THE ARRAY IS 2D, CHRIS. 
	for ($i = 0; $i < $timeStampsCount; $i++) {
		
		$insertSwitch = 0;
		
		for($j = 0; $j < $sequencerTimeStampsCount; $j++) {
			
			if ($timeStamps[$i][0] == $sequencerTimeStamps[$j]) {
				
				$insertSwitch = 0;
				break;
				
			} else {
				
				$insertSwitch = 1;
				
			}
			
		} //j-loop
		
		
		if ($insertSwitch) {
			
			$endTimes = $timeStamps[$i][0] + 3599;
			
			//$output .= $endTimes . "-";
				
			$connection = \Drupal::database();
			$query = $connection->insert('ad_desk_sequencers')
			->fields([
				'server_id' => $serverIDNumber,
				'start_time_stamp' => $timeStamps[$i][0],
				'end_time_stamp' => $endTimes,
			])->execute();
			
			
		} //if
		
		
		
	} //i-loop
	*/
	////////////////////////////////////////////////////////////////////////////////You need to branch just the above. Here's where they rejoin logically. 	
	//With our new sequencers created, we'll re-extract our sequencer data and 
	//pair up starting time stamps with sequencer IDs.
	
	$connection = \Drupal::database();
	$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $serverIDNumber);
	$results = $query->fetchAll();
	
	foreach ($results as $result) {
		
		$startTimeStamp = $result->start_time_stamp;
		
		$sequencerID = $result->id;
		
		for ($i = 0; $i < $timeStampsCount; $i++) {
			
			if ($startTimeStamp == $timeStamps[$i][0]) {
				
				$timeStamps[$i][1] = $sequencerID;
				
				
			} //if
			
		} //i-loop
		
		
	} //foreach
	
	//Finally, we can insert loaders.
	
	
	for ($i = 0; $i < $timeStampsCount; $i++) {
		
		//$output .= $timeStamps[$i][1] . "-"; //debug
		
		$connection = \Drupal::database();
		
		$query = $connection->insert('ad_desk_provisional_loaders')
		->fields([
			'ad_sequencer_id' => $timeStamps[$i][1],
			'track' => 1,
			'type_of_ad' => 'static',
			'ad_id' => $adID,
			'ordinal' => 1,
			'duration' => 3599,
			'next_loader_id' => 0,
			'firstFixed' => 0,
			'secondFixed' => 0,
		])->execute();
		  
		
		
	} //i-loop
	
	
		
		//$output = $county;
		
		return (new Response())->setContent($output);
		
		
	}
	
	
	public function deleter() {
		
		
		$selectis = $_POST['selectis'];
		
		$serverIDNumber = $_POST['serverIDNumber'];
		
		$output = $selectis;
		
		//Next, we'll cut up the timestamps and get a count. Then we'll sort them into a 2D array that we'll use to get the sequencer IDs.
	
		$selectisSplit = explode("-", $selectis);
		
		$selectisSplitCount = count($selectisSplit);
		
		for ($i = 0; $i < $selectisSplitCount - 1; $i++) {
		
		$timeStamps[$i][0] = $selectisSplit[$i];
		
		}
	
	$timeStampsCount = count($timeStamps);
	
	$connection = \Drupal::database();
	$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $serverIDNumber);
	$results = $query->fetchAll();
	
	foreach ($results as $result) {
		
		$startTimeStamp = $result->start_time_stamp;
		
		$sequencerID = $result->id;
		
		for ($i = 0; $i < $timeStampsCount; $i++) {
			
			if ($startTimeStamp == $timeStamps[$i][0]) {
				
				$timeStamps[$i][1] = $sequencerID;
				
			}//if
			
		}//for
		
	} //foreach
	
	
	//Now that we have our sequencer IDs, we can pinpoint the loaders we have to delete. 
	
	$connection = \Drupal::database();
	$query = $connection->query('SELECT * FROM {ad_desk_provisional_loaders}');
	$results = $query->fetchAll();
	
	foreach ($results as $result) {
		
		$adSequencerID = $result->ad_sequencer_id;
		
		for ($i = 0; $i < $timeStampsCount; $i++) {
			
			 if ($adSequencerID == $timeStamps[$i][1]) {
				 
				$connection = \Drupal::database();
				$deletion = $connection->delete('ad_desk_provisional_loaders')
				->condition('ad_sequencer_id', $adSequencerID)
				->execute();
				 
			 }
			
		}
		
	}
		
		return (new Response())->setContent($output);
		
		
	}
	
	public function adInitializer() {
		
		//First, we'll get everything from the GET array.
		
		$adServer = $_GET['adServer'];
		
		$adBoxHandle = $_GET['adBoxHandle'];
		
		$isAdvertisingManager = $_GET['isAdvertisingManager'];
		
		$managmentURL = $_GET['managmentURL'];
		
		$nodeID = $_GET['nodeID'];
		
		//For later use
		
		$firstFixed = 0;
				
		$secondFixed = 0;
		
		//Next, we'll check the time, so we can ultimately pull up the right ads.
		$now = time();
		
		//The very first thing to check for is sequencers. If there are any, we'll go into some complex logic to get ads going.
		//If there aren't, defaults go in.
		//Each time we AJAX back to the template, what gets sent back is a function of whether or not an Advertising Manager is looking at the page. 
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $adServer . ' AND start_time_stamp <= ' . $now . ' AND end_time_stamp > ' . $now);
		$seqResults = $query->fetchAll();
		
		$seqCount = count($seqResults);
		
		if ($seqCount) {
			
			
			//If there are sequencers, we follow this path.
			//First, we'll go ahead and get the carouseling data, since that uses the sequencer info we just pulled up. 
			//First, we get the sequencer ID.
			
			foreach ($seqResults as $seqResult) {
				
				$seqID = $seqResult->id;	
			}
			
			
			
			//With our carousel data extracted, it's time to check for loaders.
			//This will cause another branch in the function. 
			//If there are no loaders, we send out some default output. 
			
			$connection = \Drupal::database();
			$query = $connection->query('SELECT * FROM {ad_desk_loaders} WHERE ad_sequencer_id = ' . $seqID);
			$loadResults = $query->fetchAll();
			
			$loadCounty = count($loadResults);
			
			if ($loadCounty) {
				
				//Now, if there are loaders, there's a lot to do. 
				//First, we get all the loader IDs togehter.
				
				$initialCarousel =[];
				
				$initialCarouselIndex = 0;
				
				foreach ($loadResults as $loadResult) {
					
					$firstCheck = $loadResult->firstFixed;
					
					$secondCheck = $loadResult->secondFixed;
					
					if($firstCheck) {
						
						$firstFixed = 1;
						
						if(!$initialCarousel[0]) {
							
							$initialCarousel[0] = $loadResult->id;
							
							$initialCarouselIndex++;
							
						} else {
							
							$theTail = array_slice($initialCarousel,0);
							
							$theHead[0] = $loadResult->id;
							
							$initialCarousel = array_merge($theHead,$theTail);
								
							$initialCarouselIndex++;	
								
						}
						
						
						
					} else if ($secondCheck) {
						
						$secondFixed = 1;
						
						if(!$initialCarousel[1]) {
							
							$initialCarousel[1] = $loadResult->id;
							
							$initialCarouselIndex++;
							
							
						} else {
							
							$theTail = array_slice($initialCarousel,1);
							
							$theHead[0] = $initialCarousel[0];
							
							$theHead[1] = $loadResult->id;
							
							$initialCarousel = array_merge($theHead,$theTail);
							
							$initialCarouselIndex++;
							
						}
						
						
						
					} else {
					
					
						$initialCarousel[$initialCarouselIndex] = $loadResult->id;
					
						$initialCarouselIndex++;
					
					}
					
				}
				
				
				//Now, we initialize an array that will help us set the order of the ads, especially if the first and second ads are fixed. 
				
				$neuCarousel = [];
				
				//Now, we ask which ads are fixed. If first and second are, we pull aside the first two ads, shuffle the rest, 
				//then combine the results. 
				//If only the first ad is fixed, we pull aside the first ad, shuffle the rest, then combine.
				//If neither are fixed, we shuffle and send that out.
				
				if ($firstFixed && $secondFixed) {
					
					$neuCarousel[0] = $initialCarousel[0];
					
					$neuCarousel[1] = $initialCarousel[1];
					
					$shuffleBox = [];
					
					$carouselCount = count($initialCarousel);
					
					$shuffleStart = 2;
				
					for ($i = 0; $i < $carouselCount - 2; $i++) {
					
						$shuffleBox[$i] = $initialCarousel[$shuffleStart];
					
						$shuffleStart++;
					
					}
				
					shuffle($shuffleBox);
				
					$finalCarousel = array_merge($neuCarousel, $shuffleBox); //This gets turned into a string for the newOrder value. 
					
					$finalCarouselCount = count($finalCarousel);
					
					for ($i = 0; $i < $finalCarouselCount; $i++) {
						
						$newOrder .= $finalCarousel[$i] . "-";
						
					}
					
				
					
					
				} else if ($firstFixed) {
					
					$neuCarousel[0] = $initialCarousel[0];
					
					$shuffleBox = [];
					
					$carouselCount = count($initialCarousel);
					
					$shuffleStart = 1;
				
					for ($i = 0; $i < $carouselCount - 1; $i++) {
					
						$shuffleBox[$i] = $initialCarousel[$shuffleStart];
					
						$shuffleStart++;
					
					}
				
					shuffle($shuffleBox);
				
					$finalCarousel = array_merge($neuCarousel, $shuffleBox); //This gets turned into a string for the newOrder value. 
					
					$finalCarouselCount = count($finalCarousel);
					
					for ($i = 0; $i < $finalCarouselCount; $i++) {
						
						$newOrder .= $finalCarousel[$i] . "-";
						
					}
					
					
				} else {
					
					
					shuffle($initialCarousel);
					
					$finalCarousel = array_merge($initialCarousel, $neuCarousel);
					
					$finalCarouselCount = count($finalCarousel);
					
					for ($i = 0; $i < $finalCarouselCount; $i++) {
						
						$newOrder .= $finalCarousel[$i] . "-";
						
					}
					
				
					
				} //end else
					
				//With the order of ads set, we must dredge up the ad art.
				
				foreach ($loadResults as $loadResult) {
					
					$loadID = $loadResult->id;
					
					if ($loadID == $finalCarousel[0]) {
						
						//BEN HERE
						$adID = $loadResult->ad_id;
						
						$ad = Node::load($adID);
						
						$isComplexAd = $ad->field_is_this_ad_complex->value;
						
						$adComplexHtml = $ad->field_ad_complex_html->value;
						
						$image = $ad->get('field_advertisement_image')->first()->get('entity')->getTarget()->getValue();
						
						//$adImage = file_create_url($image->get('uri')->value);
						
						$imageDos = $image->get('field_ad_image')->first()->get('entity')->getTarget()->getValue();
						
						$adImage = file_create_url($imageDos->get('uri')->value);
						
						$loaderID = $loadResult->id;
						
						
						
					}
					
				} //foreach
				
				
				//Here we'll put the sequencer and loader log creation, once we sort that out. 
				
				//Now, let's create server and loader logs. 
				$connection = \Drupal::database();
				$query = $connection->insert('ad_server_log')
				->fields([
					'server_id' => $nodeID,
					'duration' => 0,
				])->execute();
				
				$adServerLogId = $query; 
				
				//Loader log.
				$connection = \Drupal::database();
				$query = $connection->insert('ad_loader_log')
				->fields([
					'loader_id' => $loaderID,
					'ad_server_log_id' => $adServerLogId,
					'duration' => 0,
				])->execute();
				
				$adLoaderLogId = $query;
				
				
				//Finally, we see if you're an advertising manager or not, and send out the ad art with either the true link or a manager link.
				
				if ($isAdvertisingManager) {
					
					
						
					//$output = "<a href='" . $managmentURL . "' target='_blank'><img class='img-fluid' src='" . $adImage . "'></a>";
					
					if ($isComplexAd) {
						$output = "<a href='" . $managmentURL . "' target='_blank'>" . $adComplexHtml . "</a>";
					} else {
						$output = "<a href='" . $managmentURL . "' target='_blank'><img class='img-fluid' src='" . $adImage . "'></a>";
					}
						
					$output .= '<form id="VariablesForAdBox' . $nodeID .'">
									<input type="hidden" name="adBoxHandle" value="AdBox' . $nodeID .'">
									<input type="hidden" name="adLoaderId" value="' . $loaderID . '">
									<input type="hidden" name="adServerLogId" value="' . $adServerLogId . '">
									<input type="hidden" name="adLoaderLogId" value="0">
									<input type="hidden" name="isPopulated" value="1">
									<input type="hidden" name="newOrder" value="' . $newOrder . '">
									<input type="hidden" name="orderIndex" value="0">
									<input type="hidden" name="orderCount" value="' . $finalCarouselCount . '">
								</form>';
								
								
							
						
				} else {
					
					//CHRIS HERE 101
					
					//$link = $ad->get('field_url_for_ad')->first()->get('entity')->getTarget()->getValue();
						
					//$adLink = $link->get('field_actual_url')->value;
					
					//$adLink = 'www.gamefaqs.com';
					
					$adLink = $ad->get('field_ad_url')->value;
					
					if ($isComplexAd) {
						$output = "<a href='" . $adLink . "' target='_blank'>" . $adComplexHtml . "</a>";
					} else {
						$output = "<a href='" . $adLink . "' target='_blank'><img class='img-fluid' src='" . $adImage . "'></a>";
					}
						
					$output .= '<form id="VariablesForAdBox' . $nodeID .'">
									<input type="hidden" name="adBoxHandle" value="AdBox' . $nodeID .'">
									<input type="hidden" name="adLoaderId" value="' . $loaderID . '">
									<input type="hidden" name="adServerLogId" value="0">
									<input type="hidden" name="adLoaderLogId" value="0">
									<input type="hidden" name="isPopulated" value="1">
									<input type="hidden" name="newOrder" value="' . $newOrder . '">
									<input type="hidden" name="orderIndex" value="0">
									<input type="hidden" name="orderCount" value="' . $finalCarouselCount . '">
								</form>';
								
					
						
					
				}
				
				
			} else {
				
				//And here's the default text for a lack of loaders. 
				//Again, it's dependent on whether or not you're a advertising manager.
				
				if ($isAdvertisingManager) {
					
					$output = "<a href='" . $managmentURL . "' target='_blank'><div style='height:50px;width:50px;background-color:gray;margin-top:5px;margin-bottom:5px'></div></a>";
					
					$output .= '<form id="VariablesForAdBox' . $nodeID . '">
										<input type="hidden" name="adBoxHandle" value="' . $nodeID . '">
										<input type="hidden" name="adLoaderId" value="0">
										<input type="hidden" name="adServerLogId" value="0">
										<input type="hidden" name="adLoaderLogId" value="0">
										<input type="hidden" name="isPopulated" value="0">
										<input type="hidden" name="newOrder" value="0">
										<input type="hidden" name="orderIndex" value="0">
										<input type="hidden" name="orderCount" value="0">
									</form>';
					
				} else {
					
					$output = '<form id="VariablesForAdBox' . $nodeID . '">
										<input type="hidden" name="adBoxHandle" value="AdBox' . $nodeID . '">
										<input type="hidden" name="adLoaderId" value="0">
										<input type="hidden" name="adServerLogId" value="0">
										<input type="hidden" name="adLoaderLogId" value="0">
										<input type="hidden" name="isPopulated" value="0">
										<input type="hidden" name="newOrder" value="0">
										<input type="hidden" name="orderIndex" value="0">
										<input type="hidden" name="orderCount" value="0">
									</form>';
					
				}
				
				
				
			} //end if ($loadCounty)
			
			
			
			
			
			
		} else {
			
			//If there are no sequencers, we see if you're an advertising manager, and send back the appropriate output.
			
			if ($isAdvertisingManager) {
					
					$output = "<a href='" . $managmentURL . "' target='_blank'><div style='height:50px;width:50px;background-color:gray;margin-top:5px;margin-bottom:5px'></div></a>";
					
					$output .= '<form id="VariablesForAdBox' . $nodeID . '">
										<input type="hidden" name="adBoxHandle" value="AdBox' . $nodeID . '">
										<input type="hidden" name="adLoaderId" value="0">
										<input type="hidden" name="adServerLogId" value="0">
										<input type="hidden" name="adLoaderLogId" value="0">
										<input type="hidden" name="isPopulated" value="0">
										<input type="hidden" name="newOrder" value="0">
										<input type="hidden" name="orderIndex" value="0">
										<input type="hidden" name="orderCount" value="0">
									</form>';
					
				} else {
					
					$output = '<form id="VariablesForAdBox' . $nodeID . '">
										<input type="hidden" name="adBoxHandle" value="AdBox' . $nodeID . '">
										<input type="hidden" name="adLoaderId" value="0">
										<input type="hidden" name="adServerLogId" value="0">
										<input type="hidden" name="adLoaderLogId" value="0">
										<input type="hidden" name="isPopulated" value="0">
										<input type="hidden" name="newOrder" value="0">
										<input type="hidden" name="orderIndex" value="0">
										<input type="hidden" name="orderCount" value="0">							
								</form>';
					
				}
			
			
			
			
		} // end if ($seqCount)
		
		
		//Finally, here is the response text to be scraped up by AJAX.
			
		return (new Response())->setContent($output);
		
		
		
	} // end adInitializer
	
	public function adUpdater() {
		
		//First, let's get our passed variables. 
		
		$adBoxHandle = $_GET['adBoxHandle'];
		
		$adLoaderId = $_GET['adLoaderId'];
		
		$adServerLogId = $_GET['adServerLogId'];
		
		$adLoaderLogId = $_GET['adLoaderLogId'];
		
		$nodeID = $_GET['nodeID'];
		
		$isAdvertisingManager = $_GET['isAdvertisingManager'];
		
		$managmentURL = $_GET['managmentURL'];
		
		$newOrder = $_GET['newOrder'];
		
		$orderIndex = $_GET['orderIndex'];
		
		$orderCount = $_GET['orderCount'];
		
		//With our variables secure, we'll first update the server log duration.
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_server_log} WHERE id =' . $adServerLogId);
		$servLogResults = $query->fetchAll();
		
		foreach($servLogResults as $servLogResult) {
			
			$servLogDuration = $servLogResult->duration;
			
		}
		
		//Add four seconds to the duration, then update the server log.
		
		$servLogDuration = $servLogDuration + 4;
		
		
		$connection = \Drupal::database();
		$query = $connection->update('ad_server_log')
		->fields([
			'duration' => $servLogDuration,
		])->condition('id', $adServerLogId)
		->execute();
		
		//Now, let's do all this again for the loader log. After that, we'll pull up the loader info and compare the loader duration 
		//to the loader log duration, and if the loader duration is matched or exceeded, switch to the next add in carousel. 
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_loader_log} WHERE id =' . $adLoaderLogId);
		$loadLogResults = $query->fetchAll();
		
		foreach($loadLogResults as $loadLogResult) {
			
			$loadLogDuration = $loadLogResult->duration;
			
		}
		
		
		//Add four, update.
		
		$loadLogDuration = $loadLogDuration + 4;
		
		$connection = \Drupal::database();
		$query = $connection->update('ad_loader_log')
		->fields([
			'duration' => $loadLogDuration,
		])->condition('id', $adLoaderLogId)
		->execute();
		
		//Now, let's check the loader's duration against the current loader log duration, and prepare to carousel, if necessary. 
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_loaders} WHERE id =' . $adLoaderId);
		$loadResults = $query->fetchAll();
		
		foreach ($loadResults as $loadResult) {
			
			$loaderDuration = $loadResult->duration;
			
		}
		
		//If and ad's duration has been met or exceeded, we go through the process of finding the next ad
		//and then throwing up the version of the ad with the true link or the ad manager link. 
		//If the duration has not been met or exceeded, we simply send back the empty string,
		//which will make the template do nothing to the ad.
		
		if ($loadLogDuration >= $loaderDuration) {
			
			//First, we need to find our next loader ID. 
			//We'll take $newOrder and cut it up into numbers.
			
			$loaderIDs = explode("-", $newOrder);
			
			//Now, we'll tick up $orderIndex to get the next loader ID.
			//If we tick it up to or past the count number, we'll know to set it back to zero.
			
			$orderIndex++;
			
			if ($orderIndex >= $orderCount) {
				
				$orderIndex = 0;
				
			}
			
			$nextLoader = $loaderIDs[$orderIndex];
			
			//Now, we'll fetch the next loader's info. 
			
			$connection = \Drupal::database();
			$query = $connection->query('SELECT * FROM {ad_desk_loaders} WHERE id = ' . $nextLoader);
			$loadResults = $query->fetchAll();
			
			foreach ($loadResults as $loadResult) {
				
				$adID = $loadResult->ad_id;
					
				$ad = Node::load($adID);
					
				$image = $ad->get('field_advertisement_image')->first()->get('entity')->getTarget()->getValue();
								
				$imageDos = $image->get('field_ad_image')->first()->get('entity')->getTarget()->getValue();
						
				$adImage = file_create_url($imageDos->get('uri')->value);
					
				$loaderID = $loadResult->id;
				
				
			}
			
			//Loader log.
			$connection = \Drupal::database();
			$query = $connection->insert('ad_loader_log')
			->fields([
				'loader_id' => $loaderID,
				'ad_server_log_id' => $adServerLogId,
				'duration' => 0,
			])->execute();
			

			$adLoaderLogId = $query;  //CHRIS HERE 101
			
			if ($isAdvertisingManager) {
				
				// $output = "<a href='" . $managmentURL . "' target='_blank'><img src='" . $adImage . "'></a>";
				
				if ($isComplexAd) {
					$output = "<a href='" . $managmentURL . "' target='_blank'>" . $adComplexHtml . "</a>";
				} else {
					$output = "<a href='" . $managmentURL . "' target='_blank'><img class='img-fluid' src='" . $adImage . "'></a>";
				}
						
				$output .= '<form id="VariablesForAdBox' . $nodeID .'">
								<input type="hidden" name="adBoxHandle" value="AdBox' . $nodeID .'">
								<input type="hidden" name="adLoaderId" value="' . $loaderID . '">
								<input type="hidden" name="adServerLogId" value="' . $adServerLogId . '">
								<input type="hidden" name="adLoaderLogId" value="' . $adLoaderLogId . '">
								<input type="hidden" name="isPopulated" value="1">
								<input type="hidden" name="newOrder" value="' . $newOrder . '">
								<input type="hidden" name="orderIndex" value="' . $orderIndex . '">
								<input type="hidden" name="orderCount" value="' . $orderCount . '">
							</form>';
				
				
			} else {
				
				//$link = $ad->get('field_url_for_ad')->first()->get('entity')->getTarget()->getValue();
						
				//$adLink = $link->get('field_actual_url')->value;
				
				//$adLink = 'www.gamefaqs.com';
				
				$adLink = $ad->get('field_ad_url')->value;
							
				$output = "<a href='" . $adLink . "' target='_blank'><img src='" . $adImage . "'></a>";
				
				if ($isComplexAd) {
					$output = "<a href='" . $adLink . "' target='_blank'>" . $adComplexHtml . "</a>";
				} else {
					$output = "<a href='" . $adLink . "' target='_blank'><img class='img-fluid' src='" . $adImage . "'></a>";
				}
				
				$output .= '<form id="VariablesForAdBox' . $nodeID .'">
								<input type="hidden" name="adBoxHandle" value="AdBox' . $nodeID .'">
								<input type="hidden" name="adLoaderId" value="' . $loaderID . '">
								<input type="hidden" name="adServerLogId" value="' . $adServerLogId . '">
								<input type="hidden" name="adLoaderLogId" value="' . $adLoaderLogId . '">
								<input type="hidden" name="isPopulated" value="1">
								<input type="hidden" name="newOrder" value="' . $newOrder . '">
								<input type="hidden" name="orderIndex" value="' . $orderIndex . '">
								<input type="hidden" name="orderCount" value="' . $orderCount . '">
							</form>';
				
				
			}
			
			
		} else {
			
			//So, if we're not changing the ad, we just send back an empty string and don't update anything.
			
				$output = "";
			
			
		}
		
			
		
		
		
		
		
		return (new Response())->setContent($output);
		
	}
	
	////////////////////////////////////////////////////////////////////
		
	public function confirmer() {
		
		//We'll take our post variables first.
		
		$selectoi = $_POST['selectoi'];
		
		$serverIDNumber = $_POST['serverIDNumber'];
		
		//First, we'll slice up the selected items so we can use them to discern which sequencers will have loaders created.
		
		$selectoiSplit = explode("-", $selectoi);
		
		$selectoiSplitCount = count($selectoiSplit);
		
		//Now, let's summon up all the relevant sequencers.
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $serverIDNumber);
		$seqResults = $query->fetchAll();
		
		//With them in hand, we'll extract their IDs to find the relevant provisional loaders.
		
		$seqIDsIndex = 0;
		
		foreach ($seqResults as $seqResult) {
			
			$addSwitch = 0;
			
			$stampCheck = $seqResult->start_time_stamp;
			
			for ($i = 0; $i < $selectoiSplitCount - 1; $i++) {
				
				if ($selectoiSplit[$i] == $stampCheck) {
					
					$addSwitch = 1;
					
				}
			}
			
			
			if ($addSwitch) {
			
				$seqIDs[$seqIDsIndex] = $seqResult->id;
			
				$seqIDsIndex++;
			}
			
		} //foreach
		
		//Now, we'll loop through those IDs, find the relevant provisional loaders, and clone them into the loader database. 
		
		$loaderIDs = []; //CHRIS 8-3
		
		$loaderIDsIndex = 0;
		
		
		for ($i = 0; $i < $seqIDsIndex; $i++) {
			
			$connection = \Drupal::database();
			$query = $connection->query('SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = ' . $seqIDs[$i]);
			$provResults = $query->fetchAll();
			
			foreach ($provResults as $provResult) {
				
				$connection = \Drupal::database();
				
				
				$query = $connection->insert('ad_desk_loaders')
				->fields([
					'ad_sequencer_id' => $provResult->ad_sequencer_id,
					'track' => $provResult->track,
					'type_of_ad' => $provResult->type_of_ad,
					'ad_id' => $provResult->ad_id,
					'ordinal' => $provResult->ordinal,
					'duration' => $provResult->duration,
					'next_loader_id' => $provResult->next_loader_id,
					'firstFixed' => $provResult->firstFixed,
					'secondFixed' => $provResult->secondFixed,
				])->execute();
				
				//$loaderIDs[$loaderIDsIndex] = $query;
				
				//$loaderIDsIndex++; 
				 
				
				$connection = \Drupal::database();
				//$query = $connection->query('SELECT * FROM {ad_desk_loaders} WHERE id=(SELECT MAX(id) FROM {ad_desk_loaders})');
				//$loads = $query->fetchAll();
				$requesto = $connection->query('SELECT * FROM {ad_desk_loaders} WHERE id= ' . $query);
				$loads = $requesto->fetchAll();
				
				
				foreach ($loads as $load) {
					
					$loaderIDs[$loaderIDsIndex] = $load->id;
					
					$loaderIDsIndex++;
					
				}
				
				
				
				//After the info is cloned to the loader, we'll delete the provisional loader. 
				/*
				$provID = $provResult->id;
				
				$connection = \Drupal::database();
				
				$deletion = $connection->delete('ad_desk_provisional_loaders')
				->condition('id', $provID)
				->execute();
				*/
			} //foreach
			
		} //for
		
		//And finally, we set the next loader fields appropriately.
	
	if($loaderIDsIndex > 1) {
	
		for ($i = 0; $i < $loaderIDsIndex; $i++) {
			
			if ($i == $loaderIDsIndex - 1) {
				
				$connection = \Drupal::database();
				$query = $connection->update('ad_desk_loaders')
				->fields([
					'next_loader_id' => $loaderIDs[0],
				])->condition('id', $loaderIDs[$i])
				->execute();
				
				
			} else {
				
				$connection = \Drupal::database();
				$query = $connection->update('ad_desk_loaders')
				->fields([
					'next_loader_id' => $loaderIDs[$i + 1],
				])->condition('id', $loaderIDs[$i])
				->execute();
				
				
			}
			
			
		} //i-loop 
		
	}//if 	
		
		$output = $selectoi;
		
		return (new Response())->setContent($output);
		
	} //end function
	
	
	
	
	
	public function unconfirmer() {
		
		$selectui = $_POST['selectui'];
		
		$serverIDNumber = $_POST['serverIDNumber'];
		
		$output = $selectui;
		
		//Now we'll chop up the timestamps, then find and delete loaders.
		
		$selectuiSplit = explode("-", $selectui);
		
		$selectuiSplitCount = count($selectuiSplit);
		
		for ($i = 0; $i < $selectuiSplitCount - 1; $i++) {
		
		$timeStamps[$i][0] = $selectuiSplit[$i];
		
		}
		
		$timeStampsCount = count($timeStamps);
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $serverIDNumber);
		$results = $query->fetchAll();
	
		foreach ($results as $result) {
		
			$startTimeStamp = $result->start_time_stamp;
		
			$sequencerID = $result->id;
		
			for ($i = 0; $i < $timeStampsCount; $i++) {
			
				if ($startTimeStamp == $timeStamps[$i][0]) {
				
					$timeStamps[$i][1] = $sequencerID;
				
				}//if
			
			}//for
		
		} //foreach
		
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_loaders}');
		$results = $query->fetchAll();
	
		foreach ($results as $result) {
		
			$adSequencerID = $result->ad_sequencer_id;
		
			for ($i = 0; $i < $timeStampsCount; $i++) {
			
				if ($adSequencerID == $timeStamps[$i][1]) {
				 
					$connection = \Drupal::database();
					$deletion = $connection->delete('ad_desk_loaders')
					->condition('ad_sequencer_id', $adSequencerID)
					->execute();
				 
				}
			
			}
		
		}
		
		
		
		
		
		
		return (new Response())->setContent($output);
		
	} //end function
	
	
	public function makeCarousel() {
		
		$selecten = $_GET['selecten'];
		
		$serverIDNumber = $_GET['serverIDNumber'];
		
		$timestamp = $_GET['timestamp'];
		
		if (isset($_POST['selecten'])) {
			
			$selecten = $_POST['selecten'];
			
			
		}
		
		if (isset($_POST['serverIDNumber'])) {
			
			$serverIDNumber = $_POST['serverIDNumber'];
			
			
		}
		
		if (isset($_POST['timestamp'])) {
			
			$timestamp = $_POST['timestamp'];
			
			
		}
		
		
		//You know, you could probably just pass the same variables from the previous page. 
		
		$query = \Drupal::entityQuery('node')->condition('type', 'advertisement');
		
		$adResults = $query->execute();
		
		$adIDsIndex = 0;
		
		foreach ($adResults as $adResult) {
			
			$adIDs[$adIDsIndex] = $adResult;
			$adIDsIndex++;
			
			
		}
		
		
		$adTitlesIndex = 0;
		
		for ($i = 0; $i < $adIDsIndex; $i++) {
			
			$ad = Node::load($adIDs[$i]);
			
			$adTitles[$adTitlesIndex] = $ad->get('title')->value;
			
			$adTitlesIndex++;
			
			
		}
		
		
		return array(
		
			'#theme' => 'ad_desk_make_carousel',
			
			'#selecten' => $selecten,
			
			'#serverIDNumber' => $serverIDNumber,
			
			'#adIDs' => $adIDs,
			
			'#adTitles' => $adTitles,
			
			'#timestamp' => $timestamp,
			
			
		);
		
		
	} //end function
	
	
	public function carouselHandler() {
		
		//Let's grab all of our passed data.
		$selecten = $_POST['selecten'];
		
		$serverIDNumber = $_POST['serverIDNumber'];
		
		$carouselAdIDs = $_POST['carouselAdIDs'];
		
		$carouselAdDurations = $_POST['carouselAdDurations'];
		
		$firstFixed = $_POST['firstFixed'];
		
		$secondFixed = $_POST['secondFixed'];
		
		//$firstFixed = 0;
		
		//$secondFixed = 0;
		
		
		
		//Then, we'll take these strings and hack them up into arrays with attendant counts. 
		
		//Timestamps
		
		$selectenSplit = explode("-", $selecten);
		
		$selectenSplitCount = count($selectenSplit) - 1;
		
		//AdIDs
		$carouselAdIDsSplit = explode("-", $carouselAdIDs);
		
		$carouselAdIDsSplitCount = count($carouselAdIDsSplit) - 1;
		
		//Durations
		$carouselAdDurationsSplit = explode("-", $carouselAdDurations);
		
		//We won't need a count for this one. 
		
		
		
		//Now that the timestamps are in am array, we'll dredge up the sequencer info from the database.
		//If there's no match, we'll create a sequencer. 
		//If there is, we'll skip it for now, because once the creation is done, we'll dredge the data up anew to get ID numbers to go with all our timestamps.
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $serverIDNumber);
		$results = $query->fetchAll();
		
		$county = count($results);
		
		if($county) {
		
			//Let's get all the existing starting time stamps into an array to check against what was AJAX'd over. 

			$sequencerTimeStampsIndex = 0;
			
			foreach($results as $result) {
				$sequencerTimeStamps[$sequencerTimeStampsIndex][0] = $result->id;
				$sequencerTimeStamps[$sequencerTimeStampsIndex][1] = $result->start_time_stamp;
				$sequencerTimeStampsIndex++;
			}
		
			$sequencerTimeStampsCount = count($sequencerTimeStamps);
		
			//Now that we have arrays for comparison, we can build the block for insertion.  
			for ($i = 0; $i < $selectenSplitCount; $i++) {
				
				$insertSwitch = 0;
				
				for($j = 0; $j < $sequencerTimeStampsCount; $j++) {
					
					if ($selectenSplit[$i] == $sequencerTimeStamps[$j][1]) {
					
						$insertSwitch = 0;
						break;
						
					} else {
						
						$insertSwitch = 1;
						
					}
					
				} //j-loop
				
				
				if ($insertSwitch) {
					
					$endTimes = $selectenSplit[$i] + 3599;
						
					$connection = \Drupal::database();
					$query = $connection->insert('ad_desk_sequencers')
					->fields([
						'server_id' => $serverIDNumber,
						'start_time_stamp' => $selectenSplit[$i],
						'end_time_stamp' => $endTimes,
					])->execute();
					
					
				} //if
				
				
				
				} //i-loop
		
		} else {
			
			for ($i = 0; $i < $selectenSplitCount; $i++) {
				
				$endTimes = $selectenSplit[$i] + 3599;
					
				$connection = \Drupal::database();
				$query = $connection->insert('ad_desk_sequencers')
				->fields([
					'server_id' => $serverIDNumber,
					'start_time_stamp' => $selectenSplit[$i],
					'end_time_stamp' => $endTimes,
				])->execute();
				
			} //i-loop
			
		}//if-else close
		
		
		
		
		
	
	
	
	
	//Now, with the sequencers created, we need to create the appropriate number of provisional loaders 
	//per sequencer. So, if the carousel contains two ads, and exists for one hour, then there should be two made. 
	//Generalizing, the form is z = yx, where z is total number of provisional loaders made,
	//y is the number of ads in the carousel, and x is the number of sequencers/hours. 
	
		$setOrdinal = 1;
		
		//$loaderIDs = [];
		
		//$loaderIDsIndex = 0;
		
		
	
	for ($i = 0; $i < $selectenSplitCount; $i++) {
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE start_time_stamp = ' . $selectenSplit[$i] . ' AND server_id = ' . $serverIDNumber);
		$results = $query->fetchAll();
				
		foreach ($results as $result) {
			
			$seqID = $result->id;
			
			for($j = 0; $j < $carouselAdIDsSplitCount; $j++) {
				
				$firFix = 0;
				
				if($firstFixed == $carouselAdIDsSplit[$j]) {
					
					$firFix = 1;
					
				}
				
				$secFix = 0;
				
				if($secondFixed == $carouselAdIDsSplit[$j]) {
					
					$secFix = 1;
					
				}
			
				$connection = \Drupal::database();
				
				$query = $connection->insert('ad_desk_provisional_loaders')
				->fields([
					'ad_sequencer_id' => $seqID,
					'track' => 1,
					'type_of_ad' => 'static',
					'ad_id' => $carouselAdIDsSplit[$j],
					'ordinal' => $setOrdinal,
					'duration' => $carouselAdDurationsSplit[$j],
					'next_loader_id' => 0,
					'firstFixed' => $firFix,
					'secondFixed' => $secFix,
				])->execute();
			
				
				$setOrdinal++;
			
			} //j-loop
			
		} //foreach
		
		//This is reset to 1 every time we step out of the j-loop in order to have the next hour's ordinals be correct. 
		
		$setOrdinal = 1;
		
	} //i-loop
	
		
		
		//$output = $firstFixed . " " . $secondFixed;
		
	//And our output text.  
	$output .= "Carousel created! Go confirm on the scheduler!";	
		
	return (new Response())->setContent($output);
		
		
	} //end function
	
	public function blockingHandler() {
		
		$selecteros = $_POST['selecteros'];
		
		$clientName = $_POST['clientName'];
		
		$selecterosSplit = explode("-", $selecteros);
		
		$selecterosSplitCount = count($selecterosSplit);
		
		
		for ($i = 0; $i < $selecterosSplitCount - 1; $i++) {
			
			
			$connection = \Drupal::database();
			$query = $connection->insert('ad_desk_blocking')
			->fields([
				'start_time_stamp' => $selecterosSplit[$i],
				'client_name' => $clientName,
			])->execute();
			
			
		}
		
		$output = $selecteros . "&" . $clientName;
		
		return (new Response())->setContent($output);
		
	} //end function
	
	public function unblockingHandler() {
		
		$selectioBros = $_POST['selectioBros'];
		
		$selectioBrosSplit = explode("-", $selectioBros);
		
		$selectioBrosSplitCount = count($selectioBrosSplit);
		
		for ($i = 0; $i < $selectioBrosSplitCount - 1; $i++) {
			
			$connection = \Drupal::database();
			$deletion = $connection->delete('ad_desk_blocking')
				->condition('start_time_stamp', $selectioBrosSplit[$i])
				->execute();
				
		}
		
		
		
		$output = $selectioBros;
		
		return (new Response())->setContent($output);
		
	} //end function
	
	public function updateCarousel() {
		
		$selecten = $_GET['selecten'];
		
		$serverIDNumber = $_GET['serverIDNumber'];
		
		$timestamp = $_GET['timestamp'];
		
		if (isset($_POST['selecten'])) {
			
			$selecten = $_POST['selecten'];
			
			
		}
		
		if (isset($_POST['serverIDNumber'])) {
			
			$serverIDNumber = $_POST['serverIDNumber'];
			
			
		}
		
		if (isset($_POST['timestamp'])) {
			
			$timestamp = $_POST['timestamp'];
			
			
		}
		
		
		//You know, you could probably just pass the same variables from the previous page. 
		
		$query = \Drupal::entityQuery('node')->condition('type', 'advertisement');
		
		$adResults = $query->execute();
		
		$adIDsIndex = 0;
		
		foreach ($adResults as $adResult) {
			
			$adIDs[$adIDsIndex] = $adResult;
			$adIDsIndex++;
			
			
		}
		
		
		$adTitlesIndex = 0;
		
		for ($i = 0; $i < $adIDsIndex; $i++) {
			
			$ad = Node::load($adIDs[$i]);
			
			$adTitles[$adTitlesIndex] = $ad->get('title')->value;
			
			$adTitlesIndex++;
			
			
		}
		
		
		//Now, since only the sequencers associated with the "same carousel" came over, we can pull up the first sequencer,
		//get all its loaders, and create everything to populate the update page.
		
		$carouselAdIDs = "";
		
		$carouselAdDurations = "";
		
		$firstFixed = 0;
		
		$secondFixed = 0;
		
		//$adList;
		
		$adList = "";
		
		//$firstCheck = 0;
		
		//$secondCheck = 0;
		
		
		$selectenSplit = explode("-", $selecten);
		
		$connection = \Drupal::database();
		$query = $connection->query("SELECT * FROM {ad_desk_sequencers} WHERE start_time_stamp = " . $selectenSplit[0]);
		$seqResults = $query->fetchAll();
		
		foreach ($seqResults as $seqResult) {
			
			$seqID = $seqResult->id;
			
			
		}
		
		$connection = \Drupal::database();
		$query = $connection->query("SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = " . $seqID);
		$provResults = $query->fetchAll();
		
		foreach ($provResults as $provResult) {
			
			$firstCheck = 0;
			
			$secondCheck = 0;
			
			$carouselAdIDs .= $provResult->ad_id . "-";
			
			$carouselAdDurations .= $provResult->duration . "-";
			
			$firstCheck = $provResult->firstFixed;
			
			if ($firstCheck) {
				
				$firstFixed = $provResult->ad_id;
				
				
			}
			
			$secondCheck = $provResult->secondFixed;
			
			if ($secondCheck) {
				
				$secondFixed = $provResult->ad_id;
				
			}
			
			//chris here halloween
			
			$ad = Node::load($provResult->ad_id);
			$adName = $ad->get('title')->value;
			
			$duration = $provResult->duration;
			
			if ($firstCheck) {
				
				//echo 'ham';
				
				$adList .= $adName . ' - ' . $duration . ' seconds - Always First^^^';
				
				//$adList .= '<li class="normy" onclick="selecto(this)">' . $adName . ' - ' . $duration . ' seconds - Always First</li>';
				
			} else if ($secondCheck) {
				
				//echo 'ham';
				
				$adList .= $adName . ' - ' . $duration . ' seconds - Always Second^^^';
				
				//$adList .= '<li class="normy" onclick="selecto(this)">' . $adName . ' - ' . $duration . ' seconds - Always Second</li>';
				
			} else {
				
				//$adList .= '<li class="normy" onclick="selecto(this)">' . $adName . ' - ' . $duration . ' seconds</li>';
				
				$adList .= $adName . ' - ' . $duration . ' seconds^^^';
				
			}
			
			
		}//foreach
		
		
		
		return array(
		
			'#theme' => 'ad_desk_update_carousel',
			
			'#selecten' => $selecten,
			
			'#serverIDNumber' => $serverIDNumber,
			
			'#adIDs' => $adIDs,
			
			'#adTitles' => $adTitles,
			
			'#timestamp' => $timestamp,
			
			'#carouselAdIDs' => $carouselAdIDs,
			
			'#carouselAdDurations' => $carouselAdDurations,
			
			'#firstFixed' => $firstFixed,
			
			'#secondFixed' => $secondFixed,
			
			'#adList' => $adList,
			
			
		);
		
		
		
		
		//$output = $selecten;
		
		
		//return (new Response())->setContent($output);
	} //end function
	
	public function updateCarouselHandler() {
		
		//Let's grab all of our passed data.
		$selecten = $_POST['selecten'];
		
		$serverIDNumber = $_POST['serverIDNumber'];
		
		$carouselAdIDs = $_POST['carouselAdIDs'];
		
		$carouselAdDurations = $_POST['carouselAdDurations'];
		
		$firstFixed = $_POST['firstFixed'];
		
		$secondFixed = $_POST['secondFixed'];
		
		//Then, we'll take these strings and hack them up into arrays with attendant counts. 
		
		//Timestamps
		
		$selectenSplit = explode("-", $selecten);
		
		$selectenSplitCount = count($selectenSplit) - 1;
		
		//AdIDs
		$carouselAdIDsSplit = explode("-", $carouselAdIDs);
		
		$carouselAdIDsSplitCount = count($carouselAdIDsSplit) - 1;
		
		//Durations
		$carouselAdDurationsSplit = explode("-", $carouselAdDurations);
		
		//We won't need a count for this one. 
		
		//Here, we're going to take what comes first in selecten and use it to establish a pattern. 
		//Anything sent to us by the front end will have its loaders pulled up and checked against the pattern.
		//Anything matching gets added to the new selecten. When something fails to match, we break the loop. 
		//After that, new selecten gets carved up into selectenSplit and re-counted. 
		
		//Get the id of the first sequencer.
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE start_time_stamp = ' . $selectenSplit[0]);
		$seqResults = $query->fetchAll();
		
		foreach ($seqResults as $seqResult) {
			
			$patternSeqID = $seqResult->id;
			
		}
		
		//Now, pull up its related loaders and put their ids into a string of the form X-Y-Z-.
		//This will establish the pattern, and all sequencers will be judged by it. 
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = ' . $patternSeqID);
		$provResults = $query->fetchAll();
		
		foreach ($provResults as $provResult) {
			
			$pattern .= $provResult->ad_id . "-";
			
		}
		
		//Now, we'll iterate through all of selecten, pulling up each set of loaders and seeing if they match the pattern.
		//If the pattern is matched, we add the timestamp to  new selecten. If not, we break.
		//New selecten is split into selectenSplit and re-counted. The rest of the function proceeds as expected. 
		
		$neuSelecten;
		
		for ($i = 0; $i < $selectenSplitCount; $i++) {
			
			$connection = \Drupal::database();
			$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE start_time_stamp = ' . $selectenSplit[$i]);
			$seqResults = $query->fetchAll();
			
			foreach ($seqResults as $seqResult) {
				
				$seqID = $seqResult->id;
				
			}
			
			$connection = \Drupal::database();
			$query = $connection->query('SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = ' . $seqID);
			$provResults = $query->fetchAll();
			
			foreach ($provResults as $provResult) {
			
			$potentialMatch .= $provResult->ad_id . "-";
			
			}
		
		if ($potentialMatch == $pattern) {
			
			$neuSelecten .= $selectenSplit[$i] . "-";
			
		} else {
			
			break;
			
		}
			
			
		} //i-loop
		
		
		$selectenSplit = explode("-", $neuSelecten);
		
		$selectenSplitCount = count($selectenSplit) - 1;
		
		
		
		//Now, before we go through the usual stuff, we're going to nuke all the existing
		//provisional loaders, then just create them anew. So, this block will take care of that
		//allowing the rest of the code to fire uninhibited. 
		
		
		$seqIDs = [];
		
		$seqIDsIndex = 0;
		
		for ($i = 0; $i < $selectenSplitCount; $i++) {
			
			$connection = \Drupal::database();
			$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE start_time_stamp = ' . $selectenSplit[$i]);
			$seqResults = $query->fetchAll();
			
			foreach ($seqResults as $seqResult) {
				
				$seqIDs[$seqIDsIndex] = $seqResult->id;
				
				$seqIDsIndex++;
				
				
			}//foreach
			
		}//i-loop
		
		$seqIDsCount = count($seqIDs);
		
		for ($i = 0; $i< $seqIDsCount; $i++) {
			
			$connection = \Drupal::database();
			$query = $connection->query('SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = ' . $seqIDs[$i]);
			$provResults = $query->fetchAll();
			
			foreach ($provResults as $provResult) {
				
				$provID = $provResult->id;
				
				$connection = \Drupal::database();
				
				$deletion = $connection->delete('ad_desk_provisional_loaders')
				->condition('id', $provID)
				->execute();
				
				
			}//foreach
			
		}//i-loop
		
		
		
		
		
		
		
		//Now that the timestamps are in am array, we'll dredge up the sequencer info from the database.
		//If there's no match, we'll create a sequencer. 
		//If there is, we'll skip it for now, because once the creation is done, we'll dredge the data up anew to get ID numbers to go with all our timestamps.
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE server_id = ' . $serverIDNumber);
		$results = $query->fetchAll();
		
		$county = count($results);
		
		if($county) {
		
			//Let's get all the existing starting time stamps into an array to check against what was AJAX'd over. 

			$sequencerTimeStampsIndex = 0;
			
			foreach($results as $result) {
				$sequencerTimeStamps[$sequencerTimeStampsIndex][0] = $result->id;
				$sequencerTimeStamps[$sequencerTimeStampsIndex][1] = $result->start_time_stamp;
				$sequencerTimeStampsIndex++;
			}
		
			$sequencerTimeStampsCount = count($sequencerTimeStamps);
		
			//Now that we have arrays for comparison, we can build the block for insertion.  
			for ($i = 0; $i < $selectenSplitCount; $i++) {
				
				$insertSwitch = 0;
				
				for($j = 0; $j < $sequencerTimeStampsCount; $j++) {
					
					if ($selectenSplit[$i] == $sequencerTimeStamps[$j][1]) {
					
						$insertSwitch = 0;
						break;
						
					} else {
						
						$insertSwitch = 1;
						
					}
					
				} //j-loop
				
				
				if ($insertSwitch) {
					
					$endTimes = $selectenSplit[$i] + 3599;
						
					$connection = \Drupal::database();
					$query = $connection->insert('ad_desk_sequencers')
					->fields([
						'server_id' => $serverIDNumber,
						'start_time_stamp' => $selectenSplit[$i],
						'end_time_stamp' => $endTimes,
					])->execute();
					
					
				} //if
				
				
				
				} //i-loop
		
		} else {
			
			for ($i = 0; $i < $selectenSplitCount; $i++) {
				
				$endTimes = $selectenSplit[$i] + 3599;
					
				$connection = \Drupal::database();
				$query = $connection->insert('ad_desk_sequencers')
				->fields([
					'server_id' => $serverIDNumber,
					'start_time_stamp' => $selectenSplit[$i],
					'end_time_stamp' => $endTimes,
				])->execute();
				
			} //i-loop
			
		}//if-else close
		
		
		
		
		
	
	
	
	
	//Now, with the sequencers created, we need to create the appropriate number of provisional loaders 
	//per sequencer. So, if the carousel contains two ads, and exists for one hour, then there should be two made. 
	//Generalizing, the form is z = yx, where z is total number of provisional loaders made,
	//y is the number of ads in the carousel, and x is the number of sequencers/hours. 
	
		$setOrdinal = 1;
		
		//$loaderIDs = [];
		
		//$loaderIDsIndex = 0;
		
		
	
	for ($i = 0; $i < $selectenSplitCount; $i++) {
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE start_time_stamp = ' . $selectenSplit[$i] . ' AND server_id = ' . $serverIDNumber);
		$results = $query->fetchAll();
				
		foreach ($results as $result) {
			
			$seqID = $result->id;
			
			for($j = 0; $j < $carouselAdIDsSplitCount; $j++) {
				
				$firFix = 0;
				
				if($firstFixed == $carouselAdIDsSplit[$j]) {
					
					$firFix = 1;
					
				}
				
				$secFix = 0;
				
				if($secondFixed == $carouselAdIDsSplit[$j]) {
					
					$secFix = 1;
					
				}
			
				$connection = \Drupal::database();
				
				$query = $connection->insert('ad_desk_provisional_loaders')
				->fields([
					'ad_sequencer_id' => $seqID,
					'track' => 1,
					'type_of_ad' => 'static',
					'ad_id' => $carouselAdIDsSplit[$j],
					'ordinal' => $setOrdinal,
					'duration' => $carouselAdDurationsSplit[$j],
					'next_loader_id' => 0,
					'firstFixed' => $firFix,
					'secondFixed' => $secFix,
				])->execute();
			
				
				$setOrdinal++;
			
			} //j-loop
			
		} //foreach
		
		//This is reset to 1 every time we step out of the j-loop in order to have the next hour's ordinals be correct. 
		
		$setOrdinal = 1;
		
	} //i-loop
	
		
		
		//$output = $firstFixed . " " . $secondFixed;
		
	//And our output text.  
	$output .= "Carousel updated!";	
		
	return (new Response())->setContent($output);
		
		
		
		
		//$output = 'hi';
		
		//return (new Response())->setContent($output);
		
		
		
	} //end function
	
	public function quickAdd() {
		
		$theAd = $_POST['theAd'];
		
		$theDuration = $_POST['theDuration'];
		
		$theSelected = $_POST['theSelected'];
		
		$selectedSplit = explode("-", $theSelected);
		
		$selectedSplitCount = count($selectedSplit);
		
		$outputCount = 0;
		
		
		
		for ($i = 0; $i < $selectedSplitCount - 1; $i++) {
			
		$adSwitch = 1;
		
		$durationSwitch = 1;
		
		$sum = 0;
		
		$lastOrdinal = 0;
			
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_sequencers} WHERE start_time_stamp = ' . $selectedSplit[$i]);
		$seqResults = $query->fetchAll();
		
		foreach ($seqResults as $seqResult) {
			
			$seqID = $seqResult->id;
			
			
		}
		
		
		$connection = \Drupal::database();
		$query = $connection->query('SELECT * FROM {ad_desk_provisional_loaders} WHERE ad_sequencer_id = ' . $seqID);
		$provResults = $query->fetchAll();
		
		foreach($provResults as $provResult) {
			
			$adCheck = $provResult->ad_id;
			
			if($adCheck == $theAd) {
				
				$adSwitch = 0;
				
				break;
				
			}
			
			$duration = $provResult->duration;
			
			$sum = $sum + $duration;
			
			$lastOrdinal = $provResult->ordinal;
			
		}//foreach
			
		$sum = $sum + $theDuration;
			
		if ($sum > 30) {
			
			$durationSwitch = 0;
			
		}	
			
			
		if ($adSwitch && $durationSwitch) {
			
			$lastOrdinal = $lastOrdinal + 1;
			
			$connection = \Drupal::database();
			$query = $connection->insert('ad_desk_provisional_loaders')
			->fields([
				'ad_sequencer_id' => $seqID,
				'track' => 1,
				'type_of_ad' => 'static',
				'ad_id' => $theAd,
				'ordinal' => $lastOrdinal,
				'duration' => $theDuration,
				'next_loader_id' => 0,
				'firstFixed' => 0,
				'secondFixed' => 0,
			])->execute();
			
			
			$outputCount++;
			
		}
			
			
		}//i-loop
		
		
		
		
		$output = "The ad was successfully added to $outputCount hour blocks.";
		
		return (new Response())->setContent($output);
		
	} //end function
	
	
	public function reporting() {
		
		
		$query = \Drupal::entityQuery('node')->condition('type', 'advertisement');
		
		$adResults = $query->execute();
		
		$adIDsIndex = 0;
		
		foreach ($adResults as $adResult) {
			
			$adIDs[$adIDsIndex] = $adResult;
			$adIDsIndex++;
			
			
		}
		
		$adTitlesIndex = 0;
		
		for ($i = 0; $i < $adIDsIndex; $i++) {
			
			$ad = Node::load($adIDs[$i]);
			
			$adTitles[$adTitlesIndex] = $ad->get('title')->value;
			
			$adTitlesIndex++;
			
			
		}
		
		print_r($adTitles);
		
		
		
		$output = 'You found reporting, yay';
		
		return (new Response())->setContent($output);
		
		
		
		
		
		
	} //end function
	
	
} //end class