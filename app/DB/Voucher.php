<?php namespace App\DB;

class Voucher extends \App\Library\ModelFunction
{
	var $db;
	public function __construct() {
		$this->db = new \App\Models\Voucher;
		return $this->db;
	}
}