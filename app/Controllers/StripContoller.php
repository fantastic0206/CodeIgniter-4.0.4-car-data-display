<?php

namespace App\Controllers;

use App\Models\Home_model;
use CodeIgniter\Controller;

class StripController extends BaseController
{
	public function __construct()
	{
		$this->home_model = new Home_model();
	}

	public function index()
	{
		var_dump("stript");exit;
		// $car_company_data = $this->home_model->get_company_data();
		// $data = [
		// 	'company_name' => $car_company_data
		// ];
		// return view('main_view', $data);
		return view('stripe_view');
	}
}
