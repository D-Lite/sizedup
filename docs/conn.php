<?php
$connection = mysqli_connect("localhost", "root", "", "sizedupng");
 

/**
 * 
 */
class webapp 
{
	public $connection;
	public $error = array();


	public function __construct($hostname, $username, $password, $database)
	 {
	 	//Create connection
	 	$connection = new mysqli($hostname, $username, $password);

	 	if ($connection->connect_error) {
	 		$error = die("Could not make a database connection using" . $username .' @ '. $hostname );
	 	}

	 	if (!mysqli_select_db($connection, $database)) {
      		$error = die('Error: Could not connect to database ' . $database);
    	}

    	$this->connection = $connection;
	 
	 }



	 public function selectAll($table){
	 	$data = array();
	 	$stmt = "SELECT * FROM ".$table;
	 	$result = mysqli_query($this->connection, $stmt) or die(mysqli_error($this->connection));

	 	while ($row = mysqli_fetch_assoc($result)) {
	 		$data[] = $row;
	 	}

	 	return $data;
	 }

	 public function numofrows($data){
	 	$stmt = mysqli_num_rows($data) or die(mysqli_error($this->connection));
	 	if($stmt > 0) {
          while($row = mysqli_fetch_object($data)) {
            $result[] = $row;

            // return true;
          }
        } 
          else{
          	return false;
          }
	}

	 public function insert ($table, $data){
	 	// $values = "";
	 	// foreach ($data as $dkey => $dvalue) {
	 	// 	$values .= $dvalue;
	 	// 	if (!end($data)) {
	 	// 	  	$values .= ',';
	 	// 	  }  
	 	// }
	 	// echo $values;
	 	// exit();

	 	$keys = implode(",", array_keys($data));
	 	$values = "";
	 	foreach ($data as $dkey => $dvalue) {
	 		$values .= "'".$dvalue."'";
	 		if (next($data)) {
	 		  	$values .= ',';
	 		  }  
	 	}
	 	//$values = implode(",", array_values($data));
	 	// exit();
	 	$stmt = "INSERT INTO ".$table." (".$keys.") VALUES (".$values.")";

	 	$result = mysqli_query($this->connection, $stmt) or die(mysqli_error($this->connection));
	 	if ($result) {
	 		return true;
	 	}
	 	else{
      		$this->error = die('Error: Inserting into database gone wrong! '.mysqli_error($this->connection));

	 	}
	 }

	 public function fetchOne($table){
        $query=mysqli_query($this->connection, "SELECT * FROM ".$table); 
   		$result= mysqli_fetch_assoc($query);

   		return $result;
    }


    public function fetchAll($table){
    $query=mysqli_query($this->connection, " SELECT * FROM ".$table); 
    $result = array();
	    if (mysqli_num_rows($query)  > 0) {
	    	while ($record = mysqli_fetch_array($query)) {
	         $result[] = $record;

        // var_dump($result);
	    }
	    }
	    return($result);
	}

	public function fetchAllCond($table, $where, $value){
    $query=mysqli_query($this->connection, " SELECT * FROM ".$table." WHERE " . $where ." ='".$value."'");// or die($this->connection->error); 
    $result = array();
	    if (mysqli_num_rows($query)  > 0) {
	    	while ($record = mysqli_fetch_array($query)) {
	         $result[] = $record;

	        // var_dump($result);
		    }
	    }
	    return $result;
	}


	public function fetchOneCond($table, $where, $value){
		$user = 'No user found';
        $query=mysqli_query($this->connection, "SELECT * FROM ".$table." WHERE ".$where." = '".$value."'"); 
   		while($result= mysqli_fetch_array($query)){
   			$user = $result;
   		}
   	// if (!$result) {
   	// 		echo "User not found";
   	// 		// echo $user;
   	// }
   	// else{
   		return $user;
   	// }
    }


	 public function  __destruct(){
	 	$this->connection->close();
	 }
}




$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sizedupng';
$sizeup = new webapp($hostname, $username, $password, $database);
?>
