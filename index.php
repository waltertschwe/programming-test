<?php

	require_once("class/DbModel.php");
	
	$db = new DbModel();
	$username = 'root';
	$password = '%NN6prxt5';
	$hostName = 'localhost';
	$database = 'programming_test';
	$dbh = $db->connect($hostName, $database, $username, $password); 
	
	$allColors = $db->getAllColors($dbh);
	
?>
<!doctype html>
<html lang="en">
<head>
<title>Programming Test</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1><font color="blue">Programming Test</font></h1>
    </div>
<div class="row"></div>
<div class="row">
	<div class="col-xs-6 col-md-4">
		 <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-tower"></span>&nbsp;&nbsp;Requirements</h3>
            </div>
            <div class="panel-body">
                1. Create a web page in PHP that uses the two MySQL tables above Colors and Votes. <br/><br/>
                2. The left column should be populated from reading all the entries in the Colors table.<br/><br/>
                3. The colors should be links, so that when you click on it, an Ajax call populates the Votes
(obtained from MySQL) in the right column next to the color.<br/><br/>
				4. When Clicking on Total, use JavaScript only (no server involvement) to add up and present the
totals shown.<br/><br/>
				5. Write something that you would feel comfortable shipping & maintaining.<br/><br/>
                <b>*NOTE*</b> Any bugs please contact:<br/> 
                <a href="mailto:wschweitzer00@gmail.com">Walter Schweitzer</a><br/>
            </div>
      </div>
</div>
<div class="col-xs-6 col-md-4">
  <ul id="color-group" class="list-group">
    <li class="list-group-item active">
        <span class="glyphicon glyphicon-adjust"></span>&nbsp;Colors
    </li>
    <?php 
    	foreach($allColors as $key => $value) {
    ?> 
		<li class="list-group-item" data-id="<?php echo $key; ?>">
	    	<a href="#"><?php echo $value; ?></a>&nbsp;&nbsp;
	    </li>
    <?php
		}
	?> 
	 	<li id="tally" class="list-group-item">
	    	<b><a href="#">TOTAL</a></b>
		</li>
	</ul>	
</div>
<div class="col-xs-6 col-md-4"><!-- Overall Results Pulled from datasource -->
  <ul id="votes" class="list-group">
    <li class="list-group-item list-group-item-success">
        <span class="glyphicon glyphicon-stats"></span>&nbsp;Votes
    </li>
    <?php 
    	foreach($allColors as $key => $value) {
    ?> 
		<li id="total-<?php echo $key; ?>" class="list-group-item">
			&nbsp;
	    </li>
    <?php
		}
	?> 
		<li id="total-value" class="list-group-item">
	    	&nbsp;
		</li>
	</ul>
</div>
</div>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
	