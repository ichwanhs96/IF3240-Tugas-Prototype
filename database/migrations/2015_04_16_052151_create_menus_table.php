<?php

use App\Menu;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->integer('jenis');
			$table->integer('harga');
			$table->timestamps();
		});

		$menu = new Menu();
		$menu->nama = 'Ayam Gepuk';
		$menu->jenis = '0';
		$menu->harga = 10000;
		$menu->save();

		$menu = new Menu();
		$menu->nama = 'Es Milo';
		$menu->jenis = '1';
		$menu->harga = 5000;
		$menu->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
