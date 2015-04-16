<?php

use App\Pesanan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesanans', function(Blueprint $table)
		{
			$table->increments('id_pesanan');
			$table->integer('status');
			$table->dateTime('tanggal');
			$table->timestamps();
		});

		$pesanan = new Pesanan;
		$pesanan->status = 0;
		$pesanan->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pesanans');
	}

}
