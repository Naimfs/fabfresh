<?php
include_once "../connection/db.php";
class Order
{  
   
   var $status;
   function __construct(){
     $this->status = 0;
   }
   
   function create($email_id,$status){
      
      $created_at = date("Y-m-d:h:i:s");
      $this->email_id   = $email_id;
      $this->status     = $status;
      $this->created_at = $created_at;
   
    $sql = "INSERT INTO Orders_entity (email_id, status, created_at,updated_at) VALUES ('$email_id', '$status', '$created_at', '$updated_at' )";
	$conn->exec($sql);
   }
    
	function fetch()
	{
	$sql = "SELECT * FROM Orders_entity";
	$conn->exec($sql);
	}
	
	function update($status,$id)
	{
	
		$sql = "INSERT INTO Orders_entity(email_id) VALUES ('$email_id') WHERE Orders_entity.id = '$id' ";
		$conn->exec($sql);
		
	}
	
	
	function deletee($id)
	{
		$sql =  "DELETE FROM Orders_entity WHERE Orders_entity.id = '$id' ";
		$conn->exec($sql);
	}
 }
 
?>