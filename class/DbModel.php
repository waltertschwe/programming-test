<?php


class DbModel {
	
	public function connect($hostName, $database, $user, $password) {
	
		try {
			
		    $dbh = new PDO('mysql:host=' . $hostName . ';dbname='. $database, $user, $password);
		   
		} catch (PDOException $e) {
		    print "Connection failed: " . $e->getMessage() . "<br/>";
		    exit();
		}
		
		return $dbh;
	}
	
	
	public function getAllColors($dbh) {
			
		$resultsArr = array();	
		
		$query= $dbh->prepare('SELECT color_id, color FROM colors');
		$query->execute();
		
		$results = $query->fetchAll();
		
		foreach($results as $result) {
			$resultsArr[$result['color_id']] = $result['color'];
		}
		
		
		return $resultsArr;
		
	}
}