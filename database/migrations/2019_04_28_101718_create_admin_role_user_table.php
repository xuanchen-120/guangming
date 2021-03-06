<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminRoleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_role_user', function(Blueprint $table)
		{
			$table->integer('role_id')->unsigned();
			$table->integer('admin_id')->unsigned();
			$table->timestamps();
			$table->primary(['role_id','admin_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_role_user');
	}

}
