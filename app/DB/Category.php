<?php namespace App\DB;

class Category extends \App\Library\ModelFunction
{
	var $db;
	public function __construct() {
		$this->db = new \App\Models\Category;
		return $this->db;
	}
}