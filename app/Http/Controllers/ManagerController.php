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
			return Redirect::route('manager.home');
		}
		else return Redirect::route('manager.home');
	}

	public function logout(){
		Session::forget('manager');
		return Redirect::route('manager.home');
	}

	public function getMenu(){
		$menus = Menu::all();
		return view('manager.list_menu_makanan', compact('menus', $menus));
	}

	public function editMenu($id){
		$menu = Menu::where('id', $id)->first();
		return view('manager.edit_menu_makanan', compact('menu', $menu));
	}

	public function tambahMenu(){
		return view('manager.tambah_menu_makanan');
	}

	public function updateMenu(){
		$input = Request::all();

		if($input['id'] != -1){
			$menu = Menu::where('id', $input['id'])->first();
			$menu->nama = $input['nama'];
			$menu->harga = $input['harga'];
			$menu->jenis = $input['jenis'];
			$menu->save();
		} else {
			$menu = new Menu();
			$menu->nama = $input['nama'];
			$menu->jenis = $input['jenis'];
			$menu->harga = $input['harga'];
			$menu->save();
		}
		return Redirect::route('manager.list_menu_makanan');
	}

	public function generateLaporan(){
		$input = Request::all();
		$pesanans = Pesanan::whereBetween('tanggal', array($input['tanggal_awal'], $input['tanggal_akhir']))->get();
		$menus = Menu::all();
		$daftarPesanans = DaftarPesanan::all();
		$laporans =[[]];
		$count = 0;

		foreach ($menus as $menu) {
			foreach ($daftarPesanans as $daftarPesanan) {
				foreach ($pesanans as $pesanan) {
					if($daftarPesanan->pesanan_id == $pesanan->id){
						if($daftarPesanan->menu_id == $menu->id){
							$count += $daftarPesanan->jumlah;
						}
					}
				}
			}
			array_push($laporans, ['id' => $menu->id, 'jumlah' => $count]);
			$count = 0;
		}

		return view('manager.hasil_laporan', compact('laporans', 'menus', 'pesanans', 'daftarPesanans'));
	}
}
