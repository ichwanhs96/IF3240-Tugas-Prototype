<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pesanan;
use App\DaftarPesanan;
use App\Menu;
use App\Manager;
use Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class ManagerController extends Controller {

	public function home(){
		$session = Session::get('manager');
		if($session == null)
			return view('manager.login');
		else return view('manager.home');
	}

	public function login(){
		$input = Request::all();
		$manager = Manager::where('username', $input['username'])->where('password', $input['password'])->first();;

		if($manager != null){
			Session::set('manager', $manager);
			return redirect('/manager');
		}
		else return redirect('/manager');
	}

	public function logout(){
		Session::forget('manager');
		return redirect('/manager');
	}

	public function getMenu(){
		$menus = Menu::all();
		return view('manager.edit_menu_makanan', compact('menus', $menus));
	}
}
