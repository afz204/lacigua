<?php namespace App\DB;

class OrderTransactionShipmentStatus extends \App\Library\ModelFunction
{
	var $db;
	public function __construct() {
		$this->db = new \App\Models\OrderTransactionShipmentStatus;
		return $this->db;
	}
}