<?php
session_start();
	class tanks
	{
		private $tableName = "tank_details";
		protected $sr;
		protected $lat;
		protected $lng;
		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }
		function setLat($lat) { $this->lat = $lat; }
		function getLat() { return $this->lat; }
		function setLng($lng) { $this->lng = $lng; }
		function getLng() { return $this->lng; }
		
		public function getTanks()
		{
			require_once("connect.php");
			$sql = "SELECT * from `tank_details` WHERE `username`='".$_SESSION['username']."'";
			
			$result = $conn->query($sql);
			return $result->fetch_assoc();
		}
		
		public function updateLatLong(){
			
		}
	}
?>