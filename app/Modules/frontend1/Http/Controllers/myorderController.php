<?php

namespace App\Modules\frontend1\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class myorderController extends Controller
{
	public function index()
	{
		return $this->_showviewfront(['login']);
	}
}