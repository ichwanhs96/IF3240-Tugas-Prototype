<?php

use App\DaftarPesanan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarPesanansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('daftar_pesanans', function(Blueprint $table)
		{
			$table->integer('pesanan_id');
			$table->integer('menu_id');
			$table->integer('jumlah');
			$table->timestamps();
		});

		$daftar = new DaftarPesanan();
		$daftar->pesanan_id = 1;
		$daftar->menu_id = 1;
		$daftar->jumlah = 2;
		$daftar->save();

		$daftar = new DaftarPesanan();
		$daftar->pesanan_id = 1;
		$daftar->menu_id = 2;
		$daftar->jumlah = 1;
		$daftar->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('daftar_pesanans');
	}

}
