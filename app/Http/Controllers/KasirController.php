<?php namespace App\Http\Controllers;

use App\Pesanan;
use App\DaftarPesanan;
use App\Menu;
use Illuminate\Support\Facades\Input;

class KasirController extends Controller {

	public function home(){
		return view('Kasir.home');
	}

	public function pesanan($id){
		$pesanan = Pesanan::find($id)->daftar_pesanan;
		$menu = Menu::all();
		return view('Kasir.pesanan', compact('pesanan','menu','id'));
	}
	public function addPesanan($id){
		if ( \Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
				'msg' => 'Unauthorized attempt to create setting'
			) );
		}
		$menu = Input::get( 'menu' );
        $jumlah = Input::get( 'jumlah' );
		$daftarPesanan = new DaftarPesanan();
		$daftarPesanan->pesanan_id = $id;
		$daftarPesanan->menu_id = $menu;
		$daftarPesanan->jumlah = $jumlah;
		$daftarPesanan->save();
	}
}
