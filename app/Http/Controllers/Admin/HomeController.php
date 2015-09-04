<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends BaseController {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		return Redirect::action('Admin\LoginController@index');
		echo 'Admin/Home/index';
// 		return view('Admin.index');
	}

}
