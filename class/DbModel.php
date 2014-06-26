<?php


class DbModel {
	
	public function connect($hostName, $database, $user, $password) {
	
		try {
			
		    $dbh = new PDO('mysql:host=' . $hostName . ';dbname='. $database, $user, $password);
		   
		} catch (PDOException $e) {
		    error_log("Connection failed: " . $e->getMessage() . "<br/>");
		 
		}
		
		return $dbh;
	}
	
	
	public function getAllColors($dbh) {
			
		$resultsArr = array();	
		$query= $dbh->prepare('SELECT color_id, color 
							   FROM colors');
		$query->execute();
		$results = $query->fetchAll();
		
		foreach($results as $result) {
			$resultsArr[$result['color_id']] = $result['color'];
		}
		
		
		return $resultsArr;
		
	}
	
	public function getAllVotes($dbh, $colorId) {
		
		$resultsArr = array();	
		$query= $dbh->prepare('SELECT vote_id, total_votes
							   FROM votes
							   WHERE color_id = ?');
		
		$query->execute(array($colorId));
		$results = $query->fetchAll();
		foreach($results as $result) {
			$resultsArr[$result['vote_id']] = $result['total_votes'];
		}
		
		return $resultsArr;
	}
	
}