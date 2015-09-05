<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BaseController extends Controller {

	public function __construct(){
// 		return Redirect::to('admin/login');
		return Redirect::to(action('Admin\LoginController@index'));
	}

}
