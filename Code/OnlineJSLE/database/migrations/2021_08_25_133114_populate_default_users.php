<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class PopulateDefaultUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => "Admin User",
                'email' => "admin@admin.com",
                'password' => bcrypt('password'),
                'current_team_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 2,
                'name' => "Study User",
                'email' => "user@user.com",
                'password' => bcrypt('password'),
                'current_team_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 3,
                'name' => "Audit User",
                'email' => "audit@audit.com",
                'password' => bcrypt('password'),
                'current_team_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
