<?php 

   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('mydatabase.db');
      }
   }

   function addCustomer($firstName, $lastName, $email, $issue, $subject, $message) {
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      $sql ='INSERT INTO Messages (firstName, lastName, email, issue, subject, message) VALUES ("'.$firstName.'", "'.$lastName.'", "'.$email.'", "' .$issue. '", "'.$subject.'", "' .$message.'");';
      $db->query($sql);
   }
   
    function getCustomer($searchTerm = null) {
    	$db = new MyDB();
    	$array = [];
    	if(!$db){
    		echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
    	} else {
    		//echo "Opened database successfully\n";
    	}
    	if(!$searchTerm) {
    		$sql ='SELECT * from Messages;';
    	} else {
    		$sql ='SELECT * FROM Messages WHERE COMMONNAME LIKE "'.$searchTerm.'"';
    	}
    	$ret = $db->query($sql);
    	if(!$ret){
    		echo $db->lastErrorMsg();
    		return [];
    	} else {
    		while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
    		$array[] = $row;
    		}
    	$db->close();
    	return $array;
    	}
    }
?>
