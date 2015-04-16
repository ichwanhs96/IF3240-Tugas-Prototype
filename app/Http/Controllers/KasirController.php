<?php namespace App\Http\Controllers;

class KasirController extends Controller {

	public function home(){
		return view('Kasir.home');
	}

	public function pesanan($id){	
		return view('Kasir.pesanan');
	}
}
