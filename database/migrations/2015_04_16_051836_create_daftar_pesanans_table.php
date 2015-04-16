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
			$table->integer('id_pesanan');
			$table->integer('id_menu');
			$table->integer('jumlah');
			$table->timestamps();
		});

		$daftar = new DaftarPesanan();
		$daftar->id_pesanan = 1;
		$daftar->id_menu = 1;
		$daftar->jumlah = 2;
		$daftar->save();

		$daftar = new DaftarPesanan();
		$daftar->id_pesanan = 1;
		$daftar->id_menu = 2;
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
